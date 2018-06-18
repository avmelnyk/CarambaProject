<?php
include 'models/Episode.php';
/**
 * Created by PhpStorm.
 * User: avmelnyk
 * Date: 6/18/18
 * Time: 11:27 PM
 */

    $dir  = '/home/avmelnyk/Downloads/Сімпсони [HURTOM.COM]/';
    $files = scandir($dir);
    array_splice($files, 0, 2);

    foreach ($files as $dir_name){
        echo $dir_name . '</br>' ;
        $episodes = scandir($dir . '/' . $dir_name);
        array_splice($episodes, 0, 2);
        foreach ($episodes as $episode) {
            $episode_num_sea =  explode("-", $episode)[0];
            $season_id =  explode("x", $episode_num_sea)[0];
            $episode_id =  explode("x", $episode_num_sea)[1];
            $title = explode("-", $episode)[1];
            $episode = new Episode($season_id, $episode_id,12, 'url', $title, 'meta', 'path' );
            var_dump($episode);
        }
        //var_dump($episodes);
    }

    /*foreach ($files as $dir_name) {
        $season_number = explode(" ", $dir_name)[2];
        echo rtrim($season_number, ')') . "</br>";
    }*/
//    var_dump($files);

