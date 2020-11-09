<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" href="./libraries/DatatTable/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="./style.css">
	</head>
	<body>
		<table id='empTable' class='display dataTable'>

		  <thead>
		    <tr>
		      <th align="left"><input name="filter_name" class="extra-filters" placeholder="Search by name" /></th>
		      <th >Email</th>
		      <th >Gender</th>
		      <th >Salary</th>
		      <th >City</th>
		    </tr>
		  </thead>

		</table>
		
	</body>
	<script type="text/javascript" src="./assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="./libraries/DatatTable/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="./app.js"></script>
</html>