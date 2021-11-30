<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página Inicial</title>
    <link rel="stylesheet" type="text/css" href="css/index.css">
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

    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;1,100&display=swap');
    .texto{
        position: absolute;
        width: 360px;
        height: 80px;
        left: 180px;
        top: 250px;
        
        font-family: 'Poppins', sans-serif;
        font-style: normal;
        font-weight:normal;
        font-size: 30px;
        color: #FFFFFF;   
    }

    .botao{
        padding: 10px;
        position:relative;
        
        width: 279px;
        height: 111px;
        left: 35px;
        top: 390px;
        margin-left: 5px;
        margin-top: 5px;
        
        background: #E33D3D;
        border-radius: 15px;
        float:left;

        font-family: 'Archivo Black', sans-serif;;
        font-style: normal;
        font-weight: normal;
        font-size: 25px;
        color: #FFFFFF;
    }

    a{
        text-decoration: none;
        color: #FFFFFF;
    }
    </style>
</head>

<body>
    <h1 class="PsicoMindsTitulo">PSICOMINDS</h1>
    <a href=""><img class="imagem" src="https://images.squarespace-cdn.com/content/v1/5e48db6c773e7329ddec5e68/1629956386035-QOER6I5BLF0MR43EQ2U4/Group+2076.png?format=1000w" alt="Paciente e Psicólogo fazendo uma sessão"></a>

    <h4 class="texto">Tenha acesso a terapia on-line de onde estiver</h4>
    <a href="../visao/Cadastro.php">
        <div><button class="botao">Registre-se</button></div>
    </a>
    <a href="../visao/Login.php">
        <div><button class="botao">Faça login</button></div>
    </a>

</body>
</html>