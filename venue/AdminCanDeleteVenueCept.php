<?php
$I = new ApiGuy($scenario);

$I->wantTo('Admin can delete venue');
$I->loginAsAdmin();
$I->seeInDatabase('venues', ['id' => 1, 'name' => 'Century Room']);
$I->sendDelete('venues/1');
$I->seeResponseCodeIs(200);
$I->seeResponseContainsJson(['message' => 'Venue deleted']);
$I->dontSeeInDatabase('venues', ['id' => 1, 'name' => 'Century Room']);
