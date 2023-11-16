<h1>Listar Alunos</h1>
<?php
$sql = "SELECT * FROM tbl_aluno";

$res = $conn->query($sql);

$qtd = $res->num_rows;

if ($qtd > 0) {
    print "<table class = 'table table-hover
        table-striped table-bordered'>";
    print "<tr>";
    print "<th>#</th>";
    print "<th>Nome</th>";
    print "<th>CPF</th>";
    print "<th>Celular</th>";
    print "<th>Ações</th>";
    print "</tr>";
    while ($row = $res->fetch_object()) {
        print "<tr>";
        print "<td>" . $row->aluno_id . "</td>";
        print "<td>" . $row->aluno_nome . "</td>";
        print "<td>". $row->aluno_cpf ."</td>";
        print "<td>" . $row->aluno_celular . "</td>";
        print "<td>
                <button onclick=\"location.href='?page=editar&aluno_codigo=".$row->aluno_id . "';\" 
                class = 'btn btn-success'>
                Editar</button>
                <button onclick=\"if(confirm('Tem certeza que deseja excluir?'))
                {location.href='?page=salvar&acao=excluir&aluno_codigo=".$row->aluno_id . "';}
                else{false;}\" class = 'btn btn-danger'>
                Excluir</button>
              </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class = 'alert alert-danger'>
        Não foram encontrados resultados! </p>";
}
?>