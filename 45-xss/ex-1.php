<!-- EXEMPLO DE XSS (CROSS SITE SCRIPTING) 
O malicioso coloca tags html ou js nos formularios para executar codigo malicioso-->

<form method="post">

    <input type="text" name="busca">
    <button type="submit">Enviar</button>

</form>

<?php

$_POST['busca'] = '<a href=#> <strong> Oi </strong> </a> <script>alert("Ok")</script>';

if (isset($_POST['busca'])) {
    //tira todas as tags html do texto inserido, e deixa as que eu selecionar
    //echo strip_tags($_POST['busca'], "<strong><a>");

    //transforma todas as tags em string
    echo htmlentities($_POST['busca']);
    
}

?>