public class Hewan {
  private String nama, jenis;
  private int jumlahKaki;

  public void setVariabel(String nama, String jenis, int jumlahKaki) {
    this.nama = nama;
    this.jenis = jenis;
    this.jumlahKaki = jumlahKaki;
  }

  public String getNama() {
      return this.nama;
    }
    public String getJenis() {
        return this.jenis;
    }
    public int getJumlahKaki() {
        return jumlahKaki;
    }
}
