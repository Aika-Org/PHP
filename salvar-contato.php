<?php
switch($_REQUEST["acao"]){
    case 'cadastrar';
    $nome = $_POST["txt_nome"];
    $sobrenome = $_POST["txt_sobrenome"];
    $endereco = $_POST["txt_endereco"];
    $bairro = $_POST["txt_bairro"];
    $cidade = $_POST["txt_cidade"];
    $cep = $_POST["txt_cep"];
    $cpf = $_POST["txt_cpf"];
    $rg = $_POST["txt_rg"];
    $data_nasc = $_POST["txt_data"];
    $celular = $_POST["txt_celular"];
    $email = $_POST["txt_email"];
    

    $sql = "INSERT INTO tbl_aluno (aluno_nome, aluno_sobrenome, aluno_endereco, aluno_bairro, aluno_cidade, aluno_cep, aluno_cpf, aluno_rg, aluno_data_nasc, aluno_celular, aluno_email)
    VALUES('{$nome}','{$sobrenome}','{$endereco}','{$bairro}','{$cidade}','($cep}','{$cpf}','{$rg}','{$data_nasc}','{$celular}','{$email}')";
    
    

    $res = $conn->query($sql);

    if ($res == true)
    {
        print "<script>alert('Cadastrado com Sucesso!');</script>";
        print "<script>location.href='?page=listar'</script>";
    }
    else
    {
        print "<script>alert('Não foi possível cadastrar');</script>";
        print "<script>location.href='?page=listar'</script>";
    }
    
    break;

   /* case 'editar':    
        $nome = $_POST["txt_nome"];
        $celular = $_POST["txt_celular"];

        $sql = "UPDATE tblcontato SET
                contato_nome = '{$nome}',
                contato_celular = '{$celular}'
                WHERE 
                contato_codigo =".$_REQUEST["contato_codigo"];           
            

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Editado com sucesso!');</script>";
            print "<script>location.href='?page=listar'</script>";
        } else {
            print "<script>alert('Não foi possível editar!');</script>";
            print "<script>location.href='?page=listar'</script>";
        }
        break;


    case 'excluir';
        $sql = "DELETE FROM tblContato WHERE contato_codigo=".$_REQUEST["contato_codigo"];

        $res = $conn->query($sql);

        if ($res == true) {
            print "<script>alert('Excluido com sucesso!');</script>";
            print "<script>location.href='?page=listar'</script>";
        } else {
            print "<script>alert('Não foi possível excluir!');</script>";
            print "<script>location.href='?page=listar'</script>";
        }
    break;

    default:
    //code
    break;

    if ($res == true)
    {
        print "<script>alert('Cadastrado com Sucesso!');</script>";
        print "<script>location.href='?page=listar'</script>";
    }
    else
    {
        print "<script>alert('Não foi possível cadastrar');</script>";
        
    }*/
}
?>