<div id="conteudo">
    <h1>Cursos</h1>
    <a class="btn btn-success" href="?pagina=inserir_curso">Inserir novo curso</a><br><br>
    <table class="table">
        <tr>
            <th>Nome curso </th>
            <th>Carga horária </th>
            <th>Editar</th>
            <th>Deletar</th>
        </tr>

        <?php
        while ($linha = mysqli_fetch_array($consulta_curso)) {
            echo '<tr><td>' . $linha['nome_curso'] . '</td>';
            echo '<td>' . $linha['carga_horaria'] . '</td>';

        ?>
            <td><a href="?pagina=inserir_curso&editar=<?php echo $linha['ID_CURSO']; ?>">Editar</a></td>
            <td><a href="deleta_curso.php?ID_CURSO=<?php echo $linha['ID_CURSO']; ?>">Deletar</a></td>
            </tr>

        <?php
        }
        ?>
    </table>
</div>