<tr>
    <td width="8" valign="top">
        <input class="bolaradio" type="radio" id="4" name="questao<?php echo $imovel['Imovel']['id'];?>" value="D">
    </td>
    <td>
        <label for="4"> D) <?php echo $imovel['Imovel']['alternativa_4'];?></label>
    </td>
</tr>


<form action="processa.php" method="post">

    <tr>

    <?php while ($linha = mysql_fetch_array($consulta)){ ?>

    <td width="10%" aling = "top" height="91"><?php echo $_SESSION[cont].")"; ?></td>

    <td height="91"><?php echo $linha[pergunta];?></td>

    <TR>

    <td width="10%"><input type="radio" name="op" value="a" > A)</td>

    <td><?php echo $linha[a1];?></td>

    <TR>

    <td width="10%"><input type="radio" name="op" value= "b" > B )</td>

    <td><?php echo $linha[a2];?></td>

    <TR>

    <td width="10%"><input type="radio" name="op" value= "c" > C)</td>

    <td><?php echo $linha[a3];?></td>

    <TR>

    <td width="10%"><input type="radio" name="op" value= "d" > D)</td>

    <td><?php echo $linha[a4];} // fecho o while
    ?>
    </td>

    <input type="hidden" name="questao">

    <TR>

    <td colspan="2"><input type="submit" value="Próxima"></td>

    </form>


<!--processa.php-->
<?php
/*
session_start();

include "Config/config_simulador.php";

$pergunta= $_POST['questao];

$correta= $_POST['op'];

# pretendo gravar em arquivo txt as opcoes de respostas para depos comparar com a correta do banco de dados

while($_SESSION[qtde] > $_SESSION[cont]){ //aki tem erro de quantidade de paginas chamadas

echo "&lt;script>document.location.href='exibir.php'</script>";

}

$_SESSION[cont]+=1;
?>