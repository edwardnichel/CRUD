<div id="conteudo"> <h1>cursos</h1></div>
<table style="border: 1px solid #ccc; width: 100%">
    <tr>
        <th> Nome curso </th>
        <th> Carga horária </th>
    </tr>

    <?php
        while($linha = mysqli_fetch_array($consulta)){
            echo '<tr><td>'.$linha['NOME'].'</td>';
            echo '<td>'.$linha['DURACAO'].'</td></tr>';
        }
        ?>
</table>