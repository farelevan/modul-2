function validateForm() {
    var password = document.getElementById("password").value;
    var confirm_password = document.getElementById("confirm_password").value;

    if (password !== confirm_password) {
        alert("Konfirmasi password tidak sesuai!");
        return false;
    }

    return true;
}
