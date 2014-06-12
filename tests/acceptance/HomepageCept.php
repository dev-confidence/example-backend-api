<?php
$test = new AcceptanceTester($scenario);
$test->wantTo('ensure that homepage works');
$test->amOnPage('/');
$test->see('Dev Confidence Ltd. All rights reserved.');
