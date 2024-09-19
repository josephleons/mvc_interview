<!DOCTYPE html>
<html>
<head>
    <title>Departments</title>
    <style>
        table { border-collapse: collapse; width: 50%; }
        th, td { border: 1px solid #ddd; padding: 8px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h1>Departments</h1>
    <a href="create.php">Add New Department</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($departments)): ?>
                <?php foreach ($departments as $department): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($department['id']); ?></td>
                        <td><?php echo htmlspecialchars($department['name']); ?></td>
                        <td><?php echo htmlspecialchars($department['description']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="3">No departments found.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</body>
</html>
