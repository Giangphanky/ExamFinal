<?php
namespace Step\Acceptance;
use Page\HomePage as HomePage;
use Page\ReservationPage as ReservationPage;


class HomeSteps extends \AcceptanceTester

{
    /**
     * @throws \Exception
     * Function to click NewReservation Link
     */
    public function clickNewReservationLink()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->waitForElementVisible(HomePage::$newReservationLink, 30);
        $I->click(HomePage::$newReservationLink);
        $I->waitForElementVisible(ReservationPage::$tableIDField, 30);
    }

    /**
     * @throws \Exception
     * Function to click Edit Link
     */
    public function clickEditLink()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->waitForElementVisible(HomePage::$editLink, 30);
        $I->click(HomePage::$editLink);
        $I->waitForElementVisible(ReservationPage::$tableIDField, 30);
    }

    /**
     * Function to click Delete Link
     */
    public function clickDeleteLink()
    {
        $I = $this;
        $I->amOnPage(HomePage::$deleteLink);
    }

    /**
     * @throws \Exception
     * Function to sort id of Available Tables
     */
    public function clickIconSortID()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->waitForElementVisible(HomePage::$idSort, 30);
        $I->click(HomePage::$idSort);
    }

    /**
     * @throws \Exception
     * Function to sort type of Available Tables
     */
    public function clickIconSortType()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->waitForElementVisible(HomePage::$typeSort, 30);
        $I->click(HomePage::$typeSort);
    }

    /**
     * @throws \Exception
     * Function to sort table ID of All Available Reservations
     */
    public function clickIconSortTableID()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->waitForElementVisible(HomePage::$tableIDSort, 30);
        $I->click(HomePage::$tableIDSort);
    }

    /**
     * @throws \Exception
     * Function to sort number person of All Available Reservations
     */
    public function clickIconSortNumberPerson()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->waitForElementVisible(HomePage::$numberPersonSort, 30);
        $I->click(HomePage::$numberPersonSort);
    }

    /**
     * @throws \Exception
     * Function to sort date of All Available Reservations
     */
    public function clickIconSortDate()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->waitForElementVisible(HomePage::$dateSort, 30);
        $I->click(HomePage::$dateSort);
    }

    /**
     * @throws \Exception
     * Function to sort description of All Available Reservations
     */
    public function clickIconSortDescription()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->waitForElementVisible(HomePage::$descriptionSort, 30);
        $I->click(HomePage::$descriptionSort);
    }

    /**
     * @throws \Exception
     * Function to sort duration of All Available Reservations
     */
    public function clickIconSortDuration()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->waitForElementVisible(HomePage::$durationSort, 30);
        $I->click(HomePage::$durationSort);
    }

    /**
     * @throws \Exception
     * Function to click pagination
     */
    public function clickPagination()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->waitForElementClickable(HomePage::$pagination2, 30);
        $I->click(HomePage::$pagination2);
        $I->waitForElementClickable(HomePage::$pagination1, 30);
        $I->click(HomePage::$pagination1);
    }


    /**
     * @throws \Exception
     * Function to click reload data link
     */
    public function clickReloadDataLink()
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->waitForElementVisible(HomePage::$reloadDataLink, 30);
        $I->click(HomePage::$reloadDataLink);
    }
}