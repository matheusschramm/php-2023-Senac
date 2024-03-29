<?php

$html = '<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,400;0,700;1,200;1,800&display=swap"
          rel="stylesheet">

    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/records.css">
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/header.css">
    <script src="js/jquery.min.js" defer></script>

    <title>VENDA</title>
</head>
<body>
    <header class="header">
        <ul class="menu">
            <li><a href=\'Home.php\'>Home</a></li>
            <li><a href=\'ConsultaCliente.php\'>Clientes</a></li>
            <li><a href=\'ConsultaContato.php\'>Contatos</a></li>
            <li><a href=\'consulta-produto-simples.php\'>Produtos</a></li>
            <li><a href=\'consulta-venda-simples.php\'>Vendas</a></li>
            <!--<li>Config
                <ul>
                    <li>Admin</li>
                    <li>Usuarios</li>
                    <li>Relatorios</li>
                </ul>
            </li> -->
        </ul>
    </header>
    <header>
        <h1 class="header-title">Cadastro de Vendas</h1>
    </header>
    <main>
        <section class="acoes">
            <button type="button" class="button green" id="consultarDados">Consultar</button>
            <button type="button" class="button blue mobile" id="cadastrarVenda">Incluir</button>
            <button type="button" class="button red" id="limparDados">Limpar Dados</button>
        </section>
        <table id="tableClient" class="records">
            <caption><h1>Vendas</h1></caption>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Cliente</th>
                    <th>Forma Pagamento</th>
                    <th>Total</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
        <div class="modal" id="modal">
                <div class="modal-content">
                    <header class="modal-header">
                        <h2>Nova Venda</h2>
                        <span class="modal-close" id="modalClose">&#10006;</span>
                    </header>
                    <form id="form" class="modal-form">
                        <input type="hidden" id="id" data-index="new" class="modal-field" placeholder="Id">
                        <input type="text" id="cliente" class="modal-field" placeholder="Código do Cliente" required value="1">
                        <input type="text" id="formapagamento" class="modal-field" placeholder="Estoque" required value="DINHEIRO">
                        <input type="text" id="total" class="modal-field" placeholder="Total da Venda" required value="10,00">
                    </form>
                    <footer class="modal-footer">
                        <button id="salvar" class="button green">Salvar</button>
                        <button id="cancelar" class="button blue">Cancelar</button>
                    </footer>
                </div>
        </div>
    </main>
    <footer>
        Copyright &copy; Prof. Gelvazio Camargo
    </footer>
</body>

<script src="js/venda.js" defer></script>

</html>
';

echo $html;
