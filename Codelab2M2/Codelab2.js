function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var address = document.getElementById("address").value;

    if (name == "") {
        alert("Name field cannot be empty!");
        return false;
    }
    if (email == "") {
        alert("Email field cannot be empty!");
        return false;
    }
    if (address == "") {
        alert("Alamat Lengkap field cannot be empty!");
        return false;
    }

    return true;
}
