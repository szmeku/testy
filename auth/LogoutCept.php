<?php
$I = new ApiGuy($scenario);

$I->wantTo('logout');
$I->loginAsAdmin();
$I->sendGET('auth/logout');
$I->seeResponseCodeIs(200);
$I->seeResponseContainsJson(['message' => "You've just logged out"]);
// todo dopisac jakas akcje ktora sprawdzi ze wylogowany