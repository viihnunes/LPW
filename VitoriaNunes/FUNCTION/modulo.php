<?php

    //CONSTATE
    define("ERRO" , "Erro no cálculo");
    define("VAZIO" , "<span class='erro'><br>Erro de caixas vazias</span> <br> <span class='erro'><br>Operação não marcada");
    define("NAONUMERO", "<span class='erro'><br>Não é número");

    
    function Calcular($v1, $v2, $operacao)
    {
        //permite deixar uma váriavel visivel fora da function
        global $checks;
        global $checksb;
        global $checkm;
        global $checkd;
            
           switch($operacao)
            {
                case "soma":
                    $calculo = $v1 + $v2;
                    $checks = "checked";
                    break;
                    
                case "subtrair":
                    $calculo = $v1 - $v2;
                    $checksb = "checked";
                    break;
                    
                case "multiplicacao":
                    $calculo = $v1 * $v2;
                    $checkm = "checked";
                    break;
                    
                case "dividir":
                    $checkd = "checked";
                    if($v2  == 0)
                        {
                           $calculo = (ERRO); 
                        }
                    else
                        {
                           $calculo = $v1 / $v2; 
                        } 
                    break;
                    
                //default:
                    //default somente será interpretado quando nenhum case for acionado
                
            }
            return $calculo;
    }   

?>