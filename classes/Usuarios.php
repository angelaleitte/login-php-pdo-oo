<?php
Class Usuario{
    private $pdo;
    public $msgErro = "";

    public function conectar($nome, $host, $usuario, $senha){
        global $pdo;
        

        try{
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        }catch(PDOException $e){
             $msgErro = $e->getMessage();
        }

    }

    public function cadastrar($nome, $email, $senha){
        global $pdo;
        //veririficar se ja existe
        $sql = $pdo->prepare("SELECT * from usuarios where email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();

        

        if($sql->rowCount() > 0){
           return false;
        }else{
             $sql = $pdo->prepare("INSERT usuarios (nome, email, senha) VALUES (:n, :e, :s)");
             $sql->bindValue(":n", $nome);
             $sql->bindValue(":e", $email);
             $sql->bindValue(":s", $senha);
             $sql->execute();
             return true;
        }
    }

    public function logar($email, $senha){
        global $pdo;

        //verificar se o e-mail está cadastrado




    }

}

?>