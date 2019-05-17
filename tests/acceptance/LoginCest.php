<?php 
use Step\Acceptance\Login as LoginStep;
class LoginCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    /**
     * @param LoginStep $I
     * checkUserName exist on login page
     */
    public function checkUserNameExist(LoginStep $I)
    {
        $I->checkUserNameExist();
    }
}
