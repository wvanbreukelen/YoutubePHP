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
