<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Detalhes do Signo</title>
</head>

<body>
  <h2>Seu signo é
    <?php echo $signoUsuario['nome'] ?>
  </h2>
  <h3>
  <?php echo $signoUsuario['dataInicio'] ?> até <?= $signoUsuario['dataFim'] ?>
  </h3>
  <h4>Descrição do signo: </h4>
  <p>
    <?php echo $signoUsuario['descricao']; ?>
  </p>
  <input type="button" value="Voltar" onClick="history.go(-1)">
</body>

</html>