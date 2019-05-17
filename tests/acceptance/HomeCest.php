<?php

use Step\Acceptance\HomeSteps as HomeSteps;

class HomeCest
{

    /**
     * @param HomeSteps $I
     * @throws Exception
     * function to check click link reservation
     */
    public function checkLinkReservation(HomeSteps $I)
    {
        $I->wantToTest('check click link reservation');
        $I->clickNewReservationLink();
    }


    /**
     * @param HomeSteps $I
     * @throws Exception
     * Function to check edit link
     */
    public function checkEditLink(HomeSteps $I)
    {
        $I->wantToTest('check edit link');
        $I->clickEditLink();
    }


    /**
     * @param HomeSteps $I
     * @throws Exception
     * Function to check delete link
     */
    public function checkDeleteLink(HomeSteps $I)
    {
        $I->wantToTest('check delete link');
        $I->clickDeleteLink();
    }


    /**
     * @param HomeSteps $I
     * @throws Exception
     * Function to check Sort ID
     */
    public function checkSortID(HomeSteps $I)
    {
        $I->wantToTest('check Sort ID');
        $I->clickIconSortID();
    }


    /**
     * @param HomeSteps $I
     * @throws Exception
     * Function to check Sort Type
     */
    public function checkSortType(HomeSteps $I)
    {
        $I->wantToTest('check Sort Type');
        $I->clickIconSortType();
    }


    /**
     * @param HomeSteps $I
     * @throws Exception
     * Function to check Sort Table ID
     */
    public function checkSortTableID(HomeSteps $I)
    {
        $I->wantToTest('check Sort Table ID');
        $I->clickIconSortTableID();
    }


    /**
     * @param HomeSteps $I
     * @throws Exception
     * Function to check Sort Number of Person
     */
    public function checkSortNumberPerson(HomeSteps $I)
    {
        $I->wantToTest('check Sort Number of Person');
        $I->clickIconSortNumberPerson();
    }


    /**
     * @param HomeSteps $I
     * @throws Exception
     * Function to check Sort Date
     */
    public function checkSortDate(HomeSteps $I)
    {
        $I->wantToTest('check Sort Date');
        $I->clickIconSortDate();
    }


    /**
     * @param HomeSteps $I
     * @throws Exception
     * Function to check Sort Description
     */
    public function checkSortDescription(HomeSteps $I)
    {
        $I->wantToTest('check Sort Description');
        $I->clickIconSortDescription();
    }

    /**
     * @param HomeSteps $I
     * @throws Exception
     * Function to check Sort Duration
     */
    public function checkSortDuration(HomeSteps $I)
    {
        $I->wantToTest('check Sort Duration');
        $I->clickIconSortDuration();
    }


    /**
     * @param HomeSteps $I
     * @throws Exception
     * Function to check Pagination
     */
    public function checkPagination(HomeSteps $I)
    {
        $I->wantToTest('check Pagination');
        $I->clickPagination();
    }

    /**
     * @param HomeSteps $I
     * @throws Exception
     * Function to check Reload Data
     */
    public function checkReloadData(HomeSteps $I)
    {
        $I->wantToTest('check Reload Data');
        $I->clickReloadDataLink();
    }
}