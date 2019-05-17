<?php
use Step\Acceptance\HomeSteps as HomeSteps;
use Step\Acceptance\ReservationSteps as ReservationSteps;
use Faker\Factory;

class ReservationCest
{
    protected $tableID;
    protected $numberPerson;
    protected $date;
    protected $description;
    protected $startTime;
    protected $faker;
    protected $reservation;

    /**
     * ReservationCest constructor.
     */
    public function __construct()
    {
        $this->faker        = Factory::create();
        $this->tableID = '2';
        $this->numberPerson = '2';
        $this->date = '05/20/2019';
        $this->description = $this->faker->text(30);
        $this->startTime = $this->faker->numberBetween(17,23);

        $this->reservation =
            [
                'tableID' => "2",
                'numberPerson' => "2",
                'date' => "05/20/2019",
                'description' => $this->faker->text(30),
                'startTime' => $this->faker->numberBetween(17,23)
            ];
    }

    /**
     * @param HomeSteps $I
     * @param $scenario
     * @throws Exception
     * Function check create reservation
     */
    public function createReservationSuccess(HomeSteps $I, $scenario)
    {
        $I->wantToTest("check create reservation");
        $I->clickNewReservationLink();
        $I = new ReservationSteps($scenario);
        $I->createReservation($this->reservation);
        $I->comment("create reservation success");
    }


    /**
     * @param ReservationSteps $I
     * @throws Exception
     * Test TableID value is empty
     */
    public function createWithTableIDEmpty(ReservationSteps $I)
    {
        $I->wantToTest("TableID value is empty");
        $this->reservation['tableID']= '     ';
        $I->wrongReservations($this->reservation,'tableIDEmpty');
        $this->reservation['tableID']= '2';
    }

    /**
     * @param ReservationSteps $I
     * @throws Exception
     * Test TableID value is null
     */
    public function createWithTableIDNull(ReservationSteps $I)
    {
        $I->wantToTest("TableID value is null");
        $I->wrongReservations($this->reservation,'tableIDNull');
    }


    /**
     * @param ReservationSteps $I
     * @throws Exception
     * Test TableID value is invalid
     */
    public function createWithTableIDInvalid(ReservationSteps $I)
    {
        $I->wantToTest("TableID value is invalid");
        $this->reservation['tableID']= 'a';
        $I->wrongReservations($this->reservation,'tableIDInvalid');
        $this->reservation['tableID']= '2';
    }

    /**
     * @param ReservationSteps $I
     * @throws Exception
     * Test NumberPerson value is empty
     */
    public function createWithNumberPersonEmpty(ReservationSteps $I)
    {
        $I->wantToTest("NumberPerson value is empty");
        $this->reservation['numberPerson']= '     ';
        $I->wrongReservations($this->reservation,'numberPersonEmpty');
        $this->reservation['numberPerson']= '2';
    }


    /**
     * @param ReservationSteps $I
     * @throws Exception
     * Test NumberPerson value is null
     */
    public function createWithNumberPersonNull(ReservationSteps $I)
    {
        $I->wantToTest("NumberPerson value is null");
        $I->wrongReservations($this->reservation,'numberPersonNull');
    }


    /**
     * @param ReservationSteps $I
     * @throws Exception
     * Test NumberPerson value is invalid
     */
    public function createWithNumberPersonInvalid(ReservationSteps $I)
    {
        $I->wantToTest("NumberPerson value is invalid");
        $this->reservation['numberPerson']= 'a';
        $I->wrongReservations($this->reservation,'numberPersonInvalid');
        $this->reservation['numberPerson']= '2';
    }


    /**
     * @param ReservationSteps $I
     * @throws Exception
     * Test StartTime value is empty
     */
    public function createWithStartTimeEmpty(ReservationSteps $I)
    {
        $I->wantToTest("StartTime value is empty");
        $this->reservation['startTime']= '     ';
        $I->wrongReservations($this->reservation,'startTimeEmpty');
        $this->reservation['startTime']= $this->faker->numberBetween(17,23);
    }


    /**
     * @param ReservationSteps $I
     * @throws Exception
     * Test StartTime value is null
     */
    public function createWithStartTimeNull(ReservationSteps $I)
    {
        $I->wantToTest("StartTime value is null");
        $I->wrongReservations($this->reservation,'startTimeNull');
    }


    /**
     * @param ReservationSteps $I
     * @throws Exception
     * Test StartTime value is invalid
     */
    public function createWithStartTimeInvalid(ReservationSteps $I)
    {
        $I->wantToTest("StartTime value is invalid");
        $this->reservation['startTime']= 'a';
        $I->wrongReservations($this->reservation,'startTimeInvalid');
        $this->reservation['startTime']= $this->faker->numberBetween(17,23);
    }

    /**
     * @param HomeSteps $I
     * @param $scenario
     * @throws Exception
     * Test dit reservation success
     */
    public function editSuccess(HomeSteps $I, $scenario)
    {
        $I->wantToTest("Edit reservation success");
        $I->clickEditLink();
        $I = new ReservationSteps($scenario);
        $I->editReservation($this->reservation);
        $I->checkEditSuccess($this->reservation['description']);
    }
}