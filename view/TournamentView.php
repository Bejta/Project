<?php

namespace view;

class TournamentView{

	private static $tournamentName = 'TournamentView::Name';
	private static $AddTournament = 'TournamentView::add';
	private static $add = 'TournamentView::add';
	private $message='';

	
	/**
	 * Create HTTP response
	 *
	 * Should be called 
	 *
	 * 
	 */
	public function response() {

		$response = $this->generateTournamentFormHTML();
		
		return $response;
	}
	

	public function generateTournamentFormHTML(){


		return '
			<form method="post" > 
				<fieldset>
					<legend>Add new tournament</legend>
					<p id="' . self::$tournamentName . '">' . $message . '</p>
					
					<label for="' . self::$tournamentName . '">Tournament Name :</label>
					<input type="text" id="' . self::$tournamentName . '" name="' . self::$tournamentName . '" value="' . $this->getRequestName() . '" />

					<input type="submit" name="' . self::$add . '" value="add" />
				</fieldset>
			</form>
		';
	}

	// If Add button is pressed
	public function isAddPosted() {
		return isset($_POST[self::$add]);
	}

	//CREATE SET-FUNCTION 
	public function setRequestName($tournamentName)
	{
		$_POST[self::$tournamentName] = $tournamentName;
	}

	//CREATE GET-FUNCTIONS TO FETCH REQUEST VARIABLES
	public function getRequestName() {
		//RETURN REQUEST VARIABLE: NAME

		if(isset($_POST[self::$tournamentName])) {

            return $_POST[self::$tournamentName];

        } 
        else {

            return '';
        }
	}

	/*
     * Resets message!
     */
    public function resetMessage()
    {
       $message = '';
    }

    /*
     * setter for message
     */
    public function setMessage($message)
    {
          $this->message = $message;
    }

	
}