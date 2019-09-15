<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Call Him 18+</title>
		<meta name="description" content="CALL HIM " />
		<meta name="keywords" content="CALL HIM" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
<link rel="shortcut icon" type="image/x-icon" href="http://www.theperfumeshop.com/medias/sys_master/front/prd/9111197450270.jpg">
<script>
input { 
    text-align: right; 
}
</script>
	</head>
	<body>
		<div class="container">
			<!-- Top Navigation -->
			
		
			<section>
				<form action="hiha.php" method="GET" id="theForm" class="simform" autocomplete="off">
					<div class="simform-inner">
						<ol class="questions">
							<li>
								<center><span><label >Gọi Tên Nhau Trong Đêm ( Type Your Name ) and ( Press Enter )</label></span></center>
								<input style="text-align:center;" name="namee" type="text"/>
							</li>
							
						</ol><!-- /questions -->
						<button class="submit" type="submit">Call</button>
						<div class="controls">
							<button class="next"></button>
							<div class="progress"></div>
							<button class="next show"></button>
							<span class="error-message"></span>
						</div><!-- / controls -->
					</div><!-- /simform-inner -->
					<span class="final-message"></span>
				</form><!-- /simform -->			
		</div><!-- /container -->
		<script src="js/classie.js"></script>
		<script src="js/stepsForm.js"></script>
		<script>
			var theForm = document.getElementById( 'theForm' );

			new stepsForm( theForm, {
				onSubmit : function( form ) {
					// hide form
					classie.addClass( theForm.querySelector( '.simform-inner' ), 'hide' );

					/*
					form.submit()
					or
					AJAX request (maybe show loading indicator while we don't have an answer..)
					*/

					// let's just simulate something...
					var messageEl = theForm.querySelector( '.final-message' );
					messageEl.innerHTML = 'Thank you! We\'ll be in touch.';
					classie.addClass( messageEl, 'show' );
				}
			} );
		</script>

	</body>
</html>