<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/app.css">
    <title>Document</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        button{
            width: 40px;
            height: 30px;
            background-color: #fff;
            border: 1px solid #000;
            transition: all .4s;
            cursor: pointer;
        }

        button:hover{
            color: #ffbcd1;
            background-color: #000;
        }
    </style>
</head>

<body>
    <div class="contents">
        <?php
        require_once("main.php");
        foreach ($list as $data) {
        ?>

            <?= $data->contents; ?>

        <?php } ?>
    </div>

    <button onclick="back()">뒤로</button>
    <script>
        function back(){
            window.history.back();
        }
    </script>
</body>

</html>