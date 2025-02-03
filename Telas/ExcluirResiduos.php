<?php
    namespace PHP\Modelo\Telas;
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Excluir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Excluir;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXCLUIR FUNCIONÁRIO</title>

    

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
           font-family: 'Helvetica';
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

        form{
            margin-left: 400px;
            font-family: 'Helvetica';

        }

        .submit{
            margin-right: 1000px;
        }

        </style>

        <header></header>

        <h1>EXCLUIR RESÍDUOS</h1>

        <img src="imagens/PENSE ECO.png" width=200 height=auto alt="Imagem do aplicativo PENSE ECO">

    <form method="POST">
        <label>CPF: </label>
        <input type="text" name="tCpf">

        <button class="submit" type="submit">Excluir
            <?php
                $conexao = new Conexao();
                if(isset($_POST['tCpf'])){
                $cpf = $_POST['tCpf'];
                $excluir = new Excluir(); 

            }
            ?>
        </button>
    </form>

        <div>
            <a class="voltar"  href="menu.php">Menu</a>
        </div>

    <?php
        if(isset($_POST['tCpf'])){
            echo $excluir->excluirResiduos($conexao, $cpf);
        }else{
        echo "Informe um CPF válido!";
        }
    ?>

    
    <footer></footer>
</body>
</html>