<?php 
include("views/blades/header.php"); 
include("controllers/funcoes.php");
?>

<div class="container rounded-3 bg-white mt-5 p-3 shadow">
<a href="views/cadastro.php" class="btn btn-success">Cadastrar</a>
<hr>
<form action="index.php" method="post" >
    <input type="text" class="form-control" name="buscar" size="30" placeholder="Buscar">
</form>
<hr>

<?php mostrarDados();?>
<?php include("views/blades/footer.php") ?>









