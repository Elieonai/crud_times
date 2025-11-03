<?php
include 'conexao.php';

$resultado = mysqli_query($con, "SELECT * FROM times");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>CRUD Times</title>
</head>
<body>
<h2>Lista de Times</h2>

<a href="adicionar.php">Adicionar novo time</a><br><br>

<table border="1" cellpadding="8">
<tr>
  <th>ID</th>
  <th>Nome</th>
  <th>Cidade</th>
  <th>Ano de Fundação</th>
  <th>Técnico</th>
  <th>Ações</th>
</tr>

<?php while($linha = mysqli_fetch_assoc($resultado)) { ?>
<tr>
  <td><?php echo $linha['id']; ?></td>
  <td><?php echo $linha['nome']; ?></td>
  <td><?php echo $linha['cidade']; ?></td>
  <td><?php echo $linha['ano_fundacao']; ?></td>
  <td><?php echo $linha['tecnico']; ?></td>
  <td>
    <a href="editar.php?id=<?php echo $linha['id']; ?>">Editar</a> |
    <a href="excluir.php?id=<?php echo $linha['id']; ?>" onclick="return confirm('Deseja realmente excluir este time?')">Excluir</a>
  </td>
</tr>
<?php } ?>

</table>
</body>
</html>