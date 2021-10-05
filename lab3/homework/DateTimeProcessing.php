<html lang="en">
<head>
    <title>Square and Cube</title>
</head>
<body>
    <h3>Enter your name and select date and time for the appointment</h3>
    <br>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <?php
        if (array_key_exists("username", $_GET)) {
            $username = $_GET["username"];
            $day = $_GET["day"];$month = $_GET["month"];$year = $_GET["year"];
            $second = $_GET["second"];$minute = $_GET["minute"];$hour = $_GET["hour"];
            }
        else {
            $day = 0;$month = 0;$year = 0;
            $second = 0;$minute = 0;$hour = 0;
        }    
    ?>
    <table>
        <tr>
            <td>Your name: </td>
            <td><input type="text" size="16" maxlength="20" name="username">
            </td>
        </tr>
        <tr>
            <td>Date:</td>
            <td><select name="day">
                <?php
                    for($i = 0; $i<=31; $i++) {
                        if($day == $i) {
                            print("<option selected>$i</option>");
                        } else {
                            print("<option>$i</option>");
                        }
                    }
                ?>
            </select>
            <select name="month">
                    <?php
                    for($i = 0; $i<=12; $i++) {
                        if($month == $i) {
                            print("<option selected>$i</option>");
                        } else {
                            print("<option>$i</option>");
                        }
                    }
                ?>
            </select>
            <select name="year">
                    <?php
                    for($i = 1500; $i<=2200; $i++) {
                        if($year == $i) {
                            print("<option selected>$i</option>");
                        } else {
                            print("<option>$i</option>");
                        }
                    }
                ?>
            </select></td>
        </tr>
        <tr>
            <td>Time:</td>
            <td><select name="hour">
                <?php
                    for($i = 0; $i<=60; $i++) {
                        if($hour == $i) {
                            print("<option selected>$i</option>");
                        } else {
                            print("<option>$i</option>");
                        }
                    }
                ?>
            </select>
            <select name="minute">
                    <?php
                    for($i = 0; $i<=60; $i++) {
                        if($minute == $i) {
                            print("<option selected>$i</option>");
                        } else {
                            print("<option>$i</option>");
                        }
                    }
                ?>
            </select>
            <select name="second">
                    <?php
                    for($i = 0; $i<=24; $i++) {
                        if($second == $i) {
                            print("<option selected>$i</option>");
                        } else {
                            print("<option>$i</option>");
                        }
                    }
                ?>
            </select></td>
        </tr>
        <tr>
            <td align="right"><input type="SUBMIT" value="Submit"></td>
            <td align="left"><input type="reset" value="Reset"></td>
        </tr>
    </table>
    <table>
        
        <?php

            if (array_key_exists("username", $_GET)) {
               print("Hi $username!<br></br>");
               print("You have choose to have an appointment on $hour:$minute:$second, $day/$month/$year<br></br>");
               print("More information<br></br>");
               if($hour >= 12 ){
                $hour -= 12; 
                $temp = "PM";
                }  
               print("In 12 hours, the time and date is $hour:$minute:$second, $day/$month/$year<br></br>");
            }
            $nhuan = 0;
            if(($year%4 == 0 && $year % 100 != 0) || ($year % 100 == 0 && $year%400 == 0)){
                $nhuan = 1;
            }
            switch($month) {
                case 1:
                case 3:
                case 5:
                case 7:
                case 8:
                case 10:
                case 12:
                    print ("<br>This month has 31 days");
                    break;
                case 4:
                case 6:
                case 9:
                case 11:
                    print ("<br>This month has 30 days");
                    break;
                case 2:
                    if($nhuan == 0){
                        print ("<br>This month has 28 days");
                    }
                    else{
                        print ("<br>This month has 29 days");
                    }
                    break;
                default:break;
            }
        ?>
    </table>
    </form>
</body>
    
</body>
</html>