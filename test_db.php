<?php
/**
 * Archivo de prueba para verificar la conexión a la base de datos
 * Ejecutar este archivo para probar la conexión
 */

// Incluir configuración
require_once 'config/database.php';

echo "<h2>🚴‍♂️ Prueba de Conexión - Club de Bicicletas</h2>";

// Probar conexión
echo "<h3>1. Probando conexión...</h3>";
if (testConnection()) {
    echo "<p>✅ Conexión exitosa!</p>";
} else {
    echo "<p>❌ Error en la conexión. Verifica la configuración.</p>";
    exit;
}

// Probar consultas
echo "<h3>2. Probando consultas...</h3>";

try {
    $db = getDB();
    
    // Contar registros en cada tabla
    $tablas = ['bicicletas', 'productos', 'eventos', 'mensajes'];
    
    foreach ($tablas as $tabla) {
        $stmt = $db->prepare("SELECT COUNT(*) as total FROM $tabla");
        $stmt->execute();
        $result = $stmt->fetch();
        echo "<p>📊 Tabla <strong>$tabla</strong>: {$result['total']} registros</p>";
    }
    
    // Mostrar algunas bicicletas
    echo "<h3>3. Bicicletas disponibles:</h3>";
    $stmt = $db->prepare("SELECT modelo, marca, tipo, precio FROM bicicletas LIMIT 3");
    $stmt->execute();
    $bicicletas = $stmt->fetchAll();
    
    if ($bicicletas) {
        echo "<ul>";
        foreach ($bicicletas as $bici) {
            echo "<li><strong>{$bici['marca']} {$bici['modelo']}</strong> - {$bici['tipo']} - $" . number_format($bici['precio'], 2) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No hay bicicletas en la base de datos.</p>";
    }
    
    echo "<h3>✅ ¡Base de datos funcionando correctamente!</h3>";
    
} catch (PDOException $e) {
    echo "<p>❌ Error: " . $e->getMessage() . "</p>";
    echo "<p>💡 Asegúrate de haber ejecutado el archivo schema.sql en tu base de datos.</p>";
}
?>


