<?

$destinatario = "marcos.alvves@hotmail.com";

$nome = $_REQUEST['name'];
$email = $_REQUEST['email'];
$mensagem = $_REQUEST['mensage'];
//$assunto = $_REQUEST['assunto'];

 // monta o e-mail na variavel $body

$body = "===================================" . "\n";
$body = $body . "FALE CONOSCO - TESTE COMPROVATIVO" . "\n";
$body = $body . "===================================" . "\n\n";
$body = $body . "Nome: " . $nome . "\n";
$body = $body . "Email: " . $email . "\n";
$body = $body . "Mensagem: " . $mensagem . "\n\n";
$body = $body . "===================================" . "\n";

// envia o email
mail($destinatario , $body, "From: $email\r\n");

// redireciona para a página de obrigado
//header("location:obrigado.htm");


?>