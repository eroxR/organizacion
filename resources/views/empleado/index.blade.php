@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Listado de Empleados</h1>

                        <a href="{{ url('empleado/create') }}" class="btn btn-success">
                            <span><i class="fas fa-user-plus"></i></span> Registrar Empleado</a>
                    </div>

                    <div class="">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-dark table-striped rounded">
                            <thead>
                                <tr>
                                    <th scope="col"> <span><i class="fas fa-user"></i></span> Nombre</th>
                                    <th scope="col"> <span><i class="fas fa-at"></i></span> Email</th>
                                    <th scope="col"> <span>&#9892</span> Genero</th>
                                    <th scope="col"> <span><i class="fas fa-briefcase"></i></span> Area</th>
                                    <th scope="col"> <span>&#9993</span> Boletin</th>
                                    <th scope="col"> <span><i class="fas fa-align-center"></i></i></span> Descripcion
                                    </th>
                                    <th scope="col">B. accion </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($empleados as $empleado)
                                    <tr>
                                        <td scope="row">{{ $empleado->emplead }}</td>
                                        <td scope="row">{{ $empleado->email }}</td>
                                        <td scope="row">
                                            @if ($empleado->sexo == 'M')
                                                Masculino
                                            @else
                                                @if ($empleado->sexo == 'F')
                                                    Femenino
                                                @endif
                                            @endif
                                        </td>
                                        <td scope="row">{{ $empleado->nombre }}</td>
                                        <td scope="row">
                                            @if ($empleado->boletin == 1)
                                                SI
                                            @else
                                                NO
                                            @endif
                                        </td>
                                        <td scope="row">{{ $empleado->descripcion }}</td>
                                        <td scope="row">

                                            <a href="{{ url('/empleado/' . $empleado->id . '/edit') }}" class="btn btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form action="{{ url('/empleado/' . $empleado->id) }}" method="post">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button class="btn btn-danger" type="submit"
                                                    onclick="return confirm('¿desa borrar el registro?')"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>


                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    
</script>
