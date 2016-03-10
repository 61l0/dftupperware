<?php
	$to="contato@dftupperware.com.br";/*Your Email*/
	$subject=$_REQUEST['subject'];

	$date=date("l, F jS, Y");
	$time=date("h:i A");

	$firstName=$_REQUEST['name'];
	$email=$_REQUEST['email'];
	$subject=$_REQUEST['subject'];
	$textMessage=$_REQUEST['textmessage'];

	$msg="
		Mensagem do Formulário de Contato  $date, hour: $time.\n
		Nome: $firstName\n
		Assunto: $subject\n
		Email: $email\n	
		Mensagem: $textMessage
		";
	if($email=="") {
	echo "<div class='alert alert-danger'>
			  <a class='close' data-dismiss='alert'>×</a>
			  <strong>Atenção!</strong> Preencha todos os Campos.
		  </div>";
	} else {
	mail($to,$subject,$msg,"From:".$email);
	echo "<div class='alert alert-success'>
			  <a class='close' data-dismiss='alert'>×</a>
			  <strong>Obrigado, entraremos em contato!</strong>
		  </div>";
	}
?>
