 
 <?php 
    $mysqli = new mysqli("localhost","journall_rafsan","01625903501r","journall_newer");

    /* check connection */
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
 ?>