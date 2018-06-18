<?php
/**
 * Created by PhpStorm.
 * User: avmelnyk
 * Date: 6/19/18
 * Time: 1:43 AM
 */

class Episode
{
    private $ID;
    private $season_id;
    private $episode_id;
    private $duration;
    private $url;
    private $title;
    private $meta;
    private $torrent_path;

    public function __construct($season_id, $episode_id, $duration, $url, $title, $meta, $torrent_path)
    {
        $this->season_id = $season_id;
        $this->episode_id = $episode_id;
        $this->duration = $duration;
        $this->url = $url;
        $this->title = $title;
        $this->meta = $meta;
        $this->torrent_path = $torrent_path;
    }


}