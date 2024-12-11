const senhaInput = document.getElementById('senha');
const toggleButton = document.getElementById('toggleSenha');

toggleButton.addEventListener('click', function () {
    if (senhaInput.type === 'password') {
        senhaInput.type = 'text';
        toggleButton.innerHTML = '<i class="fas fa-eye-slash"></i>'; 
    } else {
        senhaInput.type = 'password';
        toggleButton.innerHTML = '<i class="fas fa-eye"></i>'; 
    }
});
