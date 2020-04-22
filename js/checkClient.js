/* Функция, создающая экземпляр XMLHTTP */
function getXmlHttp() {
    var xmlhttp;
    try {
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        try {
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            xmlhttp = false;
        }
    }
    if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
        xmlhttp = new XMLHttpRequest();
    }
    return xmlhttp;
}
function checkClient(phoneClient) {
    var xmlhttp = getXmlHttp(); // Создаём объект XMLHTTP
    xmlhttp.open('POST', 'php/checkClient.php', true); // Открываем асинхронное соединение
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); // Отправляем тип содержимого
    xmlhttp.send("phoneClient=" + encodeURIComponent(phoneClient)); // Отправляем POST-запрос
    xmlhttp.onreadystatechange = function() { // Ждём ответа от сервера
        if (xmlhttp.readyState == 4) { // Ответ пришёл
            if(xmlhttp.status == 200) { // Сервер вернул код 200 (что хорошо)
                if (xmlhttp.responseText == '0') {//если 0, то
                    document.getElementById("submitBtn").disabled = false;
                    document.getElementById("checkClientResult").innerHTML = "";
                }
                else {
                    document.getElementById("checkClientResult").innerHTML = "Обращение с данным номером уже зарегистрировано!";
                    document.getElementById("submitBtn").disabled = true;

                }
            }
        }
    };
}
