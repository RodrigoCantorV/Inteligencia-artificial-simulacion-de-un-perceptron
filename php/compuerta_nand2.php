<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <link rel="stylesheet" type="text/css" href="../css/compuerta_nand_2_a.css">
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
                  <h1>TABLA PERCEPTRON COMPUERTA NAND 2 ENTRADAS</h1>
                </div>
                <div id="cuerpo_tabla">
                <table border="1">
                        <tr>
                            <th>PATRON</td>
                            <th>X1</th>
                            <th>X2</th>
                            <th>P1</th>
                            <th>P2</th>
                            <th>∅</th>
                            <th>D</th>
                            <th>y</th>
                            <th>F(x)</th>
                            <th>ⴄ</th>
                            <th>δ</th>
                            <th>Δ1</th>
                            <th>Δ2</th>
                            <th>p1+</th>
                            <th>p2+</th>
                            <th>∅i</th>
                            <th>iteraciones</th>
            
                        </tr>
                        
                             <?php

                                $entradas =array(
                                array(1,1,1),
                                array(1,1,0),
                                array(1,0,1),
                                array(1,0,0),
                                );

                                $salidas =array(4);
                                $salidas[0]=0;
                                $salidas[1]=1;
                                $salidas[2]=1;
                                $salidas[3]=1;

                                $patron =array(4);
                                $patron[0]=1;
                                $patron[1]=2;
                                $patron[2]=3;
                                $patron[3]=4;

                                $cont =array(4);
                                $cont[0]=0;
                                $cont[1]=0;
                                $cont[2]=0;
                                $cont[3]=0;

                                session_start();
                                ob_start();
                                
                                //peso 1 valor aleatorio entre -1 y 1
                                $_SESSION['p1']= rand(-10,10)/10;
                                //peso 2 valor aleatorio entre -1 y 1
                                $_SESSION['p2']= rand(-10,10)/10;
                                //humbral valor aleatorio entre -1 y 1
                                $_SESSION['umbral']= rand(-10,10)/10;
                                // Coeficiente de  aprendizaje valor aleatorio entre 0 y 1
                                $ca =rand(0,10)/10;
                                //variacion del peso 1
                                $del1 = $_SESSION['p1'];
                                //variacion del peso 2
                                $del2 = $_SESSION['p2'];
                                $fx=0;
                                $error = 0;
                                $fila =0;
                                $repeticion =1;
                                while ( $fila<4) 
                                {
                                
                            ?>

                            
                                    <tr>
                                        <td><?php echo$patron[$fila]?></td>
                                        <td><?php echo$entradas[$fila][1];?></td>
                                        <td><?php echo$entradas[$fila][2];?></td>
                                        <td><?php echo$_SESSION['p1'];?></td>
                                        <td><?php echo$_SESSION['p2'];?></td>
                                        <td><?php echo$_SESSION['umbral']; ?></td>
                                        <td><?php echo $salidas[$fila];?></td>
                                        <td>
                                            <?php 
                                            $y=(($_SESSION['p1']*$entradas[$fila][1])+($_SESSION['p2']*$entradas[$fila][2]))-$_SESSION['umbral'];
                                            echo $y; 
                                            if ($y>=0) 
                                            {
                                                $fx =1;
                                            }
                                            elseif ($y<0) 
                                            {
                                            $fx =0;
                                            }
                                            ?>
                                        </td>
                                        <td><?php echo$fx; ?></td>                          
                                        <td><?php echo $ca;?></td>
                                        <td>
                                            <?php 
                                             
                                                $error = $salidas[$fila]-$fx;
                                                echo $error; 
                                                if ($error ==0)
                                                {
                                                    $del1 =($ca*$error)*$entradas[$fila][1];
                                                    $del2 =($ca*$error)*$entradas[$fila][2];
                                                $fila++;  
                                                }
                                                else 
                                                {
                                                    if ($error == 1) 
                                                    {
                                                         $del1 =($ca*$error)*$entradas[$fila][1];
                                                         $del2 =($ca*$error)*$entradas[$fila][2];
                                                         $_SESSION['p1'] = $_SESSION['p1']+$del1;
                                                         $_SESSION['p2'] = $_SESSION['p2']+$del2;
                                                         $_SESSION['umbral'] = $_SESSION['umbral'] -($ca*$error);  
                                                            $fila=0;
                                                            
                                                    } else 
                                                    {
                                                        if ($error == -1) 
                                                        {
                                                            $del1 =($ca*$error)*$entradas[$fila][1];
                                                            $del2 =($ca*$error)*$entradas[$fila][2];
                                                            $_SESSION['p1'] = $_SESSION['p1']+$del1;
                                                            $_SESSION['p2'] = $_SESSION['p2']+$del2;
                                                            $_SESSION['umbral'] = $_SESSION['umbral']-($ca*$error);                        
                                                            $fila=0;
                                                                
                                                        } 
                                                    } 
                                                } 
                                    
                                            ?>
                                        </td>
                                        <td><?php echo $del1?></td>
                                        <td><?php echo $del2?></td>
                                        <td><?php echo$_SESSION['p1']; ?></td>
                                        <td><?php echo$_SESSION['p2']; ?></td>
                                        <td><?php echo$_SESSION['umbral'];?></td>
                                        <td><?php echo$repeticion++;?></td>
                                    
                                    </tr>
                                     <?php
                            
                                }   
                                     ?>

                                                         
                    </table>
                    <table>
                        <tr>
                            
                            <td>PESO 1</td>
                            <td>PESO 2</td>
                            <td>"UMBRAL"</td>
                            <td>COE_APRE</td>
                            <td>iteraciones</td>
                        </tr>
                        <tr>
                            
                            <td><?php echo$_SESSION['p1']; ?></td>
                            <td><?php echo$_SESSION['p2']; ?></td>
                            <td><?php echo$_SESSION['umbral']; ?></td>
                            <td><?php echo $ca; ?></td>
                            <td><?php echo $repeticion-1; ?></td>
                        </tr>
                    </table>
                </div>
            </section>
            <section class="cuerpo2">
                
                <div id="cuerpo_perceptron">
                
                <div id="matrix"></div>

                <div id="perceptron">
                     <div id="x1">X1</div> 
                    
                     <div id="x2">X2</div> 
                     <div id="xn">Xn</div> 
                     <div id="umbral">umbral = ∅ </div> 
                     <div id="coeap">coeficiente de aprendizaje = ⴄ </div> 
                     <div id="D">D </div> 
                     <div id="y">y </div>
                     <div id="funact">funcion de activacion = "f(x)" </div>  
                     
                </div> 
                
                </div>
               
                <div id="comprobacion">
                    <div id="imagen_com1">
                 
                    </div>
                    <div id="imagen_com2">
                    
                    </div>
                    <div id="imagen_com3">
                        <div>
                            <form id="Formulario" method="POST">
                                <table id="fa">
                                    <tr>
                                        <td>
                                        <label for="X1">X1: </label>
                                        </td>
                                        <td>
                                        <label for="X2">X2: </label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                        <input type="text" id="X1" name="X1">
                                        </td>
                                        <td>
                                        <input type="text" id="X2" name="X2"><br>
                                        </td>
                                    </tr>
                                </table>           
                                <button type="button" id="Enviar">CALCULAR</button><br>
                        
                            </form>
                        </div>
                        <div id="respuesta"></div>      
                    </div>
                </div>

                <div id="botones">
                <a href="index1.php"type="buton"class="btn btn-primary">VOLVER AL INICIO</a>
                <a href="compuerta_and2.php"type="buton"class="btn btn-primary">RECALCULAR</a>
                <a href="#ventana1" class="btn btn-primary" data-toggle="modal">"CAMBIAR ENTRADAS"</a>
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
                </div>
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



<script>

$('#Enviar').click(function(){
$.ajax({
url: 'ajaxand2.php',
type: 'POST',
data:$('#Formulario').serialize(),
success:function(res)
{
    $('#respuesta').html(res);
}

});

});

</script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
