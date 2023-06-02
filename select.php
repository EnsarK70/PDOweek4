<?php 

$host = 'localhost:3307';
$db   = 'winkel';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try 
{
     $pdo = new PDO($dsn, $user, $pass, $options); 
     echo "Connected to Winkel";
}
catch (\PDOException $e) 
{
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}

//Deel 1: Hoe je alles selecteert in een query zonder variabele
// $stmt = $pdo->query("SELECT * FROM producten");
// while ($row = $stmt->fetch()) {
    // echo "Product_code: " . $row['product_code'] . "\n";
    // echo "Product_naam: " . $row['product_naam'] . "\n";
    // echo "Prijs_per_stuk: " . $row['prijs_per_stuk'] . "\n";
   //  echo "\n";
// }

//Deel 2: Hoe je een single row selecteert met placeholders
// $product_code = 8;
// $stmt = $pdo->prepare("SELECT * FROM producten WHERE product_code = ?");
// $stmt->execute([$product_code]); 
// $user = $stmt->fetch();
// print_r($user);

//Deel 3: Hoe je een single row selecteert met named parameters
// $product_code = 9;
// $stmt = $pdo->prepare("SELECT * FROM producten WHERE product_code=:product_code");
// $stmt->execute(['product_code' => $product_code]); 
// $user = $stmt->fetch();
// print_r($user);
?>
