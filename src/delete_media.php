<?php
require __DIR__.'/../vendor/autoload.php';
$ig = new \InstagramAPI\Instagram();
//$ig->setProxy('socks5://127.0.0.1:1086');
$ig->login('test','test');
$userFeeds = $ig->timeline->getSelfUserFeed();
print_r('Totally '.count($userFeeds->getItems())." media\n");
foreach ($userFeeds->getItems() as $item) {
    print_r('Delete '.$item->getPk()."\n");
    $ig->media->delete($item->getPk());
    sleep(5);
}
