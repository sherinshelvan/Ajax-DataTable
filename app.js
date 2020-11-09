(function(){
	"use strict";
	
	$(document).ready( function () {
	    var dataTable = $('#empTable').DataTable({
	      	'processing': true,
	      	'serverSide': true,
	      	'serverMethod': 'POST',
	      	'order': [[ 0, 'asc' ]],
	      	"lengthMenu": [[10, 25, 50, 100], ["Max-10", 25, 50, 100]],
	      	'columnDefs' : [
		        { orderable: true, className: 'reorder', targets: [0, 1] },
		        { orderable: false, targets: '_all' }
		   ],
	      	'ajax': {
	         	'url':'./ajax/load_data.php',
	          	'data' : function(data){
	          	data.form_data = $("input[name='filter_name']").val();
	          	}
	      	},
	      	'columns': [
	         	{ data: 'emp_name' },
	         	{ data: 'email' },
	         	{ data: 'gender' },
	         	{ data: 'salary' },
	         	{ data: 'city' },
	      	]
	   	});
	    $(document).on("keyup", ".extra-filters", function(){
	      dataTable.draw();      
	    });
	});
	
})();