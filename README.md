YoutubePHP
==========

A simple library for easy embed you YouTube Video's with PHP!

Samples
-------

Standard method

```php
<?php

require('../video.class.php');

$video = new YouTubeAPI\Video();

$video->setSize(560, 315);
$video->setSource('http://www.youtube.com/watch?v=GBQa-2apznY');
echo $video->create();
	
```

Methods
-------

Chaining method

```php
<?php

require('../video.class.php');

$video = new YouTubeAPI\Video();

$video
	->setSize(560, 315)
	->setSource('http://www.youtube.com/watch?v=GBQa-2apznY')
	->createAndShow();
	
```

Available Methods

```
$video->setSource(width, height);
```

Sets the source of the YouTube Video, do not enter any embedded url from YouTube. The url will be converted automatically



```
$video->setSize(width, height);
```

Sets the width and the height of the YouTube Video

```
$video->createAndShow(width, height);
```

Create the video and show it to the browser's screen



