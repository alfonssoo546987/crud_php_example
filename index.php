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

<ul>
<?php foreach ($animales as $animal): ?>
    <li>
        <?php echo $animal['nombre']; ?> - <?php echo $animal['peso']; ?> Kg
        <a href="edit.php?id=<?php echo $animal['id']; ?>">Editar</a>
        <a href="delete.php?id=<?php echo $animal['id']; ?>">Eliminar</a>
    </li>

    <table>
        <tr>
            <td></td>
        </tr>
    </table>
<?php endforeach; ?>
</ul>
