<?php
    namespace PHP\Modelo\Tela;
    require_once('..\Funcionario.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\Funcionario;

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

        .funcionario{
            margin-left: 30%;
        }

        </style>

        <header></header>

        <h1 class=funcionario>CADASTRO DE FUNCIONÁRIO</h1>

        <img src="imagens/PENSE ECO.png" width=200 height=auto alt="Imagem do aplicativo PENSE ECO">
        
    </style>
    
    

    <form method="POST">


    <div class="mb-3">
        <label for="lCpf" class="campo1">CPF:</label>
        <input type="text" class="campo2" id="tCpf" name="tCpf" placeholder="Somente números">
    </div>

    <div class="mb-3">
        <label for="lNome" class="campo1">NOME:</label>
        <input type="text" class="campo2" id="tNome" name="tNome" placeholder="Digite o nome do item">
    </div>

    <div class="mb-3">
        <label for="lTelefone" class="campo1">TELEFONE:</label>
        <input type="text" class="campo2" id="tTelefone" name="tTelefone" placeholder="Digite seu nome">
    </div>

    <div class="mb-3">
        <label for="lEndereco" class="campo1">ENDERECO:</label>
        <input type="text" class="campo2" id="tEndereco" name="tEndereco" placeholder="Digite o endereço">
    </div>

    <div class="mb-3">
        <label for="lCodigo" class="campo1">CÓDIGO</label>
        <input type="text" class="campo2" id="tCodigo" name="tCodigo" placeholder="Digite o endereço">
    </div>

    


    <br>

    <div>

        <div>
            <a class="voltar"  href="menu.php">Menu</a>
        </div>
        
        <button class="submit" type="submit">Cadastrar
            <?php
            $conexao = new Conexao();//Conectar no Banco

            if(isset($_POST['tCpf'])){   
                $cpf = $_POST['tCpf'];
                $nome = $_POST['tNome'];
                $telefone = $_POST['tTelefone'];
                $endereco = $_POST['tEndereco'];
                $codigo = $_POST['tCodigo'];

            $inserir = new Inserir();
            echo $inserir->cadastrarResiduo($conexao, $cpf, $nome, $telefone, $endereco, $codigo);
            }
        

            ?>
        </button>
        


    </div>
</form>

    


<footer>
    
    
</footer>



</body>
</html>