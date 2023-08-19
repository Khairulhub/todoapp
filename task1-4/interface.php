interface Logger {
public function log($message);
}

class FileLogger implements Logger { //implements ==inhirite

public function log($message) {
file_put_contents('log.txt', $message . PHP_EOL, FILE_APPEND);
}
}

class DatabaseLogger implements Logger {
public function log($message) {
// Simulate logging to database
echo "Logged to database: $message <br>";
}
}

$fileLogger = new FileLogger();
$fileLogger->log("This is a file log entry");

$databaseLogger = new DatabaseLogger();
$databaseLogger->log("This is a database log entry");