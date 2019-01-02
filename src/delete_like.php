<?php
require __DIR__.'/../vendor/autoload.php';
$ig = new \InstagramAPI\Instagram();
//$ig->setProxy('socks5://127.0.0.1:1086');
$ig->login('test','test');

$maxId = null;
do {
    $likedFeeds = $ig->media->getLikedFeed();
    print_r('Retrieved '.count($likedFeeds->getItems())." liked media\n");
    foreach ($likedFeeds->getItems() as $item) {
        print_r('Unlike '.$item->getPk()."\n");
        $ig->media->unlike($item->getPk());
        sleep(5);
    }
    $maxId = $likedFeeds->getNextMaxId();
} while ($maxId !== null);
