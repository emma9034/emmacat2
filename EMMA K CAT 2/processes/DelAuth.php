<?php
include('configs/constants.php');
include('configs/DbConn.php');

// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Check if the author ID is provided in the URL
if (isset($_GET['id'])) {
    $authorID = $_GET['id'];

    try {
        // Prepare and execute the DELETE statement
        $stmt = $DbConn->prepare("DELETE FROM authorstb WHERE AuthorId = ?");
        $stmt->bindParam(1, $authorID);
        $stmt->execute();

        // Redirect to the view page after successful deletion
        header('Location: ViewAuthors.php');
        exit;
    } catch (PDOException $e) {
        // Display error message if there's an issue with the database operation
        echo "Error deleting author: " . $e->getMessage();
        exit;
    }
} else {
    // This should not be visible in production; it's for debugging purposes.
    echo "Author ID not provided in the URL.";
    exit;
}
?>
