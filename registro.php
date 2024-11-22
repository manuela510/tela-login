<?php
   $pdo = new PDO('mysql:host=localhost; dbname=cadastro-usu', 'root', '');

if (isset($_POST['acao'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $confirmar = $_POST['confirmar'];
	$usuario = $_POST['usuario'] ;
    $salvar = $pdo->prepare("INSERT INTO `usuario` VALUES (null,?,?,?,?)");

    $salvar->execute(array($usuario, $email, $senha, $confirmar));
}

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Doce Café</title>
	<link rel="stylesheet" href="./style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Sedan:ital@0;1&display=swap" rel="stylesheet">
</head>
<body>
   <div class="container1">
        <div class ="login2">
			<div class="cadastro">
		      <p>Cadastro</p>
			 </div>
			 <form action="" method ="post">
             <div class="email2">
			   <input type="email" id="email" name="email" placeholder="email - celular">
			 </div>
			 <div class="senha2">
                <input type="password" id="senha" name="senha" placeholder="senha">
            </div>
			<div class="senha2">
                <input type="password" id="senha" name="confirmar" placeholder="repita senha">
            </div>
			<div class="usuario">
                <input type="text" id="text" name="usuario" placeholder="Nome do usuário">
            </div>
			<!-- <div class="btn-cadastrar">
				<p>Cadastrar</p> -->
			<!-- </div> -->
			<input type="submit" name="acao" value="cadastrar" class="btn-cadastrar">
            </form>
        </div>
    </div>
	<script src="./script.js"></script>
</body>
</html>