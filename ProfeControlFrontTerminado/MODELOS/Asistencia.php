require_once 'db.php';

class Asistencia {
    public static function registrar($maestroId, $fecha, $hora, $estado, $observaciones) {
        $db = DB::connect();
        $stmt = $db->prepare("INSERT INTO asistencias (maestro_id, fecha, hora, estado, observaciones) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$maestroId, $fecha, $hora, $estado, $observaciones]);
    }

    public static function obtenerPorMaestro($maestroId) {
        $db = DB::connect();
        $stmt = $db->prepare("SELECT * FROM asistencias WHERE maestro_id = ?");
        $stmt->execute([$maestroId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
