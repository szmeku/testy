<?php
$I = new ApiGuy($scenario);

$I->wantTo('Admin can get all venues');
$I->loginAsAdmin();
$I->sendGET('venues');
$I->seeResponseCodeIs(200);
$I->seeResponseContainsJson([
    ['id' => "1", 'name' => 'Century Room'],
    ['id' => "2", 'name' => 'Another Venue'],
]);
