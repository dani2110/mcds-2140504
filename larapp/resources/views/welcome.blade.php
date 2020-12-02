@extends('layouts.app') 
@section('title', 'LARAPP - Página de Bienvenida')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-12">
        <h3> <i class="fas fa-tag"></i> Juegos Importantes</h3>
        <hr>
        <div class="owl-carousel owl-theme">
            @foreach ($sliders as $slider)
            <div class="slider" style="background-image: url({{ asset($slider->image) }})">
                <p>
                    {{ $slider->description }}
                </p>
            </div>
            @endforeach
        </div>
        
    </div>
</div>
@endsection