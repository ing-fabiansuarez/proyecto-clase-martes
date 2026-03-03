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
            @foreach ($miLista as $product)
                <!-- CARD -->
                <div class="product-card-enhanced">
                    <div class="product-image">
                        <span class="status-badge badge-active">Activo</span>
                        <img src="https://images.unsplash.com/photo-1541807084-5c52b6b3adef?w=400" alt="">
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">{{ $product->name }}</h3>
                        <div class="product-price">$ {{$product->price}}</div>
                        <p class="product-desc">
                            {{ $product->description}}
                        </p>
                        <div class="card-actions">
                            <button class="btn btn-secondary">Editar</button>
                            <button class="btn btn-primary">Detalles</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
