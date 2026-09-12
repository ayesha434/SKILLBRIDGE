<?php
define('DB_HOST', 'sql102.infinityfree.com');
define('DB_NAME', 'if0_41937197_skillbridg');
define('DB_USER', 'if0_41937197');
define('DB_PASS', '12345678');

try {
    $pdo = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8",
        DB_USER, DB_PASS
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("<div style='font-family:sans-serif;padding:40px;color:#c0392b;'>
        <h2>❌ Database Connection Failed</h2>
        <p>" . $e->getMessage() . "</p>
        <p>Make sure: <b>XAMPP MySQL is running</b> and the <b>skillbridge</b> database exists.</p>
    </div>");
}
?>
