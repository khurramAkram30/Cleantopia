<?php


include 'dbconnection.php';


$name = $_POST['Name'];
$number = $_POST['number'];

$address = $_POST['address'];
 $ins = $_POST['Washinginstruction'];
$service = $_POST['service'];
$date = $_POST['Date'];
$Time = $_POST['time'];
$message = $_POST['Deliveryinstruction'];

// echo $name,$number,$email,$address,$service,$date,$message;

            $conn = OpenCon();
            {
            $sql = "INSERT INTO clients (NAME,NUMBER,ADDRESS,ins,SERVICE,DATE,Time,MESSAGE)
            VALUES ('$name','$number','$address','$ins','$service','$date','$Time','$message')";
            
            if ($conn->query($sql) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
            
            CloseCon($conn);
            
                    
                
            }



?>
