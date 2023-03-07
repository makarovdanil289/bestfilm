<?php

    function insert($name, $desc, $year, $rating, $poster, $category_id) {
        $mysqli = new mysqli('localhost', 'root', '', 'bestfilm');

        if (mysqli_connect_errno()) {
            print_f("Соеденение не установлено", mysqli_connect_error());
            exit();
        }

        $mysqli->set_charset('utf8');

        $query = "INSERT INTO movie VALUES(null, '$name', '$desc', '$year', '$rating', '$poster', Now(), '$category_id')";

        $result = false;
        if($mysqli->query($query)) {
            $result = true;
        }
        return $result;
    }

    

    $xml = simplexml_load_file("xml/movies.xml") or die("Error: Cannot create odject");

    // echo count($xml);

    foreach ($xml as $movie_key => $movie) {
        echo $movie->title_russian."<br>";
    }

    echo "<pre>";
    print_r($xml);
    echo "</pre>";


?>