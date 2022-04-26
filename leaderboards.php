<?php

session_start();

    include("connection.php");





?>


<html>
    <title>

    </title>
    <body>
        
    <table>
<tr>
    <th>Username</th>
    <th>HighScore</th>
</tr>
<?php
for($counter = 0 ; $row = mysql_fetch_row($conn2) ; $counter++ ){
    print("<tr>");
    foreach($row as $key => $value)
        print("<td> $value </td>");
        print("</tr>");
}
mysql_close($conn2);
?>
    </table>


    </body>
</html>
