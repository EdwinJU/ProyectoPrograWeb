<?php

$connection=mysqli_connect('localhost','root','','rides')or die("Unable to connect");

$sql="SELECT * FROM users";
$result= mysqli_query($connection,$sql);

$results=['name,phone'];
while ($row=$result->fetch_assoc()) {

    var_dump($row);
  $csv_line="{$row['full_name']},{$row['phone']},{$row['speed_average']},{$row['about_me']}";
  $results[] = $csv_line;
  
}

mysqli_close($connection);

  //write .csv

  $csvfile = fopen('input.csv', 'w') or die('there was an error opening the file');

  foreach ($results as $line) {
    echo "Writing line:".$line.PHP_EOL;
    fwrite($csvfile, $line);
    fwrite($csvfile, PHP_EOL);

  }
  fclose($csvfile);


 
?>php