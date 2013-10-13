<?php

require('../video.class.php');

$video = new YouTubeAPI\Video();

$video->setSize(560, 315);
$video->setSource('YOUR-YOUTUBE-VIDEO-URL');
echo $video->create();