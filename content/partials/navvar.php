<?php
// content/partials/navbar.php
?>
<!-- NAVBAR CARGADO -->
<nav class="bg-white shadow-md">
  <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
    <a href="/" class="text-2xl font-bold text-blue-600">PuntoDeVenta</a>
    <div class="space-x-6">
      <a 
        href="/" 
        class="hover:text-blue-600 <?= $active === 'home' ? 'text-blue-600 font-semibold' : 'text-gray-700' ?>"
      >Home</a>
      <a 
        href="/aboutus" 
        class="hover:text-blue-600 <?= $active === 'aboutus' ? 'text-blue-600 font-semibold' : 'text-gray-700' ?>"
      >About Us</a>
      <a 
        href="/contact" 
        class="hover:text-blue-600 <?= $active === 'contact' ? 'text-blue-600 font-semibold' : 'text-gray-700' ?>"
      >Contact</a>
    </div>
  </div>
</nav>
