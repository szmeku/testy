<?php
$I = new ApiGuy($scenario);

$I->wantTo('Admin can update venue');
$I->loginAsAdmin();
$I->seeInDatabase('venues', ['id' => 1, 'name' => 'Century Room']);
$I->sendPUT('venues/1', ['name' => 'Century Room New Name']);
$I->seeResponseCodeIs(200);
// todo dziwne zachowanie, zwraca id'ka jako stringa
$I->seeResponseContainsJson(['id' => "1", 'name' => 'Century Room New Name']);
$I->seeInDatabase('venues', ['id' => 1, 'name' => 'Century Room New Name']);
