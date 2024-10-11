<?php
include 'config.php';

$stmt = $pdo->query('SELECT * FROM Animal');
$animales = $stmt->fetchAll();
// var_dump($animales); Muestra el contenido en forma de array
?>

<h2>Listado de perros</h2>

<!-- Botón para crear un nuevo perro -->
<a href="create.php">Crear nuevo Perro</a>
<br><br>

<table border="1">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Peso (Kg)</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($animales as $animal): ?>
        <tr>
            <td><?php echo $animal['nombre']; ?></td>
            <td><?php echo $animal['peso']; ?> Kg</td>
            <td>
                <a href="edit.php?id=<?php echo $animal['id']; ?>">Editar</a>
                <a href="delete.php?id=<?php echo $animal['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>