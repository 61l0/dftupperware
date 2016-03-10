<?php
	$to="contato@dftupperware.com.br";/*Your Email*/
	$subject=$_REQUEST['name'];

	$date=date("l, F jS, Y");
	$time=date("h:i A");

	$firstName=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];


	$msg="
		Mensagem de Cadastro   $date, hour: $time.\n
		Nome: $firstName\n
		Email: $email\n	
		Telefone: $phone
		";
	if($email=="") {
	echo "<div class='alert alert-danger'>
			  <a class='close' data-dismiss='alert'>×</a>
			  <strong>Atenção!</strong> Por Favor Preencha os Campos.
		  </div>";
	} else {
	mail($to,$subject,$msg,"From:".$email);
	echo "<div class='alert alert-success'>
			  <a class='close' data-dismiss='alert'>×</a>
			  <strong>Obrigado Entraremos em Contato!</strong>
		  </div>";
	}
?>
