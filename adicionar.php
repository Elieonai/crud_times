<?php
include 'conexao.php';

if(isset($_POST['salvar'])){
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $ano = $_POST['ano_fundacao'];
    $tecnico = $_POST['tecnico'];

    $sql = "INSERT INTO times (nome, cidade, ano_fundacao, tecnico)
            VALUES ('$nome', '$cidade', '$ano', '$tecnico')";
    mysqli_query($con, $sql);

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Adicionar Time</title>
</head>
<body>
<h2>Adicionar Novo Time</h2>

<form method="post">
  <label>Nome do Time:</label><br>
  <input type="text" name="nome" required><br><br>

  <label>Cidade:</label><br>
  <input type="text" name="cidade" required><br><br>

  <label>Ano de Fundação:</label><br>
  <input type="number" name="ano_fundacao" required><br><br>

  <label>Técnico:</label><br>
  <input type="text" name="tecnico" required><br><br>

  <input type="submit" name="salvar" value="Salvar">
</form>

<br>
<a href="index.php">Voltar</a>
</body>
</html>
