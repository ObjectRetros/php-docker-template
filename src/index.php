<?php

try {
    echo 'Current PHP version: ' . phpversion();
    echo '<br />';

    $host = 'db';
    $dbname = 'docker';
    $user = 'docker';
    $pass = 'password';
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    $conn = new PDO($dsn, $user, $pass);

    echo 'Database connected successfully';
    echo '<br />';
} catch (\Throwable $t) {
    echo 'Error: ' . $t->getMessage();
    echo '<br />';
}

?>

<!doctype html>
<html lang="en">
<?php include '../src/partials/header.php'; ?>
<body>
<h2 class="text-xl font-bold">Hello world</h2>
</body>
</html>
