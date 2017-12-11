<!DOCTYPE html>
<?php
	$conn = new mysqli('classroom.cs.unc.edu', 'kimia', 'genericpassword', 'kimiadb');

	if($conn->connect_errno > 0){
	  //echo "WRONG";
	}else{
	  //echo "RIGHT";
	}

	$sql = "SELECT * FROM proj_Log_Items WHERE user_id = 1";
	$logged_items =($conn->query($sql));
	//cho $logged_items[0];
	//$logged_items=$logged_items->fetch_array();
	//$logged2_items=$logged_items;
	// echo $logged_items2[10];
	$num = mysqli_num_rows($logged_items);
	//echo "num".$num."endnum";

	$i =0;
	$x =0;
	while ($rows = mysqli_fetch_assoc($logged_items)){
						//extract($rows);
	           $waste[$x] =   $rows["waste"];
						 $transport[$x] = $rows["transport"];
						 $cultivation[$x] = $rows["cultivation"];
						 $resources[$x] = $rows["resources"];
						 $p_action[$x] = $rows["p_action"];
						 $n_action[$x] = $rows["n_action"];
						 $date_input[$x] = $rows["date_input"];
						 $notes[$x] = $rows["notes"];

						 // echo $waste[$x];
						 // echo $transport[$x];
						 // echo $cultivation[$x];
						 // echo $resources[$x];
						 // echo $p_action[$x];
						 // echo $n_action[$x];
						 // echo $notes[$x];


						 if($waste[$x] == 1){
					 		$action[$x] = "waste"; //WASTE
					 	}else if($transport[$x] == 1){
					 		$action[$x] = "transport"; //TRANSPORT
					 	}else if($cultivation[$x] == 1){
					 		$action[$x] = "cultivation"; //CULTIVATION
					 	}else if($resources[$x] == 1){
					 		$action[$x] = "resources"; //RESOURCES
					 	}

					 	if($p_action[$x] == 1){
					 		$impact[$x] = 1;
					 		$category[$x] = 'POSITIVE';
					 	}else if($n_action[$x] == 1){
					 		$impact[$x] = -1;
					 		$category[$x] = 'NEGATIVE';
					 	}

						 $x++;


}
//
// echo json_encode($num);
// echo json_encode($action);
// echo json_encode($impact);
// echo json_encode($category);
// echo json_encode($date_input);
// echo json_encode($notes);


//$logged2_items=$logged2_items->fetch_array();

?>

<html>
<head>
    <title>My Dashboard</title>
    <script src="jquery-3.2.1.js"></script>
    <script src="./jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./jquery.dataTables.min.css">

	<script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/oldie.js"></script>
</head>

<body>

	<!-- *********************************** JAVASCRIPT *************************************** -->
	<script>


			var impact = <?php echo json_encode($impact) ?>;
			var numRows = <?php echo json_encode($num) ?>;
			var positiveImpact =0;
			var negativeImpact =0;
			for(var a =0; a<numRows; a++){
				if(impact[a] === 1){
					positiveImpact++;
				}else{
					negativeImpact++;
				}
			}

	//PROGRESS BAR
	$(function () {
	    var myChart = Highcharts.chart('progressBar', {
	        chart: {
	            type: 'bar'
	        },
	        title: {
	            text: 'My Progress'
	        },
	        xAxis: {
	            categories: ['MyLog']
	        },
	        yAxis: {
	            title: {
	                text: 'Point Total'
	            }
	        },
	        plotOptions: {
	        series: {
	            stacking: 'normal'
	          }
	        },
	        series: [{
	            name: 'Positive Impact',
	            data: [positiveImpact]
	        }, {
	            name: 'Negative Impact',
	            data: [negativeImpact]
	        }]


	    });
	});
	//DATATABLE LOG
	console.log("MADE IT");
	$(document).ready(function() {


		var t = $('#dataTable').DataTable();
		var action = <?php echo json_encode($action) ?>;
		var category = <?php echo json_encode($category) ?>;
		var date_input = <?php echo json_encode($date_input) ?>;
		var notes = <?php echo json_encode($notes) ?>;
		var addRow = 0;
    // Automatically add a first row of data

	for(var i =0; i< numRows; i++){
   // $('#addRow').on( 'click', function () {
        t.row.add( [ category[i], action[i], date_input[i], notes[i]
        ] ).draw( false );
    //} );

alert(action[i]);
//$('#addRow').click();
 	}

	    $('#dataTable').DataTable();
	});


	</script>


	<!-- *********************************** PROGRESSBAR/DATATABLES *************************************** -->

<div id="progressBar" style="min-width: 310px; max-width: 800px; height: 400px; margin: 0 auto"></div>


<table id="dataTable" class="display" cellspacing="0" width="100%">
        <thead id="dataTable-head">
            <tr>
                <th>Category</th>
                <th>Action</th>
                <th>Date Logged</th>
                <th>Notes</th>
            </tr>
        </thead>
        <tfoot id="dataTable-foot">
            <tr>
                <th>Category</th>
                <th>Action</th>
                <th>Date Logged</th>
                <th>Notes</th>
            </tr>
        </tfoot>
        <tbody id="dataTable-body">

        </tbody>
    </table>
		<button type='button' id='addRow'>ADD ROW</button>
    </body>
</html>
