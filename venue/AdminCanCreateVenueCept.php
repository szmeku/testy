<?php
$I = new ApiGuy($scenario);

$I->wantTo('Admin can create venue');
$I->loginAsAdmin();
$I->sendPOST('venues', [
    'name' => 'New Venue',
    'email' => 'szmeku@gmail.com',
    'description' => 'New Venue',
    'city' => 'Katowice',
    'street' => 'Obornicka 20',
    'telephone' => '324 2342 2432',
    'default_gratuity' => 100,
]);
$I->seeResponseCodeIs(200);
$I->seeResponseContainsJson(['id' => 3, 'name' => 'New Venue']);
$I->seeInDatabase('venues', ['id' => 3, 'name' => 'New Venue']);
