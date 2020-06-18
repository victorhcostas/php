<?php
//PERMISSOES DE PASTAS

$pasta = "arquivos";
$permissao = "775";

if (!is_dir($pasta)) mkdir($pasta, $permissao);

echo "Diretorio criado com sucesso!"
?>