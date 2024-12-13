function mostrar() {
    if (senha.type === "password") {
        senha.setAttribute("type", "text");
        mostrar_senha.innerHTML = '<i class="fas fa-eye-slash"></i>';
    } else {
        senha.setAttribute("type", "password");
        mostrar_senha.innerHTML = '<i class="fas fa-eye"></i>';
    }
}

mostrar_senha.addEventListener("click", mostrar);
