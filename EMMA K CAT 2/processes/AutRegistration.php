<?php
require_once "../configs/constants.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $authorFullName = $_POST['authorFullName'];


    try {
        $DbConn = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $userpass);
        $DbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        $stmt = $DbConn->prepare("INSERT INTO authorstb (AuthorFullName) VALUES (:authorFullName)");

        $stmt->bindParam(':authorFullName', $authorFullName);
        $stmt->execute();
        echo "Author registration successful!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    } finally {

        $DbConn = null;
    }
}
?>
