<?php
class LoadData{
	function __construct(){
		$this->checkCallBAck();
	}
	private function checkCallBAck(){
		## Read value
		$draw            = $_POST['draw'];
		$start           = $_POST['start']; //Row start index
		$rowperpage      = $_POST['length']; // Rows display per page
		$columnIndex     = $_POST['order'][0]['column']; // Column index
		$columnName      = $_POST['columns'][$columnIndex]['data']; // Column name
		$columnSortOrder = $_POST['order'][0]['dir']; // Sort Type asc or desc
		$searchValue     = $_POST['search']['value']; // Search value
		$order_by       = "{$columnName} {$columnSortOrder}"; 
		/*
		## Search 
		$searchQuery = " ";
		if($searchValue != ''){
		   $searchQuery = " and (emp_name like '%".$searchValue."%' or 
		        email like '%".$searchValue."%' or 
		        city like'%".$searchValue."%' ) ";
		}

		## Total number of records without filtering
		$sel = mysqli_query($con,"select count(*) as allcount from employee");
		$records = mysqli_fetch_assoc($sel);
		$totalRecords = $records['allcount'];

		## Total number of record with filtering
		$sel = mysqli_query($con,"select count(*) as allcount from employee WHERE 1 ".$searchQuery);
		$records = mysqli_fetch_assoc($sel);
		$totalRecordwithFilter = $records['allcount'];

		## Fetch records
		$empQuery = "select * from employee WHERE 1 ".$searchQuery." order by ".$columnName." ".$columnSortOrder." limit ".$start.",".$rowperpage;
		$empRecords = mysqli_query($con, $empQuery);
		$data = array();

		*/

		for ($i=$start; $i < ($start + $rowperpage); $i++) { 			
			$data[] = array( 
				"emp_name" => "Row  ".($i+1),
				"email"    => "Mail {$i}",
				"gender"   => "male",
				"salary"   => "$20000",
				"city"     => "Kodungallur"
		    );
		}

		## Response
		$response = array(
		  "draw" => intval($draw),
		  "iTotalRecords" => 50,
		  "iTotalDisplayRecords" => 50,
		  "aaData" => $data
		);

		echo json_encode($response); die;
	}
}
new LoadData();


?>