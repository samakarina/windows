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

    $newClient = $_POST;
    var_dump($newClient);
    $sql = "INSERT INTO clients (nameClient, phone, comment) VALUES ('".$newClient["nameClient"]."','".$newClient["phoneClient"]."','".$newClient["comment"]."')";
    var_dump($sql);
    if (mysqli_query($link, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }

    if ($result = mysqli_query($link, 'SELECT * FROM Clients')) {
        print("Клиенты:\n");
        while( $row = mysqli_fetch_assoc($result) ){
            printf("%s (%s)\n", $row['nameClient'], $row['phone']);
        }
        mysqli_free_result($result);
    }
    mysqli_close($link);
    ?>
