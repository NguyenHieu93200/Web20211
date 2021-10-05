<html lang="en">
<head>
    <title>Convert</title>
</head>
<body>
    <?php
    $number = $_POST['number'];
    if (isset($_POST['radian'])) {
        $degree = $number * 180 / pi();
        print("Change from Radian: $number");
        print("<br>Degree is $degree");
    }
    if (isset($_POST['degree'])) {
        $radian = $number * pi() / 180;
        print("Change from Degree: $number");
        print("<br>Radian is $radian");
    }
    ?>
</body>

</html>