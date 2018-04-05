<?php
	header('Content-Type: text/html; charset=UTF-8');
	header('Content-Type: text/plain; charset=UTF-8');
	
	function pegaValor($valor) {
		return isset($_POST[$valor]) ? $_POST[$valor] :'';
	}
	$nome = pegaValor("nome");
	$telefone = pegaValor("tel");
	$email = pegaValor("email");
	$mensagem = pegaValor("msg");
	
	
	
	$quebra_linha = "\n\n";
	$emailSender = "ti@zabo.com.br";
	$nomeRemetente = "Green ST";
	$emailDestinatario = "renata@spicycomm.comm.br, vendas@playimovel.com.br, emily@playimovel.com.br";
	$assunto = "Contato enviado pelo site www.greenst.com.br";
	$msg= $quebra_linha;
	$msg .= "Nome: ".$nome.$quebra_linha;
	$msg .= "Email: ".$email.$quebra_linha;
	$msg .= "Telefone: ".$telefone.$quebra_linha;
	$msg .= "Mensagem: " .$mensagem.$quebra_linha;
	
	
	$headers= "MIME-Version: 1.1".$quebra_linha;
	
	
	if(mail($emailDestinatario, $assunto, $msg, $headers, "-r".$emailSender)) {
		header("location: obrigado.html");
	} else {
		echo "Não foi possível enviar o email";
	}
?>