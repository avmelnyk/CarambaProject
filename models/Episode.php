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

    public function getSeasonId()
    {
        return $this->season_id;
    }

    public function setSeasonId($season_id)
    {
        $this->season_id = $season_id;
    }

    public function getEpisodeId()
    {
        return $this->episode_id;
    }

    public function setEpisodeId($episode_id)
    {
        $this->episode_id = $episode_id;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function setUrl($url)
    {
        $this->url = $url;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getMeta()
    {
        return $this->meta;
    }

    public function setMeta($meta)
    {
        $this->meta = $meta;
    }


    public function getTorrentPath()
    {
        return $this->torrent_path;
    }


    public function setTorrentPath($torrent_path)
    {
        $this->torrent_path = $torrent_path;
    }



}