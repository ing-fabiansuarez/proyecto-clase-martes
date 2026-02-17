@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="form-wrapper">

            <div class="form-card">
                <h2 class="form-title">Registrar Nuevo Producto</h2>

                <form action="#" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
                        <label for="nombre">Nombre del Producto</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ej: Licencia de Software IDE Pro"
                            required>
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

                    <button type="submit" class="btn-submit">
                        Guardar Producto
                    </button>

                </form>
            </div>

        </div>

    </div>

   
@endsection
