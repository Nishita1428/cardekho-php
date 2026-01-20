<?php
session_start();
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: login.php");
    exit;
}
include '../common/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard - Enquiries</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f5f6fa;
            padding: 30px;
        }

        h2 {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            background: #fff;
            border-collapse: collapse;
        }

        table th, table td {
            padding: 12px;
            border: 1px solid #ddd;
            font-size: 14px;
            text-align: left;
        }

        table th {
            background-color: #ff3b3f;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<!-- <h2>Car Enquiries</h2> -->
 <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:20px;">
    <h2>Car Enquiries</h2>

    <a href="logout.php" 
       style="background:#ff3b3f; color:#fff; padding:8px 15px; text-decoration:none; border-radius:4px;">
       Logout
    </a>
</div>


<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Car Type</th>
        <th>Date</th>
        <th>Action</th>
    </tr>

    <?php
    $sql = "SELECT * FROM car_enquiry ORDER BY id DESC";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['name']}</td>
                    <td>{$row['phone']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['address']}</td>
                    <td>{$row['car_type']}</td>
                    <td>{$row['created_at']}</td>
                    <td>
          <a href='delete.php?id={$row['id']}'
             onclick=\"return confirm('Are you sure you want to delete this enquiry?');\"
             style='color:red;'>Delete</a>
        </td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='7'>No enquiries found</td></tr>";
    }
    ?>

</table>

</body>
</html>
