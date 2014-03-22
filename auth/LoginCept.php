<?php
$I = new ApiGuy($scenario);

$I->wantTo('login with correct credentials');
$I->login('szmeku@gmail.com', 'kurnik11', 200, json_encode(['message' => "You've just logged in as janusz"]));
