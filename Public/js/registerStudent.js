function handleRegistration() {
    const storedEmail = sessionStorage.getItem('email');
    const storedPassword = sessionStorage.getItem('password');

    const username = document.getElementById('usernameInput').value;
    const fullName = document.getElementById('fullNameInput').value;
    const phoneNumber = document.getElementById('numberInput').value;
    const education = document.getElementById('educationInput').value;

    if (username === '' || fullName === '' || phoneNumber === '' || education === '' || !document.getElementById('terms-conditions').checked) {
        alert('Mohon isi semua data yang diperlukan dan setujui syarat dan ketentuan.');
        return false;
    }
}
