<?php
include 'config.php';

// Comprobando si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $peso = $_POST['peso'];
    $id = $_POST['id'];

    $stmt = $pdo->prepare("UPDATE Animal SET nombre = ?, peso = ? WHERE id = ?");
    $stmt->execute([$nombre, $peso, $id]);

    header('Location: index.php');
    exit;
}

$id = $_GET['id'];
$stmt = $pdo->query("SELECT * FROM Animal WHERE id = $id");
$animal = $stmt->fetch();

?>

<h2>Editar Perro</h2>

<form action="edit.php" method="post">
    <input type="hidden" name="id" value="<?php echo $animal['id']; ?>">
    Nombre: <input type="text" name="nombre" value="<?php echo $animal['nombre']; ?>"><br>
    Peso: $<input type="text" name="peso" value="<?php echo $animal['peso']; ?>"><br>
    <input type="submit" value="Guardar Cambios">
</form>
