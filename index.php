<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="global/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/values.js"></script>
    <script src="js/prueba.js"></script>
    <title>Registro</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">APP</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Registro<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="public/config.html">Configuarar formulario</a>
                </li>
               
            </ul>
        </div>
    </nav>
    <!-- archivo modificado -->

    <section>
        <form action="">
            <div class="form-row">
                <div class="form-group col" id="nombreGrup">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name= "nombre " id="nombre" placeholder="Nombre">
                </div>
                <div class="form-group col" id="apellidoGrup">
                    <label for="apellido">Apellido</label>
                    <input type="text" class="form-control" name= "apellido " id="apellido" placeholder="Apellido">
                </div>
            </div>

            <div class="form-group" id="cedulaGrup">
                <label for="cedula">Cedula</label>
                <input type="text" class="form-control" name= "cedula " id="cedula" placeholder="Cedula">
            </div>

            <div class="form-group" id="fechaNacGrup">
                <label for="fechaNac">Fecha de nacimiento</label>
                <input type="date" class="form-control" name= "fecha " id="fechaNac">
            </div>

            <div class="form-group" id="correoGrup">
                <label for="correo">Email</label>
                <input type="email" class="form-control" name= " email" id="correo" placeholder="nombre@ejemplo.com">
            </div>

            <div class="form-group" id="nameUserGrup">
                <label for="username">Nombre de usuario</label>
                <input type="text" class="form-control" name= "nomUser" id="username" placeholder="Nombre de usuario">
            </div>

            <div class="form-group" id="telefonoGrup">
                <label for="telefono">Telefono</label>
                <input type="text" class="form-control" name= "telefono" id="telefono" placeholder="Telefono">
            </div>

            <div class="form-group" id="celularGrup">
                <label for="celular">Celular</label>
                <input type="text" class="form-control" name= "celular" id="celular" placeholder="Celular">
            </div>

            <div class="form-row">
                <div class="form-group col" id="direccionGrup">
                    <label for="direccion">Direccion</label>
                    <input type="text" class="form-control" name= "direccion" id="direccion" placeholder="Direccion">
                </div>
                <div class="form-group col" id="dereccion1Grup">
                    <label for="direccion2">Direccion 2</label>
                    <input type="text" class="form-control" name= "direccion2" id="direccion2" placeholder="Direccion 2">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col" id="ciudadGrup">
                    <label for="ciudad">Ciudad</label>
                    <input type="text" class="form-control" name= "ciudad" id="ciudad" placeholder="Ciudad">
                </div>
                <div class="form-group col" id="provinciaGrup">
                    <label for="provincia">Provincia</label>
                    <input type="text" class="form-control" name= "provincia" id="provincia" placeholder="Provincia">
                </div>
                <div class="form-group col" id="codPosGrup">
                    <label for="codPost">Codigo Postal</label>
                    <input type="text" class="form-control" name= "codigoPos" id="codPost" placeholder="Codigo Postal">
                </div>
            </div>

            <div class="form-group" id="sexoGrup">
                <label for="cedula">Sexo</label>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio1" name="customRadio" id="customRadio"  class="custom-control-input">
                    <label class="custom-control-label" for="customRadio1">Hombre</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="customRadio2" name="customRadio" id="customRadio1" class="custom-control-input">
                    <label class="custom-control-label" for="customRadio2">Mujer</label>
                </div>

            </div>

            <div class="form-row">
                <div class="formGrup col" id="estadoCivilGrup">
                    <label for="estadoCivil">Estado civil</label>
                    <select id="estadoCivil" class="form-control">
                        <option selected>Soltero</option>
                        <option>Casado</option>
                        <option>Divorciado</option>
                        <option>Otro</option>
                    </select>
                </div>

                <div class="form-group col" id="numeroHijosGrup">
                    <label for="hijosNum">Numero de hijos</label>
                    <input type="number" class="form-control" name= "numHijos" id="hijosNum" min="0" value="0">
                </div>

                <div class="form-group col" id="tipoSangGrup">
                    <label for="sangreTipo">Tipo de sangre</label>
                    <input type="text" class="form-control" name= "tipoSangre" id="sangreTipo" placeholder="Tipo de sangre">
                </div>
            </div>

            <div class="btns">
                <button type="button" class="btn btn-warning" onclick="location.href='public/config.html'">Configurar
                    formulario</button>
                <button type="submit" class="btn btn-primary" onclick=datos()>Registrar</button>
            </div>


        </form>
    </section>
    <script>
        var d = document;
        //console.log("la vriable es " + JSON.parse(sessionStorage.getItem('nombreGrup')))
        if (JSON.parse(sessionStorage.getItem('nombreGrup'))) {
            d.getElementById("nombreGrup").style.display = "block";
            //console.log("es true")
        } else {
            d.getElementById("nombreGrup").style.display = "none";
            //console.log("hola es falso")
        }

        if (JSON.parse(sessionStorage.getItem('apellidoGrup'))) {
            d.getElementById("apellidoGrup").style.display = "block";
        } else {
            d.getElementById("apellidoGrup").style.display = "none";
        }

        if (JSON.parse(sessionStorage.getItem('cedulaGrup'))) {
            d.getElementById("cedulaGrup").style.display = "block";
        } else {
            d.getElementById("cedulaGrup").style.display = "none";
        }

        if (JSON.parse(sessionStorage.getItem('fechaNacGrup'))) {
            d.getElementById("fechaNacGrup").style.display = "block";
        } else {
            d.getElementById("fechaNacGrup").style.display = "none";
        }

        if (JSON.parse(sessionStorage.getItem('correoGrup'))) {
            d.getElementById("correoGrup").style.display = "block";
        } else {
            d.getElementById("correoGrup").style.display = "none";
        }

        if (JSON.parse(sessionStorage.getItem('nameUserGrup'))) {
            d.getElementById("nameUserGrup").style.display = "block";
        } else {
            d.getElementById("nameUserGrup").style.display = "none";
        }

        if (JSON.parse(sessionStorage.getItem('telefonoGrup'))) {
            d.getElementById("telefonoGrup").style.display = "block";
        } else {
            d.getElementById("telefonoGrup").style.display = "none";
        }

        if (JSON.parse(sessionStorage.getItem('celularGrup'))) {
            d.getElementById("celularGrup").style.display = "block";
        } else {
            d.getElementById("celularGrup").style.display = "none";
        }

        if (JSON.parse(sessionStorage.getItem('direccionGrup'))) {
            d.getElementById("direccionGrup").style.display = "block";
        } else {
            d.getElementById("direccionGrup").style.display = "none";
        }

        if (JSON.parse(sessionStorage.getItem('dereccion1Grup'))) {
            d.getElementById("dereccion1Grup").style.display = "block";
        } else {
            d.getElementById("dereccion1Grup").style.display = "none";
        }

        if (JSON.parse(sessionStorage.getItem('ciudadGrup'))) {
            d.getElementById("ciudadGrup").style.display = "block";
        } else {
            d.getElementById("ciudadGrup").style.display = "none";
        }

        if (JSON.parse(sessionStorage.getItem('provinciaGrup'))) {
            d.getElementById("provinciaGrup").style.display = "block";
        } else {
            d.getElementById("provinciaGrup").style.display = "none";
        }

        if (JSON.parse(sessionStorage.getItem('codPosGrup'))) {
            d.getElementById("codPosGrup").style.display = "block";
        } else {
            d.getElementById("codPosGrup").style.display = "none";
        }

        if (JSON.parse(sessionStorage.getItem('sexoGrup'))) {
            d.getElementById("sexoGrup").style.display = "block";
        } else {
            d.getElementById("sexoGrup").style.display = "none";
        }

        if (JSON.parse(sessionStorage.getItem('estadoCivilGrup'))) {
            d.getElementById("estadoCivilGrup").style.display = "block";
        } else {
            d.getElementById("estadoCivilGrup").style.display = "none";
        }

        if (JSON.parse(sessionStorage.getItem('numeroHijosGrup'))) {
            d.getElementById("numeroHijosGrup").style.display = "block";
        } else {
            d.getElementById("numeroHijosGrup").style.display = "none";
        }

        if (JSON.parse(sessionStorage.getItem('tipoSangGrup'))) {
            d.getElementById("tipoSangGrup").style.display = "block";
        } else {
            d.getElementById("tipoSangGrup").style.display = "none";
        }
    </script>
</body>

</html>