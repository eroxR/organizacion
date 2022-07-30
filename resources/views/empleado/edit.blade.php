@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Editar Empleado</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{ url('/empleado/'.$empleado->id) }}" method="POST">
                        @csrf
                        {{method_field('PATCH')}}
                        @include('empleado.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection