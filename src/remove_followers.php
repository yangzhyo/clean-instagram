<?php
require __DIR__.'/../vendor/autoload.php';
$ig = new \InstagramAPI\Instagram();
//$ig->setProxy('socks5://127.0.0.1:1086');
$ig->login('test','test');
$followers = $ig->people->getSelfFollowers('123e4567-e89b-12d3-a456-426655440000');
print_r('Totally '.count($followers->getUsers())." followers\n");
foreach ($followers->getUsers() as $user) {
    print_r('Remove '.$user->getPk()."\n");
    $ig->people->removeFollower($user->getPk());
    sleep(5);
}
