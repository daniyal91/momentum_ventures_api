<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>API Guide</title>

	<style type="text/css">
	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #450;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	h2 {
		color: #444;
		background-color: transparent;
		border-bottom: 5px solid #D0D0D0;
		font-size: 17px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}
	h3 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 15px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		//border-bottom: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}

	td {
		min-width: 190px;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>API Guide</h1>

	<div id="body">
		<p>Following is the complete description of functionalities.</p>
		<table>
		<tr><h2>1. airports_list()</h2></tr>
		<tr>
			<td>
				<h3>DESCRIPTION:</h3>
			</td>
			<td>
				<code>Gets the list of all airports in the database</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>PATH:</h3>
			</td>
			<td>
				<code>http://localhost:8888/new_trip/index.php/airports/airports_list</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>VERB:</h3>
			</td>
			<td>
				<code>GET / POST</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>RESPONSE STATUS:</h3>
			</td>
			<td>
				<code>200 - OK</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>CONTENT TYPE:</h3>
			</td>
			<td>
				<code>APPLICATION / JSON</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>RESPONSE BODY:</h3>
			</td>
			<td>
				<code>{
			    "id": "2",
			    "name": "Allama Iqbal International Airport",
			    "wac": "LHE",
			    "city_id": "2"
			  },
			  {
			    "id": "4",
			    "name": "Chicago Midway Int'l",
			    "wac": "MDW",
			    "city_id": "4"
			  },</code>
			</td>
		</tr>
		</table>
	</div>
	<div id="body">
		<table>
		<tr><h2>2. flight_list()</h2></tr>
		<tr>
			<td>
				<h3>DESCRIPTION:</h3>
			</td>
			<td>
				<code>List all the flights for a trip in the database</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>PATH:</h3>
			</td>
			<td>
				<code>http://localhost:8888/new_trip/index.php/airports/flight_list</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>QUERY PARAMETER:</h3>
			</td>
			<td>
				<code>trip_id</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>VERB:</h3>
			</td>
			<td>
				<code>GET / POST</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>RESPONSE STATUS:</h3>
			</td>
			<td>
				<code>200 - OK</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>CONTENT TYPE:</h3>
			</td>
			<td>
				<code>APPLICATION / JSON</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>RESPONSE BODY:</h3>
			</td>
			<td>
				<code>[{"id":"2","from_id":"1","to_id":"3","trip_id":"1","deleted":"0"},{"id":"3","from_id":"3","to_id":"5","trip_id":"1","deleted":"0"},{"id":"4","from_id":"5","to_id":"2","trip_id":"1","deleted":"0"}]</code>
			</td>
		</tr>
		</table>
	</div>

	<div id="body">
		<p>Following is the complete description of functionalities.</p>
		<table>
		<tr><h2>3. add_flight()</h2></tr>
		<tr>
			<td>
				<h3>DESCRIPTION:</h3>
			</td>
			<td>
				<code>Add a flight to a trip in the database</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>PATH:</h3>
			</td>
			<td>
				<code>http://localhost:8888/new_trip/index.php/airports/add_flight</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>VERB:</h3>
			</td>
			<td>
				<code>GET / POST</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>RESPONSE STATUS:</h3>
			</td>
			<td>
				<code>200 - OK</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>CONTENT TYPE:</h3>
			</td>
			<td>
				<code>APPLICATION / JSON</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>RESPONSE BODY:</h3>
			</td>
			<td>
				<code>{"message":"Flight Added Successfully"}</code>
			</td>
		</tr>
		</table>
	</div>

	<div id="body">
		<table>
		<tr><h2>4. remove_flight()</h2></tr>
		<tr>
			<td>
				<h3>DESCRIPTION:</h3>
			</td>
			<td>
				<code>Remove a flight to a trip in the database</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>PATH:</h3>
			</td>
			<td>
				<code>http://localhost:8888/new_trip/index.php/airports/remove_flight</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>QUERY PARAMETER:</h3>
			</td>
			<td>
				<code>flight_id</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>VERB:</h3>
			</td>
			<td>
				<code>GET / POST</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>RESPONSE STATUS:</h3>
			</td>
			<td>
				<code>200 - OK</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>CONTENT TYPE:</h3>
			</td>
			<td>
				<code>APPLICATION / JSON</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>RESPONSE BODY:</h3>
			</td>
			<td>
				<code>{"message":"Flight removed Successfully"}</code>
			</td>
		</tr>
		</table>
	</div>


		<div id="body">
		<table>
		<tr><h2>5. rename_trip()</h2></tr>
		<tr>
			<td>
				<h3>DESCRIPTION:</h3>
			</td>
			<td>
				<code>Rename a trip in the database</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>PATH:</h3>
			</td>
			<td>
				<code>http://localhost:8888/new_trip/index.php/airports/rename_trip</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>QUERY PARAMETER:</h3>
			</td>
			<td>
				<code>trip_id,trip_name</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>VERB:</h3>
			</td>
			<td>
				<code>GET / POST</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>RESPONSE STATUS:</h3>
			</td>
			<td>
				<code>200 - OK</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>CONTENT TYPE:</h3>
			</td>
			<td>
				<code>APPLICATION / JSON</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>RESPONSE BODY:</h3>
			</td>
			<td>
				<code>{"message":"Trip renamed Successfully","trip_id":"1"}</code>
			</td>
		</tr>
		</table>
	</div>
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
</div>

</body>
</html>