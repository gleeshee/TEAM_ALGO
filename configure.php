$host = ' Localhost ';
$db = " barangayconnect ";
$user = " root ";
$pass = " ";
$charset = 'utf8mb4 ';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
     PDO ::ATTR_ERRMODE         => PDO :: ERRMODE_EXCEPTION,
     PDO ::ATTR_DEFAULT_FETCH_MODE => PDO ::FETCH _ASSOC,
     PDO ::ATTR_EMULATE_PREPARES     fasle,
];