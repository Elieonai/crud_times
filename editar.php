<?php
include 'conexao.php';

$id = $_GET['id'];
$result = mysqli_query($con, "SELECT * FROM times WHERE id=$id");
$time = mysqli_fetch_assoc($result);

if(isset($_POST['atualizar'])){
    $nome = $_POST['nome'];
    $cidade = $_POST['cidade'];
    $ano = $_POST['ano_fundacao'];
    $tecnico = $_POST['tecnico'];

    $sql = "UPDATE times SET nome='$nome', cidade='$cidade', ano_fundacao='$ano', tecnico='$tecnico' WHERE id=$id";
    mysqli_query($con, $sql);

    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Editar Time</title>
</head>
<body>
<h2>Editar Time</h2>

<form method="post">
  <label>Nome do Time:</label><br>
  <input type="text" name="nome" value="<?php echo $time['nome']; ?>" required><br><br>

  <label>Cidade:</label><br>
  <input type="text" name="cidade" value="<?php echo $time['cidade']; ?>" required><br><br>

  <label>Ano de Fundação:</label><br>
  <input type="number" name="ano_fundacao" value="<?php echo $time['ano_fundacao']; ?>" required><br><br>

  <label>Técnico:</label><br>
  <input type="text" name="tecnico" value="<?php echo $time['tecnico']; ?>" required><br><br>

  <input type="submit" name="atualizar" value="Atualizar">
</form>

<br>
<a href="index.php">Voltar</a>
</body>
</html>