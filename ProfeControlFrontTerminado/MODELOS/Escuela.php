require_once 'db.php';

class Escuela {
    public static function obtenerTodas() {
        $db = DB::connect();
        $stmt = $db->query("SELECT * FROM escuelas");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function crear($nombre, $clave, $direccion) {
        $db = DB::connect();
        $stmt = $db->prepare("INSERT INTO escuelas (nombre, clave_escuela, direccion) VALUES (?, ?, ?)");
        return $stmt->execute([$nombre, $clave, $direccion]);
    }
}
