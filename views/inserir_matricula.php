<div id="conteudo">
    <h1>Inserir nova matrícula</h1>
    <form method="post" action="processa_matricula.php">
        <br>
        <p>Selecione um aluno</p>
        <select name="escolha_aluno">
            <option class="form-control">Selecione um aluno</option>
            <?php
            while ($linha = mysqli_fetch_array($consulta_aluno)) {
                echo '<option value="' . $linha['ID_ALUNO'] . '">' . $linha['nome_aluno'] . '</option>';
            }
            ?>
        </select>
        <br><br>
        <p>Selecione um curso</p>
        <select name="escolha_curso">
            <option class="form-control">Selecione um curso</option>
            <?php
            while ($linha = mysqli_fetch_array($consulta_curso)) {
                echo '<option value="' . $linha['ID_CURSO'] . '">' . $linha['nome_curso'] . '</option>';
            }

            ?>

        </select>
        <br><br>
        <input type="submit" class="btn btn-success" value="Matricular aluno no curso">


    </form>