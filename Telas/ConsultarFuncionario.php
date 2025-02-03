<?php
    namespace PHP\Modelo\Tela;
    require_once('..\DAO\Consultar.php');
    require_once('..\DAO\Conexao.php');

    use PHP\Modelo\DAO\Consultar;
    use PHP\Modelo\DAO\Conexao;

?>

<!DOCTYPE HTML>
<html>
<head>
        
        <meta charset="UTF-8">
        <title>Consultar Funcionário</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

            
</head>
<body>

    <style>
        header{
            width: 100%;
            height: 70px;
            background-color: rgb(170, 223, 194);
        }

        .consultarF{
           margin-left: 30%;
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

        
        .campo1{
            border-radius: 10px;
            margin-left: 36%;
        }

        .campo2{
            border-radius: 4px;
            
        }

        .consultar{
            margin-left: 550px;
            border: 1px;
           background-color: rgb(170, 223, 194);
           width: 100px;
           height: 60px;
            
        }

        .voltar{
            text-decoration: none;
            margin-left: 80px;
            font-size: larger;
            width: 100px;
            float: left;
            height: auto;
            background-color: rgb(170, 223, 194);
            border-radius: 10px;
            text-align: center;
            font-family: 'Berlin Sans FB';
            font-size: larger;
            
        }

        
        </style>

        <header></header>

        <h1 class=consultarF>CONSULTAR FUNCIONÁRIO</h1>

        <img src="imagens/PENSE ECO.png" width=200 height=auto alt="Imagem do aplicativo PENSE ECO">
    </style>
    
    <form method="POST">
        <div class="mb-3">
            <label for="floatingSelect" class="campo1">Digite um CPF cadastrado:</label>
            <input type="text" class="campo2" id="tCpf" name="tCpf" placeholder="Digite aqui">


        </div>

         <button class="consultar" type="submit">Consultar</button>
    </form>

        <div>
            <a class="voltar"  href="menu.php">Menu</a>
        </div>      

    <?php
        if(isset($_POST['tCpf'])){
            echo $consultar->consultarFuncionarioIndividual($conexao, $cpf);
        }else{
        
        }

    ?>

    <footer></footer>
</body>
</html>