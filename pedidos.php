<?php
// Módulo de Gestión de Pedidos - Tienda E-commerce

function obtenerPedidosPorUsuario($conexion, $idUsuario) {
    $sql = "SELECT id_pedido, fecha, total, estado FROM pedidos WHERE usuario_id = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("i", $idUsuario);
    $stmt->execute();
    
    return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
}
?>
