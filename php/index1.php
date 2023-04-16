<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
   

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <link rel="stylesheet" type="text/css" href="../css/index1.css">

</head>

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

 <section id="container2" >
    <div class="wrapper">
        <div class="card">
            <img id="img1" src="../imagenes/COMPUERTA AND.jpg">
                <div class="info">
                    <h1>COMPUERTA AND</h1>
                    <p>
                    La compuerta AND es una puerta lógica digital que implementa la conjunción lógica,
                    se comporta de acuerdo a la tabla de verdad mostrada a la derecha; esta tendrá una salida ALTA, 
                    únicamente cuando los valores de ambas entradas sean ALTOS.
                    </p>
                     <a href="#ventana1" class="btn btn-primary btn-lg" data-toggle="modal">LEER MAS</a>
                     
                </div>
                
        </div>
      

                   
        <div class="card">
              <img id="img1" src="../imagenes/COMPUERTA NAND.jpg">
                 <div class="info">
                     <h1>COMPUERTA NAND</h1>
                     <p>
                     La compuerta NAND o NOT AND es una puerta lógica que produce una salida falsa solamente
                      si todas sus entradas son verdaderas; por tanto, su salida es complemento a la de la puerta AND
                     </p>
                     <a href="#ventana2" class="btn btn-primary btn-lg" data-toggle="modal">LEER MAS</a>
                 </div>
        </div>

        <div class="card">
            <img id="img1" src="../imagenes/COMPUERTA OR.jpg">
                <div class="info">
                    <h1>COMPUERTA OR</h1>
                    <p>
                    La compuerta OR es una puerta lógica digital que implementa la disyunción lógica
                    Cuando todas sus entradas están en 0 (cero) o en BAJA, su salida está en 0 o en BAJA, mientras
                    que cuando al menos una o ambas entradas están en 1 o en ALTA, su SALIDA va a estar en 1 o en ALTA.
                    </p>
                    <a href="#ventana3" class="btn btn-primary btn-lg" data-toggle="modal">LEER MAS</a>
                </div>
        </div>

        <div class="card">
            <img id="img1" src="../imagenes/COMPUERTA NOR.jpg">
                <div class="info">
                    <h1>COMPUERTA NOR</h1>
                    <p>
                    La compuerta NOR es una puerta lógica digital que implementa la disyunción lógica negada
                    Cuando todas sus entradas están en 0 (cero) o en BAJA, su salida está en 1 o en ALTA, mientras que cuando 
                    una sola de sus entradas o ambas están en 1 o en ALTA, su SALIDA va a estar en 0 o en BAJA. 
                    </p>
                    <a href="#ventana4" class="btn btn-primary btn-lg" data-toggle="modal">LEER MAS</a>
                </div>
        </div>



    </div>
</section>

<footer>
    <section id="piedepagina">
        <div>
        <h1 class="nombres">
  Laura Vanessa Alba Gonzalez - Rodrigo Cantor Vasquez - Leonardo Gomez Sarmiento - Yeferson Ortiz Bolivar - Andres Felipe Paez - Francy Julietieth Ramirez Rodriguez
</h1>
<h1 class="correos">
 

</h1>
</div >
   
    </section>
</footer>

<section class="ventanas_emergentes">
                    <div class="modal fade" id="ventana1"> 
                         <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- header de la ventana-->
                                <div class="modal-header">
                                    <button tyle="buton"class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">SELECCIONE LA CANTIDAD DE ENTRADAS</h4>
                                </div>
                                <!-- contenido de la ventana-->
                                <div class="modal-body">
                                    <table class="compuerta_and">
                                    <tr>
                                        <th><h4>2 entradas</h4></th>
                                        <th><h4>3 entradas</h4></th>
                                        <th><h4>4 entradas</h4></th>
                                    </tr>
                                    <tr>
                                        <td><a href="compuerta_and2.php"type="buton"class="btn btn-primary">IR AL PERCEPTRON</a></td>
                                        <td><a href="compuerta_and3.php"type="buton"class="btn btn-primary">IR AL PERCEPTRON</a></td>
                                        <td><a href="compuerta_and4.php"type="buton"class="btn btn-primary">IR AL PERCEPTRON</a></td>
                                    </tr>
                                    </table>
                                </div>
                                <!-- footer de la ventana-->
                                <div class="modal-footer">
                                <a href="explicacion.php"type="buton"class="btn btn-primary" >ver explicaión</a>
                               
                                </div>
                             </div>
                        </div>
                     </div>


                     <div class="modal fade" id="ventana2"> 
                         <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- header de la ventana-->
                                <div class="modal-header">
                                    <button tyle="buton"class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">SELECCIONE LA CANTIDAD DE ENTRADAS</h4>
                                </div>
                                <!-- contenido de la ventana-->
                                <div class="modal-body">
                                    <table class="compuerta_and">
                                    <tr>
                                        <th><h4>2 entradas</h4></th>
                                        <th><h4>3 entradas</h4></th>
                                        <th><h4>4 entradas</h4></th>
                                    </tr>
                                    <tr>
                                        <td><a href="compuerta_nand2.php"type="buton"class="btn btn-primary">IR AL PERCEPTRON</a></td>
                                        <td><a href="compuerta_nand3.php"type="buton"class="btn btn-primary">IR AL PERCEPTRON</a></td>
                                        <td><a href="compuerta_nand4.php"type="buton"class="btn btn-primary">IR AL PERCEPTRON</a></td>
                                    </tr>
                                    </table>
                                </div>
                                <!-- footer de la ventana-->
                                <div class="modal-footer">
                                <a href="explicacion.php"type="buton"class="btn btn-primary" >ver explicaión</a>
                               
                                </div>
                             </div>
                        </div>
                     </div>

                     <div class="modal fade" id="ventana3"> 
                         <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- header de la ventana-->
                                <div class="modal-header">
                                    <button tyle="buton"class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">SELECCIONE LA CANTIDAD DE ENTRADAS</h4>
                                </div>
                                <!-- contenido de la ventana-->
                                <div class="modal-body">
                                    <table class="compuerta_and">
                                    <tr>
                                        <th><h4>2 entradas</h4></th>
                                        <th><h4>3 entradas</h4></th>
                                        <th><h4>4 entradas</h4></th>
                                    </tr>
                                    <tr>
                                        <td><a href="compuerta_or2.php"type="buton"class="btn btn-primary">IR AL PERCEPTRON</a></td>
                                        <td><a href="compuerta_or3.php"type="buton"class="btn btn-primary">IR AL PERCEPTRON</a></td>
                                        <td><a href="compuerta_or4.php"type="buton"class="btn btn-primary">IR AL PERCEPTRON</a></td>
                                    </tr>
                                    </table>
                                </div>
                                
                                <!-- footer de la ventana-->
                                <div class="modal-footer">
                                <a href="explicacion.php"type="buton"class="btn btn-primary" >ver explicaión</a>
                               
                               
                                </div>
                             </div>
                        </div>
                     </div>

                     <div class="modal fade" id="ventana4"> 
                         <div class="modal-dialog">
                            <div class="modal-content">
                                <!-- header de la ventana-->
                                <div class="modal-header">
                                    <button tyle="buton"class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">SELECCIONE LA CANTIDAD DE ENTRADAS</h4>
                                </div>
                                <!-- contenido de la ventana-->
                                <div class="modal-body">
                                    <table class="compuerta_and">
                                    <tr>
                                        <th><h4>2 entradas</h4></th>
                                        <th><h4>3 entradas</h4></th>
                                        <th><h4>4 entradas</h4></th>
                                    </tr>
                                    <tr>
                                        <td><a href="compuerta_nor2.php"type="buton"class="btn btn-primary">IR AL PERCEPTRON</a></td>
                                        <td><a href="compuerta_nor3.php"type="buton"class="btn btn-primary">IR AL PERCEPTRON</a></td>
                                        <td><a href="compuerta_nor4.php"type="buton"class="btn btn-primary">IR AL PERCEPTRON</a></td>
                                    </tr>
                                    </table>
                                </div>
                                <!-- footer de la ventana-->
                                <div class="modal-footer">
                                <a href="explicacion.php"type="buton"class="btn btn-primary" >ver explicaión</a>
                               
                                </div>
                             </div>
                        </div>
                     </div>

</section>

</html>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
