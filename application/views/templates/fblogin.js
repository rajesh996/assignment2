// function statusChangeCallback(response) {
  //   console.log('statusChangeCallback');
  //   console.log(response);
  //   // The response object is returned with a status field that lets the
  //   // app know the current login status of the person.
  //   // Full docs on the response object can be found in the documentation
  //   // for FB.getLoginStatus().
  //   if (response.status === 'connected') {
  //     // Logged into your app and Facebook.
  //     testAPI();
  //   } else {
  //     // The person is not logged into your app or we are unable to tell.
  //     document.getElementById('status').innerHTML = 'Please log ' +
  //       'into this app.';
  //   }
  // }

	function checkLoginState() {
		FB.getLoginStatus(function(response) {
			statusChangeCallback(response);
		});
	}



  window.fbAsyncInit = function() {
    FB.init({
      appId      : '444583216053575',
      cookie     : true,
      xfbml      : true,
      version    : 'v3.1'
    });

		FB.getLoginStatus(function(response) {
				statusChangeCallback(response);
		});

  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));


	 function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }

<!-- <fb:login-button
  scope="public_profile,email"
  onlogin="checkLoginState();">
</fb:login-button> -->
