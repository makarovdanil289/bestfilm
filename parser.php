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
    // $title = null;
    // $title_orign = null;
    // $post = null;
    // $rating = null;
    // $year = null;

    // foreach ($xml as $movie_key => $movie) {
    //     $title = $movie->title_russian;
    //     $title_orign = $movie->title_original;
    //     $year = $movie->year;
         

    //     foreach ($movie->poster->big->attributes() as $poster_key => $poster) {
    //         $post = $poster;
    //     }

    //     if($movie->imdb) {
    //         $rating = $movie->imdb->attributes()['rating'];
    //     } else {
    //         $rating = null;
    //     }
    //     insert($title, $title_orign, $year, $rating, $post, 1);
    // }

    $xmlserials = simplexml_load_file("xml/serials.xml") or die("Error: Cannot create object");


    echo "<pre>";
    print_r($xmlserials);
    echo "</pre>";


?>