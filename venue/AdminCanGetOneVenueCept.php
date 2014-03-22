<?php
$I = new ApiGuy($scenario);

$I->wantTo('Admin can get all venues');
$I->loginAsAdmin();
$I->sendGET('venues/1');
$I->seeResponseCodeIs(200);
$I->seeResponseContainsJson(['id' => "1", 'name' => 'Century Room']);
