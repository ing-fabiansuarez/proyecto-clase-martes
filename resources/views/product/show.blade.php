@extends('layouts.app')

@section('content')

<div class="container" style="padding-top: 2rem; padding-bottom: 3rem;">

  <div style="max-width: 900px; margin: 0 auto; background: rgba(30,33,39,0.85); border-radius: 16px; box-shadow: 0 12px 40px rgba(0,0,0,0.7); padding: 2rem; display: flex; gap: 2.5rem; flex-wrap: wrap;">

    <!-- Imagen principal -->
    <div style="flex: 1 1 320px; position: relative; border-radius: 16px; overflow: hidden; box-shadow: inset 0 0 0 1px var(--border-dark);">
      <img src="https://images.unsplash.com/photo-1541807084-5c52b6b3adef?w=800" alt="Producto" style="width: 100%; height: 100%; object-fit: cover; display: block;">
      <span style="position: absolute; top: 12px; right: 12px; background: var(--success); color: #000; font-weight: 700; padding: 5px 14px; border-radius: 20px; font-size: 0.75rem; text-transform: uppercase; box-shadow: 0 0 8px var(--success);">
        Activo
      </span>
    </div>

    <!-- Detalles -->
    <div style="flex: 1 1 450px; color: var(--text-light); display: flex; flex-direction: column;">

      <h1 style="font-size: 2.4rem; font-weight: 700; margin-bottom: 1rem;">Teclado Mecánico Pro</h1>

      <div style="font-family: 'JetBrains Mono', monospace; font-size: 2rem; color: var(--accent-purple); margin-bottom: 1.8rem;">
        $129.99
      </div>

      <div style="display: flex; gap: 1rem; margin-bottom: 2rem; flex-wrap: wrap;">
        <div style="background: var(--card-dark); border: 1px solid var(--border-dark); border-radius: 12px; padding: 1rem 1.4rem; min-width: 140px;">
          <div style="font-size: 0.75rem; color: #888; margin-bottom: 6px;">Categoría</div>
          <div style="font-weight: 600; color: var(--primary-blue);">Periféricos</div>
        </div>

        <div style="background: var(--card-dark); border: 1px solid var(--border-dark); border-radius: 12px; padding: 1rem 1.4rem; min-width: 140px;">
          <div style="font-size: 0.75rem; color: #888; margin-bottom: 6px;">Stock</div>
          <div style="font-weight: 600; color: var(--success);">Disponible</div>
        </div>

        <div style="background: var(--card-dark); border: 1px solid var(--border-dark); border-radius: 12px; padding: 1rem 1.4rem; min-width: 140px;">
          <div style="font-size: 0.75rem; color: #888; margin-bottom: 6px;">SKU</div>
          <div style="font-weight: 600; color: var(--primary-blue);">TK-PRO-001</div>
        </div>
      </div>

      <p style="color: #AAA; line-height: 1.6; font-size: 1rem; flex-grow: 1; margin-bottom: 2rem;">
        Teclado mecánico profesional con switches Cherry Blue, iluminación RGB personalizable,
        chasis de aluminio aeronáutico y compatibilidad multiplataforma. Ideal para gamers y
        desarrolladores.
      </p>

      <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
        <a href="#" class="btn btn-secondary" style="flex: 1 1 120px; text-align: center;">Editar</a>
        <a href="#" class="btn btn-danger" style="flex: 1 1 120px; text-align: center;">Eliminar</a>
        <a href="#" class="btn btn-primary" style="flex: 1 1 120px; text-align: center;">Volver al catálogo</a>
      </div>

    </div>

  </div>

</div>

@endsection

