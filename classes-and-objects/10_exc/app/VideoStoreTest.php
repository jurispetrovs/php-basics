<?php

namespace App;

class VideoStoreTest
{
    private VideoStore $videoStore;

    public function __construct()
    {
        $this->videoStore = new VideoStore();
        $app = new Application($this->videoStore);
        $this->tests();
        $app->run();
    }

    public function tests()
    {
        $this->videoStore->addVideo(new Video('The Matrix', 7));
        $this->videoStore->addVideo(new Video('Godfather II', 8));
        $this->videoStore->addVideo(new Video('Star Wars Episode IV: A New Hope', 10));

        DrawInformation::drawAllVideo($this->videoStore);
        echo PHP_EOL;
        $this->videoStore->checkOut(0);
        echo PHP_EOL;
        DrawInformation::drawAllVideo($this->videoStore);
        echo PHP_EOL;
        $this->videoStore->returnVideo(0);
        echo PHP_EOL;
        DrawInformation::drawAllVideo($this->videoStore);
        echo PHP_EOL;
    }
}