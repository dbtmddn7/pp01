<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel = "stylesheet" href = "style.css">
    <title>一覧</title>
</head>
<body>
        <div class="menu">
            <a href="index.php">顧客管理</a>
        </div>

        <div class="upper"></div>
        
        <div class="left-divider"></div>

        <div class = 'parent'>

            <div class='first'>姓<br>
                <input type = 'text' id='column1' name='first_name'>
            </div>
            <div class = 'second'>名<br>
                <input type = 'text' id='column2' name='last_name'>
            </div>
            <div class = 'third'>生年月日<br>
                <input type = 'text' id='column3' name='birthday'>
            </div>
            <div class = 'fourth'>作成日<br>
                <input type = 'text' id='column4' name='created_day'>
            </div>
            <div class = 'fifth'>更新日<br>
                <input type = 'text' id='column5' name='updated_day'>
            </div>
        </div>


        <div class = 'btn-container'>
            <button type="submit">登録</button>
        </div>

    <?php
    include_once "sql.php";
    ?>
</body>
</html>