<?php
require_once __DIR__ . '/../BD/Conexion.php';

class Usuario {
    public static function obtenerTodos() {
        $db = Conexion::conectar();
        $stmt = $db->query("SELECT * FROM usuarios ORDER BY id");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function crear($nombre, $correo, $contraseña, $rol) {
        $db = Conexion::conectar();
        $stmt = $db->prepare("INSERT INTO usuarios (nombre, correo, contraseña, rol) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$nombre, $correo, $contraseña, $rol]);
    }

    public static function obtenerPorId($id) {
        $db = Conexion::conectar();
        $stmt = $db->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function actualizar($id, $nombre, $correo, $rol) {
        $db = Conexion::conectar();
        $stmt = $db->prepare("UPDATE usuarios SET nombre = ?, correo = ?, rol = ? WHERE id = ?");
        return $stmt->execute([$nombre, $correo, $rol, $id]);
    }
}
