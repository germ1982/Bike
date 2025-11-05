<?php
/**
 * Ejemplo de uso de la conexión a base de datos
 * Incluir este archivo en tus páginas PHP
 */

// Incluir configuración de base de datos
require_once '../config/database.php';

// Ejemplo 1: Obtener todas las bicicletas
function getBicicletas() {
    try {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM bicicletas WHERE stock > 0 ORDER BY fecha_creacion DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return [];
    }
}

// Ejemplo 2: Obtener eventos próximos
function getEventosProximos($limite = 5) {
    try {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM eventos WHERE fecha_evento >= CURDATE() AND activo = 1 ORDER BY fecha_evento ASC LIMIT ?");
        $stmt->execute([$limite]);
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return [];
    }
}

// Ejemplo 3: Obtener productos de la tienda
function getProductos($categoria = null) {
    try {
        $db = getDB();
        if ($categoria) {
            $stmt = $db->prepare("SELECT * FROM productos WHERE categoria = ? AND activo = 1 ORDER BY nombre ASC");
            $stmt->execute([$categoria]);
        } else {
            $stmt = $db->prepare("SELECT * FROM productos WHERE activo = 1 ORDER BY categoria, nombre ASC");
            $stmt->execute();
        }
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return [];
    }
}

// Ejemplo 4: Guardar mensaje de contacto
function guardarMensaje($nombre, $email, $telefono, $asunto, $mensaje) {
    try {
        $db = getDB();
        $stmt = $db->prepare("INSERT INTO mensajes (nombre, email, telefono, asunto, mensaje) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$nombre, $email, $telefono, $asunto, $mensaje]);
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return false;
    }
}

// Ejemplo 5: Buscar bicicletas por tipo
function buscarBicicletasPorTipo($tipo) {
    try {
        $db = getDB();
        $stmt = $db->prepare("SELECT * FROM bicicletas WHERE tipo = ? AND stock > 0 ORDER BY precio ASC");
        $stmt->execute([$tipo]);
        return $stmt->fetchAll();
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return [];
    }
}

// Función para mostrar datos en formato HTML
function mostrarBicicletas() {
    $bicicletas = getBicicletas();
    if (empty($bicicletas)) {
        echo "<p>No hay bicicletas disponibles.</p>";
        return;
    }
    
    echo "<div class='row'>";
    foreach ($bicicletas as $bici) {
        echo "<div class='col-md-4 mb-3'>";
        echo "<div class='card'>";
        if ($bici['imagen']) {
            echo "<img src='{$bici['imagen']}' class='card-img-top' alt='{$bici['modelo']}'>";
        }
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>{$bici['marca']} {$bici['modelo']}</h5>";
        echo "<p class='card-text'>{$bici['descripcion']}</p>";
        echo "<p class='card-text'><strong>Tipo:</strong> " . ucfirst($bici['tipo']) . "</p>";
        echo "<p class='card-text'><strong>Precio:</strong> $" . number_format($bici['precio'], 2) . "</p>";
        echo "<p class='card-text'><strong>Stock:</strong> {$bici['stock']} unidades</p>";
        echo "</div></div></div>";
    }
    echo "</div>";
}
?>


