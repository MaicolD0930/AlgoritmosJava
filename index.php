<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Algoritmos</title>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="Estilos.css">
</head>

<body>

    <ul>
        <li><a id="Ej1" href="#">Ejercicio N.1</a></li>
        <li><a id="Ej2" href="#">Ejercicio N.2</a></li>
        <li><a id="Ej3" href="#">Ejercicio N.3</a></li>
        <li><a id="Ej4" href="#">Ejercicio N.4</a></li>
        <li><a id="Ej5" href="#">Ejercicio N.5</a></li>
        <li><a id="Ej6" href="#">Enseñar todos</a></li>
    </ul>

    <!-- Ejercicio N.1 -->
    <div class="container" id="Ejj1">
        <section class="main row">
            <article class="col-md-8" id="ejerci1">
                <h3>1.Determinar el área de un triángulo</h3>
                <label>Ingrese la base y altura del triangulo.</label>
                <button class="OcBtn" id="MostrarInv1">?</button>
                <button class="OmBtn" id="OcultarInv1">X</button>
                <p id="Inv1">(Tenga en cuenta que para determinar el área de un triangulo la formula base es: Base x
                    Altura dividida 2)</p>
                <p></p>
                <input class="formularioIp" type="number" id="base" placeholder="Ingrese la base">
                <input class="formularioIp" type="number" id="altura" placeholder="Ingrese la altura">
                <button class="BtnNormal" onclick="area()">Calcular área</button>
                <br><br>
                <label>Área: </label>
                <div id="areaResultado"></div>
            </article>

            <aside class="col-md-4">
                <img src="imagenes/Imagen5.jpg" width="360" height="230">
            </aside>
        </section>
    </div>

    <p></p>

    <!-- Ejercicio N.2 -->
    <div class="container" id="Ejj2">
        <section class="main2 row">
            <article class="col-md-8">
                <h3>2.Determinar el numero mayor entre 3 imputs</h3>
                <label>Ingrese 3 numeros enteros para determinar el mayor de estos.</label>
                <button class="OcBtn1" id="MostrarInv2">?</button>
                <button class="OmBtn1" id="OcultarInv2">X</button>
                <p id="Inv2">(Tenga en cuenta que los números a ingresar deben ser enteros.)</p>
                <p></p>
                <input class="formularioIp" type="number" id="numero1" placeholder="Ingrese primer numero">
                <input class="formularioIp" type="number" id="numero2" placeholder="Ingrese segundo numero">
                <br></br>
                <input class="formularioIp" type="number" id="numero3" placeholder="Ingrese tercer numero">

                <button class="BtnNormal" onclick="Valor()">Determinar numero mayor</button>
                <p></p>
                <label>El numero Mayor es: </label>
                <div id="NumeroM"></div>
            </article>

            <aside class="col-md-4">
                <img src="imagenes/Imagen4.jpg" width="360" height="230">
            </aside>
        </section>
    </div>

    <p></p>



    <!-- Ejercicio N.3 -->
    <div class="container" id="Ejj3">
        <section class="main row">
            <article class="col-md-8">
                <h3>3.Definir que tipo de triangulo es por medio de sus medidas</h3>
                <label>Ingrese los tres lados del triangulo.</label>
                <button class="OcBtn" id="MostrarInv3">?</button>
                <button class="OmBtn" id="OcultarInv3">X</button>
                <p id="Inv3">(El triángulo equilátero se caracteriza por tener todos sus lados iguales. El triángulo
                    isósceles tiene dos lados iguales y un lado desigual. El triángulo escaleno tiene todos sus lados
                    con diferentes longitudes.)</p>
                <p></p>
                <input class="formularioIp" type="number" id="ladoa" placeholder="Ingrese lado A">
                <input class="formularioIp" type="number" id="ladob" placeholder="Ingrese lado B">
                <p></p>
                <input class="formularioIp" type="number" id="ladoc" placeholder="Ingrese lado C">
                <button class="BtnNormal" onclick="triangulo()">Definir el tipo de triangulo</button>
                <br><br>
                <label>Triangulo: </label>
                <div id="Ttriangulo">
                </div>
            </article>

            <aside class="col-md-4">
                <img id="T4" src="imagenes/Imagen3.png" width="360" height="290">
                <img id="T1" src="imagenes/T1.jpg" width="360" height="290">
                <img id="T2" src="imagenes/T2.png" width="360" height="290">
                <img id="T3" src="imagenes/T3.jpg" width="360" height="290">
            </aside>
        </section>
    </div>

    <p></p>



    <!-- Ejercicio N.4 -->
    <div class="container" id="Ejj4">
        <section class="main2 row">
            <article class="col-md-8">
                <h3>4.Definir si es numero primo</h3>
                <label>Ingrese un número.</label>
                <button class="OcBtn1" id="MostrarInv4">?</button>
                <button class="OmBtn1" id="OcultarInv4">X</button>
                <p id="Inv4">(Los números primos son aquellos números naturales que solamente se pueden dividir por sí
                    mismos y por 1)</p>
                <p></p>
                <input class="formularioIp" type="number" id="numero" placeholder="Ingrese un número">

                <button class="BtnNormal" onclick="primoo()">Determinar número</button>
                <br></br>
                <label>Numero primo: </label>
                <div id="nnPrimo">
                </div>
            </article>

            <aside class="col-md-4">
                <img src="imagenes/Imagen2.png" width="360" height="220">
            </aside>
        </section>
    </div>

    <p></p>


    <!-- Ejercicio N.5 -->
    <div class="container" id="Ejj5">
        <section class="main row">
            <article class="col-md-8">

                <h3>5.Determinar salario de un trabajador</h3>
                <label>Ingrese la cantidad de horas que trabajo en el mes.</label>
                <button class="OcBtn" id="MostrarInv5">?</button>
                <button class="OmBtn" id="OcultarInv5">X</button>
                <p id="Inv5">(Tenga en cuenta que esta establecido que un mes cuenta con 30 días, y 255 horas de
                    trabajo, cada hora extra se pagara un 25% mas.)</p>
                <p></p>
                <input class="formularioIp" type="float" id="horas" placeholder="Ingrese horas trabajadas">
                <button class="BtnNormal" onclick="Hextra()">Determinar pago del mes</button>
                <p></p>
                <label>Su pago es: </label>
                <div id="Hextraa"></div>
            </article>
            <aside class="col-md-4">
                <p>
                    <img src="imagenes/Imagen1.jpg" width="360" height="200">
                </p>
            </aside>

        </section>
    </div>

    <script src="js/jquery.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="Jv.js"></script>
</body>

</html>