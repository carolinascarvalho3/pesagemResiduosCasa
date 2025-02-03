<?php
    namespace PHP\Modelo\Telas;
?>
<!DOCTYPE HTML>
<html>
<head>
   
        <meta charset="UTF-8">
        <title>Menu</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="css/estilo.css">

</head>
<body>

    <style>
        header{
            width: 100%;
            height: 70px;
            background-color: rgb(170, 223, 194);
        }

        h1{
           margin-left: 40%;
           margin-bottom: 40px;
        }
        
        img{
            margin-left: 40%;
        }

        footer{
            width: 100%;
            height: 70px;
            background-color: rgb(170, 223, 194);
            margin-top: 130px;

            
        }

        .botao1{
            background-color: rgb(170, 223, 194);
            margin-left: 100px;
            width: 200px;
            border: none;
            border-radius: 10px;
            margin-top: 10px;

        }

        
    </style>

        <header></header>

        <h1>PENSE ECO</h1>

        <img src="imagens/PENSE ECO.png" width=200 height=auto alt="Imagem do aplicativo Pense ECO">

    <div>

        <a href="cadastroFuncionario.php"><button class="botao1">CADASTRAR <br>FUNCIONÁRIO</button></a>
        <a href="consultarFuncionario.php"><button class="botao1">CONSULTAR <br>FUNCIONÁRIO</button></a>
        <a href="atualizarFuncionario.php"><button class="botao1">ATUALIZAR <br>FUNCIONÁRIO</button></a>
        <a href="excluirFuncionario.php"><button class="botao1">CONSULTAR <br>FUNCIONÁRIO</button></a>
        <a href="cadastroResiduos.php"><button class="botao1">CADASTRAR <br>RESÍDUOS</button></a>
        <a href="atualizarResiduos.php"><button class="botao1">ATUALIZAR <br>RESÍDUOS</button></a>
        <a href="consultarResiduos.php"><button class="botao1">CONSULTAR <br>RESÍDUOS</button></a>
        <a href="excluirResiduos.php"><button class="botao1">EXCLUIR <br>RESÍDUOS</button></a>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <footer>
    
        
    
    </footer>
</body>
</hmtl>