<?php
class sessaoDAO
{
    function inserir($especialidade, $custoHora, $dataSessao, $horario, $descricao)
    {
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=projeto_psicominds', "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $stmt = $pdo->prepare('INSERT INTO sessao (especialidade,custoHora,dataSessao,horario,descricao) 
            VALUES(:especialidade, :custoHora,:dataSessao,:horario,:descricao)');
            $stmt->execute(array(
                ':especialidade' => "$especialidade", ':custoHora' => "$custoHora", ':dataSessao' => "$dataSessao", ':horario' => "$horario", ':descricao' => "$descricao"
            ));
            echo "<script>alert('Sessão cadastrada com sucesso!');
            </script>";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function listar()
    {
        $pdo = new PDO("mysql:host=localhost;dbname=projeto_psicominds", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = $pdo->query("SELECT id, especialidade,custoHora,dataSessao,horario,descricao FROM sessao");
        echo " <!doctype html>";
        echo "<html lang='pt-br'>";
        echo "<head>";
        echo " <meta charset='utf-8'>";
        echo " <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
        echo "<title>Clientes</title>";

        echo "</head>";
        echo "<body>";
        echo 
        '<header style="
            position:absolute;
            width:1340px;
            height:200px;
            left:0px;
            top:0px;
            background:#3C4CDE;">';
        echo "<nav>";
        echo '<a href="../visao/home.php"> <img style="position:absolute;width:135px;height:120px;left:5px;top:11px" src="https://www.nicepng.com/png/full/114-1149034_download-svg-download-png-brain-emoji-transparent-background.png"></a>'; 
        echo "</nav>";
        echo 
        '<h1 
            style="position: absolute;
            width: 281px;
            height: 48px;
            left: 1130px;
            top: 15px;
            color:white;
            font-family: "Archivo Black", sans-serif;
            font-family: "Archivo", sans-serif;
            font-family: "Poppins", sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 40px;
            line-height: 40px;>
            PSICOMINDS
        </h1>';
        echo 
        '<h1 
            style="position: absolute;
            width: 350px;
            height: 84px;
            left: 352px;
            top: 80px;
            color:white;
            font-family: "Archivo", sans-serif;
            font-family: "Archivo", sans-serif;
            font-family: "Poppins", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-align: left;
            font-size: 36px;
            line-height: 42px;">
            Estes são os seus anúncios.
        </h1>';
        echo 
        '<a href="../visao/criarAnuncio.php"> <img style="position:absolute;width:32px;height:32px;left:224px;top:120px" src="https://cdn-icons-png.flaticon.com/512/189/189689.png" alt="Adicionar anúncio"></a>';
        echo "</header>";
        echo '<table style="padding:0px;margin-top:200px;margin-left:0px;text-align:middle;width:1300px">';
        echo '<tr style="text-align:left; width:200px; font-size:20px; background-color:gray; text-align:center">
        <th>Id</th>
        <th>Especialidade</th>
        <th>Custo da sessão</th>
        <th>Data da sessão</th>
        <th>Horário</th>
        <th>Descrição</th>
        <th>Ações</th>
        </tr>';

        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            echo '<tr style="text-align:left; width:400px" span="8">';
            echo '<td>' .$linha['id'] . '</td>';
            echo '<td>' .$linha['especialidade'] . '</td>';
            echo '<td>' .$linha['custoHora'] . '</td>';
            echo "<td>" .$linha['dataSessao'] . "</td>";
            echo "<td>" .$linha['horario'] . "</td>";
            echo '<td style="width:400px">' .$linha['descricao'] . '</td>';
            echo "<td> <form method='post' action='../controle/controle_sessao.php'> "
                . '<input style="background-color:blue; font-size:20px;color:white; margin-right:2px" type="submit" name="botao_editar" value="Editar">'
                . '<input style="background-color:red; font-size:20px;color:white; margin-right:2px" type="submit" name="botao_excluir" value="Excluir">'
                . " <input type='hidden' name='id_hiden' value = '" . $linha['id'] . "'/></form> </td>";
            echo "</tr>";
        }
        echo '<table style="padding:0px;margin-top:200px;margin-left:0px;text-align:left;width:1300px">';
        echo "<form action='../controle/controle_sessao.php' method='POST'>";
        echo "<div class='form-group form-check-inline'>";
        echo "<div class='col'>";
        echo "</div></div></form>";
        echo "</body></html>";
    }

    function buscarSessao($especialidade, $dataSessao)
    {
    
        include_once("../modelo/sessao.php");

        $pdo  = new PDO("mysql:host=localhost;dbname=projeto_psicominds", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $consulta = $pdo->query("SELECT id,especialidade,custoHora,dataSessao,horario,descricao FROM sessao WHERE especialidade = '$especialidade'");
        $total_retornado = $consulta->rowCount();


        echo " <!doctype html>";
        echo "<html lang='pt-br'>";
        echo "<head>";
        echo " <meta charset='utf-8'>";
        echo " <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
        echo "<title>Clientes</title>";

        echo "</head>";
        echo "<body>";
        echo 
        '<header style="
            position:absolute;
            width:1340px;
            height:200px;
            left:0px;
            top:0px;
            background:#3C4CDE;">';
        echo "<nav>";
        echo '<a href="../visao/home.php"> <img style="position:absolute;width:135px;height:120px;left:5px;top:11px" src="https://www.nicepng.com/png/full/114-1149034_download-svg-download-png-brain-emoji-transparent-background.png"></a>'; 
        echo "</nav>";
        echo 
        '<h1 
            style="position: absolute;
            width: 281px;
            height: 48px;
            left: 1130px;
            top: 15px;
            color:white;
            font-family: "Archivo Black", sans-serif;
            font-family: "Archivo", sans-serif;
            font-family: "Poppins", sans-serif;
            font-style: normal;
            font-weight: normal;
            font-size: 40px;
            line-height: 40px;>
            PSICOMINDS
        </h1>';
        echo 
        '<h1 
            style="position: absolute;
            width: 350px;
            height: 84px;
            left: 352px;
            top: 80px;
            color:white;
            font-family: "Archivo", sans-serif;
            font-family: "Archivo", sans-serif;
            font-family: "Poppins", sans-serif;
            font-style: normal;
            font-weight: bold;
            text-align: left;
            font-size: 36px;
            line-height: 42px;">
            Estes são os seus anúncios.
        </h1>';
        echo 
        '<a href="../visao/criarAnuncio.php"> <img style="position:absolute;width:32px;height:32px;left:224px;top:120px" src="https://cdn-icons-png.flaticon.com/512/189/189689.png" alt="Adicionar anúncio"></a>';
        echo "</header>";

        if ($total_retornado  === 0) {
            echo "<script>alert('Não há sessões cadastradas')</script>";
        } else {
            while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
                $sessao = new sessao($linha['id'],$linha['especialidade'], $linha['custoHora'], $linha['dataSessao'], $linha['horario'], $linha['descricao']);
                echo '<tr style="text-align:left; width:400px" span="8">';
                echo '<td>' . $linha['id'] . '</td>';
                echo '<td>' . $linha['especialidade'] . '</td>';
                echo '<td>' .$linha['custoHora'] . '</td>';
                echo "<td>" . $linha['dataSessao'] . "</td>";
                echo "<td>" . $linha['horario'] . "</td>";
                echo '<td style="width:400px">' . $linha['descricao'] . '</td>';
                echo "<td> <form method='post' action='../controle/controle_sessao.php'> "
                    . '<input style="background-color:blue; font-size:20px;color:white; margin-right:2px" type="submit" name="botao_editar" value="Editar">'
                    . '<input style="background-color:red; font-size:20px;color:white; margin-right:2px" type="submit" name="botao_excluir" value="Excluir">'
                    . " <input type='hidden' name='id_hiden' value = '" . $linha['id'] . "'/></form> </td>";
                echo "</tr>";
            }
            echo '<table style="padding:0px;margin-top:200px;margin-left:0px;text-align:left;width:1300px">';
            echo "<form action='../controle/controle_sessao.php' method='POST'>";
            echo "<div class='form-group form-check-inline'>";
            echo "<div class='col'>";
            echo "</div></div></form>";
            echo "</body></html>";
        }
        
    }

    function excluir($id)
    {
        try {
            $pdo  = new PDO("mysql:host=localhost;dbname=projeto_psicominds", "root", "");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $delete =  $pdo->prepare("DELETE FROM sessao WHERE id = '$id'");
            $delete->execute();

            echo "<script>alert('" .  $delete->rowCount() .
                " sessão deletada com sucesso!');" .
                " window.location = '../visao/home.php';</script>";
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }

    function Editar($id) {
        try {
        $pdo = new PDO("mysql:host=localhost;dbname=projeto_psicominds", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $consulta = $pdo->query("SELECT id, especialidade,custoHora,dataSessao,horario,descricao FROM sessao WHERE id = '$id'");
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            session_start();
            include_once("../modelo/sessao.php");
            $sessao = new sessao($linha['id'],$linha['especialidade'], $linha['custoHora'], $linha['dataSessao'], $linha['horario'], $linha['descricao']);
            $_SESSION['obj_sessao'] = serialize($sessao);
            header("location:../visao/editar.php");
        }
        } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        } 
    }

    
    function Editar2($id) {
        try {
        $pdo = new PDO("mysql:host=localhost;dbname=projeto_psicominds", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $consulta = $pdo->query("SELECT id,especialidade,custoHora,dataSessao,horario,descricao FROM sessao WHERE id = '$id'");      
        
        echo " <!doctype html>";
        echo "<html lang='pt-br'>";
        echo "<head>";
        echo " <meta charset='utf-8'>";
        echo " <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>";
        echo "<title>Editar</title>";

        echo "</head>";
        echo "<body>";
        
        while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
            session_start();
            include_once("../modelo/sessao.php");
            $sessao = new sessao($linha['id'],$linha['especialidade'], $linha['custoHora'], $linha['dataSessao'], $linha['horario'], $linha['descricao']);
            echo '<form method="post" action="../controle/controle_cliente.php">';
            echo '<div">';
            '<div class="col">';
            '<label for="nome" class="form-label">especialidade</label>';
            "<input type='nome' class'form-control' id='nome' name='nome' value='. $linha[id]>'";
            '</div>';
            '</div>';
        }
        } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        } 
    }

    function SalvarEdicao($id, $especialidade, $custoHora, $dataSessao, $horario, $descricao){
        try {
        $pdo = new PDO("mysql:host=localhost;dbname=projeto_psicominds", "root", "");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $editar = $pdo->query("UPDATE sessao SET especialidade ='$especialidade', custoHora='$custoHora',dataSessao ='$dataSessao',horario ='$horario',descricao ='$descricao' WHERE id= '$id'");
        $editar->execute();
        echo "<script>alert('Alterado com sucesso!');</script>";
        } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
        }
    }

}