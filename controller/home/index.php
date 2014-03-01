<?php 
	include_once('model/home/index.php');
	include_once('model/home/autocomplete.php');
	function suggestions(){
    $term = $_POST('term');

    if(strlen($term) < 1){ 

    }
   
    $rows = GetAutocomplete(array('keyword' => $term));
    $json_array = array();

    foreach ($rows as $row){

         array_push($json_array, $row['recette_name']);
        }
    echo json_encode($json_array);
}
	$data1 = tags_show1();
	$data2 = tags_show2();
	$data3 = tags_show3();
	$data4 = tags_show4();
	$data5 = tags_show5();
	$data7 = tags_show7();
 
 	$ofzemonth = book_ofzemonth();
 	$top_recipe = top_recipe();
 	$week_cooker = week_cooker();
	include_once('view/home/index.php');

 ?>