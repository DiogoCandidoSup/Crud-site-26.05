<?php
// Conexão
include_once 'php_action/db_connect.php';
// Header
include_once 'includes/header.php';
// Message
include_once 'includes/message.php';
?>

<div class="row">
	<div class="col s12 m6 push-m3">
		<h3 class="light"> Login </h3>
    <form action="home.php" method="POST">
      <div class="input-field col s12">
				<input type="text" name="email" id="email">
				<label for="email">Email</label>
			</div>

			<div class="input-field col s12">
				<input type="text" name="senha" id="senha">
				<label for="senha">Senha</label>
			</div>

			<button type="submit" name="btn-logar" class="btn"> Entrar </button>
		</form>
	</div>
</div>