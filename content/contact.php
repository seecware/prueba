<?php
// content/contact.php
?>

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
    <form class="bg-white rounded-2xl shadow p-6 space-y-4" action="/contact" method="POST">
      <h2 class="text-2xl font-semibold text-blue-600 mb-4">Envíanos un mensaje</h2>

      <div>
        <label class="block mb-1 text-sm font-medium">Nombre</label>
        <input name="name" type="text" placeholder="Tu nombre"
               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" required>
      </div>

      <div>
        <label class="block mb-1 text-sm font-medium">Correo electrónico</label>
        <input name="email" type="email" placeholder="tu@correo.com"
               class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300" required>
      </div>

      <div>
        <label class="block mb-1 text-sm font-medium">Mensaje</label>
        <textarea name="message" placeholder="Escribe tu mensaje aquí..."
                  class="w-full border border-gray-300 rounded-lg px-4 py-2 h-32 resize-none focus:outline-none focus:ring-2 focus:ring-blue-300" required></textarea>
      </div>

      <button type="submit"
              class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-300">
        Enviar
      </button>
    </form>
  </div>
</main>
