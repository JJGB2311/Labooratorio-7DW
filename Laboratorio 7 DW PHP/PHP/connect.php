    <?php
    $username = filter_input(INPUT_POST, 'display');
 
    if (!empty($username)){
    
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "youtube";
    // Create connection
    $conn = new mysqli ($host, $dbusername,  $dbpassword, $dbname);
    if (mysqli_connect_error()){
    die('Connect Error ('. mysqli_connect_errno() .') '
    . mysqli_connect_error());
    }
    else{
    $sql = "INSERT INTO account (username)
    values ('$username')";
    if ($conn->query($sql)){
    echo  "<Almacenado";
    }
    else{
    echo "Error: ". $sql ."
    ". $conn->error;
    }
    $conn->close();
    }
  
    }
    else{
    echo "Error";
    die();
    }
    ?>