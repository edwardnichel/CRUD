<div id="conteudo">
    <h1>Alunos</h1>
    <a href="?pagina=inserir_aluno">Inserir novo aluno.</a>
    <table style="border: 1px solid #ccc; width: 100%">
        <tr>
            <th> Nome aluno </th>
            <th> Data nascimento</th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>

        <?php
        while ($linha = mysqli_fetch_array($consulta_aluno)) {
            echo '<tr><td>' . $linha['nome_aluno'] . '</td>';
            echo '<td>' . $linha['data_nascimento'] . '</td>';

        ?>
            <td><a href="?pagina=inserir_curso&editar=<?php echo $linha['ID_ALUNO']; ?>">Editar</a></td>
            <td><a href="deleta_aluno.php?ID_ALUNO=<?php echo $linha['ID_ALUNO']; ?>">Deletar</a></td>
            </tr>

        <?php
        }
        ?>
    </table>
</div>