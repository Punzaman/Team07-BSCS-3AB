PHP WEBSITE v1.89

NEW LOGS

Added php files
	users folder
		addvehicle.php
		entrypage.php
		homepage.php
		parkinghistory.php
		reserve.php
	
	controllers folder
		reservation.php
	
	models folder
		reservation_model.php

Created new database table
	reservation database table
		reserveId
		reserveDate
		reservePark
		reserveUser

Button Functions
	added logout button function
	added profile button function
	added book a reservation button function
	added parking history button function

	inside profile: added button to return to homepage
	inside book a reservation: when clicking submit button the user will be redirected to homepage
	log out button destroys the user session

	after signing up. adjusted the redirection button to entrypage
		