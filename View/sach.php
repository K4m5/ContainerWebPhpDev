<?php
// Kết nối đến cơ sở dữ liệu
require_once 'config.php';

// Truy vấn cơ sở dữ liệu để lấy 5 dòng dữ liệu của 5 bản ghi sách
$sql = "SELECT * FROM Sach LIMIT 5";
$result = $pdo->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sách</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>
    <h2>Danh sách sách</h2>
    <table>
        <thead>
            <tr>
                <th>Mã Sách</th>
                <th>Tên Sách</th>
                <th>Số Lượng</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['MaSach']); ?></td>
                    <td><?php echo htmlspecialchars($row['TenSach']); ?></td>
                    <td><?php echo htmlspecialchars($row['SoLuong']); ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
