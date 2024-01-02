function validateFormData() {
    const email = document.getElementById('emailInput').value;
    const password = document.getElementById('passwordInput').value;

    if (!email || !password) {
        alert('Mohon lengkapi semua field.');
        return false;
    }

    if (!validateEmail(email)) {
        alert('Mohon masukkan alamat email yang valid.');
        return false;
    }

    if (!validatePassword(password)) {
        alert('Kata sandi harus memiliki 8-20 karakter.');
        return false;
    }

    return true;
}

function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function validatePassword(password) {
    return password.length >= 8 && password.length <= 20;
}
