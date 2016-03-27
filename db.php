<<<<<<< HEAD
 
 <?php 
    $mysqli = new mysqli("localhost","journall_rafsan","01625903501r","journall_newer");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
=======
 
 <?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'newer');
 $con=mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(DB_DATABASE,$con) or die("Failed to connect to MySQL: " . mysql_error());
>>>>>>> 44bc7b23d9af34ce8a2783f2637bffb12da4ecdf
 ?>