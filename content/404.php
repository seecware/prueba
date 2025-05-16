<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>404 No Encontrado</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      color: white;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      text-align: center;
    }

    .container {
      max-width: 600px;
      padding: 2rem;
      background-color: rgba(0, 0, 0, 0.3);
      border-radius: 20px;
      box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.37);
      backdrop-filter: blur(6px);
      -webkit-backdrop-filter: blur(6px);
    }

    h1 {
      font-size: 5rem;
      margin-bottom: 0.5rem;
    }

    p {
      font-size: 1.3rem;
      margin-bottom: 2rem;
    }

    a {
      text-decoration: none;
      background-color: #ffffff;
      color: #1e3c72;
      padding: 0.75rem 1.5rem;
      border-radius: 10px;
      font-weight: bold;
      transition: background-color 0.3s ease;
    }

    a:hover {
      background-color: #ddd;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>404</h1>
    <p>Oops... la página que buscas no fue encontrada.</p>
    <a href="/">Volver al inicio</a>
  </div>
</body>
</html>
<?php
// content/404.php
?>

<section class="min-h-screen flex items-center justify-center bg-gradient-to-br from-blue-900 to-blue-700 text-white">
  <div class="max-w-md p-8 bg-black bg-opacity-30 rounded-2xl shadow-lg backdrop-blur-md text-center">
    <h1 class="text-8xl font-extrabold mb-4">404</h1>
    <p class="text-lg mb-6">Oops… la página que buscas no fue encontrada.</p>
    <a href="/" class="inline-block bg-white text-blue-900 font-semibold px-6 py-3 rounded-lg hover:bg-gray-200 transition">
      Volver al inicio
    </a>
  </div>
</section>
