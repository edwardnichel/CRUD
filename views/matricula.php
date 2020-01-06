<div id="conteudo">
    <h1>Matriculas</h1>
    <a href="?pagina=inserir_matricula">Inserir nova matricula</a>
    <table style="border: 1px solid #ccc; width: 100%">
        <tr>
            <th> Nome aluno </th>
            <th> Nome curso </th>
            <th>Deletar</th>
        </tr>

        <?php
        while ($linha = mysqli_fetch_array($consulta_matricula)) {
            echo '<tr><td>' . $linha['nome_aluno'] . '</td>';
            echo '<td>' . $linha['nome_curso'] . '</td>';

        ?>
            <td><a href="deleta_matricula.php?ID_ALUNO_CURSO=<?php echo $linha['ID_ALUNO_CURSO']; ?>">Deletar</a></td>
            </tr>

        <?php
        }
        ?>
    </table>
</div>