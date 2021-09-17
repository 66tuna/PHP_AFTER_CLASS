<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="./updateSql.php" method="POST">
        <input type="text" name="title" placeholder="이름"> 
        <input type="text" name="name" placeholder="제목"> <br>
        <textarea name="contents" class="textA" cols="60" rows="30"></textarea><br>
        <input type="submit" value="등록">
    </form>
</body>

</html>