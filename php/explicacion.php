<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="../css/explicacion4.css">
    </head>
    <body>
        <header>
            <section id="encabezado">
                <div class="box">
                    <H1 class="titulo">
                        INTELIGENCIA ARTIFICIAL
                    </H1>
                    <H1 class="titulo">
                        REDES NEURONALES ARTIFICIALES RNA PERCEPTRON
                    </H1>
                </div>
            </section>
        </header>

        <section class="principal">
            <section class="cuerpo1">
                <div id="titulo_tabla">
                  <h1>TABLA DE COMPARACIONES</h1>
                </div>
                <div id="cuerpo_tabla">
                <table>
                <th>PRIMERA COMPARACION</th>
                    <tr>
                    <td><div id="img9"></div></td>
                    </tr>
                    <tr>
                    <td><div id="img10"></div></td>
                    </tr>
                    <th><P>SEGUNDA COMPARACION</P></th>
                    <tr>
                    <td><div id="img1"></div></td>
                    </tr>
                    <tr>
                    <td><div id="img2"></div></td>
                    </tr>
                    <th>TERCERA COMPARACION</th>
                    <tr>
                    <td><div id="img3"></div></td>
                    </tr>
                    <tr>
                    <td><div id="img4"></div></td>
                    </tr>
                    <th>CUARTA COMPARACION</th>
                    <tr>
                    <td><div id="img5"></div></td>
                    </tr>
                    <tr>
                    <td><div id="img6"></div></td>
                    </tr>
                    <th>QUINTA COMPARACION</th>
                    <tr>
                    <td><div id="img7"></div></td>
                    </tr>
                    <tr>
                    <td><div id="img8"></div></td>
                    </tr>
                    
                    
                </table>
                </div>
            </section>
            <section class="cuerpo2">
                
                <div id="cuerpo_perceptron">
                
                <iframe width="620" height="300" src="../explicacion/explicacion.mp4" title="YouTube video player" frameborder="1" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                 
                
                </div>
               
                <div id="comprobacion">
                  <div>
                  <h4>1 paso: Identificamos la compuerta a utilizar y el orden de los patrones </h4>
                  <h5>ENTRADAS-->[x1] [x2], SALIDA --> [Q]</h5>
                  <h5>PATRON 1=-> [1] y [1]=[1]</h5>
                  <h5>PATRON 2=-> [1] y [0]=[0]</h5>
                  <h5>PATRON 3=-> [0] y [1]=[0]</h5>
                  <h5>PATRON 4=-> [0] y [0]=[0]</h5>
                     <h4>2 paso: Colocamos las entradas X1 Y X2 DEL PRIMER PATRON <p> Nota: Los calculos aleatorios se deben realizar solo en la primera iteracion</p></h4>
                        <h5>x1 = "1"</h5>
                        <h5>x2 = "1"</h5>
                    <h4>3 paso: Calculamos los los pesos P1 y P2 con valores aleatorios <p> Nota: Los calculos aleatorios se deben realizar solo en la primera iteracion</p></h4>
                        <h5>P1 = "Valor aleatorio entre -1 y 1"</h5>
                        <h5>P2 = "Valor aleatorio entre -1 y 1"</h5>
                    <h4>4 paso: Calculamos el valor del umbral de forma aleatoria <p> Nota: Este calculo aleatorio se debe realizar solo en la primera iteracion</p></h4>
                        <h5>∅ = "Valor aleatorio entre -1 y 1"</h5>
                    <h4>5 paso: Colocamos la salida esperada </h4>
                        <h5>D = "[1]"</h5>
                    <h4>6 paso: Calculamos el valor de y </h4>
                        <h5>y=((p1*x1)+(p2*x2))-∅</h5>
                    <h4>7 paso: Calculamos el valor de f(x) <p> Nota: Realizamos una condicion</p></h4>
                        <h5>si el resultado de y es mayor o igual a cero entonces el valor de fx =1</h5>
                        <h5>si el resultado de y es menor a cero entonces el valor de fx =0</h5>
                    <h4>8 paso: en la primera iteracion Calculamos el valor del coeficiente de aprendizaje <p> Nota: este calculo aleatorios se deben realizar solo en la primera iteracion</p></h4>
                        <h5>ⴄ = "Valor aleatorio entre 0 y 1"</h5>
                    <h4>8 paso: calculamos el valor del error</h4>
                        <h5>δ=d-f(x)</h5>
                    <h4>9 paso: calculamos el valor de delta 1</h4>
                        <h5>Δ1=ⴄ*δ*x1</h5>
                    <h4>10 paso: calculamos el valor de delta 2</h4>
                        <h5>Δ2=ⴄ*δ*x2</h5>
                    <h4>11 paso: calculamos el valor del nuevo peso 1</h4>
                        <h5>p1+=Δ1+p1</h5>
                    <h4>12 paso: calculamos el valor del nuevo peso 2</h4>
                        <h5>p2+=Δ2+p2</h5>
                    <h4>13 paso: calculamos el valor del nuevo umbral</h4>
                        <h5>∅+ = ∅ -(ⴄ*δ)</h5>
                    <h4>14 paso: colocamos el valor de la iteracion</h4>
                        <h5>iteracion = 1</h5>
                    <h4>________________________________________________________________________________________________________________</h4>
                    
                    <h4>NOTA: si el valor del error es igual a cero entonces podemos continuar con el siguiente patron</h4>
                    <h4>Si el error es diferente de cero debemos realizar todo el procedimiento desde el patron 1</h4>  
                    <h4>A partir de aqui los valores de los pesos y el umbral son los ultimos que encontramos en la iteracion anterior</h4>
                        <h5>p1 = p1+</h5>
                        <h5>p2 = p2+</h5>
                        <h5>∅ = ∅+ </h5>
                    <h4>El coeficiente de aprendizaje va ser el mismo hasta que completemos el perceptron</h4>
                    <h4>________________________________________________________________________________________________________________</h4>
                    <h4>Si aun tienes dudas te invitamos a ver el video donde explicamos de forma detallada como realizar un perceptron simple</h4>  
                </div>
                </div>

                <div id="botones">
                <a href="index1.php"type="buton"class="btn btn-primary">VOLVER AL INICIO</a>
                <a href="prueba.php"type="buton"class="btn btn-primary">IR A LA COMPARACION</a>
               
               
             </section> 
        </section>
       
        <footer>
            <section id="final">
            <div id="final1">
        
            </div>
            <div id="final2">
              
            </div>
            <div id="final2">
               
            </div>
            <div id="final1">
               
            </div>
            </section>
        </footer>
    </body>
   
</html>




<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
