<?php
    /* 
    para retirar os dados de um elemento html utilizando o métido get, 
    utilizamos  $_GET["escrever name"]
    $nome = $_GET["txtnome"];
    $estado = $_GET["sltestados"];
    $graduacao = $_GET["chkgraduacao"];
    $pos = $_GET["chkpos"];
    $mestrado = $_GET["chkmestrado"];
    $sexo = $_GET["rdosexo"];
    $senha = $_GET["txtsenha"];
    $obs = $_GET["txtobs"];
    
    
    echo("Nome: " . $nome . "<br>");
    echo("Estado: " .$estado. "<br>");
    echo("Graduação: " .$graduacao. "<br>");
    echo("Pós: " .$pos. "<br>");
    echo("Mestrado: " .$mestrado. "<br>");
    echo("Sexo: " .$sexo. "<br>");
    echo("Senha: " .$senha. "<br>");
    echo("Obs: " .$obs); 
    */


    $nome = $_POST["txtnome"];
    $estado = $_POST["sltestados"];
    $graduacao = $_POST["chkgraduacao"];
    $pos = $_POST["chkpos"];
    $mestrado = $_POST["chkmestrado"];
    $sexo = $_POST["rdosexo"];
    $senha = $_POST["txtsenha"];
    $obs = $_POST["txtobs"];
    

    echo("Nome: " . $nome . "<br>");
    echo("Estado: " .$estado. "<br>");
    echo("Graduação: " .$graduacao. "<br>");
    echo("Pós: " .$pos. "<br>");
    echo("Mestrado: " .$mestrado. "<br>");
    echo("Sexo: " .$sexo. "<br>");
    echo("Senha: " .$senha. "<br>");
    echo("Obs: " .$obs);

?>

<html>
    <head>
        <title>
            Aula 01 - Formulários
        </title>
        <style>
            
            textarea{
                resize: none;
            }
            
        </style>
        
      <meta charset="utf-8" /> 
    </head>
    
    <body>
        <form name="frmcadastro" method="post" action="index.php"> <!-- Get = Pega todos os dados que foram postos no formulário, e disponibilizam na url da página/////// Post =  Cria as mesmas váriaveis em um "cache"-->
            <table width="600px" border="1">
                <tr>
                    <td> 
                       Nome:     
                    </td>

                    <td> 
                        <input type="text" name="txtnome" value="" size="20" maxlength="20" />
                    </td>	
                </tr>

                <tr>
                    <td> 
                        Estados:
                    </td>

                    <td> 
                        <select name="sltestados">
                            <option value="" selected>Selecione seu Estado</option>
                            <option value="SP">São Paulo</option>
                            <option value="RJ">Rio de Janeiro</option>
                        </select>
                    </td>	
                </tr>

                <tr>
                    <td> 
                        Cursos:
                    </td>

                    <td> 
                        <input type="checkbox" name="chkgraduacao" value="graduacao" checked/>Graduação<br>
                        <input type="checkbox" name="chkpos" value="pos"/>Pós-Graduação<br>
                        <input type="checkbox" name="chkmestrado" value="mestrado"/>Mestrado

                    </td>	
                </tr>

                <tr>
                    <td> 
                        Sexo:
                    </td>

                    <td> 
                        <input type="radio" name="rdosexo" value="F" checked/>Feminino<br>
                        
                        <label>
                            <input type="radio" name="rdosexo" value="M"/>Masculino
                        </label>
                    </td>	
                </tr>

                <tr>
                    <td> 
                        Senha:
                    </td>

                    <td> 
                        <input type="password" name="txtsenha" value="" size="10" maxlength="10"/>
                    </td>	
                </tr>
                
                <tr>
                    <td> 
                        Obs:
                    </td>

                    <td> 
                        <textarea name="txtobs" rows="5" cols="50"></textarea>
                    </td>	
                </tr>
                

                <tr>
                    <td> 
                        <input type="reset" name="btnlimpar" value="Limpar"/>
                    </td>

                    <td> 
                        <input type="submit" name="btnsalvar" value="Salvar"/>
                    </td>	
                </tr>
            </table>
        </form>
    </body>
    
</html>