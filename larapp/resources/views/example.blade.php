@extends('layouts.app')

@section('content')
      <div class="card card-dark bg-dark text-light container my-5 justify-content-center">
        <div class="card-header text-center">
            <h3>Juegos</h3>
        </div>
        <div class="card-body">
            <h5><strong>El numero de juegos es: </strong>{{ $games->count() }} </h5>
            @if ($games->count() > 10)
                <h6 class="text-danger">Hay varios juegos</h6>
            @elseif($games->count()>=5 && $games->count()<=10) <h6 class="text-warning">Hay ciertos juegos</h6>
                @else
                    <h6 class="text-primary">Hay pocos juegos</h6>
            @endif
            <div class="py-3 justify-content-center">
                <table class="table table-bordered table-hover table-warning">
                    @php
                        $i = 0
                    @endphp
                    @while ($i< $games->count())
                        @php
                            $game = $games->get($i)
                        @endphp
                        <tr>
                            <td>{{$game->name}}</td>
                        </tr>
                        @php
                            $i++
                        @endphp
                    @endwhile
                </table>
            </div>
        </div>
     </div>
     <div class="card card-dark bg-dark text-light container my-5 justify-content-center">
        <div class="card-header text-center">
            <h3>Categorias</h3>
        </div>
        <div class="card-body">
            <h5><strong>El numero de categorias es: </strong>{{ $categories->count() }} </h5>

            @if( $categories->count() > 10 )
            <h6 class="text-primary">Hay muchas Categorias</h6>
            @else
            <h6 class="text-primary">Hay pocas categorias</h6>
            @endif
            <div class="py-3 justify-content-center">
              <table class="table table-bordered table-hover table-warning">
                @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                   <td>{{  $category->description }}</td>
               </tr>
               @endforeach
           </table>
       </div>
   </div>
</div>
 <div class="card card-dark bg-dark text-light container my-5 justify-content-center">
        <div class="card-header text-center">
            <h3>Usuarios</h3>
        </div>
        <div class="card-body">
            <h5><strong>El numero de usuarios es: </strong>{{ $users->count() }} </h5>
        </div>
            <div class="py-3 justify-content-center">
                <table class="table table-bordered table-hover table-warning">
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->fullname }}</td>
                            <td>
                                @switch($user->gender)
                                    @case('male')
                                        Masculino
                                    @break
                                    @case('female')
                                        Femenino
                                    @break
                                @endswitch
                            </td>
                            <td>{{ $user->gender }}</td>
                            <td>{{ $user->birthdate }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
 

@endsection
