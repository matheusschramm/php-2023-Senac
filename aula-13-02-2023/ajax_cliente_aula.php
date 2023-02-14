<?php
require_once 'conexao.php';

function executaExclusao (){
    $registro = json_decode($_POST["cliente"], true);

    $cliente_id = $registro["cliente_id"];

    $query = "DELETE FROM `cliente` WHERE `cliente_id` = :cliente_id";

    /** @var PDO $pdo */
    $pdo = getConexao();

    $stmt = $pdo->prepare($query);

    $stmt->bindParam(':cliente_id', $cliente_id, PDO::PARAM_INT);

    $stmt->execute();

    $stmt = null;
    $pdo = null;
}

function executaConsulta(){
    $aDados = getDadosFromBancoDados();

    echo json_encode($aDados);
}

function getDadosFromBancoDados($cliente_id = false){
    /** @var PDO $pdo */
    $pdo = getConexao();

    $query = "SELECT * FROM `cliente`";
    if($cliente_id){
        $query = "SELECT * FROM `cliente` WHERE cliente_id = $cliente_id";
    }

    $stmt = $pdo->prepare($query);
    $stmt->execute();

    $aDados = array();
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $aDados[] = $result;
        if($cliente_id){
            $aDados = $result;
        }
    }

    $stmt = null;
    $pdo = null;

    return $aDados;
}

function buscaDadosAlteracao(){
    $registro = json_decode($_POST["cliente"], true);

    $cliente_id = $registro["cliente_id"];

    $aDados = getDadosFromBancoDados($cliente_id);

    echo json_encode($aDados);
}

function executaAlteracao(){

}

if (isset($_POST["acao"])) {
    $acao = $_POST["acao"];

    switch ($acao) {
        case "EXECUTA_CONSULTA":
            executaConsulta();
            break;
        case "EXECUTA_INCLUSAO":
            executaInclusao();
            break;
        case "EXECUTA_ALTERACAO":
            executaAlteracao();
            break;
        case "BUSCA_DADOS_ALTERACAO":
            buscaDadosAlteracao();
            break;
        case "EXECUTA_EXCLUSAO":
            executaExclusao();
            break;
    }
} else {
    echo json_encode(array("mensagem" => "Funcao invalida!"));
}