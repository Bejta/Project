<?php

namespace model;
require_once("model/DAL/DAL.php");

Class Tournament{

	/*
     *
     * Private fields
     *
     */
	private $name;
	private $players=array();


	/*
	 *
	 * Constructor
	 *
	 */
    public function __construct(\model\DAL\ $tournamentDAL, $players ){

    	$this->tournamentDAL=$tournamentDAL;
    	$this->players=$players;

    }


	 /*
     *
     * Getters and setters
     *
     */
	public function getName(){

		return $this-> $name;
	}

	public function setName($name){

		return $this-> name = $name ;
	}

   /*
    *
    * Add new tournament
    *
    */
	public function addTournament(\model\TournamentModel $newTournament){

		if (!$this->tournamentDAL->IsExist($newTournament)){
			$this->DAL->addTournament($newTournament);
			return true;
		}
        return false;
    }


    /*
     *
     * Function adds new player to array of players
     *
     */
    public function addPlayer(\model\PlayerModel $newPlayer){

    	$this->players[]=$newPlayer;
    	$this->tournamentDAL->AddTournament(this);

    }

    public function averageRating($players)
    {
    	
    }

	

}