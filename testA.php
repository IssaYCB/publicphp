<?php
        require 'dbconnect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $my_string =$_POST['q'];
   //echo $my_string;
   syslog($priority, $my_string);
        // // Connect to MongoDB
    // $conn = new Mongo('localhost');

    // // connect to test database
    // $db = $conn->mydb;

    // // a new products collection object
    // $collection = $db->QuoteCollections;

$quote_array = array(
                    'myName' => $my_string,
                    );        

       $cursor = $collection->find($quote_array);
       //$json=$cursor;
                }
   foreach ($cursor as $obj)
    {
         //$json[]=array(
                //'value'=> $student["Author"],
                //'label'=>$student["Author"]
                   // );
    echo 'Name: ' . $obj['myName'] . "\r\n<br>";
    echo $row['myName']."\n";
    }

      //echo json_encode($json);




        // close connection to MongoDB
         $conn->close();

  
//   catch ( MongoConnectionException $e )
//   {
//     // if there was an error, we catch and display the problem here
//     echo $e->getMessage();
//     echo "error at mongoconexe";
//   }
//  catch ( MongoException $e )
//  {
//     echo $e->getMessage();
//     echo "error at mongoconeException";
//   }

?>