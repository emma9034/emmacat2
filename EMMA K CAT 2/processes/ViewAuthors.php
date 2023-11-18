<?php
include('../configs/constants.php');
include('../configs/DbConn.php');

// Fetch all authors from the database
$sql = "SELECT * FROM Authorstb ORDER BY AuthorFullName ASC";
$result = $DbConn->query($sql);

if (!$result) {
    echo "Error retrieving authors: " . $DbConn->error;
} else {
    $authors = $result->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Authors</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>View Authors</h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Author ID</th>
                    <th scope="col">Author Full Name</th>
                    <th scope="col">Author Email</th>
                    <th scope="col">AuthorAddress</th>
                    <th scope="col">AuthorBiography</th>
                    <th scope="col">AuthorDateOfBirth</th>
                    <th scope="col">AuthorSuspended</th>
                    <th scope="col">Actions</th>
                    <!-- Add more columns as needed -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($authors as $author) : ?>
                    <tr>
                        <td><?php echo $author['AuthorId']; ?></td>
                        <td><?php echo $author['AuthorFullName']; ?></td>
                        <td><?php echo $author['AuthorEmail']; ?></td>
                        <td><?php echo $author['AuthorAddress']; ?></td>
                        <td><?php echo $author['AuthorBiography']; ?></td>
                        <td><?php echo $author['AuthorDateOfBirth']; ?></td>
                        <td><?php echo $author['AuthorSuspended']; ?></td>
                        <td>
                            <!-- Edit button linking to dynamic edit file -->
                            <a href="EditAuth.php?id=<?php echo $author['AuthorId']; ?>" class="btn btn-warning">Edit</a>

                            <!-- Delete button linking to dynamic delete file -->
                            <a href="DelAuth.php?id=<?php echo $author['AuthorId']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                        </td>
                        <!-- Add more cells as needed -->
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
