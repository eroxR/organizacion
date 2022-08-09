@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h1>Editar Area</h1>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="{{ url('/area/' . $area->id) }}" method="POST" id="formulario">
                            @csrf
                            {{ method_field('PATCH') }}
                            @include('area.form')
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


        // const inputs = document.querySelectorAll('#formulario input');

        // const expresiones = {

        //     nombres: /^[a-zA-ZÀ-ÿ\s]{1,20}$/, // Letras y espacios, pueden llevar acentos.
        //     // apellidos: /^[a-zA-ZÀ-ÿ\s]{1,20}$/, // Letras y espacios, pueden llevar acentos.
        //     cedula: /^\d{5,20}$/, // 7 a 14 numeros.
        //     usuario: /^[a-zA-Z0-9\_\-]{4,20}$/, // Letras, numeros, guion y guion_bajo
        //     correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
        //     contraseña: /^.{4,50}$/, // 4 a 50 digitos.
        //     pasw1: /[a-z]+/,
        //     pasw2: /[A-Z]+/,
        //     pasw3: /[0-9]+/,
        //     pasw4: /[!$@#%&/()=?¿<>*-+""]{1}/,
        //     pasw5: /\s+/
        // }


        // const validarFormulario = (e) => {
        //     switch (e.target.name) {

        //         case 'nombre':
        //             var cantidad = 20;
        //             var llave = document.getElementById('nombre');
        //             // var caracteres = 20;
        //             // ,caracteres,'descripcion_nombre1'
        //             validarCampo(expresiones.nombres, e.target, 'nombre', 'descripcion_nombre');
        //             vacio(llave, 'nombre', 'descripcion_nombre');
        //             maximo($('#nombre').val().length, cantidad, 'descripcion_nombre', 'descripcion_nombre1');


        //             break;
        //         case 'email':
        //             var cantidad = 20;
        //             var llave = document.getElementById('inputApellidos');
        //             validarCampo(expresiones.apellidos, e.target, 'inputApellidos', 'descripcion_apellido');
        //             vacio(llave, 'inputApellidos', 'descripcion_apellido');
        //             maximo($('#inputApellidos').val().length, cantidad, 'descripcion_apellido',
        //             'descripcion_apellido1');

        //             break;
        //         case 'descripcion':
        //             var cantidad = 20;
        //             var llave = document.getElementById('inputUsuario');
        //             validarCampo(expresiones.cedula, e.target, 'inputCedula', 'descripcion_cedula');
        //             vacio(llave, 'inputCedula', 'descripcion_cedula');
        //             maximo($('#inputUsuario').val().length, cantidad, 'descripcion_cedula', 'descripcion_cedula1');
        //             // console.log(llave.vaue);

        //             break;
        //         case 'sex':
        //             var llave = document.getElementById('inputUsuario');
        //             vacio(llave, 'inputUsuario', 'descripcion_usuario');


        //             break;
        //         case 'rol[]':
        //             var llave = document.getElementById('inputEmailAddress');
        //             vacio(llave, 'inputEmailAddress', 'descripcion_email');

        //             break;
        //         default:

        //     }
        // }

        // const validarCampo = (expresion, input, campo, descripcion) => {

        //     if (expresion.test(input.value)) {
        //         document.getElementById(campo).classList.remove('fallido');
        //         document.getElementById(campo).classList.add('fallido');
        //         document.getElementById(descripcion).classList.remove('msj-activo');
        //         document.getElementById(descripcion).classList.add('msj');

        //     } else {
        //         // document.getElementById(campo).classList.remove('fallido');
        //         document.getElementById(campo).classList.add('fallido2');
        //         document.getElementById(descripcion).classList.remove('msj');
        //         document.getElementById(descripcion).classList.add('msj-activo');
        //     }


        // }

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

        // const maximo = (campo, limite, descripcion, descripcion1) => {

        //     if (campo > limite) {

        //         document.getElementById('descripcion_contraseña2').classList.remove('msj1-activo');
        //         document.getElementById('descripcion_contraseña2').classList.add('msj1');
        //         document.getElementById(descripcion).classList.remove('msj-activo');
        //         document.getElementById(descripcion).classList.add('msj');
        //         document.getElementById(descripcion1).classList.remove('msj1');
        //         document.getElementById(descripcion1).classList.add('msj1-activo');

        //         // $('.content-form').css("opacity", "1");
        //         // $('.content-form').css("opacity", "1");

        //     } else {

        //         document.getElementById(descripcion1).classList.remove('msj1-activo');
        //         document.getElementById(descripcion1).classList.add('msj1');

        //     }

        // }

        formulario.childNodes.forEach((element) => {
            element.addEventListener('keyup', (e) => {

                // console.log(e.target.name);

                switch (e.target.name) {
                    case 'nombreArea':
                        var llave = document.getElementById('nombreArea').value;
                        vacio(llave, 'nombreArea', 'descripcion_Narea');
                        // validarCampo(expresiones.nombres, e.target, 'nombre', 'descripcion_nombre');
                        // console.log(llave);
                    default:
                        break;
                }




            });

        });



        formulario.addEventListener("submit", function(event) {

            var nom = document.getElementById('nombreArea').value;

            if (nom == "") {

                var llave = document.getElementById('nombreArea').value;
                vacio(llave, 'nombreArea', 'descripcion_Narea');

                console.log('no seleccionado')
                event.preventDefault();

            } else {
                console.log('formulario rellenado completo')
                // console.log(event);
            }

        });
    </script>
@endsection
