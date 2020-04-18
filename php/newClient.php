<html>
<head>

</head>
<body>
<?php

$link = mysqli_connect(
    'localhost',
    'mysql',
    'mysql',
    'contacts');

    if (!$link) {
        printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
        exit;
    }
if (isset($_POST)) {
    $today = date("Y-m-d H:i:s");
    $newClient = $_POST;
    $sql = "INSERT INTO clients (nameClient, phone, comment, dateOrder) VALUES ('".$newClient["nameClient"]."','".$newClient["phoneClient"]."','".$newClient["comment"]."','".$today."')";
    if (mysqli_query($link, $sql)) {
        echo '<h1>Ваше обращение зарегистрировано</h1><p>Через <span id="timer">6</span> секунд Вы будете перенаправлены на стартовую страницу. Если этого не происходит, то перейдите самостоятельно: <a href="../index.html">Вернуться на главную</a>
        </p>';
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
}
    mysqli_close($link);
    ?>
<script src=../js/redirect.js></script><!--Скрипт автоматического перенаправления на основную страницу-->
</body>
</html>
