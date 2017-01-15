<?php
	require_once __DIR__.'/_puff/sitewide.php';
	$Page['Type']        = 'Page';
	$Page['Title']       = 'Opera Extensions by eustasy Extensions &nbsp;&middot;&nbsp; eustasy Extensions';
	$Page['Description'] = '';
	require_once $Sitewide['Templates']['Header'];
?>

<h2 class="align-center">Opera</h2>

<section class="grid">
	<div class="whole medium-half">
		<h3><a href="https://addons.opera.com/en/extensions/details/how-to-ubuntu/">How to Ubuntu</a></h3>
		<p>Speed Dial News Extension from How to Ubuntu for Opera.</p>
		<a href="https://addons.opera.com/en/extensions/details/how-to-ubuntu/">
			<img class="whole rounded" alt="Screenshot of How to Ubuntu for Opera" src="/assets/images/opera-howtoubuntu-screenshot.png">
		</a>
	</div>
	<div class="whole medium-half">
		<h3 class="align-center">Rapidshare Series:</h3>
		<p class="align-center"><a href="https://addons.opera.com/en/extensions/details/facebooker-for-opera-3/">Facebooker for Opera</a></p>
		<p class="align-center"><a href="https://addons.opera.com/en/extensions/details/twitterer-for-opera-2/">Twitterer for Opera</a></p>
		<p class="align-center"><a href="https://addons.opera.com/en/extensions/details/tumblrer-for-opera-2/">Tumblrer for Opera</a></p>
	</div>
</section>

<!-- Disabled due to the search on their site apparently not working.
<section class="grid">
	<div class="whole">
		<h3 class="align-center">
			<a href="https://addons.opera.com/en/search/?language=any&developer=EustasyExtensionsy" title="eustasy Extensions for Opera">View all eustasy Extensions for Opera</a>
		</h3>
	</div>
</section>
-->

<?php
	require_once $Sitewide['Templates']['Footer'];
