<?php

namespace model;

Class Player{

    /*
     *
     * Private fields
     *
     */
	private $name;
	private $rating;
	private $age;
	private $kfactor;
	private $averageRating;
	private $score;
	private $numberOfGames;
	private TitleModel $title;



    /*
     *
     * Constructor
     *
     */
	public function __construct($name, $rating, $age, $averageRating, $score, $kfactor, $numberOfGames, TitleModel $title ){

		$this->name=$name;
		$this->rating=$rating;
		$this->age=$age;
		$this->averageRating=$averageRating;
		$this->score=$score;
		$this->numberOfGames=$numberOfGames;
		$this->kfactor=$kfactor;
		$this->loginModel=$title;

	}


    /*
     *
     * Getters and setters
     *
     */
	public function getName(){

		return $this->$name;
	}

	public function setName($name){

		return $this-> name = $name ;
	}

	public function getAge(){

		return $this->$age;
	}

	public function setAge($age){

		return $this->age = $age ;
	}
	public function getNumberOfGames(){

		return $this->$numberOfGames;
	}
	public function setNumberOfGames($numberOfGames){

		return $this->numberOfGames = $numberOfGames;
	}
	public function getScore(){

		return $this->$score;
	}

	public function setScore($score){

		return $this->score = $score;
	}

	public function getAverageRating(){

		return $this->$averageRating;
	}

	public function setAverageRating($averageRating){

		return $this->averageRating = $averageRating;
	}

	public function getRating(){

		return $this->$rating;
	}

	public function setRating($rating){

		return $this->rating = $rating ;
	}
	public function getKFactor(){

		return $this->$kfactor;
	}

	public function setKFactor($kfactor){

		return $this->kfactor = $kfactor ;
	}
	public function getTitle(){

		return $this-> $title;
	}

	public function setTitle($title){

		return $this->title = $title ;
	}

    
    /*
     * Methods for calculations of Performance, Expected result, Change in ELO e.t.c.
     * Performance rating is a hypothetical rating that would result from the games of a single event only.
     *
     */
	public function CalculatePerformance($score,$averageRating){



	}
	public function CalculateExpectedResult($averageRating,$rating,$numberOfGames,$Score){

		$expectedScore =$numberOfGames*(1 / (1 + (10^(($averageRating - $rating) / 400))));
		return $expectedScore;
		
	}
	public function calculateRatingChange(){

	}



}