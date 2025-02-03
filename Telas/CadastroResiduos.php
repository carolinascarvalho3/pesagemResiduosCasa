<?php
    
    namespace PHP\Modelo\Tela;
    require_once('..\Residuos.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
    use PHP\Modelo\DAO\Residuos;

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

        .residuos{
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
            margin-top: 10px;
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

        .opcoes1{
            width: 200px;
            margin-right: 400px;

        }

        .opcoes2{
            margin-left: 10px;
        }

        .checkbox{
            margin-left: 40%;
        }

        .residuo{
            margin-right: 40%;
        }

        .form-group {
        display: flex;
        flex-direction: column;
        align-items: center;}

        </style>

        <header></header>

        <h1 class=residuos>CADASTRO DE RESÍDUOS</h1>

        <img src="imagens/PENSE ECO.png" width=200 height=auto alt="Imagem do aplicativo PENSE ECO">
    
    </style>

    <form method="POST">


    <div class="mb-3">
        <label for="lCodigo" class="campo1">CODIGO:</label>
        <input type="text" class="campo2" id="tCodigo" name="tCodigo" placeholder="Somente números">
    </div>

    <div class="mb-3">
        <label for="lNomeDoItem" class="campo1">NOME DO ITEM:</label>
        <input type="text" class="campo2" id="tNomeDoItem" name="tNomeDoItem" placeholder="Digite o nome do item">
    </div>

    <div class="mb-3">
        <label for="lPessoaQueRegistrou" class="campo1">PESSOA QUE REGISTROU:</label>
        <input type="text" class="campo2" id="tPessoaQueReigstrou" name="tPessoaQueRegistrou" placeholder="Digite seu nome">
    </div>

    <div class="checkbox">
        <label for="lPessoaQueRegistrou" class="residuo">RESÍDUO POSSUI MAIS DE UM MATERIAL? SELECIONE: </label>
        <br><br><input class="form-check-input" type="checkbox" id="" name="option1" value="something">
        <label class="form-check-label">Óleo</label>
        <br><input class="form-check-input" type="checkbox" id="" name="option1" value="something">
        <label class="form-check-label">Tampinhas de plástico</label>
        <br><input class="form-check-input" type="checkbox" id="" name="option1" value="something">
        <label class="form-check-label">Lacres de alumínio</label>
        <br><input class="form-check-input" type="checkbox" id="" name="option1" value="something">
        <label class="form-check-label">Tecidps</label>
        <br><input class="form-check-input" type="checkbox" id="" name="option1" value="something">
        <label class="form-check-label">Meias</label>
        <br><input class="form-check-input" type="checkbox" id="" name="option1" value="something">
        <label class="form-check-label">Material de escrita</label>
        <br><input class="form-check-input" type="checkbox" id="" name="option1" value="something">
        <label class="form-check-label">Esponjas</label><br><input class="form-check-input" type="checkbox" id="" name="option1" value="something">
        <label class="form-check-label">Eletrônicos</label><br><input class="form-check-input" type="checkbox" id="" name="option1" value="something">
        <label class="form-check-label">Pilhas e baterias</label><br><input class="form-check-input" type="checkbox" id="" name="option1" value="something">
        <label class="form-check-label">Infectantes</label><br><input class="form-check-input" type="checkbox" id="" name="option1" value="something">
        <label class="form-check-label">Químicos</label><br><input class="form-check-input" type="checkbox" id="" name="option1" value="something">
        <label class="form-check-label">Lâmpadas fluorescentes</label><br><input class="form-check-input" type="checkbox" id="" name="option1" value="something">
        <label class="form-check-label">Tôners de impressora</label><br><input class="form-check-input" type="checkbox" id="" name="option1" value="something">
        <label class="form-check-label">Esmaltes</label><br><input class="form-check-input" type="checkbox" id="" name="option1" value="something">
        <label class="form-check-label">Cosméticos</label><br><input class="form-check-input" type="checkbox" id="" name="option1" value="something">
        <label class="form-check-label">Cartela de medicamentos</label>



    </div>

    <br>


    <div class="mb-3">
        <label for="lPeso" class="campo1">PESO:</label>
        <select class="opcoes1" id="opcoes1" aria-label="Floating label select example">
            <option selected>Selecione um peso </option>
            <option value="1">1 Kg</option>
            <option value="2">10 Kg</option>
            <option value="3">15 Kg</option>
            <option value="4">20 Kg</option>
            <option value="5">30 Kg</option>
            <option value="6">50 Kg</option>
            <option value="7">100 Kg</option>
        </select>

        <label for="lPeso" class="campo1">Outro valor:</label>
        <input type="text" class="campo2" id="tPeso" name="tPeso" placeholder="A partir de 1Kg">


    </div>

    <div class="mb-3">

    
       
        <label for="lPeso" class="campo1">CATEGORIA:</label>
        <select class="opcoes2" id="opcoes2" aria-label="Floating label select example">
            <option selected>Selecione</option>
            <option value="1">Não reciclável</option>
            <option value="2">Reciclável</option>
            <option value="3">Óleo</option>
            <option value="4">Tampinhas plásticas</option>
            <option value="5">Lacres de alumínio</option>
            <option value="6">Tecidos</option>
            <option value="7">Meias</option>
            <option value="8">Material de escrita</option>
            <option value="9">Esponjas</option>
            <option value="10">Eletrônicos</option>
            <option value="11">Pilhas e baterias</option>
            <option value="12">Infectantes</option>
            <option value="13">Químicos</option>
            <option value="14">Lâmpada fluorescente</option>
            <option value="15">Tôners de impressora</option>
            <option value="16">Esmaltes</option>
            <option value="17">Cosméticos</option>
            <option value="18">Cartela de medicamento</option>

        </select>

        <input type="text" id="newCategory" placeholder="Adicionar nova categoria">
  <button type="button" onclick="addOption()">Adicionar</button>

  <script>
    function addOption() {
      var select = document.getElementById("opcoes2");
      var newCategory = document.getElementById("newCategory").value;
      if (newCategory.trim() !== "") {
        var option = document.createElement("option");
        option.text = newCategory;
        select.add(option);
        document.getElementById("newCategory").value = ""; // Limpa o campo de entrada
      }
    }

    </script>

    <br><br>
 
    <input type="text" id="removeOption" placeholder="Remova uma categoria">
    <button type="button" onclick="removeCategory()">Remover</button>

    <script>
    function removeOption() {
      var select = document.getElementById("opcoes2");
      var removeCategory = document.getElementById("removeCategory").value;
      for (var i = 0; i < select.options.length; i++) {
        if (select.options[i].text === removeCategory) {
          select.remove(i);
          document.getElementById("removeCategory").value = ""; // Limpa o campo de entrada
          break;
        }
      }
    }
  </script>
        
    

    </div>

    <div class="mb-3">
        <label for="lData" class="campo1">DATA:</label>
    <input type="text" class="campo2" id="tData" name="tData" placeholder="Somente números">
    </div>

   

    <br>

    <div>

        <div>
            <a class="voltar"  href="menu.php">Menu</a>
        </div>
        
        <button class="submit" type="submit">Cadastrar
            <?php
            $conexao = new Conexao();//Conectar no Banco

            if(isset($_POST['tCodigo'])){   
                $codigo = $_POST['tCodigo'];
                $nomeDoItem = $_POST['tNomeDoItem'];
                $pessoaQueRegistrou = $_POST['tPessoaQueRegistrou'];
                $peso = $_POST['tPeso'];
                $categoria = $_POST['tCategoria'];
                $dataRegistro = $_POST['tDataRegistro'];
                



            $inserir = new Inserir();
            echo $inserir->cadastrarResiduos($conexao, $codigo, $nomeDoItem, $pessoaQueRegistrou, $peso, $categoria, $dataRegistro);
            }
        

            ?>
        </button>
        

    </div>
</form>

    


<footer>
    
    
</footer>



</body>
</html>