<?php
    namespace PHP\Modelo\Telas;
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Atualizar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Atualizar;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        
        .campo1{
            border-radius: 10px;
            margin-left: 36%;
        }

        .campo2{
            border-radius: 4px;
            
        }

        .submit{
            margin-left: 400px;
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

        <h1>ATUALIZAR FUNCIONÁRIO</h1>

        <img src="imagens/PENSE ECO.png" width=200 height=auto alt="Imagem do aplicativo PENSE ECO">

   
<form method="POST">
    <label>CPF:</label>
    <input type="string" name="tCpf"/><br><br>

    <label>Escolha o campo que deseja atualizar:</label>
    <select name="tCampo">
        <option value="nome">NOME</option>
        <option value="telefone">TELEFONE</option>
        <option value="endereco">ENDEREÇO</option>
        <option value="Código">CÓDIGO DE FUNCIONÁRIO</option>
    </select><br><br>

    <label>NOVO DADO: </label>
    <input type="text" name="tNovoDado"/><br><br>

    <button class="submit" type="submit">Atualizar</button>
        <?php
        $conexao = new Conexao();
        if(isset($_POST['tCpf'])){
        $atualizar = new Atualizar();

        $cpf = $_POST['tCpf'];
        $campo = $_POST['tCampo'];
        $novoDado = $_POST['tNovoDado'];
        }

       ?>
    
        <div>
            <a class="voltar"  href="menu.php">Menu</a>
        </div>

</form>
        <?php
            if(isset($_POST['tCpf'])){
            echo $atualizar->atualizarFuncionario($conexao, $campo, $novoDado, $cpf);
        }
        ?>

        <footer></footer>
</body>
</html>