<!DOCTYPE html>
<html lang="en">

<body>

    <?php
    $team = ["Fendy", "Alip", "Ilyash", "Tirta"];
    array_unshift($team, "Fendy", "Yusuf");
    foreach ($team as $orang) {
        echo $orang . '<br/>';
    }
    ?>

</body>

</html>
