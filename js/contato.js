// Seleciona os elementos do formulário
var inputContatoName = document.getElementById("inputContatoName");
var inputContatoEmail = document.getElementById("inputContatoEmail");
var campoMensagem = document.getElementById("campoMensagem");
var botaoEnviarMensagem = document.getElementById("botaoEnviarMensagem");

// Adiciona um evento de clique ao botão de login
botaoEnviarMensagem.addEventListener("click", function(event) {
  // Previne o comportamento padrão do botão de submit
  event.preventDefault();
  // Verifica se os campos estão vazios
  if (inputContatoName.value === "" || inputContatoEmail.value === "" || campoMensagem.value === "") {
    // Exibe um alerta informando o usuário
    alert("Todos os campos precisam estar preenchidos");
  }
});
