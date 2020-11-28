<?php
   require_once 'classes/Usuarios.php';
   $u = new Usuario();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Cadastrar</title>
</head>
<body>
   <div id="corpo-form">
        <h1>Cadastrar</h1>
        <form action="" method="POST">
                <input type="text" name="nome" id="" placeholder ="Nome completo" maxlegth="30">
                <input type="email" name="email" id="" placeholder ="E-mail" maxlegth="50">
                <input type="password" name="senha" id="" placeholder="Senha" maxlegth="15">
                <input type="password" name="confirmar" id="" placeholder="Confirmar senha">
                <input type="submit" value="Cadastrar">
        </form>
    </div>

    <?php
        if(isset($_POST['nome'])){
            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            $conf = addslashes($_POST['confirmar']);

            if(!empty($nome) && !empty($senha) && !empty($email) && !empty($conf)){
               $u->conectar("u728442474_aulasajax", "177.234.145.195", "u728442474_angelaleite", "nAg0Hk3An");
               if($u->msgErro == ""){
                   if($senha == $conf){
                       if($u->cadastrar($nome, $email, $senha)){
                            echo "<div id='mensagem-sucesso'>";
                            echo "Cadastrado com sucesso! Acesse para entrar.";
                            echo "</div>";
                       }else{
                           echo "<div class='mensagem-erro'>";
                              echo "E-mail já cadastrado!";
                           echo "</div>";
                       }
                     
                   }else{
                       
                            echo "<div class='mensagem-erro'>";
                               echo "As senhas não correspondem";
                            echo "</div>";
                   }
               }else{
                   
                   echo "<div class='mensagem-erro'>";
                        echo "Erro: ".$u->msgErro;
                   echo "</div>";
               }
            }else{
  
                echo "<div class='mensagem-erro'>";
                    echo "Preencha todos os campos!";
                echo "</div>";
            }
            

        }
    ?>

</body>
</html>