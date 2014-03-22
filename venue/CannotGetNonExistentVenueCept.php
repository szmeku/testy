<?php
$I = new ApiGuy($scenario);

$I->wantTo('Cannot get non-existent venue');
$I->loginAsAdmin();
$I->sendGET('venues/10');
$I->seeResponseCodeIs(404);
$I->seeResponseContainsJson(['message' => "Venue doesn't exist"]);
