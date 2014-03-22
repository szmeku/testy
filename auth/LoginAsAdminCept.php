<?php
$I = new ApiGuy($scenario);

$I->wantTo('login as admin');
$I->loginAsAdmin();
