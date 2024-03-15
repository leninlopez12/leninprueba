<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Estática con PHP</title>
    <style>
        body {
            background-color: #ADD8E6; 
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenido a mi página estática con PHP</h1>
    </header>
    <nav>
        <ul>
            <li><a href="#">Inicio</a></li>
            <li><a href="#">Acerca de</a></li>
            <li><a href="#">Contacto</a></li>
        </ul>
    </nav>
    <main>
        <section>
            <h2>Acerca de</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed et tortor sed metus finibus placerat.</p>
        </section>
        <section>
            <h2>Contacto</h2>
            <p>Puedes contactarme a través de correo electrónico: ejemplo@example.com</p>
        </section>
        <section>
            <?php
                $miNombre = "Lenin";
                echo "<h2>Mi Nombre</h2>";
                echo "<p>$miNombre</p>";
            ?>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 Mi Página INUDI </p>
    </footer>
</body>
</html>
