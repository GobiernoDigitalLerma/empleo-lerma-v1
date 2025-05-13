@extends('layouts.base')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4" style="color:#545859; font-size: 40px;">Próximos Eventos</h2>

    @if(isset($eventos) && count($eventos) > 0)
        <div class="row d-flex align-items-stretch">
            @foreach ($eventos as $evento)
                <div class="col-md-4 mb-4 d-flex">
                    <div class="card shadow-lg border-0 rounded-4 w-100 d-flex flex-column">
                        
                        <div class="card-img-top" 
                             style="height: 250px; background: url('{{ asset($evento->foto ? 'archivo/'.$evento->foto : 'assets/img/default_event.png') }}') 
                             no-repeat center center; background-size: cover; border-top-left-radius: 12px; border-top-right-radius: 12px;">
                        </div>
                        <div class="card-body d-flex flex-column flex-grow-1">
                            <h5 class="card-title text-center text-primary">{{ $evento->titulo }}</h5>
                            <p class="card-text text-center text-muted" style="min-height: 60px; overflow: hidden; text-overflow: ellipsis;">
                                {{ $evento->descripcion }}
                            </p>
                           
                            <p class="card-text text-center"><strong>📍 Ubicación:</strong> {{ $evento->ubicacion }}</p>
                            <p class="card-text text-center mt-auto">
                                <small class="text-muted">📅 {{ $evento->fecha }}</small>
                            </p>
                            <div class="col text-center">
                                <a href="{{ route('descrevento', $evento->id) }}" class="btn btn-lg" 
                                   style="border: 2px solid #fe5000; background-color: transparent; color: #fe5000; 
                                          border-radius: 10px !important; padding: 10px 20px; transition: 0.3s; 
                                          text-transform: uppercase;">
                                    Ver detalles
                                </a>
                            </div>
                           
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center">No hay eventos disponibles.</p>
    @endif
</div>

@endsection

