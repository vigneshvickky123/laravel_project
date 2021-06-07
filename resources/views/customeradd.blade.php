
<html>
	<head>
		<title>Customer details</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link href="C:\wamp64\www\EAT\css\style_sheet.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />

		<style>
			.pure-material-textfield-outlined {
				--pure-material-safari-helper1: rgb(var(--pure-material-primary-rgb, 33, 150, 243));
				position: relative;
				display: inline-block;
				padding-top: 6px;
				font-family: var(--pure-material-font, "Roboto", "Segoe UI", BlinkMacSystemFont, system-ui, -apple-system);
				font-size: 16px;
				line-height: 1.5;
				text-align: left;
				overflow: hidden;
			}

			/* Input, Textarea */
			.pure-material-textfield-outlined > input,
			.pure-material-textfield-outlined > textarea {
				box-sizing: border-box;
				margin: 0;
				border: solid 1px; /* Safari */
				border-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.6);
				border-top-color: transparent;
				border-radius: 4px;
				padding: 15px 13px 15px 200px;
				width: 100%;
				height: inherit;
				color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.87);
				background-color: transparent;
				box-shadow: none; /* Firefox */
				font-family: inherit;
				font-size: inherit;
				text-align: left;
				line-height: inherit;
				caret-color: rgb(var(--pure-material-primary-rgb, 33, 150, 243));
				transition: border 0.2s, box-shadow 0.2s;
			}

			/* Span */
			.pure-material-textfield-outlined > input + span,
			.pure-material-textfield-outlined > textarea + span {
				position: absolute;
				top: 0;
				left: 0;
				display: flex;
				border-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.6);
				width: 100%;
				max-height: 100%;
				color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.6);
				font-size: 100%;
				line-height: 15px;
				cursor: text;
				text-align: left;
				transition: color 0.2s, font-size 0.2s, line-height 0.2s;
			}

			/* Corners */
			.pure-material-textfield-outlined > input + span::before,
			.pure-material-textfield-outlined > input + span::after,
			.pure-material-textfield-outlined > textarea + span::before,
			.pure-material-textfield-outlined > textarea + span::after {
				content: "";
				display: block;
				box-sizing: border-box;
				margin-top: 6px;
				border-top: solid 1px;
				border-top-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.6);
				min-width: 10px;
				height: 8px;
				pointer-events: none;
				box-shadow: inset 0 1px transparent;
				transition: border-color 0.2s, box-shadow 0.2s;
			}

			.pure-material-textfield-outlined > input + span::before,
			.pure-material-textfield-outlined > textarea + span::before {
				margin-right: 4px;
				border-left: solid 1px transparent;
				border-radius: 4px 0;
			}

			.pure-material-textfield-outlined > input + span::after,
			.pure-material-textfield-outlined > textarea + span::after {
				flex-grow: 1;
				margin-left: 4px;
				border-right: solid 1px transparent;
				border-radius: 0 4px;
			}

			/* Hover */
			.pure-material-textfield-outlined:hover > input,
			.pure-material-textfield-outlined:hover > textarea {
				border-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.87);
				border-top-color: transparent;
			}

			.pure-material-textfield-outlined:hover > input + span::before,
			.pure-material-textfield-outlined:hover > textarea + span::before,
			.pure-material-textfield-outlined:hover > input + span::after,
			.pure-material-textfield-outlined:hover > textarea + span::after {
				border-top-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.87);
			}

			.pure-material-textfield-outlined:hover > input:not(:focus):placeholder-shown,
			.pure-material-textfield-outlined:hover > textarea:not(:focus):placeholder-shown {
				border-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.87);
			}

			/* Placeholder-shown */
			.pure-material-textfield-outlined > input:not(:focus):placeholder-shown,
			.pure-material-textfield-outlined > textarea:not(:focus):placeholder-shown {
				border-top-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.6);
			}

			.pure-material-textfield-outlined > input:not(:focus):placeholder-shown + span,
			.pure-material-textfield-outlined > textarea:not(:focus):placeholder-shown + span {
				font-size: inherit;
				line-height: 68px;
			}

			.pure-material-textfield-outlined > input:not(:focus):placeholder-shown + span::before,
			.pure-material-textfield-outlined > textarea:not(:focus):placeholder-shown + span::before,
			.pure-material-textfield-outlined > input:not(:focus):placeholder-shown + span::after,
			.pure-material-textfield-outlined > textarea:not(:focus):placeholder-shown + span::after {
				border-top-color: transparent;
			}

			/* Focus */
			.pure-material-textfield-outlined > input:focus,
			.pure-material-textfield-outlined > textarea:focus {
				border-color: rgb(var(--pure-material-primary-rgb, 33, 150, 243));
				border-top-color: transparent;
				box-shadow: inset 1px 0 var(--pure-material-safari-helper1), inset -1px 0 var(--pure-material-safari-helper1), inset 0 -1px var(--pure-material-safari-helper1);
				outline: none;
			}

			.pure-material-textfield-outlined > input:focus + span,
			.pure-material-textfield-outlined > textarea:focus + span {
				color: rgb(var(--pure-material-primary-rgb, 33, 150, 243));
			}

			.pure-material-textfield-outlined > input:focus + span::before,
			.pure-material-textfield-outlined > input:focus + span::after,
			.pure-material-textfield-outlined > textarea:focus + span::before,
			.pure-material-textfield-outlined > textarea:focus + span::after {
				border-top-color: var(--pure-material-safari-helper1) !important;
				box-shadow: inset 0 1px var(--pure-material-safari-helper1);
			}

			/* Disabled */
			.pure-material-textfield-outlined > input:disabled,
			.pure-material-textfield-outlined > input:disabled + span,
			.pure-material-textfield-outlined > textarea:disabled,
			.pure-material-textfield-outlined > textarea:disabled + span {
				border-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.38) !important;
				border-top-color: transparent !important;
				color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.38);
				pointer-events: none;
			}

			.pure-material-textfield-outlined > input:disabled + span::before,
			.pure-material-textfield-outlined > input:disabled + span::after,
			.pure-material-textfield-outlined > textarea:disabled + span::before,
			.pure-material-textfield-outlined > textarea:disabled + span::after {
				border-top-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.38) !important;
			}

			.pure-material-textfield-outlined > input:disabled:placeholder-shown,
			.pure-material-textfield-outlined > input:disabled:placeholder-shown + span,
			.pure-material-textfield-outlined > textarea:disabled:placeholder-shown,
			.pure-material-textfield-outlined > textarea:disabled:placeholder-shown + span {
				border-top-color: rgba(var(--pure-material-onsurface-rgb, 0, 0, 0), 0.38) !important;
			}

			.pure-material-textfield-outlined > input:disabled:placeholder-shown + span::before,
			.pure-material-textfield-outlined > input:disabled:placeholder-shown + span::after,
			.pure-material-textfield-outlined > textarea:disabled:placeholder-shown + span::before,
			.pure-material-textfield-outlined > textarea:disabled:placeholder-shown + span::after {
				border-top-color: transparent !important;
			}

			/* Faster transition in Safari for less noticable fractional font-size issue */
			@media not all and (min-resolution:.001dpcm) {
				@supports (-webkit-appearance:none) {
					.pure-material-textfield-outlined > input,
					.pure-material-textfield-outlined > input + span,
					.pure-material-textfield-outlined > textarea,
					.pure-material-textfield-outlined > textarea + span,
					.pure-material-textfield-outlined > input + span::before,
					.pure-material-textfield-outlined > input + span::after,
					.pure-material-textfield-outlined > textarea + span::before,
					.pure-material-textfield-outlined > textarea + span::after {
						transition-duration: 0.1s;
					}
				}
			}
			notice{
				padding-top:20%;
				width:100%;
				margin: 5px 5px 5px 5px;
				border: 10px 10px 10px 10px;
				
			}
			h1{
				text-align: center;
				text-shadow: 2px 4px 3px 4px red;
			}
			#textArea{
				text-align: left;
			}
		
		</style>
	</head>
	
	<body>
		<div class="notice">
			<a href="/table"><h1> CUSTOMER DETAILS </h1></a>
		
		</div>
		<form method="POST" action="add">
            @csrf 
			<div class="container">
			
				<div class="row">
					
					<div class="col-sm-6">
						<h6> Details*</h6>
						<label class="pure-material-textfield-outlined">
							<input type="text" name="name" dir="rtl" id="textArea" placeholder=" ">
							<span>Customer Name*</span>
                        </label>
                        <span style="color:red;">@error ('name')<li>{{$message}}</li>@enderror</span>
					</div>
					<div class="col-sm-6">
						</br>
						<label class="pure-material-textfield-outlined">
							<input type="number" name="mobile" placeholder=" ">
							<span>Customer Mobile*</span>
						</label>
                        <span style="color:red;">@error ('mobile')<li>{{$message}}</li>@enderror</span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<label class="pure-material-textfield-outlined">
							<input type="email" name="email" placeholder=" ">
							<span>Customer Email*</span>
						</label>
                        <span style="color:red;">@error ('email')<li>{{$message}}</li>@enderror</span>
					</div>
					<div class="col-sm-6">
						<label class="pure-material-textfield-outlined">
							<input type="text" name="address" placeholder=" ">
							<span>Address With District*</span>
						</label>
                        <span style="color:red;">@error ('address')<li>{{$message}}</li>@enderror</span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<label class="pure-material-textfield-outlined">
							<input type="text" name="state" placeholder=" " >
							<span>State*</span>
						</label>
                        <span style="color:red;">@error ('state')<li>{{$message}}</li>@enderror</span>
					</div>
					<div class="col-sm-6">
						<label class="pure-material-textfield-outlined">
							<input type="text" name="pincode" placeholder=" " >
							<span>Pincode*</span>
						</label>
                        <span style="color:red;">@error ('pincode')<li>{{$message}}</li>@enderror</span>
					</div>
					
				
				</div>
				<div class="row">
					<div class="col-sm-6">
						<label >
							<h6> GENDER*</h6>
							<input type="checkbox" name="gender" value="male" placeholder=" ">
							<span>Male</span><br>
							<input type="checkbox" name="gender" value="female" placeholder=" ">
							<span>Female</span>
						</label>
                        <span style="color:red;">@error ('gender')<li>{{$message}}</li>@enderror</span>
					</div>
					<div class="col-sm-6">
						<label >
							<h6> MARITAL STATUS*</h6>
							<input type="checkbox" name="status" value="Single" placeholder=" ">
							<span>Single</span><br>
							<input type="checkbox" name="status" value="Married" placeholder=" ">
							<span>Married</span>
						</label>
                        <span style="color:red;">@error ('status')<li>{{$message}}</li>@enderror</span>
					</div>
					
					
				</div>
				
				<div class="row">
					<button type="submit" name="detailssubmit" style="width:86%; margin-top:20px; margin-left:15px;" class="btn btn-outline-dark btn-lg btn-block"><b>SUBMIT</b></button>
                    <button type="reset" name="detailsreset" style="width:86%; margin-top:20px; margin-left:15px;" class="btn btn-outline-danger btn-lg btn-block"><b>RESET</b></button>
                    
				</div>
			</div>
		</form>
    </body>
</html>    