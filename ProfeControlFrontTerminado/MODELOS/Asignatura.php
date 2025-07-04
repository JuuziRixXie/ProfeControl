require_once 'db.php';

class Asignatura {
    public static function obtenerTodas() {
        $db = DB::connect();
        $stmt = $db->query("SELECT * FROM asignaturas");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function crear($nombre, $clave) {
        $db = DB::connect();
        $stmt = $db->prepare("INSERT INTO asignaturas (nombre, clave_asignatura) VALUES (?, ?)");
        return $stmt->execute([$nombre, $clave]);
    }
}