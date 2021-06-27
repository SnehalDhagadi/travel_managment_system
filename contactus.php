<?php


include("function.php");


?>



<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" type="text/css" href="contactus.css">
        
    </head>
    <body>
        <div class="container">
            <form action="user_process.php" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Contact US</p>
			<div class="input-group">
				<input type="text" placeholder="Name" name="name" value="" required>
			</div>
                <div class="input-group">
				<input type="text" placeholder="City" name="city" value="" required>
			</div>
                <div class="input-group">
				<input type="text" placeholder="Email" name="email" value="" required>
			</div>
                
            <div class="input-group">
				<input type="text" placeholder="Message" name="message" value="" required>
			</div>
			
            <div class="input-group">
				<button name="submit" class="btn">Submit</button>
			</div>
                 
            
        </form>
            </div>
    
    
    </body>
</html>