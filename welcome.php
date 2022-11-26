<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Aam Alfain Hidayatullah (200601110034)</title>
        <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="uts ya.css">
    </head>
    <body>
    <div class="home" id="home">
    <div class="content">
        <h4>Hello,</h4>
        <h1>Welcome <?php echo $_POST["nama"];?><br>
        Your Email Addres is: <?php echo $_POST["email"]; ?><br>
        New records created succesfully</h1><br>
    </div>
    <?php

    $servername="localhost";
    $username="root";
    $password="";
    $dbname="portofolio";
    $nama=$_POST["nama"];
    $saran=$_POST["saran"];
    $kritik=$_POST["kritik"];
    $email=$_POST["email"];
    
    //Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //Check connection
    if ($conn->connect_error) {
        die("Connection failed:".$conn->connect_error);
    }
    
    $sql = "INSERT INTO masukkan (nama, saran, kritik, email)
    VALUES ('$nama', '$saran', '$kritik', '$email');";
    
    if($conn->query($sql) === TRUE){
        echo "New records created succesfully";
    } else {
        echo "Error: ". $sql . "<br>" . $conn->error;
    }
    
    $conn = new mysqli ($servername, $username, $password, $dbname);
    $sql=  "SELECT nama, saran, kritik FROM masukkan";
    ?>
    </div>

    </body>
</html>