<?php include("../models/conexao.php") ?>
<?php include("blades/header.php") ?>



<?php
    $varIda = $_GET["ida"];
    $query = mysqli_query($conexao,"SELECT * FROM alunos WHERE codigo = $varIda");
    while($exibe = mysqli_fetch_array($query)){
    ?>
<div class="container border rounded mt-5 bg-white p-4">
    <form action="../controllers/atualizarAluno.php" method="post">
        
        <input type="hidden" name="alunoCodigo" value="<?php echo $exibe[0] ?>">
        <div class="row mt-3">
            <div class="col-6">
        <label>Nome</label>
        <input type="text" name="alunoNome" class="form-control" value="<?php echo $exibe[1] ?>"><br>
    </div>
            <div class="col-6">
        <label>Cidade</label>
        <input type="text" name="alunoCidade" class="form-control" value="<?php echo $exibe[2] ?>"><br>
    </div>
    </div>

    <input type="radio" class="form-check-input " value="M" name="alunoSexo">
        <label class="radio-inline">Masculino</label><br>
        <input type="radio" class="form-check-input" value="F" name="alunoSexo">
        <label class="radio-inline">Feminino</label><br>
        <input type="submit" class="btn btn-success mt-2" value="Atualizar">
    </div>
    <?php } ?>

<?php include("blades/footer.php") ?>