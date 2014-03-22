<?php
$I = new ApiGuy($scenario);

$I->wantTo('Cannot remove non-existent venue');
$I->loginAsAdmin();
$I->sendDELETE('venues/10');
$I->seeResponseCodeIs(404);
$I->seeResponseContainsJson(['message' => "Venue doesn't exist"]);
