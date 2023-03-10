<?php

require_once 'conexao.php';
abstract class ManutencaoPadrao {

    protected abstract function executaInclusao();
    protected abstract function executaAlteracao();
    protected abstract function buscaDadosAlteracao();

    // Novos metodos
    protected abstract function getNomeTabela();
    protected abstract function getNomeColunaChave();

    public function __construct(){
        $this->processaDados();
    }

    protected function executaConsulta(){
        $aDados = $this->getDadosFromBancoDados();

        echo json_encode($aDados);
    }

    protected function executaExclusao (){
        $registro = json_decode($_POST[$this->getNomeTabela()], true);

        $chave_id = $registro[$this->getNomeColunaChave()];

        $query = "DELETE FROM `" . $this->getNomeTabela() . "` WHERE `" . $this->getNomeColunaChave() . "` = :" . $this->getNomeColunaChave();

        /** @var PDO $pdo */
        $pdo = getConexao();

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(':' . $this->getNomeColunaChave(), $chave_id, PDO::PARAM_INT);

        $stmt->execute();

        $stmt = null;
        $pdo = null;
    }


    protected function getDadosFromBancoDados($chave_id = false){
        /** @var PDO $pdo */
        $pdo = getConexao();

        $query = "SELECT * FROM `" . $this->getNomeTabela() . "`";
        if($chave_id){
            $query = "SELECT * FROM `" . $this->getNomeTabela() . "` WHERE `" . $this->getNomeColunaChave() . "` = " . $chave_id;
        }

        $stmt = $pdo->prepare($query);
        $stmt->execute();

        $aDados = array();
        while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
            $aDados[] = $result;
            if($chave_id){
                $aDados = $result;
            }
        }

        $stmt = null;
        $pdo = null;

        return $aDados;
    }

    protected function processaDados(){
        if (isset($_POST["acao"])) {
            $acao = $_POST["acao"];

            switch ($acao) {
                case "EXECUTA_CONSULTA":
                    $this->executaConsulta();
                    break;
                case "EXECUTA_INCLUSAO":
                    $this->executaInclusao();
                    break;
                case "EXECUTA_ALTERACAO":
                    $this->executaAlteracao();
                    break;
                case "BUSCA_DADOS_ALTERACAO":
                    $this->buscaDadosAlteracao();
                    break;
                case "EXECUTA_EXCLUSAO":
                    $this->executaExclusao();
                    break;
            }
        } else {
            echo json_encode(array("mensagem" => "Funcao invalida!"));
        }
    }
}