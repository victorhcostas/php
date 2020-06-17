<?php
//COMMAND INJECTION

/*echo "<pre>";

    //O comando system() executa alguma funcao do sistema da maquina do user
    $comando = system("ls", $retorno);

    echo "</pre>";
*/    

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    //a funcao escapeshellcmd() expulsa qualquer comando digitado que corresponda a um comando
    //de terminal; evitando assim, a invasao
    $cmd = escapeshellcmd($_POST["cmd"]);

    var_dump($cmd);

    echo "<pre>";

    //O comando system() agora recebe uma informacao vinda do site,
    //no caso, um comando do sistema (dir C: ou / ls) que revela as pastas do usuario sem
    //sua permissao
    $comando = system($cmd, $retorno);

    echo "</pre>";

}
?>

<form method="post">

    <input type="text" name="cmd">
    <button type="submit">Enviar</button>

</form>