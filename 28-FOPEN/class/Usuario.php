<?php

class Usuario {

    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    //INICIO setters n getters
    public function getIdusuario() {
        return $this->idusuario;
    }

    public function setIdusuario($value){
        $this->idusuario = $value;
    }

    public function getDeslogin() {
        return $this->deslogin;
    }

    public function setDeslogin($value){
        $this->deslogin = $value;
    }

    public function getDessenha() {
        return $this->dessenha;
    }

    public function setDessenha($value){
        $this->dessenha = $value;
    }

    public function getDtcadastro() {
        return $this->dtcadastro;
    }

    public function setDtcadastro($value){
        $this->dtcadastro = $value;
    }
    //FIM setters n getters

    //Carrega um usuario pelo ID
    public function loadbyId($id) {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(
            ":ID"=>$id
        ));

        if (count($results) > 0) {

            $this->setData($results[0]);

        }

    }

    //Carrega uma lista de usuarios
    public static function getList() {

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin;");

    }

    //Carrega uma lista de usuarios pelo login
    public static function search($login) {

        $sql = new Sql();

        return $sql->select("SELECT * FROM tb_usuarios WHERE deslogin LIKE :SEARCH ORDER BY deslogin", array(

            ':SEARCH'=>"%".$login."%"

        ));

    }

    //Carrega um usuario autenticando antes o acesso
    public function login($login, $password) {

        $sql = new Sql();

        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN AND dessenha = :PASSWORD", array(
            ":LOGIN"=>$login,
            ":PASSWORD"=>$password
        ));

        if (count($results) > 0) {

            $this->setData($results[0]);

        } else {

            throw new Exception("Login e/ou senha invalidos.");

        }        

    }

    //Insere dados a tabela usando procedure
    public function insert() {

        $sql = new Sql();

        $results = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", array(
            ":LOGIN"=>$this->getDeslogin(),
            ":PASSWORD"=>$this->getDessenha()
        ));

        if (count($results) > 0) {
            $this->setData($results[0]);
        }

    }

    //faz o set de todos os atributos da classe Usuario
    public function setData($data) {

        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));

    }

    //Altera dados na tabela
    public function update($login, $password) {

        $this->setDeslogin($login);
        $this->setDessenha($password);

        $sql = new Sql();

        $sql->query("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID", array(
            ':LOGIN'=>$this->getDeslogin(),
            ':PASSWORD'=>$this->getDessenha(),
            ':ID'=>$this->getIdusuario()
        ));

    }

    //Deleta dados da tabela
    public function delete() {

        $sql = new Sql();

        $sql->query("DELETE FROM tb_usuarios WHERE idusuario = :ID", array(
            ':ID'=>$this->getIdusuario()
        ));

        $this->setIdusuario(0);
        $this->setDeslogin("");
        $this->setDessenha("");
        $this->setDtcadastro(new DateTime());

    }

    //Metodo construtor do usuario com login e senha como parametros
    public function __construct($login = "", $password = "") {

        $this->setDeslogin($login);
        $this->setDessenha($password);

    }

    //transforma tds os parametros em json pra visualizacao
    public function __toString() {

        return json_encode(array(

            "idusuario"=>$this->getIdusuario(),
            "deslogin"=>$this->getDeslogin(),
            "dessenha"=>$this->getDessenha(),
            "dtcadastro"=>$this->getDtcadastro()->format("d/m/Y H:i:s")

        ));

    }
}

?>