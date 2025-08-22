<?php
include_once 'conexion.php';

try {
    $conexion = new conexion();
    $pdo = $conexion->conectar();  // retorna objeto PDO

    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $id = intval($_GET['id']);

        $sql = "DELETE FROM registropersonas WHERE Id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);

        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                header('Location: ../Index.php?msg=delete_success');
            } else {
                header('Location: ../Index.php?msg=delete_fail');
            }
        } else {
            header('Location: ../Index.php?msg=delete_fail');
        }
        exit;
    } else {
        header('Location: ../Index.php?msg=invalid_id');
        exit;
    }
} catch (PDOException $e) {
    echo "Error de base de datos: " . $e->getMessage();
    exit;
}
?>
