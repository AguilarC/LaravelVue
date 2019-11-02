@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">En que estas pensando ahora ?</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="" method="get">
                        <div class="form-group">
                            <label for="tought">Ahora estoy pensando en:</label>
                            <input type="text"  class="form-control" name="thought">
                        </div>
                        <button type="button" class="btn btn-primary">enviar pensamiento</button>
                    </form>
                </div>                
            </div> 
            <br>
            <div class="card">
                <div class="card-header">publicado en 17/07/2018</div>

                <div class="card-body">                    
                    <p>Evo Morales participó en las elecciones de 2002 en las cuales el MAS logró el segundo lugar con un fuerte apoyo de los departamentos de occidente después de Gonzalo Sánchez de Lozada que tuvo más apoyo en los departamentos de los valles y llanos

                    </p>
                </div>                
                <div class="card-footer">
                    <button type="button" class="btn btn-primary">Editar</button>
                    <button type="button" class="btn btn-danger">Eliminar</button>
                </div>
                
            </div> 
            <div>
                <thought-c></thought-c>
            </div>
        </div>
    </div>
</div>
@endsection
