<?php

class LoginPageCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    // tests
    public function pageLoads(AcceptanceTester $I)
    {     #Action
         $I->amOnPage('/login');

          #Asserts
         $I->see('Home');
         $I->seeElement('#email');
        

    }
}
