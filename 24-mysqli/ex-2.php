<?php

//conectando com o banco de dados
$conn = new mysqli("localhost", "root", "", "dbphp7");

//testando se ha erros de conexao
if ($conn->connect_error) {
    //mensagem de erro
    echo "Error: " . $conn->connect_error;
    exit;

}

//comando sem PREPARE que interage diretamente com o banco por meio do metodo ->query()
$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin");

$data = array();

//fetch_array(MYSQLI_ASSOC)) { "assoc" eh de associado
while ($row = $result->fetch_assoc()) {

    array_push($data, $row);

}

echo json_encode($data);

?>