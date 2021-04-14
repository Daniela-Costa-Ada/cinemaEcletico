<?php
require_once __DIR__ . '/componentes/header.php';
?> 
<?php
	$_email = isset($_POST["email"]) ? $_POST["email"] : "Sem definição";
	$_senha = isset($_POST["senha"]) ? $_POST["senha"] : "Sem definição";
	echo "Email: " . $_email . "<br>";
	echo "Senha: " . $_senha . "<br>";	
?>
<?php require_once __DIR__ . '/componentes/footer.php';
?>