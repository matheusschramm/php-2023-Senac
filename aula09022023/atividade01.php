<?php

require_once 'conexao.php';

function getDados() {
    /** @var PDO $pdo */
    $pdo = getConexao();

    $query = "SELECT * FROM `cliente`";

    $stmt = $pdo->prepare($query);

    $stmt->execute();

    // percorrer os dados e colocar num array
    $aDados = array();
    while($result = $stmt->fetch(PDO::FETCH_ASSOC)){
        $aDados[] = $result;
    }

    return $aDados;
}

function getColunasTabela(){
	$html_colunas_tabela = '';

	// busca os dados do banco de dados
    $aDados = getDados();
	
    if(count($aDados)){
        foreach ($aDados as $aCliente){
            // inicia linha
            $html_colunas_tabela .= "<tr>";

            $cliente_id = $aCliente["cliente_id"];
            $nome       = $aCliente["nome"];
            $telefone   = $aCliente["telefone"];
            $email      = $aCliente["email"];
            $cidade     = $aCliente["cidade"];

            // Colunas
            $html_colunas_tabela .= "<td>$cliente_id</td>";
            $html_colunas_tabela .= "<td>$nome</td>";
            $html_colunas_tabela .= "<td>$telefone</td>";
            $html_colunas_tabela .= "<td>$email</td>";
            $html_colunas_tabela .= "<td>$cidade</td>";

            // finaliza linha
            $html_colunas_tabela .= "</tr>";
        }
    } else {
        // Retorna uma coluna vazia
		$html_colunas_tabela .= "<tr><td colspan=\"7\" align='center'>Sem dados para exibir</td></tr>";
    }

	return $html_colunas_tabela;
}

function carregaClientes(){
// Lista de Contatos em HTML com os dados do banco de dados(tabela html)
    $html_tabela = "<table border='1'>";

    $html_tabela .= "<caption><h1>Clientes</h1></caption>";

    $html_tabela .= "<thead>";
// iniciando linha
    $html_tabela .= "    <tr>";
// colunas cabecalho
    $html_tabela .= "    <th>Id</th>";
    $html_tabela .= "    <th>Nome</th>";
    $html_tabela .= "    <th>Telefone</th>";
    $html_tabela .= "    <th>E-mail</th>";
    $html_tabela .= "    <th>Cidade</th>";
// fechando linha
    $html_tabela .= "    </tr>";
    $html_tabela .= "</thead>";

// dados do corpo da tabela
    $html_tabela .= "<tbody>";

// Colunas
    $html_tabela .= getColunasTabela();

    $html_tabela .= "</tbody>";

    $html_tabela .= "</table>";

    echo $html_tabela;
}

carregaClientes();