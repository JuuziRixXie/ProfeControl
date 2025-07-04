require_once 'db.php';

class SolicitudFormacion {
    public static function crear($usuarioId, $curso, $comentarios) {
        $db = DB::connect();
        $stmt = $db->prepare("INSERT INTO solicitudes_formacion (usuario_id, curso, comentarios) VALUES (?, ?, ?)");
        return $stmt->execute([$usuarioId, $curso, $comentarios]);
    }

    public static function obtenerTodas() {
        $db = DB::connect();
        $stmt = $db->query("SELECT * FROM solicitudes_formacion");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
