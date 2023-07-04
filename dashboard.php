<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="/projeto/footer.css">
    <title>HOME</title>
</head>
<body>
  <?php
  // Iniciar a sessão
  session_start();
  ?>
<nav>
    <ul>
      <li><a href="/projeto/home/dashboard.php">Página Inicial</a></li>
      <li><a href="/sobre.html">Sobre</a></li>
      <li><a href="/perfil/perfil.php">perfil</a></li>
      <li><a href="/cadastro/cadastro.html">Cadastro</a></li>
      <li><a href="/projeto/login/login.php">Login</a></li>
    </ul>
  </nav>

  <!-- Conteúdo da página -->
  <h1>Bem-vindo à Página Inicial</h1>
  <p>Este é o conteúdo da página inicial do site.</p>
  <?php include '../footer.php'; ?>
</body>
</html>
