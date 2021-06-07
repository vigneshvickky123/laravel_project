<!DOCTYPE>
<html>
	<head>
		<title>student-info</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
		<style>
			table{
			  border-collapse: collapse;
			  width: 100%;
			  color: #d96459;
			  font-family: monospace;
			  font-size: 15px;
			  text-align: left;
			  
			 }
			 th{
			  background-color:#d96459;
			  color: white;
			 }
			 tr:nth-child(even){ background-color: #f2f2f2;}
			
            .notice{
				padding-top:1px;
				width:100%;
				margin: 5px 5px 5px 5px;
				border: 10px 10px 10px 10px;
				
			}
			h1{
				text-align: center;
				text-shadow: 2px 4px 3px 4px red;
			}
		
		
		</style>
	
	</head>
	
	<body>
		<ul class="pager">
			<a href="/add">&laquo;Back</a>
			
		</ul>
        <div class="notice">
			<h1> CUSTOMER DETAILS </h1>
		
		</div>
	
		<table>
			<tr>
                <th>Customer Id</th>
				<th>Customer Name</th>
				<th>Customer Mobile</th>
				<th>Customer Email</th>
				<th>Customer Address</th>
				<th>Customer State</th>
				<th>Customer Pincode</th>
				<th>Customer Gender</th>
			    <th>Customer Marital Status</th>
                <th>Options</th>
		    <tr>
            @foreach($customerdetails as $detail)
            <tr>
                <td>{{$detail['customer_id']}}</td>
				<td>{{$detail['customer_name']}}</td>
				<td>{{$detail['customer_mobile']}}</td>
				<td>{{$detail['customer_email']}}</td>
				<td>{{$detail['customer_address']}}</th>
				<td>{{$detail['customer_state']}}</td>
				<td>{{$detail['customer_pincode']}}</td>
				<td>{{$detail['customer_gender']}}</td>
                <td>{{$detail['customer_marital_status']}}</td>
			    <td><a href={{"edit/".$detail['customer_id']}}><i class="fa fa-edit" style="font-size:24px"></i></a></td>
                <td><a href={{"delete/".$detail['customer_id']}}><i class="fa fa-trash" style="font-size:24px"></i></i></a></td>
		    <tr>
			@endforeach
		</table>
	
	</body>




</html>