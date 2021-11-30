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
            height: 272px;
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
            top: 300px;
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
    </style>
</head>

<body>

    <header>
        <a href="../visao/home.php"><img src="https://www.nicepng.com/png/full/114-1149034_download-svg-download-png-brain-emoji-transparent-background.png"
                id="imagem_header"></a>
        </nav>
        <h1 id="Psicominds"> PSICOMINDS</h1>
        <h2 id="FrasePsico">Cadastre um anúncio</h2>
        <p id="Fraseanuncio">Faça um anúncio sobre sua sessão</p>
    </header>

    <div id="container">

        <div id="div_conteudo" role="main">


            <p id="especialidade">
                Especialidade</p>

            <form id="Cadastro" method="post" action="../controle/controle_sessao.php">

                <select id="ret" name="especialidade">
                    <optgroup>
                        <option name="especialidade" value="Terapia Ocupacional">Terapia Ocupacional</option>
                        <option name="especialidade" value="Terapia de Casal"> Terapia de Casal </option>
                        <option name="especialidade" value="Psicoanalise"> Psicoanálise </option>
                        <option name="especialidade" value="Terapia Transpessoal"> Terapia Transpessoal </option>
                    </optgroup>
                </select><br>
                <br>


                <fieldset id="fildvalor">
                    <legend id="custodahora">Custo por hora (R$) </legend>
                    <p><input type="number" id="custo" name="custoHora"></p>
                </fieldset>


                <fieldset id="fildataSessao">

                    <label for="Horario" style="text-align: initial;">
                        <h2 style="width: 231px;
                                   height: 34px;
                                   font-family: Archivo;
                                   font-weight: 600px;
                                    font-size: 24px
                                    line-height 34px;
                                    color: #32264d;
                                    padding-left: 40px;
                                   ">Horarios disponíveis</h2>
                    </label>
                    <h1 id="dataSessaodases">data e horario da sessão</h1>
                    <label for="dataSessao"></label>
                    <input type=date name="dataSessao" id="input_date" min="2021-11-01" max="2025-12-31">

                    <label class="Horario"></label>
                    <input type="time" name="horario" id="input_time">

                </fieldset>


                <fieldset id="filddescricao">
                    <h2 id="descricaoses">Descrição da sessão</h2>
                    <label for="Descricao">

                    </label>
                    <textarea name="descricao" id="Descricao" cols="50" rows="10"></textarea>

                </fieldset>
        

            <fieldset id="rodape">
                <p id="frase_roda">Importante!<br>
                    Preencha todos os dados
                </p>
                <img src="https://w7.pngwing.com/pngs/148/181/png-transparent-bristow-public-domain-purple-exclamation-mark-angle-violet-triangle-thumbnail.png"
                    id="imagem_rod">

                    <button  type= submit; name="criarAnuncio" id="botao2"><a class="a">Salvar Cadastro</a></button>
            </fieldset>

            </form>
        </div>

    </div>

</body>

</html>