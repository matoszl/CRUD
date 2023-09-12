<h1>Editar Usuário</h1>
<?php
    $sql = "SELECT * FROM usuarios WHERE id=".$_REQUEST["id"];
    $res = $conn->query($sql);
    $row = $res->fetch_object();
?>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="mb-3">
        <label for="inome">Nome</label>
        <input type="text" name="nome" id="inome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="iemail">E-mail</label>
        <input type="email" name="email" id="iemail" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label for="isenha">Senha</label>
        <input type="password" name="senha" id="isenha" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="inasc">Data de Nascimento</label>
        <input type="date" name="data_nasc" id="inasc" value="<?php print $row->data_nasc; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>