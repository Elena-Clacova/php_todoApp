<?php
    class Song{
        var $songId;
        var $title;
        
    }
    $octobusSong = new Song();
    $octobusSong->songId = 1;
    $octobusSong->title = "Octobus's Garden";

    $phonk= new Song();
    $phonk->songId = 2;
    $phonk->title = "Phonk";
 

   

    class Playlist {
        var $name;
        var $songs = [];

        function addSong($song) {
            $this->songs[] = $song;
        }

    }

    $playlist= new Playlist();
    $playlist->name = "Rock";
    $playlist->addSong($octobusSong);
    $playlist->addSong($phonk);
    var_dump($playlist->songs);
?>