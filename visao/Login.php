<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <style>
    body{
    background: #3C4CDE;
    }

    @import url('https://fonts.googleapis.com/css2?family=Archivo+Black&display=swap%27');
    .PsicoMindsTitulo{
    position: absolute;
    width: 560px;
    height: 96px;
    left: 60px;
    top: 120px;

    font-family: 'Archivo Black', sans-serif;
    font-style: normal;
    font-weight: normal;
    font-size: 90px;
    line-height: 96px;

    color: #FFFFFF;
    }



    .imagem{
        position: absolute;
        width: 630px;
        height: 400px;
        left: 670px;
        top: 182px;
    }

    .div{
        position: absolute;
        width: 600px;
        height: 200px;
        left: 54px;
        top: 290px;
    }


    .input{
        position: relative;
        width: 600px;
        height: 50px;
        left: 54px;
        bottom: 331px;
        top:320px;

        background: #FAFAFC;
        float:left;

        border: 1px solid #E6E6F0;
        box-sizing: border-box;
        border-radius: 8px;
    }

    .label{
        position: absolute;
        width: 118px;
        height: 24px;
        left: 64px;
        bottom: 500px;
        top: 300px;
        float:left;

        font-family: Poppins;
        font-style: normal;
        font-weight: normal;
        font-size: 24px;
        line-height: 24px;

        color: #9C98A6;
    }
    .label1{
        position: absolute;
        width: 118px;
        height: 24px;
        left: 64px;
        bottom: 500px;
        top: 390px;
        float:left;

        font-family: Poppins;
        font-style: normal;
        font-weight: normal;
        font-size: 24px;
        line-height: 24px;

        color: #9C98A6;
    }

    .botao{
        position: absolute;
        width: 600px;
        height: 72px;
        left: 62px;
        top: 490px;

        float:left;

        background: #E33D3D;
        border-radius: 10px;
        font-family: 'Archivo Black', sans-serif;
        font-style: normal;
        font-weight: normal;
        font-size: 36px;
        line-height: 39px;
        text-emphasis: none;
        text-align: center;
        color: #FFFFFF;
    }

    .cerebro{
        position: absolute;
        width: 100px;
        height: 100px;
        left: 20px;
        top: 15px;
    }       
    </style>
</head>
<body>
    <a href="../visao/Index.php">
        <img  class="cerebro" src="https://www.nicepng.com/png/full/114-1149034_download-svg-download-png-brain-emoji-transparent-background.png" alt="Voltar">
    </a>
    <h1 class="PsicoMindsTitulo">PSICOMINDS</h1>
    <img class="imagem" src="https://images.squarespace-cdn.com/content/v1/5e48db6c773e7329ddec5e68/1629956386035-QOER6I5BLF0MR43EQ2U4/Group+2076.png?format=1000w" alt="">
    <form class="formulario" id="login" method="post" action="../controle/controle_psicologo.php">
        <div class="caixa">
            <label  class="label" for="e-mail">E-mail:</label>
            <input  class="input" type="text" name="email" id="e-mail"> <br> <br> <br> <br> <br>

            <label class="label1" for="senha">Senha:</label>
            <input class="input" type="password" name="senha" id="senha"> <br> <br>

                <input class="botao" type="submit" name="bt_enviar" value="Entrar">
            
        </div>
    </form>

    
</body>
</html>