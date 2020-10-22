<?php

namespace App;

class DrawInformation
{
    public static function drawAllVideo(VideoStore $videoStore)
    {
        /** @var Video $video */
        foreach ($videoStore->getAll() as $key => $video) {
            echo '[' . $key . '] ' . $video->getTitle() . ' | '
                . $video->getRating() . ' | ' . $video->videoChecked() . PHP_EOL;
        }
    }

    public static function drawVideosOnTheShelves(VideoStore $videoStore)
    {
        /** @var Video $video */
        foreach ($videoStore->getAll() as $key => $video) {
            if (!$video->getFlag()) {
                echo '[' . $key . '] ' . $video->getTitle() . ' | '
                    . $video->getRating() . ' | ' . $video->videoChecked() . PHP_EOL;
            }
        }
    }

    public static function drawCheckedOutVideos(VideoStore $videoStore)
    {
        /** @var Video $video */
        foreach ($videoStore->getAll() as $key => $video) {
            if ($video->getFlag()) {
                echo '[' . $key . '] ' . $video->getTitle() . ' | '
                    . $video->getRating() . ' | ' . $video->videoChecked() . PHP_EOL;
            }
        }
    }
}