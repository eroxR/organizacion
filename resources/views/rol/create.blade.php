@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Registrar Nuevo Rol</h1>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ url('/rol') }}" method="post" id="formulario">
                            @csrf
                            @include('rol.form')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        const formulario = document.getElementById('formulario');

        function vacio(llave, campo, descripcion) {

            if (llave == 0 || llave == "") {

                document.getElementById(descripcion).classList.add('msj-activo');
                document.getElementById(campo).classList.add('fallido');
                document.getElementById(descripcion).classList.remove('msj');
                // console.log("si funciona");
            } else {
                document.getElementById(descripcion).classList.remove('msj-activo');
                document.getElementById(campo).classList.remove('fallido');
                document.getElementById(descripcion).classList.add('msj');
                // console.log("si contrario");
            }

        }

        formulario.childNodes.forEach((element) => {
            element.addEventListener('keyup', (e) => {

                // console.log(e.target.name);

                switch (e.target.name) {
                    case 'nombre':
                        var llave = document.getElementById('nombre').value;
                        vacio(llave, 'nombre', 'descripcion_Nrol');
                        // validarCampo(expresiones.nombres, e.target, 'nombre', 'descripcion_nombre');
                        // console.log(llave);
                    default:
                        break;
                }




            });

        });

        formulario.addEventListener("submit", function(event) {

            var nom = document.getElementById('nombre').value;

            if (nom == "") {

                var llave = document.getElementById('nombre').value;
                vacio(llave, 'nombre', 'descripcion_Nrol');

                console.log('no seleccionado')
                event.preventDefault();

            } else {
                console.log('formulario rellenado completo')
                // console.log(event);
            }

        });
    </script>
@endsection