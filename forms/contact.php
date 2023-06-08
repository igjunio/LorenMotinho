<?php
  $nome = $_POST['nome'];
  $contato = $_POST['telefone'];
  $mensagem = $_POST['mensagem'];

  $email_from = 'Loren Motinho Site';
  $email_subject = 'Nova mensagem da página de contato';
  $email_body = "Nome: $nome.\n".
                "Telefone: $contato.\n".
                "Mensagem: $mensagem.\n";

  $to = "igorjunio.inf@gmail.com";
  $headers = "De: $email_from \r\n";

  mail($to,$email_subject,$email_body,$headers);

  header("location: ../contato.html");
?>