  //Ejercicio1
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

//Ejercicio2
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

//Ejercicio3
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
            $('#T1').show();   
            $('#T2').hide();
            $('#T3').hide();
            $('#T4').hide();


    }else{
        if(aa==bb || aa==cc || bb==cc){
            Ttriangulo.innerHTML = "Es un triangulo Isósceles";
            $('#T1').hide();   
            $('#T2').show();
            $('#T3').hide();
            $('#T4').hide();
        }else{
            Ttriangulo.innerHTML = "Es un triangulo Escaleno";
            $('#T1').hide();   
            $('#T2').hide();
            $('#T3').show();
            $('#T4').hide();
        }
    }}}

//Ejercicio4

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

    //Ejercicio5
  function Hextra(){
   var Hextraa = document.getElementById("Hextraa");
   var Horasp = parseFloat(document.getElementById("horas").value);
    var pagoo, hhex, p1;
    
    if(isNaN(Horasp)){
    alert("No puedes dejar el campo vacio!");
   }else{

    if(Horasp>255.0){

        p1= ((((Horasp*6666.666666666667)-1700000))*25)/100;
        pagoo=6666.666666666667+p1;
        pagoo=1700000+pagoo;
        Hextraa.innerHTML = "su pago es: "+pagoo;
    }else{
        pagoo= (Horasp*6666.666666666667);
        Hextraa.innerHTML = "su pago es: "+pagoo;
    }}}