<!-- 글 등록, 수정, 삭제, 글 보기 -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/app.css">
    <title>Document</title>
    <style>
        .update{
            margin-top: 30px;
            position: absolute;
            right: 200px;
            border: 1px solid #000;
            width: 40px;
            height: 30px;
            text-align: center;
            line-height: 30px;
        }
    </style>
</head>

<body>
    <?php
        require_once("main.php");
    ?>

    <table>
        <th>이름</th>
        <th>제목</th>
        <th>작성일</th>
        <th>조작</th>

        <?php
        foreach ($list as $data) {
        ?>
            <tr>
                <td><?= $data->name ?></td>
                <td><a href="./view.php"> <?= $data->title ?> </a> </td>
                <td><?= $data->date ?></td>
                <td><a href="./edit.php">수정</a> <br> <a href="./delete.php">삭제</a> </td>
            </tr>
        <?php
        }
        ?>
    </table>

    <a href="./update.php" class="update">등록</a>
</body>

</html>