<?php
abstract class Music{
    public function song(){
        return "hello new Song";
    }
    //rule
    abstract public function play();
    abstract public function pause();
    abstract public function stop();
    abstract public function previous();
    abstract public function next();
}

//$n= new Music();error "can't accept direct
//echo $n->song();

class MusicPlayer extends Music{
    public function play()
    {
        echo "play \n";
    }
    public function pause()
    {
        echo "pause \n";
    }
     public function stop()
    {
        echo "stop \n";
    }
     public function previous()
    {
        echo "previous \n";
    }
     public function next()
    {
        echo "next \n";
    }
}

$music = new MusicPlayer();
$music->play();
$music->pause();
$music->stop();
$music->previous();
$music->next();