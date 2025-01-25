function validateLogin() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var errorMessage = document.getElementById('errorMessage');

    var validUsername = "ferdi";
    var validPassword = "ferdi123";

    if (username === validUsername && password === validPassword) {
        window.location.href = "https://portfolio-website-five-neon.vercel.app/"; 
    } else {
        errorMessage.textContent = "Nama pengguna atau kata sandi salah.";
    }
}
