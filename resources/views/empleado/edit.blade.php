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

                    <form action="{{ url('/empleado/'.$empleado->id) }}" method="POST" id="formulario">
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
@section('scripts')
    <script>
        // alert('si si si');

        function opcionArea() {
            var selec = document.getElementById('area').value;
            // console.log(selec);

            if (selec != 0) {
                document.getElementById('descripcion_area').classList.remove('msj-activo');
                document.getElementById('descripcion_area').classList.add('msj');
            } else {
                document.getElementById('descripcion_area').classList.remove('msj');
                document.getElementById('descripcion_area').classList.add('msj-activo');
            }
        }

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

                if (campo == 'nombre') {
                    // console.log('el id del nombre');
                    var newdescripcion = document.getElementById(descripcion);
                    // console.log(descripcionnew);
                    newdescripcion.innerHTML = "<p>Error el campo nombre no puede estar vacio</p>";
                } else if (campo == 'email') {
                    // console.log('el id del email');
                    var newdescripcion = document.getElementById(descripcion);
                    // console.log(descripcionnew);
                    newdescripcion.innerHTML = "<p>Error el campo Correo Electronico no puede estar vacio</p>";
                }

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
                    case 'nombre':
                        var llave = document.getElementById('nombre').value;
                        vacio(llave, 'nombre', 'descripcion_text');
                        // validarCampo(expresiones.nombres, e.target, 'nombre', 'descripcion_nombre');
                        // console.log(llave);
                        break;
                    case 'email':
                        var llave = document.getElementById('email').value;
                        vacio(llave, 'email', 'descripcion_text');
                        break;
                    case 'descripcion':
                        var llave = document.getElementById('descripcion').value;
                        vacio(llave, 'descripcion', 'descripcion_descripcion');
                        // console.log(llave);
                        break;

                    default:
                        break;
                }




            });

            element.addEventListener('click', (e) => {

                if (e.target.name == "rol[]") {
                    // console.log("si le diste clik");
                    document.getElementById('descripcion_rol').classList.remove('msj-activo');
                    document.getElementById('descripcion_rol').classList.add('msj');

                } else if (e.target.name == "sex") {

                    document.getElementById('descripcion_sex').classList.remove('msj-activo');
                    document.getElementById('descripcion_sex').classList.add('msj');
                }

            });

        });



        formulario.addEventListener("submit", function(event) {

            var checkbox = document.getElementsByName('rol[]');
            var radio = document.getElementsByName('sex');
            var selec = document.getElementById('area').value;
            var nom = document.getElementById('nombre').value;
            var mail = document.getElementById('email').value;
            var descrip = document.getElementById('descripcion').value;
            var radioB = false;
            var checkedes = false;
            // var checkboxsi = false;
            // var checkbox = document.getElementById('nombre').value;
            // console.log(checkbox.length);
            // console.log(selec   );
            // var checkbox = document.getElementsById('rol').value;6 
            // console.log(radio.length);

            for (var i = 1; i < radio.length; i++) {
                if (document.getElementById('sexm').checked) {
                    // console.log('masculino');
                    radioB = true;
                } else if (document.getElementById('sexf').checked) {
                    // console.log('femenino');
                    radioB = true;
                }
            }
            // console.log(radioB);

            for (var i = 1; i < checkbox.length; i++) {
                var rol = 'rol' + [i];
                if (document.getElementById(rol).checked) {
                    // console.log('si');
                    checkedes = true;
                }
            }


            if (radioB == false) {
                document.getElementById('descripcion_sex').classList.remove('msj');
                document.getElementById('descripcion_sex').classList.add('msj-activo');
            }

            if (checkedes == false) {
                document.getElementById('descripcion_rol').classList.remove('msj');
                document.getElementById('descripcion_rol').classList.add('msj-activo');
            }

            if (selec == 0) {
                document.getElementById('descripcion_area').classList.remove('msj');
                document.getElementById('descripcion_area').classList.add('msj-activo');
            }

            if (descrip == "") {

                document.getElementById('descripcion_descripcion').classList.add('msj-activo');
                document.getElementById('descripcion').classList.add('fallido');
                document.getElementById('descripcion_descripcion').classList.remove('msj');
            }

            if (nom == "") {

                var newdescripcion = document.getElementById('descripcion_text');
                newdescripcion.innerHTML = "<p>Error el campo nombre y Correo no pueden estar vacios</p>";

                document.getElementById('descripcion_text').classList.add('msj-activo');
                document.getElementById('nombre').classList.add('fallido');
                document.getElementById('descripcion_text').classList.remove('msj');
            }

            if (mail == "") {

                var newdescripcion = document.getElementById('descripcion_text');
                newdescripcion.innerHTML = "<p>Error el campo nombre y Correo no pueden estar vacios</p>";

                document.getElementById('descripcion_text').classList.add('msj-activo');
                document.getElementById('email').classList.add('fallido');
                document.getElementById('descripcion_text').classList.remove('msj');
            }

            if (radioB == false || checkedes == false || selec == 0 || descrip == "" || nom == "" || mail == "") {

                console.log('no seleccionado')
                event.preventDefault();

            } else {
                console.log('formulario rellenado completo')
                // console.log(event);
            }

        });


        // inputs.forEach((input) => {
        // input.addEventListener('keyup', validarFormulario);
        // input.addEventListener('keyup', () =>{
        // console.log('prueba');
        // });
        // input.addEventListener('blur', validarFormulario);

        // });
    </script>
@endsection