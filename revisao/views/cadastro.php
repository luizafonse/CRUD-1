<?php include("blades/header.php") ?>
<a href="../">Voltar</a><hr>
<div class="container border rounded mt-5 bg-white p-4 shadow">
    <form action="../controllers/cadastrarAluno.php" method="post">
        <div class="row mt-3">
            <div class="col-6">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="alunoNome">
            </div>
            <div class="col-6">
                <label class="form-label">Cidade</label>
                <input type="text" class="form-control" name="alunoCidade">
            </div>
        </div>

<input type="radio" class="form-check-input " value="M" name="alunoSexo">
        <label class="radio-inline">Masculino</label><br>
        <input type="radio" class="form-check-input" value="F" name="alunoSexo">
        <label class="radio-inline">Feminino</label><br>
        <input type="submit" class="btn btn-success mt-2" value="Cadastrar">
    </form>
</div>
<?php include("blades/footer.php") ?>