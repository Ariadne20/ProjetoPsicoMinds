    <?php
    session_start();
    ?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/criarAnuncio.css">
    <style>
    body {
    background-color: #e5e5e5;
    }

    header {
        margin: 0px;
        width: 1350px;
        height: 200px;
        left: 0px;
        top: 0px;
        background: #3C4CDE;
    }

    #Psicominds{
        text-align: right;
        color: white;
        width: 1300px;
    }

    #FrasePsico{
        text-align: center;
        color: white;
        font-size: 24px;
        
    }


    #Fraseanuncio {
        text-align: center;
        color: white;
        font-size: 20px;
    }

    #imagem_header {
        padding-top: 20px;
        position: absolute;
        width: 120px;
        height: 100px;
        left: 25px;
        top: 11px;
    }

    #especialidade{
        width: 200px;
        height: 24px;
        top: 1804px;
        left: 100px;
        font-family: Poppins;
        font-weight: normal;
        font-style: normal;
        font-size: 14px;
        line-height: 24px;
        color: #9c98a6;

   }


  #container {
      position: absolute;
      width: 736px;
      height: 772px;
      top: 250px;
      left: 320px;
      background-color: #fff;
      border: 1px solid black;
      box-sizing: border-box;
      border-radius: 8px;
  
    }

    #div_conteudo {
        width: 733px;
        text-align: center;
        background-color: white;
        height: 600px;
    }

    #custodahora {
        padding-left: 40px;
        text-align: left;
        width: 300px;
        height: 24px;
        top: 1918px;
        left: 2300px;
        font-family: Poppins;
        font-weight: normal;
        font-style: normal;
        font-size: 14px;
        line-height: 24px;
        color: #9c98a6;
    }

    #custo{
        width: 608px;
        height: 40px;
        top: 120px;
        left: 50px;
        border-radius: 8px;
        position: absolute;
        background-color:#FAFAFC;
        border: 1px solid #e6e6f0;
        box-sizing: border-box;
    }

    #fildvalor{
        
        border-top:0px;
        border-left: 0px; 
        border-right: 0px;
        border: 0px;
    }


    #fildataSessao{
        border-top:0px;
        border-left: 0px; 
        border-right: 0px;
        border: 0px;

    }

    #dataSessaodases{
        width: 210px;
        height: 24px;
        border: 1000px;
        left: 2500px;
        font-family: Poppins;
        font-weight: normal;
        font-style: normal;
        font-size: 14px;
        line-height: 24px;
        color: #9c98a6;
    }

    #input_date{
        position: absolute;
        width: 320px;
        height: 56px;
        left: 50px;
        background-color: #FAFAFC; 
        border: 1px solid #e6e6f0;
        box-sizing: border-box;
        border-radius: 8px; 
    }




    #input_time{
        position: absolute;
        width: 150px;
        height: 56px;
        left: 500px;
        top: 250px;
        background-color: #FAFAFC; 
        border: 1px solid #e6e6f0;
        box-sizing: border-box;
        border-radius: 8px; 

    }

    #filddescricao{
        border: 0px;
    }

    #descricaoses{
        position:absolute;
        width: 146px;
        height: 24px;
        top: 320px;
        left: 38px;
        font-family: Poppins;
        font-weight: normal;
        font-style: normal;
        font-size: 14px;
        line-height: 24px;
        color: #9c98a6;
    }

    #Descricao{
        width: 608px;
        height: 123px;
        border-radius: 8px;
        top: 360px;
        left: 50px;
        position: absolute;
        background-color: #FAFAFC;
        border: 1px solid #e6e6f0;
        box-sizing: border-box;
        
    }

    #rodape{
        width: 731px;
        height: 170px;
        border-radius: 8px;
        top: 600px;
        position: absolute;
        background-color: #FAFAFC;
        border: 1px solid #e6e6f0;
        box-sizing: border-box;

    }

    #imagem_rod{
        position: absolute;
        width: 50px;
        height: 50px;
        left: 70px;
        top: 60px;
    }

    #frase_roda{
        position: absolute;
        width: 400px;
        top: 50px;
        height: 50px;
        font-family: Poppins;
        font-style: normal;
        font-weight: normal;
        font-size: 12px;
        line-height: 20px;
        color: #a0a0b3;
    }

    #botao2{
        background-color: #3e834d;
        width: 197px;
        display: flex;
        flex-direction: row;
        align-items: center;
        padding: 15px 40px;
        height: 56px;
        position: absolute;
        align-items: center;
        left: 500px;
        top: 30px;
        color: white;
        font-weight: bold;

        ;
        
    }


    #botao1{
        position: absolute;
        width: 200px;
        height: 26px;
        border: 0px;
        font-family: Archivo;
        font-style: normal;
        font-weight: 600;
        font-size: 16px;
        line-height: 26px;
        color: #8257E5;
        background-color: white;
        top: 173px;
        left: 470px;
        
        }

    #ret{
        width: 608px;
        height: 40px;
        top: 40px;
        left: 50px;
        border-radius: 8px;
        position: absolute;
        background-color:#FAFAFC;
        border: 1px solid #e6e6f0;
        box-sizing: border-box;
    }

    .a{
        text-decoration: none;
        color: #FAFAFC;
    }
    .botao{
        position: relative;
        width: 600px;
        height: 52px;
        left: 62px;
        top: 50px;

        float:left;

        background: #E33D3D;
        border-radius: 10px;
        font-family: 'Archivo Black', sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 28px;
        line-height: 39px;
        text-emphasis: none;
        text-align: center;
        color: #FFFFFF;
        margin: 2px;
    }
    .buscar{
        position: relative;
        width: 600px;
        height: 52px;
        left: 62px;
        top: 50px;

        float:left;

        font-family: 'Archivo Black', sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 28px;
        line-height: 39px;
        text-emphasis: none;
        text-align: center;
        color: black;
        margin: 2px;
    }

    .preencher{
        position: relative;
        width: 200px;
        height: 30px;
        left: 62px;
        top: 50px;
        float: left;
    }
    </style>
</head>

<script src="script/jquery-3.6.0.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<body>

    <header>
            <form method="post" action="../controle/controle_psicologo.php">
                <input style="margin:5px" type="submit" name="sair" value="Sair">
            </form>
        </a>
        </nav>
        <h1 id="Psicominds"> PSICOMINDS</h1>
        <h2 id="FrasePsico">    
            <?php
                echo "<h2 id='Fraseanuncio'>E-mail do usuário logado: " . $_SESSION['email'] . "</h2>";
            ?>
        </h2>
        <h2 id="FrasePsico"> O que você deseja fazer? </h2>
    </header>

    <div id="container">

        <div id="div_conteudo" role="main">

        <form id="Cadastro" method="post" action="../controle/controle_sessao.php">


            <button class="botao" type="submit" name="listar">Listar todos os anúncios</button>
            <button class="botao"><a href="../visao/criarAnuncio.php" style="text-decoration:none; color:white">Criar um anúncio</button></a>
            <label class="buscar"for="especialidae">Busque por especialidade:</label>

            
            <select style="height:34px; width:465px; margin: 2px"  class="preencher" name="especialidade">
                    <optgroup>
                        <option name="especialidade" value="Terapia Ocupacional">Terapia Ocupacional</option>
                        <option name="especialidade" value="Terapia de Casal"> Terapia de Casal </option>
                        <option name="especialidade" value="Psicoanalise"> Psicoanálise </option>
                        <option name="especialidade" value="Terapia Transpessoal"> Terapia Transpessoal </option>
                    </optgroup>
                </select><br>
                <br>
                <button  style="background-color:#3C4CDE; margin:2px; border-radius:5px; width:127px; height:34px" type= submit; name="salvarSessao" class="preencher"><a class="a">Pesquisar</a></button>

            </form>
        </div>

    </div>

</body>

</html>
