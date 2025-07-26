<?php
include 'config.php';

$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>All Feedbacks</title>
    <style>
        table {
            width: 70%;
            margin: auto;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid gray;
        }

        th {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">All Feedbacks</h2>
    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Date</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['name'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['message'] ?></td>
            <td><?= $row['created_at'] ?></td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php $conn->close(); ?>
