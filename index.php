<?php
 
    $mysqli = new mysqli('localhost', 'root', '', 'bestfilm');

    if(mysqli_connect_errno()) {
        printf("Соединение не установлено", mysqli_connect_error());
        exit();
    }

    $mysqli->set_charset('utf8');

    $query = $mysqli->query('SELECT * FROM movie');

    while($row = mysqli_fetch_assoc($query)) {
        echo $row['name']." ".$row['year']."<br>";
    }

    // $query= "INSERT INTO movie VALUES(null,  'Безумный Макс', 'Описание фильма безумный макс', '2015', Now())";
    // $mysqli->query($query);

    $mysqli->close();

?>