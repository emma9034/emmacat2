<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
        <title>DETAILS FORM</title>
<body>
    <h2>Author Details</h2>
<form action="submit_author.php" method="POST">
    <label for="AuthorId">Author ID(PK):</label><br>
    <input type="text" name="AuthorId" id="AuthorId" placeholder="Enter the Author Id" maxlength="60" required /><br><br>

    <label for="AuthorFullName">Full Name:</label><br>
    <input type="text" name="AuthorFullName" id="AuthorFullName" placeholder="Enter Full Name" maxlength="60" /><br><br>

    <label for="AuthorEmail">Email:</label><br>
    <input type="email" name="" id="AuthorEmail" placeholder="Enter the Email" maxlength="160" required /><br><br>

    <label for="AuthorAddress">Address:</label><br>
    <input type="text" name="AuthorAddress" id="AuthorAddress" placeholder="Enter the Address"maxlength="60" required/><br><br>

    <label for="AuthorBiography">Biography:</label><br>
    <textarea id="AuthorBiography" name="AuthorBiography" rows="4" cols="50"></textarea><br><br>

    <label for="AuthorDateOfBirth">Date Of Birth:</label><br>
    <input type="date" name="AuthorDateOfBirth" id="AuthorDateOfBirth" placeholder="Enter the Date Of Birth" maxlength="60"required/><br><br>

    <label for="AuthorSuspended">Suspended:</label><br>
    <input type="checkbox" name="AuthorSuspended" id="AuthorSuspended"><br><br>
    <input type="submit" name="send_message" value="Send Message" />
</form>
</body>
</html>