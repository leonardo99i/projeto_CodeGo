<?php
    if(!empty($_GET['id'])){
        include_once('../Modelo/conexaoInscricao.php');

        $id = $_GET['id'];
    
        $sqlSelect = "SELECT * FROM inscricao_aluno WHERE id=$id";
    
        $result = $conexao->query($sqlSelect);
        
        if($result->num_rows > 0){
            $sqlDelete = "DELETE FROM inscricao_aluno WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);  
        }
        
    }
    header('Location: registros.php')
?>