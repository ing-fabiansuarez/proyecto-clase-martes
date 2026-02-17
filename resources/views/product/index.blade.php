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

        /* --- Navbar --- */
        .navbar {
            background-color: rgba(11, 14, 20, 0.8);
            backdrop-filter: blur(12px);
            padding: 1rem 2.5rem;
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

        .nav-links a:hover { opacity: 1; color: var(--primary-blue); }

        /* --- Main Content --- */
        .container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1.5rem;
            flex-grow: 1;
        }

        .header-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2.5rem;
        }

        .btn-add {
            background: var(--primary-blue);
            color: #000;
            padding: 0.6rem 1.2rem;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.9rem;
            transition: transform 0.2s;
        }

        .btn-add:hover { transform: translateY(-2px); }

        /* --- Product Grid --- */
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: var(--card-dark);
            border: 1px solid var(--border-dark);
            border-radius: 12px;
            overflow: hidden;
            transition: all 0.3s ease;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            border-color: var(--primary-blue);
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .product-image {
            width: 100%;
            height: 200px;
            background: #25282e;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--border-dark);
            position: relative;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .status-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            background: rgba(0,0,0,0.6);
            backdrop-filter: blur(5px);
            border: 1px solid var(--border-dark);
        }

        .status-active { color: var(--success); border-color: var(--success); }

        .product-info {
            padding: 1.5rem;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .product-name {
            font-size: 1.1rem;
            font-weight: 600;
            margin: 0 0 0.5rem 0;
            color: #fff;
        }

        .product-price {
            font-family: 'JetBrains Mono', monospace;
            font-size: 1.3rem;
            color: var(--accent-purple);
            margin-bottom: 1rem;
        }

        .product-desc {
            font-size: 0.85rem;
            color: #AAA;
            line-height: 1.5;
            margin-bottom: 1.5rem;
        }

        .card-actions {
            margin-top: auto;
            display: flex;
            gap: 0.5rem;
        }

        .btn-action {
            flex: 1;
            padding: 0.5rem;
            border-radius: 6px;
            border: 1px solid var(--border-dark);
            background: transparent;
            color: var(--text-light);
            font-size: 0.8rem;
            cursor: pointer;
            transition: 0.2s;
        }

        .btn-action:hover {
            background: var(--border-dark);
            border-color: var(--primary-blue);
        }

        /* --- Footer --- */
        .footer {
            padding: 2rem;
            text-align: center;
            border-top: 1px solid var(--border-dark);
            font-size: 0.8rem;
            color: #666;
            margin-top: 4rem;
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

    <div class="container">
        <div class="header-section">
            <h2>Catálogo de Productos</h2>
            <a href="#" class="btn-add">+ Nuevo Producto</a>
        </div>

        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <span class="status-badge status-active">Activo</span>
                    <img src="https://images.unsplash.com/photo-1541807084-5c52b6b3adef?w=400" alt="Producto">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Teclado Mecánico Pro</h3>
                    <div class="product-price">$129.99</div>
                    <p class="product-desc">Switches cherry blue, iluminación RGB personalizable y chasis de aluminio.</p>
                    <div class="card-actions">
                        <button class="btn-action">Editar</button>
                        <button class="btn-action">Detalles</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <span class="status-badge">Agotado</span>
                    <img src="https://images.unsplash.com/photo-1526170315836-3f8a40dd1e93?w=400" alt="Producto">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Cámara Retro Digital</h3>
                    <div class="product-price">$450.00</div>
                    <p class="product-desc">Sensor de 24MP con estética clásica y lentes intercambiables de alta gama.</p>
                    <div class="card-actions">
                        <button class="btn-action">Editar</button>
                        <button class="btn-action">Detalles</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <span class="status-badge status-active">Activo</span>
                    <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400" alt="Producto">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Audífonos Studio Wireless</h3>
                    <div class="product-price">$299.00</div>
                    <p class="product-desc">Cancelación de ruido activa y batería de 40 horas. Calidad de audio premium.</p>
                    <div class="card-actions">
                        <button class="btn-action">Editar</button>
                        <button class="btn-action">Detalles</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <span class="status-badge status-active">Activo</span>
                    <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400" alt="Producto">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Smartwatch Gen 5</h3>
                    <div class="product-price">$199.50</div>
                    <p class="product-desc">Monitoreo de salud avanzado y pantalla OLED de alta resolución resistente a rayones.</p>
                    <div class="card-actions">
                        <button class="btn-action">Editar</button>
                        <button class="btn-action">Detalles</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="product-image">
                    <span class="status-badge">Draft</span>
                    <img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=400" alt="Producto">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Monitor Curvo 34"</h3>
                    <div class="product-price">$549.99</div>
                    <p class="product-desc">Relación 21:9 UltraWide para máxima productividad y gaming inmersivo.</p>
                    <div class="card-actions">
                        <button class="btn-action">Editar</button>
                        <button class="btn-action">Detalles</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <p>© 2026 JetProduct Inc. — Built for Developers</p>
    </footer>

</body>
</html>