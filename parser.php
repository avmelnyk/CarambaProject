<?php
include 'models/Episode.php';
/**
 * Created by PhpStorm.
 * User: avmelnyk
 * Date: 6/18/18
 * Time: 11:27 PM
 */

//Сімпсони (Сезон 1) (1989-1990) HDTVRip 720p Сімпсони (Сезон 2) (1990-1991) DVDRip
    $dir  = '/home/avmelnyk/Downloads/Сімпсони [HURTOM.COM]/';
    $files = scandir($dir);
    array_splice($files, 0, 2);

    foreach ($files as $dir_name){
        echo $dir_name . '</br>' ;
        $episodes = scandir($dir . '/' . $dir_name);
        array_splice($episodes, 0, 2);
        foreach ($episodes as $episode) {
             $episode =  explode(" ", $episode)[0] . '</br>';
             echo $season_id =  explode("x", $episode)[0] . ' ';
             echo $episode_id =  explode("x", $episode)[1] . '</br>';

        }
        //var_dump($episodes);
    }

    /*foreach ($files as $dir_name) {
        $season_number = explode(" ", $dir_name)[2];
        echo rtrim($season_number, ')') . "</br>";
    }*/
//    var_dump($files);

