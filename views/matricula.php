<div id="conteudo">
    <h1>Matriculas</h1>
    <a class="btn btn-success" href="?pagina=inserir_matricula">Inserir nova matricula</a><br><br>
    <table class="table table-striped table-hover" id="matricula">
        <thead>
            <tr>
                <th>Nome aluno</th>
                <th>Nome curso</th>
                <th>Deletar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($linha = mysqli_fetch_array($consulta_matricula)) {
                echo '<tr><td>' . $linha['nome_aluno'] . '</td>';
                echo '<td>' . $linha['nome_curso'] . '</td>';
            ?>
                <td><a href="deleta_matricula.php?ID_ALUNO_CURSO=<?php echo $linha['ID_ALUNO_CURSO']; ?>">
                        <i class="fas fa-trash-alt"></i>
                    </a></td>
                </tr>

            <?php
            }
            ?>
        </tbody>
    </table>
</div>