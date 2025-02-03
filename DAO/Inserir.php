<?php
    namespace PHP\Modelo\DAO;
    require_once('..\DAO\Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Inserir{
        
        function cadastrarFuncionario(Conexao $conexao, int $cpf, string $nome, string $telefone, string $endereco, int $codigo){

            try{
            $conn = $conexao->conectar();
            $sql = "Insert into funcionario(cpf, nome, telefone, endereco, codigo)
                values('$cpf', '$nome', '$telefone','$endereco', '$codigo')";

                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }

                return "<br><br>Não inserido!";


            }
            catch(Except $erro)
            {
            return "<br><br>Algo deu errado...".$erro;
            }

        }//fim do método

        function cadastrarResiduos(Conexao $conexao, string $nomeDoItem, string $pessoaQueRegistrou, string $categoria, float $peso, string $codigo){

            try{
            $conn = $conexao->conectar();
            $sql = "Insert into funcionario(cpf, nome, telefone, endereco, codigo)
                values('$cpf', '$nome', '$telefone','$endereco', '$codigo')";

                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                if($result){
                    return "<br><br>Inserido com sucesso!";
                }

                return "<br><br>Não inserido!";


            }
            catch(Except $erro)
            {
            return "<br><br>Algo deu errado...".$erro;
            }

        }//fim do método

    }//fim da classe


?>