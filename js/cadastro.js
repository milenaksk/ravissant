// Seleciona os elementos do formulário
var inputName = document.getElementById("inputCadastroName");
var inputEmail = document.getElementById("inputCadastroEmail");
var inputPassword = document.getElementById("inputCadastroPassword");
var inputConfirmPassword = document.getElementById("inputConfirmPassword");
var botaoCriar = document.querySelector("button[type='submit']");

// Adiciona um evento de clique ao botão de criar
botaoCriar.addEventListener("click", function(event) {
  // Previne o comportamento padrão do botão de submit
  event.preventDefault();
  
  // Verifica se os campos estão vazios
  if (inputName.value === "" || inputEmail.value === "" || inputPassword.value === "" || inputConfirmPassword.value === "") {
    // Exibe um alerta informando o usuário
    alert("Por favor, preencha todos os campos antes de enviar.");
  } else {
  }
});
