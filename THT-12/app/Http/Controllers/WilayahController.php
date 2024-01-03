<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WilayahController extends Controller
{
    protected $apiUrl = 'https://emsifa.github.io/api-wilayah-indonesia/api/';

    public function index()
    {
        $provinces = $this->getProvinces();
        return view('province', compact('provinces'));
    }

    protected function getName($type, $id)
{
    $client = new Client();
    $response = $client->get($this->apiUrl."{$type}/{$id}.json");
    $data = json_decode($response->getBody(), true);

    return $data['name'] ?? '';
}

    public function showRegencies($provinceId)
    {
        $regencies = $this->getRegencies($provinceId);
        $provinceName = $this->getName('province', $provinceId);

        return view('regencies', compact('regencies', 'provinceId', 'provinceName'));
    }

    public function showDistricts($regencyId, $provinceId)
    {
        $districts = $this->getDistricts($regencyId);
        $regencyName = $this->getName('regency', $regencyId);
        $provinceName = $this->getName('province', $provinceId);

        return view('districts', compact('districts', 'regencyId', 'regencyName', 'provinceId', 'provinceName'));
    }

    public function showVillages($districtId, $regencyId, $provinceId)
    {
        $villages = $this->getVillages($districtId);
        $districtName = $this->getName('district', $districtId);
        $regencyName = $this->getName('regency', $regencyId);
        $provinceName = $this->getName('province', $provinceId);

        return view('villages', compact('villages', 'districtId', 'districtName', 'regencyId', 'regencyName', 'provinceId', 'provinceName'));
    }

    protected function getProvinces()
    {
        $client = new Client();
        $response = $client->get($this->apiUrl.'provinces.json');
        return json_decode($response->getBody(), true);
    }

    protected function getRegencies($provinceId)
    {
        $client = new Client();
        $response = $client->get($this->apiUrl."regencies/{$provinceId}.json");
        return json_decode($response->getBody(), true);
    }

    protected function getDistricts($regencyId)
    {
        $client = new Client();
        $response = $client->get($this->apiUrl."districts/{$regencyId}.json");
        return json_decode($response->getBody(), true);
    }

    protected function getVillages($districtId)
    {
        $client = new Client();
        $response = $client->get($this->apiUrl."villages/{$districtId}.json");
        return json_decode($response->getBody(), true);
    }
}
