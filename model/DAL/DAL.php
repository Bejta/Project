<?php

namespace model;

class DAL{

/****************
 ***** Encapsulate path to the JSON file
 ***************/
	private static $file = file_get_contents('model/DAL/data/Tournaments.json');

    
/*****************
 ****
 **** Function that reads JSON file in array, and returns it.
 ****
 ****************/    
	public function getTournamentsList{
    
        $tournamentsArray = json_decode($file, true);
        return $tournaments;

	}

/*****************
 ****
 **** Function that gets new tournaments as a parameter....
 **** and adds the tournament in tournaments array....
 **** The last step is that tournament array is writen in JSON file.
 ****
 ****************/  

	public function AddTournament(TournamentModel $tournament){

		
		$tournaments=$this->getToutnamentList();
		$tournaments[]=$tournament;

        $jsonTournaments = json_encode($tournaments);
        file_put_contents($file, $tournaments);
	}

/*****************
 ****
 **** Function checks if tournament already exists in JSON file.
 ****
 ****************/  
	public function IsExist($name){

        $tournaments = $this->getToutnamentList();

        foreach ($tournaments as $k => $v)
		{
			if ($v == $name) 
			{
			    return true;
			}
		}
        return false;
    }
}