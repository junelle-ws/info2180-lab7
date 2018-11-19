<?php
$query = $_GET['country'];
$all = $_GET['all'];
//echo $query;
$host = getenv('IP');
$username = getenv('C9_USER');
$password = '';
$dbname = 'world';
$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$stmt = $conn->query("SELECT * FROM countries");
if ($all==true){
    $stmt = $conn->query("SELECT * FROM countries");
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
else if ($query!=""){
$stmt = $conn->query("SELECT * FROM countries WHERE name LIKE '%$query%'");
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
else{
    return 0;
}
echo '<ul>';
foreach ($results as $row) {