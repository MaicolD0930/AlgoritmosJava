<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <title>Algoritmos</title>
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

</head>
<body >
<style>
 body {
    height: 800px;
    background-image: url("https://p4.wallpaperbetter.com/wallpaper/238/702/429/abstract-texture-hd-4k-wallpaper-preview.jpg");
    background-size: cover;
    background-repeat: no-repeat;

  }

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  
}

li a:hover {
  background-color: #111;
}




header{
    background:rgb(10, 10, 10);
    color: rgb(243, 236, 236);
}
.main{
    background:rgb(128, 128, 143);
    color: black;
}
.main2{
    background:rgb(128, 128, 160);
    color: black;
}
aside{
    background:rgb(58, 50, 58);
    color: black;
}
.formularioIp{
 
    background:rgb(220, 220, 228);
    border: 3px Solid transparent;
    border-radius: 3px;
    height: 32px;

}
.BtnNormal {
  display: inline-block;
  padding: 5px 5px;
  font-size: 13px;
  cursor: pointer;
  text-align: center;	
  outline: none;
  color: #fff;
  background-color: rgb(57, 57, 233);
  border: 3px Solid transparent;
  border-radius: 3px;

}
.BtnNormal:active {
  background-color: blue;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
.oculto{
    display:none;
}
.OcBtn{
    background-color: rgb(128, 128, 143);
    border-radius: 4px;
    color: white;
    border: 2px solid black;
    width: 40px;
}
.OcBtn:hover {
    background-color: black;
    color: white;
}
.OcBtn1{
    background-color: rgb(128, 128, 160);
    border-radius: 4px;
    color: white;
    border: 2px solid black;
    width: 40px;
}
.OcBtn1:hover {
    background-color: black;
    color: white;
}
.OmBtn{
    background-color: rgb(128, 128, 143);
    border-radius: 4px;
    color: red;
    border: 2px solid black;
    width: 40px;
}
.OmBtn:hover {
    background-color: black;
    color: red;
}
.OmBtn1{
    background-color: rgb(128, 128, 160);
    border-radius: 4px;
    color: red;
    border: 2px solid black;
    width: 40px;
}
.OmBtn1:hover {
    background-color: black;
    color: red;
}



</style>
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
    <article class="col-md-8">
    <h3>1.Determinar el área de un triángulo</h3>
    <label>Ingrese la base y altura del triangulo.</label>
    <button class="OcBtn" id="MostrarInv1">?</button>
    <button class="OmBtn" id="OcultarInv1">X</button>
    <p id="Inv1">(Tenga en cuenta que para determinar el área de un triangulo la formula 
        base es: Base x Altura dividida 2)</p>
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

<script>
  function area(){
   var areaResultado = document.getElementById("areaResultado");
   var b = parseInt(document.getElementById("base").value);
   var h = parseInt(document.getElementById("altura").value);

   if(isNaN(b) && isNaN(h) || isNaN(b) || isNaN(h)){
    alert("No puedes dejar ningun campo vacio!");
   }else{
   var area = (b * h) / 2;
   areaResultado.innerHTML = "" + area;
}

  }
 </script>


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
<script>
  function Valor(){


   var NumeroM = document.getElementById("NumeroM");
   var n1 = parseInt(document.getElementById("numero1").value);
   var n2 = parseInt(document.getElementById("numero2").value);
   var n3 = parseInt(document.getElementById("numero3").value);
   let NumeroMayor;

   console.log(n1);
   console.log(n2);
   console.log(n3);


   if(isNaN(n1) && isNaN(n2) && isNaN(n2) || isNaN(n1) && isNaN(n2) ||isNaN(n1) && isNaN(n3) || isNaN(n3) && isNaN(n2) || isNaN(n1) || isNaN(n2) || isNaN(n3)){
    alert("No puedes dejar ningun campo vacio!");
   }else{

    if (n1 == n2 && n1 == n3){
    NumeroM.innerHTML = "Todos los numeros son iguales: " + n1;
   }
   else{
       if(n1==n2){
            if(n1>n3){
                NumeroM.innerHTML = "El primer y segundo numero son iguales y mayores que el tercero, por lo tanto el mayor es: " + n1;
            }else{
                NumeroM.innerHTML = "El primer y segundo numero son iguales y menores que el tercero, por lo tanto el mayor es: " + n3;
            }}}
            if(n1==n3 && n1!=n2){
            if(n1>n2){
                NumeroM.innerHTML = "El primer y tercer numero son iguales y mayores que el segundo, por lo tanto el mayor es: " + n1;
            }else{
                NumeroM.innerHTML = "El primer y tercer numero son iguales y menores que el segundo, por lo tanto el mayor es: " + n2;
            }}
            else{
    if(n2==n3 && n2!=n1){
            if(n2>n1){
                NumeroM.innerHTML = "El segundo y tercer numero son iguales y mayores que el primero, por lo tanto el mayor es: " + n2;
            }else{
                NumeroM.innerHTML = "El segundo y tercer numero son iguales y menores que el primero, por lo tanto el mayor es: " + n1;
            }}

    if(n1!=n2 && n1!=n3 && n2!=n3 && n1>n2 ){
        NumeroMayor=n1;
            if(NumeroMayor>n3){
            NumeroM.innerHTML = "El numero mayores es: " + NumeroMayor;
            }else{
            if(n1!=n2 && n1!=n3 && n2!=n3 && n3>NumeroMayor ){
            NumeroM.innerHTML = "El numero mayores es: " + n3;}}
    }else{
    if(n1!=n2 && n1!=n3 && n2!=n3 && n2>n1 ){
        NumeroMayor=n2;
            if(NumeroMayor>n3){
            NumeroM.innerHTML = "El numero mayores es: " + NumeroMayor;
            }else{
            if(n1!=n2 && n1!=n3 && n2!=n3 && n3>NumeroMayor ){
            NumeroM.innerHTML = "El numero mayores es: " + n3;}}
       }
       
       }

 }

   }

}
</script>



<p></p>



<!-- Ejercicio N.3 -->
<div class="container" id="Ejj3">
<section class="main row">
    <article class="col-md-8">
    <h3>3.Definir que tipo de triangulo es por medio de sus medidas</h3>
    <label>Ingrese los tres lados del triangulo.</label>
    <button class="OcBtn" id="MostrarInv3">?</button>
    <button class="OmBtn" id="OcultarInv3">X</button>
    <p id="Inv3">(El triángulo equilátero se caracteriza por tener todos sus lados iguales. El triángulo isósceles tiene dos lados iguales y un lado desigual. El triángulo escaleno tiene todos sus lados con diferentes longitudes.)</p>
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
    <img src="imagenes/Imagen3.png" width="360" height="290"> 
    </aside>
</section>
</div>
<script>
  function triangulo(){
   var Ttriangulo = document.getElementById("Ttriangulo");
   var aa = parseInt(document.getElementById("ladoa").value);
   var bb = parseInt(document.getElementById("ladob").value);
   var cc = parseInt(document.getElementById("ladoc").value);

   if(isNaN(aa) && isNaN(bb) && isNaN(cc) || isNaN(aa) && isNaN(bb) ||isNaN(aa) && isNaN(cc) || isNaN(cc) && isNaN(bb) || isNaN(aa) || isNaN(cc) || isNaN(bb)){
    alert("No puedes dejar ningun campo vacio!");
   }else{



    if(aa==bb && aa==cc){
        Ttriangulo.innerHTML = "Es un triangulo Equilátero";
    }else{
        if(aa==bb || aa==cc || bb==cc){
            Ttriangulo.innerHTML = "Es un triangulo Isósceles";
        }else{
            Ttriangulo.innerHTML = "Es un triangulo Escaleno";
        }
    }}}
 </script>



<p></p>



<!-- Ejercicio N.4 -->
<div class="container" id="Ejj4">
<section class="main2 row">
    <article class="col-md-8">
    <h3>4.Definir si es numero primo</h3>
    <label>Ingrese un número.</label>
    <button class="OcBtn1" id="MostrarInv4">?</button>
    <button class="OmBtn1" id="OcultarInv4">X</button>
<p id="Inv4">(Los números primos son aquellos números naturales que solamente se pueden dividir por sí mismos y por 1)</p>
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

<script>
  function primoo(){
    var nnPrimo = document.getElementById("nnPrimo");
   var numerop = parseInt(document.getElementById("numero").value);
    
    let pp=0;

    if(isNaN(numerop)){
    alert("No puedes dejar el campo vacio!");
   }else{

   if(numerop==0 || numerop==1 || numerop==4){
        nnPrimo.innerHTML = "El numero "+numerop+ " no es primo";
    }else {  
    for(let i = 2; i<numerop/2; i++){
        if(numerop % i ==0){
            pp=1;           
        }}
    if(pp==1){
        nnPrimo.innerHTML = "El numero "+numerop+ " no es primo";
    }else{
        nnPrimo.innerHTML = "El numero "+numerop+ " es primo";
    }}}}
 </script>

<p></p>


<!-- Ejercicio N.5 -->
<div class="container" id="Ejj5">
<section class="main row">
    <article class="col-md-8">

    <h3>5.Determinar salario de un trabajador</h3>
    <label>Ingrese la cantidad de horas que trabajo en el mes.</label>
    <button class="OcBtn" id="MostrarInv5">?</button>
    <button class="OmBtn" id="OcultarInv5">X</button>
    <p id="Inv5">(Tenga en cuenta que esta establecido que un mes cuenta con 30 días, y 255 horas de trabajo, cada hora extra se pagara un 25% mas.)</p>
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

<script>
  function Hextra(){
   var Hextraa = document.getElementById("Hextraa");
   var Horasp = parseFloat(document.getElementById("horas").value);
    var pagoo, hhex, p1;
    
    if(isNaN(Horasp)){
    alert("No puedes dejar el campo vacio!");
   }else{

    if(Horasp>255.0){

        p1= ((((Horasp*6666.666666666667)-1700000))*25)/100;
        pagoo=1700000+p1;
        Hextraa.innerHTML = "su pago es: "+pagoo;
    }else{
        pagoo= (Horasp*6666.666666666667);
        Hextraa.innerHTML = "su pago es: "+pagoo;
    }}}
 </script>


<script src="js/jquery.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>


<script>
$(document).ready(() => {

        //Mostrar Ejercicio1
        $('#Ejj1').hide();
        $('#Ej1').click(function() {
            $('#Ejj1').show();   
            $('#Ejj2').hide();
            $('#Ejj3').hide();
            $('#Ejj4').hide();
            $('#Ejj5').hide(); 
        });
        //Mostrar Ejercicio2
        $('#Ejj2').hide();
        $('#Ej2').click(function() {
            $('#Ejj2').show();

            $('#Ejj1').hide();
            $('#Ejj3').hide();
            $('#Ejj4').hide();
            $('#Ejj5').hide();     
        });
        //Mostrar Ejercicio3
        $('#Ejj3').hide();
        $('#Ej3').click(function() {
            $('#Ejj3').show();

            $('#Ejj2').hide();
            $('#Ejj1').hide();
            $('#Ejj4').hide();
            $('#Ejj5').hide();     
        });
        //Mostrar Ejercicio4
        $('#Ejj4').hide();
        $('#Ej4').click(function() {
            $('#Ejj4').show();  

            $('#Ejj2').hide();
            $('#Ejj3').hide();
            $('#Ejj1').hide();
            $('#Ejj5').hide();     
        });
        //Mostrar Ejercicio5
        $('#Ejj5').hide();
        $('#Ej5').click(function() {
            $('#Ejj5').show();      

            $('#Ejj2').hide();
            $('#Ejj3').hide();
            $('#Ejj4').hide();
            $('#Ejj1').hide(); 
        });
        //Mostrar Todos
        $('#Ej6').click(function() {
            $('#Ejj1').show();      
            $('#Ejj2').show();
            $('#Ejj3').show();
            $('#Ejj4').show();
            $('#Ejj5').show(); 
        });



        $('#Inv1').hide();
        $('#Inv2').hide();
        $('#Inv3').hide();
        $('#Inv4').hide();
        $('#Inv5').hide();
        $('#OcultarInv1').hide();
        $('#OcultarInv2').hide();
        $('#OcultarInv3').hide();
        $('#OcultarInv4').hide();
        $('#OcultarInv5').hide();

        $('#MostrarInv1').click(function() {
            $('#MostrarInv1').hide();  
            $('#OcultarInv1').show();      
        });
        $('#OcultarInv1').click(function() {
            $('#MostrarInv1').show();  
            $('#OcultarInv1').hide();      
        });

        $('#MostrarInv2').click(function() {
            $('#MostrarInv2').hide();  
            $('#OcultarInv2').show();      
        });
        $('#OcultarInv2').click(function() {
            $('#MostrarInv2').show();  
            $('#OcultarInv2').hide();      
        });

        $('#MostrarInv3').click(function() {
            $('#MostrarInv3').hide();  
            $('#OcultarInv3').show();      
        });
        $('#OcultarInv3').click(function() {
            $('#MostrarInv3').show();  
            $('#OcultarInv3').hide();      
        });
        $('#MostrarInv4').click(function() {
            $('#MostrarInv4').hide();  
            $('#OcultarInv4').show();      
        });
        $('#OcultarInv4').click(function() {
            $('#MostrarInv4').show();  
            $('#OcultarInv4').hide();      
        });
        $('#MostrarInv5').click(function() {
            $('#MostrarInv5').hide();  
            $('#OcultarInv5').show();      
        });
        $('#OcultarInv5').click(function() {
            $('#MostrarInv5').show();  
            $('#OcultarInv5').hide();      
        });





        $('#OcultarInv1').click(function() {
            $('#Inv1').hide();      
        });
        $('#OcultarInv2').click(function() {
            $('#Inv2').hide();      
        });
        $('#OcultarInv3').click(function() {
            $('#Inv3').hide();
        });
        $('#OcultarInv4').click(function() {
            $('#Inv4').hide();
        });
        $('#OcultarInv5').click(function() {
            $('#Inv5').hide();
        });


        $('#MostrarInv1').click(function() {
            $('#Inv1').show();      
        });
        $('#MostrarInv2').click(function() {
            $('#Inv2').show();      
        });
        $('#MostrarInv3').click(function() {
            $('#Inv3').show();
        });
        $('#MostrarInv4').click(function() {
            $('#Inv4').show();
        });
        $('#MostrarInv5').click(function() {
            $('#Inv5').show();
        });


    });
</script>
</body>
</html>