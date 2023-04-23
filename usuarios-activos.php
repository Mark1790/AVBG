<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de nombres</title>
  <style>
    /* Estilos para la página */
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f2f2f2;
    }
    /* Estilos para la lista */
    .name-list {
      background-color: #e1f1ff;
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
    }
    .name-list ul {
      list-style: none;
      margin: 0;
      padding: 0;
    }
    .name-list li {
      margin: 10px 0;
      padding: 10px;
      background-color: #fff;
      border-radius: 5px;
      box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
      font-size: 18px;
      color: #333;
    }
    /* Estilos para hacer la lista responsive */
    @media screen and (max-width: 600px) {
      .name-list li {
        font-size: 16px;
      }
    }
  </style>
</head>
<body>
  <div class="name-list">
    <ul>
    <a href="perfil2.php"><li>Nombre 1</li>
    <a href="perfil.php"> <li>Nombre 2</li>
    <a href="perfil3.php"><li>Nombre 3</li>
      <li>Nombre 4</li>
      <li>Nombre 5</li>
    </ul>
  </div>
</body>
</html>
