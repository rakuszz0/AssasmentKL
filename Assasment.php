<?php

function setupDatabase(array $config): \PDO {
    $dsn = match($config['driver']) {
        'mysql' => "mysql:host={$config['host']};dbname={$config['database']}",
        default => throw new \InvalidArgumentException("Unsupported driver")
    };
    return new \PDO(dsn:$dsn, username: $config['username'], password: $config['password'] ?? NULL, options: [
        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
        \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    ]);
}
 $config = [
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'test',
    'username' => 'root',
    'password' => ''   
 ];

 $pdo = setupDatabase($config);
 $query = "SELECT c.customer_id, c.costomer_name, c.costomer_city
//             FROM Costomers c 
//             LEFT JOIN Orders o ON c.customer_id = o.customer_id 
//             WHERE o.costomer_id IS NULL";
$result = $pdo->query($$query)->fetchAll();

print_r($result);

// function getCustomersWithoutOrders($conn) {
//     $query = "SELECT c.customer_id, c.costomer_name, c.costomer_city
//             FROM Costomers c 
//             LEFT JOIN Orders o ON c.customer_id = o.customer_id 
//             WHERE o.costomer_id IS NULL";
//             $stmt = $conn->prepare($query);
//             $stmt->execute();

//             return $stmt->fetchAll(PDO::FETCH_ASSOC);

// }

?>