<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Clientes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f6f8;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #2c3e50;
      color: white;
      padding: 1.5rem;
      text-align: center;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    main {
      max-width: 1000px;
      margin: 2rem auto;
      padding: 1rem;
    }

    h2 {
      color: #2c3e50;
      margin-bottom: 1rem;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background-color: white;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 1rem;
      text-align: left;
      border-bottom: 1px solid #eee;
    }

    th {
      background-color: #34495e;
      color: white;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    @media (max-width: 600px) {
      table, thead, tbody, th, td, tr {
        display: block;
      }

      th {
        position: absolute;
        top: -9999px;
        left: -9999px;
      }

      td {
        padding: 1rem;
        border: none;
        position: relative;
        padding-left: 50%;
      }

      td::before {
        position: absolute;
        top: 1rem;
        left: 1rem;
        width: 45%;
        white-space: nowrap;
        font-weight: bold;
        color: #555;
      }

      td:nth-of-type(1)::before { content: "Nombre"; }
      td:nth-of-type(2)::before { content: "Correo"; }
      td:nth-of-type(3)::before { content: "Teléfono"; }
      td:nth-of-type(4)::before { content: "País"; }
    }
  </style>
</head>
<body>

  <header>
    <h1>Listado de Clientes</h1>
  </header>

  <main>
    <h2>Clientes registrados</h2>
    <table>
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Correo</th>
          <th>Teléfono</th>
          <th>País</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Juan Pérez</td>
          <td>juanperez@example.com</td>
          <td>+52 555-1234</td>
          <td>México</td>
        </tr>
        <tr>
          <td>Ana García</td>
          <td>ana.garcia@example.com</td>
          <td>+34 911-5678</td>
          <td>España</td>
        </tr>
        <tr>
          <td>Carlos Ramírez</td>
          <td>c.ramirez@example.com</td>
          <td>+1 305-7890</td>
          <td>EE.UU.</td>
        </tr>
        <tr>
          <td>Lucía Torres</td>
          <td>lucia.torres@example.com</td>
          <td>+54 11-2345</td>
          <td>Argentina</td>
        </tr>
      </tbody>
    </table>
  </main>

</body>
</html>
