<?php
$test = new AcceptanceTester($scenario);
$test->wantTo('ensure that homepage works');
$test->amOnPage('/api/user');
$test->see('Mickey Mouse');
$test->see('Minnie Mouse');
