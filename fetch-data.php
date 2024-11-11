<?php 
    // $query ="SELECT station FROM Station ";

    $query = "SELECT * FROM `station`";
    $result = $conn->query($query);
    if($result->num_rows> 0){
      $options= mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
?>