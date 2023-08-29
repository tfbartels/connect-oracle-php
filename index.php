<?php

  // Definir as variáveis de conexão
  $host = "";
  $port = "";
  $database = "";
  $user = "";
  $password = "";

  // Conectar ao banco de dados
  $conn = oci_connect($user, $password, "//$host:$port/$database");

  // Verificar se a conexão foi bem-sucedida
  if (!$conn) {
    echo "Falha ao conectar ao banco de dados.";
    exit();
  }

  // Imprimir uma mensagem de sucesso
  echo "Conexão bem-sucedida.";

  // Fechar a conexão
  oci_close($conn);

?>
