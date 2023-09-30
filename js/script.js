// Seleciona os elementos do formulário
var inputLoginEmail = document.getElementById("inputLoginEmail");
var inputLoginPassword = document.getElementById("inputLoginPassword");
var botaoLogin = document.getElementById("botaoLogin");

// Adiciona um evento de clique ao botão de login
botaoLogin.addEventListener("click", function(event) {
  // Previne o comportamento padrão do botão de submit
  event.preventDefault();
  // Verifica se os campos estão vazios
  if (inputLoginEmail.value === "" || inputLoginPassword.value === "") {
    // Exibe um alerta informando o usuário
    alert("Por favor, preencha todos os campos antes de logar.");
  } else {
    
  }
});
