<?php
    
    //declara váriavel como null 
    // criamos a variavel para arrumar 
    //um bug de uma variavel indefinida

    $media = null;
	$nota = null;
    $nota1 = null;
    $nota2 = null;
    $nota3 = null;
    $nota4 = null;

    //isset verifica a existencia de uma váriavel ou objeto
    if(isset($_GET['btncalc'])){
        $nota1=$_GET['txtn1'];
        $nota2=$_GET['txtn2'];
        $nota3=$_GET['txtn3'];
        $nota4=$_GET['txtn4'];
        
        if($_GET['txtn1'] == null || $_GET['txtn2'] == null || $_GET['txtn3'] == null || $_GET['txtn4'] == null)
            {
                echo("<script> alert('Preencha os campos') </script>");
            }
        // VERIFICAM OS TIPOS DE DAOS DE UMA VÁRIAVEL : is_numeric // is_float // is_double // is_array // is_bool // is_object // is_int // 
        else if (!is_numeric($nota1) || !is_numeric($nota2) || !is_numeric($nota3) || !is_numeric($nota4))
            {
                echo("Não é número");
            }
        
        else
        {
            
            $media=($nota1+$nota2+$nota3+$nota4)/4;
            
                $nota1 = null;
                $nota2 = null;
                $nota3 = null;
                $nota4 = null;

            if($media < 7) 
                {
                    $nota = "<span class='reprovado'>Reprovado";
                } 
            else
                {
                    $nota = "<span class='aprovado'>Aprovado";
                }
        }
        
	}

?>

<html>
    
    <head>
        
        <title> 
            Aula - 01 
        </title>
        <meta charset="utf-8">
        <style>
            .aprovado{
                color: forestgreen;
                font-family: sans-serif;
                font-size: 16;
                font-weight: bold;
                font-style: italic;
            }
            .reprovado{
                color: red;
                font-family: sans-serif;
                font-size: 16;
                font-weight: bold;
                font-style: italic;
            }
            .reprovado:hover{
                font-family: monospace;
                font-style: normal;
                font-weight: 0;
                font-size: 20;
                text-decoration: underline;
            }
            .aprovado:hover{
                font-family: monospace;
                font-style: normal;
                font-weight: 0;
                font-size: 20;
            }
        </style>
        
        
        
    </head>
    
    
	<body>
        
		<table>
            
			<tr>
				<td>
					Calculo de Médias
				</td>
			</tr>
            
			<tr>
				<td>
					<form name="frmmedia" method="get" action="media.php">
                        
						Nota 1:<input type="text" name="txtn1" value="<?php echo($nota1); ?>"> <br>
						Nota 2:<input type="text" name="txtn2" value="<?php echo($nota2); ?>"> <br>
						Nota 3:<input type="text" name="txtn3" value="<?php echo($nota3); ?>"> <br>
						Nota 4:<input type="text" name="txtn4" value="<?php echo($nota4); ?>"> <br>
                        
						<input type="submit" name="btncalc" value ="Calcular"/>
                        
					</form>
				</td>
					
				<td>
					A média é: <?php echo($media); ?> <br>
					O aluno esta: <?php echo($nota); ?>
				</td>
			</tr>
            
		</table>
        
	</body>

</html>