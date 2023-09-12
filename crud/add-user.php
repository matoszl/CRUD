<h1>Adicionar Usuário</h1>
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label for="inome">Nome</label>
        <input type="text" name="nome" id="inome" class="form-control">
    </div>
    <div class="mb-3">
        <label for="iemail">E-mail</label>
        <input type="email" name="email" id="iemail" class="form-control">
    </div>
    <div class="mb-3">
        <label for="isenha">Senha</label>
        <input type="password" name="senha" id="isenha" class="form-control">
    </div>
    <div class="mb-3">
        <label for="inasc">Data de Nascimento</label>
        <input type="date" name="data_nasc" id="inasc" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>