<head>
  <meta charset="UTF-8">
  <title>FashionCrystal - Closet das Divas da Moda</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="/fashioncrystal/public/css/style.css">
  <link rel="icon" href="/fashioncrystal/public/img/favicon.png?v=2" type="image/png">
</head>

<body>
  <header class="custom-header d-flex align-items-center justify-content-between px-4 py-3">
    <img src="/fashioncrystal/public/img/logo2.png" alt="Logo Fashion Crystal" class="logo2">
    <h1 class="text-white fw-bold text-center flex-grow-1 fs-1 my-3">✨ Fashion Crystal ✨</h1>
  </header>

  <!-- Alerta de mensagem -->
  <?php if (!empty($_SESSION['message'])): ?>
    <div class="alert alert-<?= $_SESSION['message']['type'] ?> alert-dismissible fade show text-center m-3" role="alert">
      <?= htmlspecialchars($_SESSION['message']['text']) ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fechar"></button>
    </div>
    <?php unset($_SESSION['message']); ?>
  <?php endif; ?>

  <main class="container my-4">
    <?php include $viewPath; ?>
  </main>

  <footer class="bg-light text-center py-3">
    <small>© 2025 FashionCrystal. Todos os direitos reservados.</small>
  </footer>

  <!-- Scripts Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
