@extends('layouts.app')

@section('content-css')

    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />

@endsection

@section('content')
<br>
<br>
<br>    
<div class="container">
    <div class="row">
        <div class="col-md-7 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/users') }}">
                        {{ csrf_field() }}

                        <!--<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>-->

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-4 control-label">Trabajador</label>
                                <div class="col-md-6">
                                    <select id="trabajador" class="form-control" name="trabajador"  value={{$users->trabajador_id}}>
                                            <option value="">--seleccionar--</option>
                                    @foreach ($trabajador as $trab)
                                            @if($users->trabajador_id==$trab->id)
                                                <option value={{$trab->id}} selected> {{$trab->nombre}} </option>
                                                @else
                                                <option value={{$trab->id}}> {{$trab->nombre}} </option>
                                            @endif
                                    @endforeach
                                    </select>
                                </div>

                        </div>

                        <div class="form-group col-md-12">
                            <label class="col-md-4 control-label">Accesos</label>
                                <select name="accesos[]" id="js-example-tags" class="js-example-tags form-control select2-hidden-accessible" multiple tabindex="-1" aria-hidden="true">
                                    <?php foreach($accesos as $acceso)
                                        echo "<option value=" .$acceso->id .">". $acceso->nombre ."</option>";
                                    ?>
                                </select>
                            
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section("js")

    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    <script type="text/javascript" src=<?php echo url("js\user\user.js")?>></script>

    
@endsection