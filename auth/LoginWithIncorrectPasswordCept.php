<?php
$I = new ApiGuy($scenario);

$I->wantTo('login with incorrect password');
$I->login('szmeku@gmail.com', 'wrongPassword ', 400, json_encode(['message' => "Invalid login or password"]));
