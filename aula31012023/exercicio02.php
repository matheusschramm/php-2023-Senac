<?php

// $enunciado = "Crie uma ficha de matricula universitaria para os alunos que querem ingressar na faculdade.<br>
// Para isso, utilize no minimo os campos abaixo:<br>
// Use como base o link de inscricao no IFC de Rio do Sul:<br>
// https://docs.google.com/forms/d/e/1FAIpQLSfVJUw8CNf1qQTgeYZuubtABQr_orcFjFIYJLdlzFaKa2GgUw/viewform

// <br>
// Que contem os seguintes campos:
// <ul></ul>

// Ao finalizar a inscricao, cada aluno deve ser gravado num arquivo texto em formato json.
// <br>
// Caso ja tenha um aluno gravado, o novo aluno deve ser adicionado na lista de inscritos.
// <br>
// Para isso use como modelo o projeto atual de matricula, mas crie uma nova pasta para o projeto 
// de matricula da faculdade de nome 'matriculafaculdade' e poste no seu github apos acabar.
// ";



echo '################Ficha de Emprego############';
echo '<br>';
$arquivo_css = '<link rel="stylesheet" href="style.css">';

$formulario_html = '
    <form action="cadastrarfichaemprego.php" method="get">
        <label>CPF:</label>
        <input type="text" name="cpf" value="968.419.260-64">
        <br>
        <label>Nome:</label>
        <input type="text" name="nome" value="Gelvazio Camargo">
        <br>
        <label>Formação:</label>
        <select name="opcaoformacao">
            <option value="1">Ensino Fundamental Incompleto</option>
            <option value="2">Ensino Fundamental Completo</option>
            <option value="3">Ensino Medio Incompleto</option>
            <option value="4">Ensino Medio Completo</option>
            <option value="5">Ensino Superior Incompleto</option>
            <option value="6" selected>Ensino Superior Completo</option>
        </select>
        <br>
        <label>Vaga Emprego:</label>
        <select name="opcaovagaemprego">
            <option value="1">Desenvolvedor Frontend Junior Java</option>
            <option value="2">Desenvolvedor Frontend Junior PHP</option>            
            <option value="3">Desenvolvedor Backend Junior Java</option>            
            <option value="4" selected>Desenvolvedor Backend Junior PHP</option>            
        </select>
        <br>
        <br>
        <input type="submit" value="Confirmar">
    </form>    
';

echo $arquivo_css . $formulario_html;

