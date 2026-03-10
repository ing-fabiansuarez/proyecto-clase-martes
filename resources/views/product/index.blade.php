@extends('layouts.app')

@section('content')
    <div class="container">

        <!-- Header Mejorado -->
        <div class="catalog-header">
            <div>
                <h2 class="catalog-title">Catálogo de Productos</h2>
                <p class="catalog-subtitle">Administra y visualiza todos tus productos digitales y físicos</p>
            </div>
            <a href="{{route('product.create')}}" class="btn btn-primary">+ Nuevo Producto</a>
        </div>
        <br>
        {{ $miLista->links('pagination::simple-default') }}
        <br>
        <!-- Grid -->
        <div class="product-grid-enhanced">
            @foreach ($miLista as $product)
                <!-- CARD -->
                <div class="product-card-enhanced">
                    <div class="product-image">
                        <span class="status-badge badge-active">Activo</span>
                        @if ($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="No tiene imagen">
                        @else
                            <img src="https://cdn-icons-png.flaticon.com/512/1554/1554591.png" alt="No tiene imagen">
                        @endif

                    </div>
                    <div class="product-info">
                        <h3 class="product-name">{{ $product->name }}</h3>
                        <div class="product-price">$ {{ $product->price }}</div>
                        <p class="product-desc">
                            {{ $product->description }}
                        </p>
                        <div class="card-actions">
                            <button class="btn btn-secondary">Editar</button>
                            <button class="btn btn-primary">Detalles</button>
                            <form action="{{route('product.destroy',$product )}}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
