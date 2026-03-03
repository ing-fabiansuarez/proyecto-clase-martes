@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="form-wrapper">

            <div class="form-card">
                <h2 class="form-title">Registrar Nuevo Producto</h2>

                <form action="{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre del Producto</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ej: Licencia de Software IDE Pro">
                    </div>

                    <div class="form-group">
                        <label for="precio">Precio (USD)</label>
                        <input type="number" id="precio" name="precio" step="0.01" placeholder="99.99" >
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
                        <label for="estado">Categoria</label>
                        <select  name="categoria">
                            @foreach ($myCategories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option> 
                            @endforeach
                            
                        </select>
                    </div>

                    <button type="submit" class="btn-submit">
                        Guardar Producto
                    </button>

                </form>
            </div>

        </div>

    </div>

   
@endsection
