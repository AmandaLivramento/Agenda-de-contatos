<?php

  session_start();

  include_once("connection.php");
  include_once("url.php");

  $data = $_POST;

  // MODIFICAÇÕES NO BANCO
  if(!empty($data)) {

    // Criar contato
    if($data["type"] === "create") {

      $nome = $data["nome"];
      $phone = $data["phone"];
      $observacao = $data["observacao"];

      $query = "INSERT INTO agenda.contacts (nome, phone, observacao) VALUES (:nome, :phone, :observacao)";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":phone", $phone);
      $stmt->bindParam(":observacao", $observacao);

     

        $stmt->execute();
        $_SESSION["msg"] = "Contato criado com sucesso!";
 

    } else if($data["type"] === "edit") {

      $nome = $data["nome"];
      $phone = $data["phone"];
      $observacao = $data["observacao"];
      $id = $data["id"];

      $query = "UPDATE agenda.contacts 
                SET nome = :nome, phone = :phone, observacao = :observacao
                WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":nome", $nome);
      $stmt->bindParam(":phone", $phone);
      $stmt->bindParam(":observacao", $observacao);
      $stmt->bindParam(":id", $id);

      

        $stmt->execute();
        $_SESSION["msg"] = "Contato atualizado com sucesso!";
    
       
      
      

    } else if($data["type"] === "delete") {

      $id = $data["id"];

      $query = "DELETE FROM agenda.contacts WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);
      
     

        $stmt->execute();
        $_SESSION["msg"] = "Contato removido com sucesso!";
    
    
       
        
      
      

    }

    // Redirect HOME
    header("Location:" . $BASE_URL . "../index.php");

  // SELEÇÃO DE DADOS
  } else {
    
    $id;

    if(!empty($_GET)) {
      $id = $_GET["id"];
    }

    // Retorna o dado de um contato
    if(!empty($id)) {

      $query = "SELECT * FROM agenda.contacts WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      $contact = $stmt->fetch();

    } else {

      // Retorna todos os contatos
      $contacts = [];

      $query = "SELECT * FROM agenda.contacts";

      $stmt = $conn->prepare($query);

      $stmt->execute();
      
      $contacts = $stmt->fetchAll();

    }

  }

  // FECHAR CONEXÃO
  $conn = null;
  ?>