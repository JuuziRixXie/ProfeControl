require_once 'db.php';

class MaestroAsignatura {
    public static function asignar($maestroId, $asignaturaId, $escuelaId, $grado, $grupo) {
        $db = DB::connect();
        $stmt = $db->prepare("INSERT INTO maestros_asignaturas (maestro_id, asignatura_id, escuela_id, grado, grupo) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([$maestroId, $asignaturaId, $escuelaId, $grado, $grupo]);
    }

    public static function obtenerPorMaestro($maestroId) {
        $db = DB::connect();
        $stmt = $db->prepare("SELECT * FROM maestros_asignaturas WHERE maestro_id = ?");
        $stmt->execute([$maestroId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
