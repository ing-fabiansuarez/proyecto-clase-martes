<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventario de Productos - JetProduct</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=JetBrains+Mono&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg-dark: #0B0E14;
            --card-dark: rgba(30, 33, 39, 0.7);
            --border-dark: rgba(255, 255, 255, 0.1);
            --text-light: #E0E0E0;
            --primary-blue: #7EBCFF;
            --accent-purple: #C77DFF;
            --success: #50FA7B;
            --danger: #ff5555;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: radial-gradient(circle at top center, #0f1623 0%, #0B0E14 60%);
            color: var(--text-light);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* ===============================
           NAVBAR
        =============================== */

        .navbar {
            background-color: rgba(11, 14, 20, 0.8);
            backdrop-filter: blur(12px);
            padding: 1rem 3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid var(--border-dark);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.4rem;
            color: var(--primary-blue);
            text-decoration: none;
        }

        .nav-links {
            list-style: none;
            display: flex;
            gap: 2rem;
        }

        .nav-links a {
            color: var(--text-light);
            text-decoration: none;
            font-size: 0.9rem;
            opacity: 0.8;
            transition: 0.2s;
        }

        .nav-links a:hover {
            opacity: 1;
            color: var(--primary-blue);
        }

        /* ===============================
           CONTAINER (MEJORADO)
        =============================== */

        .container {
            max-width: 1300px;
            width: 100%;
            margin: 3rem auto;
            padding: 0 3rem;
            flex: 1;
        }

        @media (min-width: 1600px) {
            .container {
                max-width: 1200px;
            }
        }

        /* ===============================
           BOTONES
        =============================== */

        .btn {
            padding: 0.7rem 1.4rem;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            border: none;
            transition: all 0.2s ease;
            text-decoration: none;
            display: inline-block;
        }

        .btn-primary {
            background: var(--primary-blue);
            color: #000;
        }

        .btn-danger {
            background: var(--danger);
            color: #fff;
        }

        .btn-secondary {
            background: transparent;
            border: 1px solid var(--border-dark);
            color: var(--text-light);
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        /* ===============================
           CATALOGO
        =============================== */

        .catalog-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 3.5rem;
        }

        .catalog-title {
            font-size: 1.9rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }

        .catalog-subtitle {
            font-size: 0.9rem;
            color: #888;
        }

        .product-grid-enhanced {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
            gap: 3rem;
        }

        .product-card-enhanced {
            background: linear-gradient(145deg, rgba(30, 33, 39, 0.85), rgba(20, 23, 30, 0.85));
            border: 1px solid var(--border-dark);
            border-radius: 18px;
            overflow: hidden;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .product-card-enhanced:hover {
            transform: translateY(-10px);
            border-color: var(--primary-blue);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
        }

        .product-image {
            position: relative;
            height: 230px;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .status-badge {
            position: absolute;
            top: 12px;
            right: 12px;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            background: rgba(0, 0, 0, 0.6);
        }

        .badge-active {
            border: 1px solid var(--success);
            color: var(--success);
        }

        .badge-danger {
            border: 1px solid var(--danger);
            color: var(--danger);
        }

        .badge-draft {
            border: 1px solid var(--accent-purple);
            color: var(--accent-purple);
        }

        .product-info {
            padding: 1.5rem;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .product-name {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
        }

        .product-price {
            font-family: 'JetBrains Mono', monospace;
            font-size: 1.2rem;
            color: var(--accent-purple);
            margin-bottom: 1rem;
        }

        .product-desc {
            font-size: 0.85rem;
            color: #aaa;
            line-height: 1.5;
            margin-bottom: 1.5rem;
        }

        .card-actions {
            margin-top: auto;
            display: flex;
            gap: 0.8rem;
        }

        /* ===============================
           FORM
        =============================== */

        .form-wrapper {
            display: flex;
            justify-content: center;
        }

        .form-card {
            background: var(--card-dark);
            border: 1px solid var(--border-dark);
            backdrop-filter: blur(12px);
            padding: 2.5rem;
            border-radius: 18px;
            width: 100%;
            max-width: 600px;
            transition: 0.3s ease;
        }

        .form-card:hover {
            border-color: var(--primary-blue);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.6);
        }

        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 1.5rem;
        }

        .form-group label {
            font-size: 0.8rem;
            margin-bottom: 0.5rem;
            color: #aaa;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid var(--border-dark);
            border-radius: 8px;
            padding: 0.7rem 0.9rem;
            color: var(--text-light);
            font-size: 0.9rem;
            outline: none;
            transition: 0.2s;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: var(--primary-blue);
            box-shadow: 0 0 0 2px rgba(126, 188, 255, 0.2);
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        /* ===============================
           FOOTER
        =============================== */

        .footer {
            padding: 2rem;
            text-align: center;
            border-top: 1px solid var(--border-dark);
            font-size: 0.8rem;
            color: #666;
        }

        @media (max-width: 900px) {
            .catalog-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar">
        <a href="#" class="navbar-brand">JetProduct</a>
        <ul class="nav-links">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Inventario</a></li>
            <li><a href="#">Ventas</a></li>
            <li><a href="#">Configuración</a></li>
        </ul>
    </nav>

    @yield('content')

    <footer class="footer">
        <p>© 2026 JetProduct Inc. — Built for Developers</p>
    </footer>

</body>

</html>
