<?php
    namespace PHP\Modelo\DAO;


    class Conexao{
        function conectar(){
                try{
                $conn = mysqli_connect('localhost', 'root', '', 'pesagemResiduos');
                if($conn)
                echo "<br>Conectado com sucesso!";
                return $conn;
    
        
                }catch(Except $erro){
                { 
                return "<br>Algo deu errado...";
                }
            echo "<br>Algo deu errado...";
            }//fim do conectar
        }
    
        
    }//fim da classe





?>