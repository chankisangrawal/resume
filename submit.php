<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>submitform</title>
    <script>
      alert( " insert successful")
    </script>
</head>
<body>
<h1>your input</h1>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "form";




    $fanme=$_POST["fname"];
    $lname=$_POST["lname"];
    $email1=$_POST["email"];
    $number=$_POST["contact"];
    echo $fanme;
    echo"<br>";
    echo $lname;
     echo"<br>";
    echo  $email1;
     echo"<br>";
    echo $number;
     echo"<br>";

       
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    // prepare and bind
    $stmt = $conn->prepare("INSERT INTO info1(firstname, lastname, email,contact) VALUES (?, ?, ? ,?)");
    $stmt->bind_param("ssss", $firstname, $lastname, $email ,$contact);
    
    // set parameters and execute
    $firstname = "$fanme";
    $lastname = "$lname";
    $email = "$email1";
    $contact = "$number";
    $stmt->execute();
    
    echo "New records created successfully";

    $stmt->close();
    
  
    
    $conn->close();





    ?>
    
</body>
</html>