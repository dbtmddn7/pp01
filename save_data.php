<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "style.css">
    <title>EDIT</title>
</head>
<body>
    <div class="menu">
            <a href="index.php">顧客管理</a>
    </div>

    <div class="left-divider"></div>
</body>
</html>

<?php
$servername = "localhost:8889";
$username = "root";
$password = "root";
$dbname = "pp01";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn -> connect_error) {
    die("MySQL connection failed: " . $conn -> connect_error);
}

// 텍스트 입력란에서 전달된 데이터 가져오기
$last_name = $_POST["last_name"];
$first_name = $_POST["first_name"];
$birthday = $_POST["birthday"];
$created_day = $_POST["created_day"];
$updated_day = $_POST["updated_day"];

// 데이터 삽입 쿼리
$insert_sql = "INSERT INTO content (lastName, firstName, birthday, createdDay, updatedDay) 
VALUES ('$last_name', '$first_name', '$birthday', '$created_day', '$updated_day')";
if ($conn->query($insert_sql) === TRUE) {
    echo "";
} else {
    echo "" . $conn->error;
}

$select_sql = "SELECT * FROM content";
$result = $conn -> query($select_sql);

if($result -> num_rows > 0) {
    echo "<div style='display: flex; justify-content: center;'>";
    echo "<table style='margin: 100px auto; border-collapse: collapse;'>";
    echo "<tr>
            <th style='border: 1px solid black; background-color: lightgray;'>ID</th>
            <th style='border: 1px solid black; background-color: lightgray;'>姓</th>
            <th style='border: 1px solid black; background-color: lightgray;'>名</th>
            <th style='border: 1px solid black; background-color: lightgray;'>生年月日</th>
            <th style='border: 1px solid black; background-color: lightgray;'>作成日</th>
            <th style='border: 1px solid black; background-color: lightgray;'>更新日</th>
        </tr>";

    $id=1;

    while ($row = $result -> fetch_assoc()) {
        echo "<tr>";
        echo "<td style='border: 1px solid black;'>".$id."</td>";
        echo "<td style='border: 1px solid black;'>".$last_name."</td>";
        echo "<td style='border: 1px solid black;'>".$first_name."</td>";
        echo "<td style='border: 1px solid black;'>".$birthday."</td>";
        echo "<td style='border: 1px solid black;'>".$created_day."</td>";
        echo "<td style='border: 1px solid black;'>".$updated_day."</td>";
        echo "</tr>";

        $id++;
    }

    echo "</table>";
    echo "</div>";
}
$conn -> close();
?>