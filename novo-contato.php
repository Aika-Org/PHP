<!DOCTYPE html>
<html>
<head>
</head>
<body style="background-color: #00C8FF; color: #FFFFFF;">
    <h1>Banco de Dados da Escola</h1>
    <form action="?page=salvar" method="post">
        <input type="hidden" name="acao" value="cadastrar">    
        <div class="mb-3">
            <label>Nome</label>
            <input type="text" name="txt_nome" class="form-control">
        </div>
        <div class="mb-3">
            <label>Sobrenome</label>
            <input type="text" name="txt_sobrenome" class="form-control">
        </div>
        <div class="mb-3">
            <label>Endereço</label>
            <input type="text" name="txt_endereco" class="form-control">
        </div>   
        <div class="mb-3" >
            <label>Bairro</label>
            <input type="text" name="txt_bairro" class="form-control">
        </div>
        <div class="mb-3">
            <label>CIDADE</label>
            <input type="text" name="txt_cidade" class="form-control">
        </div>
        <div class="mb-3">
            <label>CEP</label>
            <input type="text" name="txt_cep" class="form-control">
        </div>
        <div class="mb-3">
            <label>CPF</label>
            <input type="text" name="txt_cpf" class="form-control">
        </div>
        <div class="mb-3">
            <label>RG</label>
            <input type="text" name="txt_rg" class="form-control">
        </div>
        <div class="mb-3">
            <label>DATA DE NASCIMENTO</label>
            <input type="date" name="txt_data" class="form-control">
        </div>
        <div class="mb-3">
            <label>CELULAR</label>
            <input type="text" name="txt_celular" class="form-control">
        </div>
        <div class="mb-3">
            <label>E-MAIL</label>
            <input type="text" name="txt_email" class="form-control">
        </div>
        <button type="submit" name="btn_enviar" class="btn btn-primary" style="background-color: #C0C0C0; color: #000;">Salvar</button>
    </form>
</body>
</html>
