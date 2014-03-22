<?php
$I = new ApiGuy($scenario);

$I->wantTo('suspend user after 5 incorrect logins');
foreach(range(0,4) as $i){
    $I->login('szmeku@gmail.com', 'korniszon', 400, json_encode(['message' => "Invalid login or password"]));
}
$I->login('szmeku@gmail.com', 'kurnik11', 403, json_encode(['message' => "You're suspended (To many wrong logins from this ip)"]));

