<?php

// Username is root
$user = 'root';
$password = '';
 
// Database name is registration
$database = 'rubicon';
$servername='localhost';
$mysqli = new mysqli($servername, $user,
                $password, $database);
 
// Checking for connections
if ($mysqli->connect_error) {
    die('Connect Error (' .
    $mysqli->connect_errno . ') '.
    $mysqli->connect_error);
}
 
// SQL query to select data from database
$sql="SELECT * FROM `workers` WHERE status=1";
$sql1="SELECT * FROM `workers` WHERE status=0";
$result = $mysqli->query($sql);
$result1 = $mysqli->query($sql1);
$mysqli->close();
?>
<html>
 <head>
 <style>
        .t1 {
            position: relative;
            top :100px;
            left:500px;
            font-size: medium;
            border: 1px solid black;
           
        }
        .t2{
            position: relative;
            top :50px;
            left:500px;
            font-size: medium;
            border: 1px solid black;

        }
        td {
            background-color: white;
        }
 
        th,
        td {
            font-weight: bold;
            border: 2px solid black;
            padding: 20px;
            text-align: center;
        }
        td {
            font-weight: lighter;
        }
        #no{
           margin-left:50%;

        }
        #n1{
            margin-left:50%;
            margin-top:10%;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <!-- TABLE CONSTRUCTION -->
        
        <table class="t1">
            <tr>
            <h2 id="no">Available Users</h2>
            </tr>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>E MAIL</th>
                <th>PHONE NO</th>
                <th>Manage</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['email'];?></td>
                <td><?php echo $rows['phone'];?></td>
                <td><a href="remove.php?id=<?php echo $rows['id'];?>">Remove</a></tb>
            </tr>
            <?php
                }
            ?>
        </table>
    </section>
</body>
</html>

</body>
</html>