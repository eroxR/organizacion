@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Listado de Roles</h1>

                        <a href="{{ url('rol/create') }}" class="btn btn-success">
                            <span><i class="fas fa-user-plus"></i></span> Registrar Nuevo Rol</a>
                    </div>

                    <div class="">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"> <span><i class="fas fa-user"></i></span> numero del rol</th>
                                    <th scope="col"> <span><i class="fas fa-at"></i></span> Nombre del rol</th>
                                    <th scope="col">B. accion </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $rol)
                                    <tr>
                                        <td scope="row">{{ $rol->id }}</td>
                                        <td scope="row">{{ $rol->nombre }}</td>
                                        <td scope="row">

                                            <a href="{{ url('/rol/' . $rol->id . '/edit') }}" class="btn btn-warning">
                                                <i class="fas fa-edit"></i>
                                            </a>

                                            <form action="{{ url('/rol/' . $rol->id) }}" method="post">
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