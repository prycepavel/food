<?php
$_POST = json_decode(file_get_contents("php://input"), true); # Всё что приходит из клиента будет преобразовано 
echo var_dump($_POST); # Команда берет данные которые пришли с клиента, превращает их в строку и показывает их опять на клиенте