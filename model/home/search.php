<?php 
	
	include_once '../sql.php';


	function Search(){

		$data = file_get_contents("php://input");

		$objData = json_decode($data);

		try {

			global $connexion;

			$query = $connexion->prepare('SELECT * FROM RECETTES WHERE recette_name LIKE  "%'.$objData->data.'%" AND rec_validation = 1');
			$query->execute();

			$search_result = $query->fetchAll();

			return $search_result;
				
		} 

			catch (Exception $e) {
				echo "Affichage impossible", $e->getMessage();
				die();
			}
	}
		
		$search_result = Search();

		if($search_result){

			foreach ($search_result as $value) {

				echo $value['recette_name'];
			}
		}

		else{
			echo "Sorry not found";
		}
	

 ?>