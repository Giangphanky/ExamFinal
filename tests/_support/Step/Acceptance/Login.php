<?php
namespace Step\Acceptance;
use Page\Acceptance\Login as LoginPage;

class Login extends \AcceptanceTester
{
    /**
     * check Username field exist on login page
     */
    public function checkUserNameExist()
    {
        $I = $this;
        $I->wantToTest('I want to go login page');
        $I->amOnPage(LoginPage::$URL);
        $I->wantToTest('I want to check username exist');
        $I->waitForElementVisible(LoginPage::$username,3);
        //$I->waitForElement(): element hiển thị dưới code, nhưng không hiển thị lên frontend
    }

}