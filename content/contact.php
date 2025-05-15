<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto - TechNova</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-blue-50 text-gray-800">

  <!-- Header -->
  <header class="bg-white shadow p-4 flex items-center justify-between">
    <div class="flex items-center gap-2">
      <!-- Logo -->
      <svg class="w-8 h-8 text-blue-500" fill="none" stroke="currentColor" stroke-width="2"
           viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round"
              d="M13 16h-1v-4h-1m1-4h.01M12 2a10 10 0 1010 10A10 10 0 0012 2z" />
      </svg>
      <span class="text-xl font-bold text-blue-600">TechNova</span>
    </div>
    <nav>
      <a href="/home" class="text-gray-700 hover:text-blue-500 mx-2">Inicio</a>
      <a href="#" class="text-gray-700 hover:text-blue-500 mx-2">Servicios</a>
      <a href="#" class="text-blue-600 font-semibold mx-2">Contacto</a>
    </nav>
  </header>

  <!-- Main -->
  <main class="max-w-4xl mx-auto py-10 px-6">
    <h1 class="text-3xl font-bold text-center mb-6">Contáctanos</h1>
    <p class="text-center mb-10 text-gray-600">¿Tienes preguntas? ¡Estamos para ayudarte!</p>

    <div class="grid md:grid-cols-2 gap-10">
      <!-- Información de contacto -->
      <div class="bg-white rounded-2xl shadow p-6 space-y-4">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Información de la empresa</h2>
        <p><strong>Nombre:</strong> TechNova Solutions S.A. de C.V.</p>
        <p><strong>Dirección:</strong> Av. Tecnología 456, Guadalajara, Jalisco</p>
        <p><strong>Teléfono:</strong> +52 33 1234 5678</p>
        <p><strong>Correo:</strong> contacto@technova.mx</p>
        <p><strong>Horario:</strong> Lunes a Viernes, 9:00 a.m. - 6:00 p.m.</p>
      </div>

      <!-- Formulario de contacto -->
      <form class="bg-white rounded-2xl shadow p-6 space-y-4">
        <h2 class="text-2xl font-semibold text-blue-600 mb-4">Envíanos un mensaje</h2>

        <div>
          <label class="block mb-1 text-sm font-medium">Nombre</label>
          <input type="text" placeholder="Tu nombre"
                 class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" required>
        </div>

        <div>
          <label class="block mb-1 text-sm font-medium">Correo electrónico</label>
          <input type="email" placeholder="tu@correo.com"
                 class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" required>
        </div>

        <div>
          <label class="block mb-1 text-sm font-medium">Mensaje</label>
          <textarea placeholder="Escribe tu mensaje aquí..."
                    class="w-full border border-gray-300 rounded-lg px-4 py-2 h-32 resize-none focus:outline-none focus:ring-2 focus:ring-blue-300" required></textarea>
        </div>

        <button type="submit"
                class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">Enviar</button>
      </form>
    </div>
  </main>

  <!-- Footer -->
  <footer class="text-center text-gray-500 text-sm py-6">
    &copy; 2025 TechNova Solutions. Todos los derechos reservados.
  </footer>
</body>
</html>