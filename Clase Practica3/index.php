<?php
$productos = array(
    array(
        'nombre' => 'Motocilceta KTM  EXC-F',
        'imagen' => 'img/Producto1.jpg',
        'descripcion' => 'La gama KTM EXC-F  marca el listón como la gama de Enduro más avanzada tecnológicamente del paddock, con un repertorio de trucos totalmente nuevo.',
        'precio' => 12999
    ),
    array(
        'nombre' => 'Motocilceta Ymaha-YZ-450F',
        'imagen' => 'img/Producto2.jpeg',
        'descripcion' => 'Es el primer modelo de producción que permite conexión inalámbrica con la centralita del motor para seleccionar ajustes personalizados que  permiten aprovechar el potencial a tope.',
        'precio' => 9290
    ),
    array(
        'nombre' => 'Motocilceta Kawasaki KX™450',
        'imagen' => 'img/Producto3.jpeg',
        'descripcion' => 'Ofrece ingeniería y potencia de último nivel para dominar la pista la KAWASAKI KX450 es una moto ara ganar y mantenerse en la cima. La KX450 personifica este legado al máximo. ',
        'precio' => 15552
    ),
    array(
        'nombre' => 'Motocicleta Suzuki RMZ450 ',
        'imagen' => 'img/Producto4.jpeg',
        'descripcion' => 'El nuevo refinado motor de 4 tiempos y el escape la dotan de un altísimo nivel de prestaciones y la convierten en una máquina a la altura de los campeones es potente y la más emocionante.',
        'precio' => 11279
    ),
    array(
        'nombre' => 'Motocicleta Husqvarna  TE 150 | 2024',
        'imagen' => 'img/Producto5.jpeg',
        'descripcion' => 'Husqvarna  con las últimas tecnologías en máquinas de enduro de alto rendimiento capaces de dominar los terrenos más difíciles.',
        'precio' => 12888
    ),
    array(
        'nombre' => 'Motocicleta Husaberg FE 450 - 450 cc enduro',
        'imagen' => 'img/Producto6.jpeg',
        'descripcion' => 'Husaberg tiene un nuevo concepto de enduro de última generación y ha creado un diseño de motor  con un ángulo de cilindro suave, 70° e inyección electrónica de combustible.',
        'precio' => 13888
    ),
    
);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<h1>Lista de Productos </h1>
<h3>Seccion motocilcetas e implementos de moticiclista </h3>
    <?php foreach ($productos as $producto): ?>
        <div class="producto">
            <img src="<?php echo $producto['imagen']; ?>" alt="<?php echo $producto['nombre']; ?>" width="150">
            <h3><?php echo $producto['nombre']; ?></h3>
            <p><?php echo $producto['descripcion']; ?></p>
            <p>Precio: $<?php echo number_format($producto['precio'], 2); ?></p>
            <button onclick="agregarAlCarrito('<?php echo $producto['nombre']; ?>', <?php echo $producto['precio']; ?>)">Agregar al Carrito</button>
        </div>
    <?php endforeach; ?>

    <script src="js/script.js"></script>
    <footer>
        <h2>Realizado por ERICK VARGAS</h2>
    </footer>
</body>
</html>
