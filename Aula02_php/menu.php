<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    
    <?php include "atual.php"?>
    
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Barra</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       <li class="nav-item">
          <a class="nav-link <?php if ($pg_atual == 'home') { echo 'active'; } ?>" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($pg_atual == 'produtos') { echo 'active'; } ?>" href="produtos.php">Produtos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if ($pg_atual == 'carrinho') { echo 'active'; } ?>" href="carrinho.php">Carrinho</a>
        </li>
        </li>
      </ul>
    </div>
  </div>
</nav>


</body>
</html>


