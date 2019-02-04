<?php
    include '../db.php';


    function fetch($conn, $table)
    {
        
         $query="SELECT 
                    *
                FROM 
                    `".$table."`
                WHERE 
                    1";
                    //echo $query;

        $result = $conn->prepare($query);
        $result->execute();
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    function fetch_by_id($conn, $table, $id)
    {
        
         $query="SELECT 
                    *
                FROM 
                    `".$table."`
                WHERE 
                    name = '".$id."'";

        $result = $conn->prepare($query);
        $result->execute();
        $data=$result->fetchAll(PDO::FETCH_ASSOC);
        return $data;
    }
    $events = fetch_by_id($conn, 'subevent', $_GET['file'])[0];

?>
<!DOCTYPE html> 
<html lang="en" class="no-js">

    <link rel="shortcut icon" type="image/ico" href="../favicon.ico"/>
    <style>
        a{
            color:#f44336;
        }
    </style>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
 

</head>

<body style="background: black; color: white;">
    <!--THE PROBLEM STATEMENT TEMPLATE STARTS-->
    <center><img src="../static/logo_name.png" style="width: 80%;"></center>
    <div class="container">
            <center><h1><?php echo $events['name']; ?></h1></center>
            
            <?php 
                if ($events['intro']) {

            ?>
            <h2>Introduction</h2>
            <hr>
            <div class="contentdes"><p>
                    <?php echo $events['intro']; ?>
            </div>
            <?php 
                }
            ?>
            
            <?php 
                if ($events['rule']) {

            ?>
            <h2>Rules</h2>
            <hr>
            <div class="contentdes">
                <p>
                    <?php echo $events['rule']; ?>

                </p>
            </div>

            <?php 
                }
            ?>
            <?php 
                if ($events['problem']) {

            ?>
            <h2>Problem Statement</h2>
            <hr>
            <div class="contentdes">
                <p>

                    <?php echo $events['problem']; ?>
                </p>
            </div>
            <?php 
                }
            ?>

            <h2>Contacts</h2>
            <hr>
            <div class="contentdes">
                <p><?php echo $events['contact']; ?></p>
            </div>
        </div>
</body>
</html>