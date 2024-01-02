function validateFormData() {
    const email = document.getElementById('emailInput').value;
    const password = document.getElementById('passwordInput').value;

    if (!email || !password) {
        alert('Mohon lengkapi semua field.');
        return;
    }

    if (!validateEmail(email)) {
        alert('Mohon masukkan alamat email yang valid.');
        return;
    }

    if (!validatePassword(password)) {
        alert('Kata sandi harus memiliki 8-20 karakter.');
        return;
    }
    storeFormData();
}

function validateEmail(email) {
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailRegex.test(email);
}

function validatePassword(password) {
    return password.length >= 8 && password.length <= 20;
}

function storeFormData() {
    const email = document.getElementById('emailInput').value;
    const password = document.getElementById('passwordInput').value;

    sessionStorage.setItem('email', email);
    sessionStorage.setItem('password', password);

    window.location.href = '../../Apps/View/registerStudent.php';
    alert('Data berhasil disimpan, menuju halaman registrasi siswa.');
}
