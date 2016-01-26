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
		border-top: 5px solid #D0D0D0;
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

	.response-heading{
		font-weight: bold;
		font-size: 16px;
		text-color: #999999;
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
		<tr><h2>1. Airports List</h2></tr>
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
				<code>http://tripmanager.netne.net/new_trip/index.php/airports/airports_list</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>QUERY PARAMETER:</h3>
			</td>
			<td>
				<code>N/A or None</code>
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
				<h3>RESPONSE PARAMETERS:</h3>
			</td>
			<td>
			<code>
				<table class="response">
					<thead>
						<tr>
							<td class="response-heading">Response</td>
							<td class="response-heading">Type</td>
							<td class="response-heading">Description</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="param">id</td>
							<td class="format">Integer</td>
							<td class="description">The unique ID of the airport.</td>
						</tr>
						<tr>
							<td class="param">name</td>
							<td class="format">Integer</td>
							<td class="description">The name of the airport.</td>
						</tr>
			            <tr>
			                <td class="param">wac</td>
			                <td class="format">String</td>
			                <td class="description">The WAC is the unique code for each airport.</td>
			            </tr>
						<tr>
							<td class="param">city_id</td>
							<td class="format">Integer</td>
							<td class="description"><br/>The unique ID of the city <br/>1 for Karachi, 2 for Lahore, 3 for Newyork, 4 for Chicago, 5 for Montreal, 6 for Toronto.</td>
						</tr>
					</tbody>
				</table>
				</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>RESPONSE BODY:</h3>
			</td>
			<td>
				<code><strong>If records found the message will be:</strong>&nbsp;&nbsp;&nbsp;<br/>{
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
			  }<br/><strong>If records not found the message will be:</strong>&nbsp;&nbsp;&nbsp;<br/>{"message": "No records found"}</code>
			</td>
		</tr>
		</table>
	</div>
	<div id="body">
		<table>
		<tr><h2>2. Flight List</h2></tr>
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
				<code>http://tripmanager.netne.net/new_trip/index.php/airports/flight_list</code>
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
				<h3>RESPONSE PARAMETERS:</h3>
			</td>
			<td>
			<code>
				<table class="response">
					<thead>
						<tr>
							<td class="response-heading">Response</td>
							<td class="response-heading">Type</td>
							<td class="response-heading">Description</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="param">trip_id</td>
							<td class="format">Integer</td>
							<td class="description">The unique ID of the trip.<br/>1 for the trip in the database table</td>
						</tr>
					</tbody>
				</table>
				</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>RESPONSE BODY:</h3>
			</td>
			<td>
				<code><strong>If trip ID not assigned the message will be:</strong>&nbsp;&nbsp;&nbsp;<br/>{"message": "Invalid trip id or trip id not specified"}<br/><strong>If record not found the message will be:</strong>&nbsp;&nbsp;&nbsp;<br/>{"message":"Record not found"}</code>
			</td>
		</tr>
		</table>
	</div>

	<div id="body">
		<table>
		<tr><h2>3. Add Flight</h2></tr>
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
				<code>http://tripmanager.netne.net/new_trip/index.php/airports/add_flight</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>QUERY PARAMETER:</h3>
			</td>
			<td>
				<code>to_id, from_id, trip_id</code>
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
				<h3>RESPONSE PARAMETERS:</h3>
			</td>
			<td>
			<code>
				<table class="response">
					<thead>
						<tr>
							<td class="response-heading">Response</td>
							<td class="response-heading">Type</td>
							<td class="response-heading">Description</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="param">to_id</td>
							<td class="format">Integer</td>
							<td class="description">Airport ID<br/>1 for Karachi, 2 for Lahore, 3 for Newyork, 4 for Chicago, 5 for Montreal, 6 for Toronto.</td>
						</tr>
						<tr>
							<td class="param">from_id</td>
							<td class="format">Integer</td>
							<td class="description">Airport ID<br/>1 for Karachi, 2 for Lahore, 3 for Newyork, 4 for Chicago, 5 for Montreal, 6 for Toronto.</td>
						</tr>
						<tr>
							<td class="param">trip_id</td>
							<td class="format">Integer</td>
							<td class="description">The unique ID of the trip.<br/>1 for the trip in the database table</td>
						</tr>
					</tbody>
				</table>
				</code>
			</td>
		</tr>

		<tr>
			<td>
				<h3>RESPONSE BODY:</h3>
			</td>
			<td>
				<code><strong>If record found the message will be:</strong>&nbsp;&nbsp;&nbsp;<br/>{"message":"Flight Added Successfully"}<br/><strong>If record not found the message will be:</strong>&nbsp;&nbsp;&nbsp;<br/>{"message":"Invalid data"}</code>
			</td>
		</tr>
		</table>
	</div>

	<div id="body">
		<table>
		<tr><h2>4. Remove Flight</h2></tr>
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
				<code>http://tripmanager.netne.net/new_trip/index.php/airports/remove_flight</code>
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
				<h3>RESPONSE PARAMETERS:</h3>
			</td>
			<td>
			<code>
				<table class="response">
					<thead>
						<tr>
							<td class="response-heading">Response</td>
							<td class="response-heading">Type</td>
							<td class="response-heading">Description</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="param">flight_id</td>
							<td class="format">Integer</td>
							<td class="description">Flight ID<br/></td>
						</tr>
					</tbody>
				</table>
				</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>RESPONSE BODY:</h3>
			</td>
			<td>
				<code><strong>If record found the message will be:</strong>&nbsp;&nbsp;&nbsp;<br/>{"message":"Flight removed Successfully"}<br/><strong>If record not found the message will be:</strong>&nbsp;&nbsp;&nbsp;<br/>{"message":"Invalid data"}</code>
			</td>
		</tr>
		</table>
	</div>


		<div id="body">
		<table>
		<tr><h2>5. Rename Trip</h2></tr>
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
				<code>http://tripmanager.netne.net/new_trip/index.php/airports/rename_trip</code>
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
				<h3>RESPONSE PARAMETERS:</h3>
			</td>
			<td>
			<code>
				<table class="response">
					<thead>
						<tr>
							<td class="response-heading">Response</td>
							<td class="response-heading">Type</td>
							<td class="response-heading">Description</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="param">trip_id</td>
							<td class="format">Integer</td>
							<td class="description">Trip ID<br/></td>
						</tr>
						<tr>
							<td class="param">trip_name</td>
							<td class="format">String</td>
							<td class="description">Trip Name<br/></td>
						</tr>
					</tbody>
				</table>
				</code>
			</td>
		</tr>
		<tr>
			<td>
				<h3>RESPONSE BODY:</h3>
			</td>
			<td>
				<code><strong>If record found the message will be:</strong>&nbsp;&nbsp;&nbsp;<br/>{"message":"Flight renamed Successfully"}<br/><strong>If record not found the message will be:</strong>&nbsp;&nbsp;&nbsp;<br/>{"message":"Invalid data"}</code>
			</td>
		</tr>
		</table>
	</div>
	<p class="footer"> <strong>Made by Saad Anwer Ghouri</strong></p>
</div>

</body>
</html>