<?php

    if(isset($_GET["btncalcular"]))
    {
         $valor1 = $_GET["txtvalor1"];
         $valor2 = $_GET["txtvalor2"];
         $valor3 = $_GET["txtvalor3"];
         $valor4 = $_GET["txtvalor4"];

         $media = ($valor1 + $valor2 + $valor3 + $valor4)/ 4;     
    }
    
?>

<html>
    <head>
        <title>
            Aula 01 - Médias Escolares
        </title>        
      <meta charset="utf-8" /> 
    </head>
    
    <body>
        <form name="frmcadastro" method="get" action="index.php"> <!-- Get = Pega todos os dados que foram postos no formulário, e disponibilizam na url da página/////// Post =  Cria as mesmas váriaveis em um "cache"-->
            <table width="100px" border="0">
                <tr>
                    <td> 
                       Valor 1: 
                    </td>

                    <td> 
                        <input type="text" name="txtvalor1" value="" size="20"/>
                    </td>	
                </tr>

                <tr>
                    <td> 
                       Valor 2: 
                    </td>

                    <td> 
                        <input type="text" name="txtvalor2" value="" size="20"/>
                    </td>	
                </tr>

                <tr>
                   <td> 
                       Valor 3: 
                    </td>

                    <td> 
                        <input type="text" name="txtvalor3" value="" size="20"/>
                    </td>	          
                </tr>

                <tr>
                    <td> 
                       Valor 4: 
                    </td>

                    <td> 
                        <input type="text" name="txtvalor4" value="" size="20" />
                    </td>       
                </tr>
                
                <tr>
                    <td> 
                        <input type="submit" name="btncalcular" value="Calcular"/>
                    </td>
                    
                    <td> 
                        <input type="reset" name="btnlimpar" value="Limpar"/>
                    </td>
                </tr>
                
            </table>
        </form>
                <span> 
                       A média é:  <?php  echo($media); ?>
                </span><br>
   
                <span> 
                        O aluno está: 
                </span>
         
    </body>
    
</html>