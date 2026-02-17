@extends('layouts.app')

@section('content')

<div class="container">

    <!-- Header Mejorado -->
    <div class="catalog-header">
        <div>
            <h2 class="catalog-title">Catálogo de Productos</h2>
            <p class="catalog-subtitle">Administra y visualiza todos tus productos digitales y físicos</p>
        </div>
        <a href="#" class="btn btn-primary">+ Nuevo Producto</a>
    </div>

    <!-- Grid -->
    <div class="product-grid-enhanced">

        <!-- CARD -->
        <div class="product-card-enhanced">
            <div class="product-image">
                <span class="status-badge badge-active">Activo</span>
                <img src="https://images.unsplash.com/photo-1541807084-5c52b6b3adef?w=400" alt="">
            </div>
            <div class="product-info">
                <h3 class="product-name">Teclado Mecánico Pro</h3>
                <div class="product-price">$129.99</div>
                <p class="product-desc">
                    Switches cherry blue, iluminación RGB personalizable y chasis de aluminio.
                </p>
                <div class="card-actions">
                    <button class="btn btn-secondary">Editar</button>
                    <button class="btn btn-primary">Detalles</button>
                </div>
            </div>
        </div>

        <div class="product-card-enhanced">
            <div class="product-image">
                <span class="status-badge badge-danger">Agotado</span>
                <img src="https://images.unsplash.com/photo-1526170315836-3f8a40dd1e93?w=400" alt="">
            </div>
            <div class="product-info">
                <h3 class="product-name">Cámara Retro Digital</h3>
                <div class="product-price">$450.00</div>
                <p class="product-desc">
                    Sensor de 24MP con estética clásica y lentes intercambiables.
                </p>
                <div class="card-actions">
                    <button class="btn btn-secondary">Editar</button>
                    <button class="btn btn-primary">Detalles</button>
                </div>
            </div>
        </div>

        <div class="product-card-enhanced">
            <div class="product-image">
                <span class="status-badge badge-draft">Draft</span>
                <img src="https://images.unsplash.com/photo-1527443224154-c4a3942d3acf?w=400" alt="">
            </div>
            <div class="product-info">
                <h3 class="product-name">Monitor Curvo 34"</h3>
                <div class="product-price">$549.99</div>
                <p class="product-desc">
                    Relación 21:9 UltraWide para productividad y gaming inmersivo.
                </p>
                <div class="card-actions">
                    <button class="btn btn-secondary">Editar</button>
                    <button class="btn btn-primary">Detalles</button>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection
