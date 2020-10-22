<?php

namespace App;

class VideoStore
{
    private array $videos;

    public function addVideo(Video $video): void
    {
        $this->videos[] = $video;
    }

    public function getAll(): array
    {
        if (isset($this->videos)) {
            return $this->videos;
        }
        return [];
    }

    private function getVideoByIndex(int $index): ?Video
    {
        if (isset($this->videos[$index])) {
            return $this->videos[$index];
        } else {
            return null;
        }
    }

    public function checkOut(int $index): void
    {
        $video = $this->getVideoByIndex($index);
        if ($video != null && !$video->getFlag()) {
            $video->setFlag(true);
            echo 'Great choice' . PHP_EOL;
        } elseif ($video != null && $video->getFlag()) {
            echo 'Sorry, video is checked out' . PHP_EOL;
        } else {
            echo 'Video with ' . $index . ' id don\'t exist' . PHP_EOL;
        }
    }

    public function returnVideo(int $index): void
    {
        $video = $this->getVideoByIndex($index);
        if ($video != null && $video->getFlag()) {
            $video->setFlag(false);
            $this->setRating($video);
        } elseif ($video != null && !$video->getFlag()) {
            echo 'You don\'t have the video with ' . $index . ' id' . PHP_EOL;
        } else {
            echo 'Video with ' . $index . ' id don\'t exist' . PHP_EOL;
        }
    }

    private function setRating(Video $video): bool
    {
        while (true) {
            $rating = (int)readline('Rate the video from 0 to 10: ');

            if ($rating > 10 || $rating < 0) {
                echo 'Rating can be smallest than 0, or biggest than 10' . PHP_EOL;
            } else {
                $video->setRating($rating);
                echo 'Thanks for rent. See you soon !' . PHP_EOL;
                return false;
            }
        }
    }
}