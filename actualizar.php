<?php include("template/header.php"); ?>

<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM alumnos WHERE cod_estudiante = '$id' ";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!-- INICIO LANDING PAGE ACTUALIZAR -->

<div class="container mt-5">
    <form action="update.php" method="POST">

        <input type="hidden" name="cod_estudiante" value="<?php echo $row['cod_estudiante'] ?>">

        <input type="text" class="form-control mb-3" name="dni" placeholder="Dni" value="<?php echo $row['dni'] ?>">
        <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres'] ?>">
        <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos'] ?>">

        <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
    </form>
</div>

<!-- FIN LANDING PAGE ACTUALIZAR -->

<?php include("template/footer.php"); ?>