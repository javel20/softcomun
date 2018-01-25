@extends("layouts.app")

@section("content")

    <div class="container col-sm-8 col-md-8">
    <br>
<br><br>
        <h1>Nueva Comunicacion</h1>

            @include('comunicacions.form',['comunicacion'=>$comunicacion, 'url' => '/comunicacions', 'method' => 'POST'])    
    
    </div>

@endsection