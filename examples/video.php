<?php

require('../video.class.php');

$video = new YouTubeAPI\Video();

$video->setSize(560, 315);
$video->setSource('http://www.youtube.com/watch?v=GBQa-2apznY');
echo $video->create();

// Chaining

$video = new YouTubeAPI\Video();

$video
	->setSize(560, 315)
	->setSource('http://www.youtube.com/watch?v=GBQa-2apznY')
	->createAndPrint();