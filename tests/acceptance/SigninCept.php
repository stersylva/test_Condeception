<?php
$I = new AcceptanceTester($scenario);
$I->am('user');
$I->wantTo('Fazer login no SISGR');
$I->lookForwardTo('access website features for logged-in users');
$I->amOnPage('/auth/login');
$I->fillField('login','Admin');
$I->fillField('password','lti1990');
$I->click('Entrar');
$I->see('Início');
