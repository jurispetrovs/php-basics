<?php

namespace App;

class Application
{
    private VideoStore $videoStore;

    public function __construct(VideoStore $videoStore)
    {
        $this->videoStore = $videoStore;
    }

    function run()
    {
        while (true) {
            echo PHP_EOL;
            echo "Choose the operation you want to perform \n";
            echo "Choose [0] for EXIT\n";
            echo "Choose [1] to fill video store\n";
            echo "Choose [2] to rent video (as user)\n";
            echo "Choose [3] to return video (as user)\n";
            echo "Choose [4] to list inventory\n";

            $command = (int)readline('>> ');

            switch ($command) {
                case 0:
                    echo "Bye!" . PHP_EOL;
                    return false;
                case 1:
                    echo PHP_EOL;
                    $this->addMovies();
                    break;
                case 2:
                    echo PHP_EOL;
                    $this->rentVideo();
                    break;
                case 3:
                    echo PHP_EOL;
                    $this->returnVideo();
                    break;
                case 4:
                    echo PHP_EOL;
                    $this->listInventory();
                    break;
                default:
                    echo "Sorry, I don't understand you..";
            }
        }
    }

    private function addMovies(): void
    {
        $title = (string)readline('Video title: ');
        $rating = (float)readline('Video rating: ');

        if ($rating > 10 || $rating < 0) {
            echo 'Rating can be smallest than 0, or biggest than 10' . PHP_EOL;
        } else {
            $this->videoStore->addVideo(new Video($title, $rating));
        }
    }

    private function rentVideo()
    {
        DrawInformation::drawVideosOnTheShelves($this->videoStore);

        $toRent = (int)readline('Index of video to rent: ');
        $this->videoStore->checkOut($toRent);
    }

    private function returnVideo()
    {
        DrawInformation::drawCheckedOutVideos($this->videoStore);

        $toReturn = (int)readline('Index of video to return: ');
        $this->videoStore->returnVideo($toReturn);
    }

    private function listInventory(): void
    {
        DrawInformation::drawAllVideo($this->videoStore);
    }
}