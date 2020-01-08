<div id="conteudo">
    <h1>Cursos</h1>
    <a class="btn btn-success" href="?pagina=inserir_curso">Inserir novo curso</a><br><br>
    <table class="table table-hover table-striped" id="cursos">
        <thead>
            <tr>
                <th>Nome curso </th>
                <th>Carga horária </th>
                <th>Editar</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($linha = mysqli_fetch_array($consulta_curso)) {
                echo '<tr><td>' . $linha['nome_curso'] . '</td>';
                echo '<td>' . $linha['carga_horaria'] . '</td>';

            ?>
                <td><a href="?pagina=inserir_curso&editar=<?php echo $linha['ID_CURSO']; ?>">
                        <i class="fas fa-edit"></i>
                    </a></td>
                <td><a href="deleta_curso.php?ID_CURSO=<?php echo $linha['ID_CURSO']; ?>">
                        <i class="fas fa-trash-alt"></i>
                    </a></td>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</div>