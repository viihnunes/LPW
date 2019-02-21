<?php
        //VARIAVEL
        $somando = (float) 0;
        $valor1 = (float) "";
        $valor2 = (float) "";
        $radio = null;
        $checks = null;
        $checksb = null;
        $checkm = null;
        $checkd = null;
        $naonumero = null;

        //CONSTATE
        define("ERRO" , "Erro no cálculo");
        define("VAZIO" , "<span class='erro'><br>Erro de caixas vazias</span> <br> <span class='erro'><br>Operação não marcada");
        define("NAONUMERO", "<span class='erro'><br>Não é número");


    if(isset($_POST['btn_calcular']))
    {
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];   
        

        if (!is_numeric($valor1) || !is_numeric($valor2))
            {
              $naonumero =  (NAONUMERO);
            }
        else if($valor1 == null || $valor2 == null || !isset($_POST["rdo_operacao"]))
            {
               $somando = (VAZIO);
            }
        
        
        else 
        {
        
            $radio = $_POST["rdo_operacao"];

            if($radio == "soma")
                {
                    $somando = $valor1 + $valor2;
                    $checks = "checked";
                }

            else if($radio == "subtrair")
                {
                    $somando = $valor1 - $valor2;
                    $checksb = "checked";
                }
        
            else if($radio == "multiplicacao")
                {
                    $somando = $valor1 * $valor2;
                    $checkm = "checked";
                }

            else if($radio == "dividir")
                {
                $checkd = "checked";
                    if($valor2  == 0)
                        {
                           $somando = (ERRO); 
                        }
                    else
                        {
                           $somando = $valor1 / $valor2; 
                        }    
                }

        }
    }
      
?>



<html>
    
    
    <head>
        
        <title> Calculadora Simples</title>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="CSS/style.css">      
        
    <script>
        function Validar(caracter)
        {
            /*  Verifica em qual padrão de navegador o caracter está sendo enviado, 
                se for pelo padrão event, então utilizamos charCode, caso contrário 
                utilizamos which
            */
            if(window.event)
                {
                    // Transforma o caracter em ascii
                    var letra = caracter.charCode;
                }
            else
                {
                    // Transforma o caracter em ascii
                    var letra = caracter.which;
                }
            // Verifica se o ascii do caracter digitado está entre 
            // 48 e 57, que corresponde aos números de 0 a 9
            if (letra < 48 || letra > 57)
                {
                    if(letra != 46)
                        {
                            //cancelando o evento keypress, ou seja, não a deixa ir para caixa
                            return false;   
                        }
                    
                }
        }   
    </script>
        
        
    </head>
    
   
    <body>
        <form name="Frmcalculadora" action="calc_simples.php" method="post">
            
            <div id="titulo">
                
                <p>Calculadora Simples
                
            </div>
            
            <div id="title_resu">
                
                Resultado
                
            </div>
            
            <div id="resultado" name="resultado">
                
                <?php echo($somando); ?>
                <?php echo($naonumero); ?>
                
            </div>

            <div id="valor1">
                
                Valor 1: <input type="text" name="valor1" onkeypress="return Validar(event);" value="<?php echo($valor1); ?>" class="tam">
                
            </div>

            <div id="valor2">
                
                Valor 2: <input type="text" name="valor2" onkeypress="return Validar(event);" value="<?php echo($valor2); ?>" class="tam">
                
            </div>

            <div id="rdo_operacao">
                
                <label>
                    <input type="radio" name="rdo_operacao" value="soma" <?php echo($checks); ?>><span class="rdo">Somar</span><br>
                </label>
                
                <label>
                    <input type="radio" name="rdo_operacao" value="subtrair" <?php echo($checksb); ?>><span class="rdo">Subtrair</span><br> 
                </label>
                
                <label>
                    <input type="radio" name="rdo_operacao" value="multiplicacao" <?php echo($checkm); ?>><span class="rdo">Multiplicar</span><br>
                </label>
                
                <label>
                    <input type="radio" name="rdo_operacao" value="dividir" <?php echo($checkd); ?>><span class="rdo">Dividir</span><br>
                </label> 
                
            </div>

            <div id="btn_calcular">
                
                <input type="submit" name="btn_calcular" id="bt_calc" value="CALCULAR">
                
            </div>
        </form>
    </body>

</html>