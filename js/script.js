function submit () {
	// Init firebase
	var fb = new Firebase("https://essay-writing-tutor.firebaseio.com/website/email_queue/");

	// Collect user info from generic input areas
	var userData = $('#form').val();
	var userEmail = $('#email').val();
	var userName = $('#name').val();
	// Push data to firebase
	fb.push({userData: userData, userEmail: userEmail, userName: userName});
}