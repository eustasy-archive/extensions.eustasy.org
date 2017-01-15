<?php
	require_once __DIR__.'/_puff/sitewide.php';
	$Page['Type']        = 'Page';
	$Page['Title']       = 'Chrome Apps, Extensions, and Themes by eustasy Extensions &nbsp;&middot;&nbsp; eustasy Extensions';
	$Page['Description'] = '';
	$Page['Header'] = '
		<link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/eoljppleclhjkbafgllngmjehkeliojk">
		<link rel="chrome-webstore-item" href="https://chrome.google.com/webstore/detail/keimphpnhnicpenfffoopahkgpkehfok">';
	require_once $Sitewide['Templates']['Header'];
?>
<style>
.install {
	border-color: #2D53AF;
	background: #4D7BD6;
	background: -moz-linear-gradient(top,#5689DB 0%,#4D7BD6 100%);
	background: -webkit-gradient(linear,left top,left bottom,color-stop(0%,#5689DB),color-stop(100%,#4D7BD6));
	background: -webkit-linear-gradient(top,#5689DB 0%,#4D7BD6 100%);
	background: -o-linear-gradient(top,#5689DB 0%,#4D7BD6 100%);
	background: -ms-linear-gradient(top,#5689DB 0%,#4D7BD6 100%);
	filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#5689db,endColorstr=#4d7bd6,GradientType=0);
	background: linear-gradient(top,#5689DB 0%,#4D7BD6 100%);
	color: white !important;
	padding: 7px;
	margin: 10px;
	float: right;
}
.done {
	display: none;
}
</style>

<h2 class="align-center">Google Chrome</h2>

<section class="grid">

	<div class="whole smablet-half">
		<script>
			installTumblrSuccess = function() {
				document.getElementById('TumblrInstall').style.display = 'none';
				document.getElementById('TumblrInstalled').style.display = 'block';
				ga('send', 'event', 'InstalledApp', 'Tumblr. Install');
				console.log('Tumblr. Inline Install Worked!');
			}
			installTumblrFail = function(message) {
				console.log('Failed Tumblr. Inline Install: ' + message);
				//window.location.assign('https://chrome.google.com/webstore/detail/eoljppleclhjkbafgllngmjehkeliojk');
			}
			attemptTumblrInstall = function() {
				if ( typeof chrome != 'undefined' ) {
					chrome.webstore.install('https://chrome.google.com/webstore/detail/eoljppleclhjkbafgllngmjehkeliojk', installTumblrSuccess, installTumblrFail);
				} else {
					window.location.assign('https://chrome.google.com/webstore/detail/eoljppleclhjkbafgllngmjehkeliojk');
				}
			}
		</script>
		<a id="TumblrInstall" class="button chrome-install" href="https://chrome.google.com/webstore/detail/eoljppleclhjkbafgllngmjehkeliojk" onclick="attemptTumblrInstall(); return false;">Install Tumblr.</a>
		<p id="TumblrInstalled" class="button chrome-install installed display-none">Tumblr. Installed</p>
		<p>If you're looking for one-click reblogging on Tumblr, give <a href="https://chrome.google.com/webstore/detail/missing-e/bcjbagclppcgdbpobcpoojdjdmcjhpid">Missing e</a> a try. If you just want to queue everything, or send them to a different-than-default-blog, try <a href="https://chrome.google.com/webstore/detail/super-tumblr-reblog/cmnkedgkopannklkdhnngmajiieimfjh">Super Tumblr Reblog</a>.</p>
	</div>

	<div class="whole smablet-half">
		<script>
			installUbuntuForumsSuccess = function() {
				document.getElementById('UbuntuForumsInstall').style.display = 'none';
				document.getElementById('UbuntuForumsInstalled').style.display = 'block';
				ga('send', 'event', 'InstalledApp', 'New Redesign Ubuntu Forums Install');
				console.log('Redesign Ubuntu Forums Inline Install Worked!');
			}
			installUbuntuForumsFail = function(message) {
				console.log('Failed Redesign Ubuntu Forums Inline Install: ' + message);
				//window.location.assign('https://chrome.google.com/webstore/detail/keimphpnhnicpenfffoopahkgpkehfok');
			}
			attemptUbuntuForumsInstall = function() {
				if ( typeof chrome != 'undefined' ) {
					chrome.webstore.install('https://chrome.google.com/webstore/detail/keimphpnhnicpenfffoopahkgpkehfok', installUbuntuForumsSuccess, installUbuntuForumsFail);
				} else {
					window.location.assign('https://chrome.google.com/webstore/detail/keimphpnhnicpenfffoopahkgpkehfok');
				}
			}
		</script>
		<a id="UbuntuForumsInstall" class="button chrome-install" href="https://chrome.google.com/webstore/detail/keimphpnhnicpenfffoopahkgpkehfok" onclick="attemptUbuntuForumsInstall(); return false;">Install Redesign Ubuntu Forums</a>
		<p id="UbuntuForumsInstalled" class="button chrome-install installed display-none">Redesign Ubuntu Forums Installed</p>
	</div>

</section>

<section>
	<p>Hotmail, our first ever App has been replaced by an <a href="https://chrome.google.com/webstore/detail/outlookcom/pfpeapihoiogbcmdmnibeplnikfnhoge">Official Outlook App</a>.</p>
	<p>Facebook have also release an <a href="https://chrome.google.com/webstore/detail/facebook/boeajhmfdjldchidhphikilcgdacljfm">Official Facebook App</a>.</p>
</section>

<?php
	require_once $Sitewide['Templates']['Footer'];
