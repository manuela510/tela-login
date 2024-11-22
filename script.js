let senha = document.getElementById('senha')

function acerto(){
	senha.style.border ='solid 2px #00b711'
}
function erro(){
	senha.style.border ='solid 2px #ff0000'
}
document.getElementById('btn-entrar').addEventListener('click', function validarSenha(){
  if(senha.value.length < 8||
  !senha.value.match(/[a-z]/)||
  !senha.value.match(/[A-Z]/)||
  !senha.value.match(/[0-9]/)||
  !senha.value.match(/[^a-zA-Z0-9]/)
 ){
	erro()
 } else{
	acerto()
 }
 })
