<!DOCTYPE html>
<html>
<head>
    <title>Add New Department</title>
</head>
<body>
    <h1>Add New Department</h1>
    <form action="store.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="description">Description:</label><br>
        <textarea id="description" name="description"></textarea><br><br>

        <input type="submit" value="Add Department">
    </form>
</body>
</html>
