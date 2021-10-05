<html lang="en">
<head>
    <title> Receiving input</title>
</head>
<body>
    <font size=5>Thank you: Got Your Input.</font>
    <?php
        $user_name = $_POST["user_name"];
        $class = $_POST["class"];
        $university = $_POST["university"];
        print ("<br> Hello $user_name");
        print ("<br> Your class: $class");
        print ("<br> Your university: $university");
        if(isset($_POST['submit'])){
            if(!empty($_POST['hobby'])) {      
                print("<br> Your hobby:<br>"); 
                foreach($_POST['hobby'] as $value){
                    print( "$value <br/>");
                }        
            }        
        }
    ?>
</body>
</html>