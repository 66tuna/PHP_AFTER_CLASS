<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload_ok.php" method="post" enctype="multipart/form-data"> <!-- enctype 내가 데이터를 보내는데 어떤식으로 보내는가(없으면 일반 텍스트나, 문자, 숫자로 인식한다) multipart는 2진수로 바꾸며 전송하겠다. 쓰는 이유는 바로 파일이나 사진을 보내면 깨질수 있기 떄문-->
        <input type="file" name="upload">
        <input type="submit" value="전송">
    </form>
</body>
</html>