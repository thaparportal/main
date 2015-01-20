<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Teacher Registration</title>
		<meta name="description" content="Fullscreen Form Interface: A distraction-free form concept with fancy animations" />
		<meta name="keywords" content="fullscreen form, css animations, distraction-free, web design" />
		<meta name="author" content="nitesh" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-select.css" />
		<link rel="stylesheet" type="text/css" href="css/cs-skin-boxes.css" />
		<script src="js/modernizr.custom.js"></script>
		<link href='//fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>
	</head>
	<body>
	<script>
	<?php
	if(isset($_GET['message']))
	{
		$message=$_GET['message'];
		if(substr($message,0,1)=='C')
		{
			echo 'alert("'.$_GET['message'].'");';
			echo 'window.close();';
		}
		else
		{
			echo 'alert("'.$_GET['message'].'");';
		}
	}
	?>
	</script>
		<div class="container">

			<div class="fs-form-wrap" id="fs-form-wrap">
				<div class="fs-title">
					<h1>Teacher Registration</h1>
				</div>
				<form id="myform" action="reg.php" method="POST" class="fs-form fs-form-full" autocomplete="off">
					<ol class="fs-fields">
						<li>
		<label class="fs-field-label fs-anim-upper" for="q1" data-info="The following charcters are not allowed:< , > , \ , & , \ , | , ; , : , ` , = , { , } , [ , ] , /">Enter Your Name</label>
	<input class="fs-anim-lower" id="q1" name="name" type="text" placeholder="Nitesh Singh" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q4" data-info="We won't send you spam">Enter  email address</label>
							<input class="fs-anim-lower" id="q4" name="email" type="email" placeholder="abc@thapar.edu" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q5">Enter Password</label>
							<input class="fs-anim-lower" id="q5" name="password" type="password" placeholder="password" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q6">Confirm your password</label>
							<input class="fs-anim-lower" id="q6" name="cpassword" type="password" placeholder="password" required/>
						</li>
						<li>
							<label class="fs-field-label fs-anim-upper" for="q7">Enter Your Teacher Code </label>
							<input class="fs-anim-lower" id="q7" name="teacher_code" type="text" placeholder='PBH' required/>
						</li>
					
						<li>
							<label class="fs-field-label fs-anim-upper" for="q7">Enter Your Mobile Number </label>
							<input class="fs-anim-lower" id="q7" name="mobno" type="text" placeholder='8288838038' />
						</li>
					</ol><!-- /fs-fields -->
					<button class="fs-submit" id="submit" type="button">Recruit</button>
				</form><!-- /fs-form -->
			</div><!-- /fs-form-wrap -->
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/selectFx.js"></script>
		<script src="js/fullscreenForm.js"></script>
		<script>
			(function() {
				var formWrap = document.getElementById( 'fs-form-wrap' );

				[].slice.call( document.querySelectorAll( 'select.cs-select' ) ).forEach( function(el) {	
					new SelectFx( el, {
						stickyPlaceholder: false,
						onChange: function(val){
							document.querySelector('span.cs-placeholder').style.backgroundColor = val;
						}
					});
				} );

				new FForm( formWrap, {
					onReview : function() {
						classie.add( document.body, 'overview' ); // for demo purposes only
					}
				} );
			})();
		</script>
		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		<script type="text/javascript">
			$("#submit").click(function(){
				$("#submit").text("Please Wait...");
				$.post( "reg.php", $( "#myform" ).serialize(), function(data){
					$("#submit").text("Recruit");
					if(data.charAt(0)=='C')
					{
						alert(data);
						window.close();
					}
					else
					{
						alert(data);
						$("#submit").text("Recruit");
					}
				} );
			});
		</script>
	</body>
</html>