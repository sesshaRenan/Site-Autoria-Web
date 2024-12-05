const senhaInput = document.getElementById('senha');
const toggleButton = document.getElementById('toggleSenha');

toggleButton.addEventListener('click', function () {
    if (senhaInput.type === 'password') {
        senhaInput.type = 'text';
        toggleButton.textContent = 'Ocultar Senha';
    } else {
        senhaInput.type = 'password';
        toggleButton.textContent = 'Mostrar Senha';
    }
});
