<?php
include 'config.php';

$message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $raza = $_POST['raza'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];

    try {
        $sql = "INSERT INTO Animal (nombre, raza, peso, altura) VALUES (:nombre, :raza, :peso, :altura)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute(['nombre' => $nombre, 'raza' => $raza, 'peso' => $peso, 'altura' => $altura]);

        $message = 'Perro añadido con éxito!';
    } catch (PDOException $e) {
        $message = 'Error al añadir el perro: ' . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Perro</title>
</head>
<body>
<h2>Añadir nuevo perro</h2>

<?php if (!empty($message)): ?>
    <p><?= $message ?></p>
<?php endif; ?>

<form action="create.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <br>
    <label for="raza">Raza:</label>
    <textarea name="Raza" id="Raza"></textarea>
    <br>
    <label for="peso">Precio:</label>
    <input type="text" name="peso" id="peso" required>
    <br>
    <label for="altura">Stock:</label>
    <input type="number" name="altura" id="altura" required>
    <br>
    <input type="submit" value="Añadir Perro">
</form>

</body>
</html>
