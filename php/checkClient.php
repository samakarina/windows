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
    $query = "SELECT phone FROM Clients WHERE phone='".$_POST['phoneClient']."'";
    $result = mysqli_query($link, $query);
    echo mysqli_num_rows($result);//Проверяем, есть ли такой номер
    mysqli_free_result($result); //Если найдено 0, возвращается 0, иначе кол-во
}
mysqli_close($link);
?>
