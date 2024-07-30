<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabecera</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #333;
    color: white;
    padding: 10px 0;
}

header img {
    vertical-align: middle;
    margin-left: 20px;
}

header a {
    color: white;
    text-decoration: none;
    margin: 0 15px;
    vertical-align: middle;
}

header a:hover {
    text-decoration: underline;
}

nav {
    display: flex;
    align-items: center;
}

nav a {
    flex-grow: 1;
    text-align: center;
}

nav div:first-child {
    flex-grow: 0;
    margin-right: auto;
}

header div {
    display: flex;
    align-items: center;
    justify-content: space-between;
    max-width: 1200px;
    margin: auto;
}
    </style>
</head>
<body>
    <header>
        <div>
            <img src="src/img/Tienda.png" alt="Logo" width="50">
            <nav>
                <a href="#">Usuario</a>
                <a href="#">Pedido</a>
                <a href="#">Venta</a>
                <a href="#">Contacto</a>
            </nav>
        </div>
    </header>
</body>
</html>
