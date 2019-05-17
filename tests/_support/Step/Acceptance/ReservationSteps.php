<?php
namespace Step\Acceptance;
use Page\HomePage as HomePage;
use Page\ReservationPage as ReservationPage;


class ReservationSteps extends \AcceptanceTester
{
    /**
     * @param array $reservation
     * Function create reservation
     */
    public function createReservation($reservation = array())
    {
        $I = $this;
        $I->fillField(ReservationPage::$tableIDField, $reservation['tableID']);
        $I->fillField(ReservationPage::$numberPersonField, $reservation['numberPerson']);
        $I->clearField(ReservationPage::$dateField);
        $I->fillField(ReservationPage::$dateField, $reservation['date']);
        $I->fillField(ReservationPage::$descriptionField, $reservation['description']);
        $I->fillField(ReservationPage::$startTimeField, $reservation['startTime']);
        $I->click(ReservationPage::$submitButton);
    }

    /**
     * @param array $reservation
     * @param $function
     * @throws \Exception
     * Funtion reservation with wrong value
     */
    public function wrongReservations($reservation = array(), $function)
    {
        $I = $this;
        $I->amOnPage(HomePage::$URL);
        $I->waitForElementVisible(HomePage::$newReservationLink, 30);
        $I->click(HomePage::$newReservationLink);
        $I->waitForElementVisible(ReservationPage::$tableIDField, 30);
        switch ($function)
        {
            case 'tableIDEmpty':
                $I->comment('TableID value is empty');
                $I->createReservation($reservation);
                $I->waitForElementVisible(ReservationPage::$errorEmptyID, 30);
                break;
            case 'tableIDNull':
                $I->comment('TableID value is null');
                $I->fillField(ReservationPage::$numberPersonField, $reservation['numberPerson']);
                $I->clearField(ReservationPage::$dateField);
                $I->fillField(ReservationPage::$dateField, $reservation['date']);
                $I->fillField(ReservationPage::$descriptionField, $reservation['description']);
                $I->fillField(ReservationPage::$startTimeField, $reservation['startTime']);
                $I->click(ReservationPage::$submitButton);
                $I->waitForElementVisible(ReservationPage::$errorEmptyID, 30);
                break;
            case 'tableIDInvalid':
                $I->comment('TableID value is invalid');
                $I->createReservation($reservation);
                $I->waitForElementVisible(ReservationPage::$errorWrongInput, 30);
                break;
            case 'numberPersonEmpty':
                $I->comment('Number person value is empty');
                $I->createReservation($reservation);
                $I->waitForElementVisible(ReservationPage::$errorEmptyNumberPerson, 30);
                break;
            case 'numberPersonNull':
                $I->comment('Number person value is null');
                $I->fillField(ReservationPage::$tableIDField, $reservation['tableID']);
                $I->clearField(ReservationPage::$dateField);
                $I->fillField(ReservationPage::$dateField, $reservation['date']);
                $I->fillField(ReservationPage::$descriptionField, $reservation['description']);
                $I->fillField(ReservationPage::$startTimeField, $reservation['startTime']);
                $I->click(ReservationPage::$submitButton);
                $I->waitForElementVisible(ReservationPage::$errorEmptyNumberPerson, 30);
                break;
            case 'numberPersonInvalid':
                $I->comment('Number of person is invalid');
                $I->createReservation($reservation);
                $I->waitForElementVisible(ReservationPage::$errorWrongInput, 30);
                break;
            case 'startTimeEmpty':
                $I->comment('Start Time value is empty');
                $I->createReservation($reservation);
                $I->waitForElementVisible(ReservationPage::$errorEmptyStartTime, 30);
                break;
            case 'startTimeNull':
                $I->comment('Start Time value is null');
                $I->fillField(ReservationPage::$tableIDField, $reservation['tableID']);
                $I->fillField(ReservationPage::$numberPersonField, $reservation['numberPerson']);
                $I->clearField(ReservationPage::$dateField);
                $I->fillField(ReservationPage::$dateField, $reservation['date']);
                $I->fillField(ReservationPage::$descriptionField, $reservation['description']);
                $I->click(ReservationPage::$submitButton);
                $I->waitForElementVisible(ReservationPage::$errorEmptyStartTime, 30);
                break;
            case 'startTimeInvalid':
                $I->comment('Start Time value is invalid');
                $I->createReservation($reservation);
                $I->waitForElementVisible(ReservationPage::$errorWrongInput, 30);
                break;
        }
    }


    /**
     * @param array $reservation
     * Function edit reservation
     */
    public function editReservation($reservation = array())
    {
        $I = $this;
        $I->clearField(ReservationPage::$tableIDField);
        $I->fillField(ReservationPage::$tableIDField, $reservation['tableID']);
        $I->clearField(ReservationPage::$numberPersonField);
        $I->fillField(ReservationPage::$numberPersonField, $reservation['numberPerson']);
        $I->clearField(ReservationPage::$dateField);
        $I->fillField(ReservationPage::$dateField, $reservation['date']);
        $I->clearField(ReservationPage::$descriptionField);
        $I->fillField(ReservationPage::$descriptionField, $reservation['description']);
        $I->clearField(ReservationPage::$startTimeField);
        $I->fillField(ReservationPage::$startTimeField, $reservation['startTime']);
        $I->click(ReservationPage::$submitButton);
    }

    /**
     * @param $description
     * @throws \Exception
     * Function to check booking success
     */
    public function checkBookingSuccess($description)
    {
        $I = $this;
        $I->waitForElementVisible(HomePage::$tableData, 30);
        $I->waitForText($description,30);
    }

    /**
     * @param $newDescription
     * @throws \Exception
     * function to check edit success
     */
    public function checkEditSuccess($newDescription)
    {
        $I = $this;
        $I->waitForElementVisible(HomePage::$tableData, 30);
        $I->waitForText($newDescription,30);
    }


}