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
$flag = 0;
    if ($result = mysqli_query($link, 'SELECT * FROM Clients')) {
        while( $row = mysqli_fetch_assoc($result) ){
            if ($_POST['phoneClient'] == $row['phone']) {
                header('Location: http://windows/index.html ');die();
            }
        }
        mysqli_free_result($result);
    }

    $newClient = $_POST;
    $sql = "INSERT INTO clients (nameClient, phone, comment) VALUES ('".$newClient["nameClient"]."','".$newClient["phoneClient"]."','".$newClient["comment"]."')";
    if (mysqli_query($link, $sql)) {
        echo "Ваше обращение зарегистрировано";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
/*
    if ($result = mysqli_query($link, 'SELECT * FROM Clients')) {
        print("Клиенты:\n");
        while( $row = mysqli_fetch_assoc($result) ){
            printf("%s (%s)\n", $row['nameClient'], $row['phone']);
        }
        mysqli_free_result($result);
    }*/
}
    mysqli_close($link);
    echo '<br><a href="../index.html">Вернуться на главную</a>'
    ?>
