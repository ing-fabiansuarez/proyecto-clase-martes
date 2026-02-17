<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Producto - JetBrains Style</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-dark: #1A1A1A;
            --card-dark: rgba(255, 255, 255, 0.08); /* Semi-transparente para glassmorphism */
            --border-dark: rgba(255, 255, 255, 0.15);
            --text-light: #E0E0E0;
            --text-placeholder: #8A8A8A;
            --primary-blue: #64B5F6; /* Un azul vibrante */
            --primary-blue-hover: #42A5F5;
            --focus-glow: rgba(100, 181, 246, 0.2);
            --footer-text: #B0B0B0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-light);
            margin: 0;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* --- Navigation Bar --- */
        .navbar {
            background-color: var(--card-dark); /* Fondo semi-transparente para nav */
            backdrop-filter: blur(10px); /* Efecto Glassmorphism */
            padding: 1.2rem 2.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--border-dark);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.4rem;
            color: var(--primary-blue);
            text-decoration: none;
            letter-spacing: -0.5px;
        }

        .nav-links {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: var(--text-light);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.2s ease;
        }

        .nav-links a:hover {
            color: var(--primary-blue);
        }

        /* --- Main Content & Form --- */
        .main-content {
            flex-grow: 1; /* Ocupa el espacio restante */
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 3rem 1.5rem;
        }

        .form-container {
            background: var(--card-dark);
            backdrop-filter: blur(15px); /* Efecto Glassmorphism más pronunciado */
            padding: 3rem 2.5rem;
            border-radius: 1.5rem;
            border: 1px solid var(--border-dark);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.3), 0 5px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 550px; /* Más ancho para un aspecto más profesional */
        }

        h2 {
            margin-bottom: 2rem;
            font-weight: 600;
            text-align: center;
            font-size: 1.8rem;
            color: var(--text-light);
        }

        .form-group {
            margin-bottom: 1.5rem;
        }

        label {
            display: block;
            margin-bottom: 0.6rem;
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--text-light);
            text-transform: capitalize;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        select {
            width: 100%;
            padding: 0.8rem 1rem;
            border: 1px solid var(--border-dark);
            border-radius: 0.75rem; /* Más redondeado */
            font-size: 1rem;
            background-color: rgba(0, 0, 0, 0.2); /* Fondo más oscuro */
            color: var(--text-light);
            transition: all 0.2s ease;
            box-sizing: border-box;
        }

        input::placeholder, textarea::placeholder {
            color: var(--text-placeholder);
            opacity: 0.7; /* Más sutil */
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 4px var(--focus-glow);
            background-color: rgba(0, 0, 0, 0.3); /* Ligeramente más oscuro al enfocar */
        }

        textarea {
            resize: vertical;
            min-height: 100px; /* Un poco más alto */
        }

        /* Custom File Input Styling */
        input[type="file"] {
            border: none;
            padding: 0; /* Reset padding for custom file input */
            background: none;
            color: var(--text-light);
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        input::file-selector-button {
            background: var(--primary-blue);
            color: white;
            border: none;
            padding: 0.7rem 1.2rem;
            border-radius: 0.6rem;
            margin-right: 1rem;
            cursor: pointer;
            transition: background 0.2s ease, box-shadow 0.2s ease;
            font-weight: 500;
            font-size: 0.9rem;
        }

        input::file-selector-button:hover {
            background: var(--primary-blue-hover);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .btn-submit {
            width: 100%;
            padding: 0.9rem;
            background-color: var(--primary-blue);
            color: white;
            border: none;
            border-radius: 0.75rem;
            font-size: 1.1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.2s ease, box-shadow 0.2s ease;
            margin-top: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-submit:hover {
            background-color: var(--primary-blue-hover);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
        }

        /* --- Footer --- */
        .footer {
            background-color: rgba(0, 0, 0, 0.3); /* Un fondo más oscuro para el footer */
            backdrop-filter: blur(5px);
            padding: 1.5rem 2.5rem;
            text-align: center;
            font-size: 0.85rem;
            color: var(--footer-text);
            border-top: 1px solid var(--border-dark);
            margin-top: auto; /* Empuja el footer hacia abajo */
        }

        .footer a {
            color: var(--footer-text);
            text-decoration: none;
            margin: 0 0.8rem;
            transition: color 0.2s ease;
        }

        .footer a:hover {
            color: var(--primary-blue);
        }
    </style>
</head>
<body>

    <nav class="navbar">
        <a href="#" class="navbar-brand">JetProduct</a>
        <ul class="nav-links">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Productos</a></li>
            <li><a href="#">Configuración</a></li>
            <li><a href="#">Ayuda</a></li>
        </ul>
    </nav>

    <div class="main-content">
        <div class="form-container">
            <h2>Registrar Nuevo Producto</h2>
            <form action="#" method="POST" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="nombre">Nombre del Producto</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Ej: Licencia de Software IDE Pro" required>
                </div>

                <div class="form-group">
                    <label for="precio">Precio (USD)</label>
                    <input type="number" id="precio" name="precio" step="0.01" placeholder="99.99" required>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" name="descripcion" placeholder="Características clave, beneficios y detalles técnicos..."></textarea>
                </div>

                <div class="form-group">
                    <label for="imagen">Imagen del Producto</label>
                    <input type="file" id="imagen" name="imagen" accept="image/*">
                </div>

                <div class="form-group">
                    <label for="estado">Estado</label>
                    <select id="estado" name="estado">
                        <option value="disponible">Disponible</option>
                        <option value="lanzamiento">Próximo Lanzamiento</option>
                        <option value="descontinuado">Descontinuado</option>
                        <option value="beta">Versión Beta</option>
                    </select>
                </div>

                <button type="submit" class="btn-submit">Guardar Producto</button>
            </form>
        </div>
    </div>

    <footer class="footer">
        <p>&copy; 2024 JetProduct. Todos los derechos reservados.
            <a href="#">Privacidad</a> | <a href="#">Términos</a> | <a href="#">Soporte</a>
        </p>
    </footer>

</body>
</html>