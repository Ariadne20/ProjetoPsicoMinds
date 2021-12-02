<?php
class psicologoDAO
{
    function inserir($nomeCompleto, $urlFoto, $whatsapp, $email, $genero, $especialidade, $tempoExperiencia, $crp, $senha)
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=projeto_psicominds', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare('INSERT INTO usuario (nomeCompleto,urlFoto,whatsapp,email,genero,especialidade,tempoExperiencia,crp,senha) 
            VALUES(:nomeCompleto, :urlFoto,:whatsapp,:email,:genero,:especialidade,:tempoExperiencia,:crp,:senha)');
            $stmt->execute(array(
                ':nomeCompleto' => "$nomeCompleto", ':urlFoto' => "$urlFoto", ':whatsapp' => "$whatsapp", ':email' => "$email", ':genero' => "$genero", ':especialidade' => "$especialidade", ':tempoExperiencia' => "$tempoExperiencia", ':crp' => "$crp", ':senha' => "$senha"
            ));
            echo "<script>alert('Cadastrado realizadocom sucesso!');
            window.location = '../visao/index.php';
            </script>";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function login($email, $senha){

        $pdo  = new PDO("mysql:host=localhost;dbname=projeto_psicominds", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        session_start();

        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;

        try {
            $pdo  = new PDO("mysql:host=localhost;dbname=projeto_psicominds", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


            if(empty($_SESSION['email'])||empty($_SESSION['senha'])){
                echo "<script>alert('Usuário ou senha sem preencher');".
                " window.location = '../visao/login.php';</script>";
            }

            $verifica = $pdo->query("SELECT * FROM usuario WHERE email ='$email' AND senha ='$senha'");
            if($verifica->rowCount()<=0){
                echo "<script>alert('Usuário ou senha incorretos');".
                " window.location = '../visao/login.php';</script>";
            }
            else{
                header("Location:../visao/home.php");
            } 
        }catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
        }
    }

    
    function fazerLogout(){
        session_start();
        session_destroy();
        unset($_SESSION);
        header("Location:../visao/Login.php");
    }
}
    
