<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Detalhes do Signo</title>
</head>

<body>
  <div>
    <div>
      <h2>Seu signo é 
        <?php echo $signoUsuario['nome'] ?> 
      </h2>
      <p>Atributos do signo: <?php echo $signoUsuario['dataInicio'] ?> até <?= $signoUsuario['dataFim'] ?>
        <?php 
        echo "<pre>";
        echo $signoUsuario['descricao'];
        echo "</pre>"; ?> 
      </p>
    </div>
  </div>
</body>

</html>