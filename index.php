<?php
include 'config.php';

$stmt = $pdo->query('SELECT * FROM Animal');
$jabones = $stmt->fetchAll();
var_dump($jabones);
?>

<h2>Listado de perros</h2>

<!-- Botón para crear un nuevo perro -->
<a href="create.php">Crear nuevo Perro</a>
<br><br>

<ul>
<?php foreach ($jabones as $jabon): ?>
    <li>
        <?php echo $jabon['nombre']; ?> - $<?php echo $jabon['precio']; ?>
        <a href="edit.php?id=<?php echo $jabon['id']; ?>">Editar</a>
        <a href="delete.php?id=<?php echo $jabon['id']; ?>">Eliminar</a>
    </li>
<?php endforeach; ?>
</ul>
