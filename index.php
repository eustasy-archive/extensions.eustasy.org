<?php
	require_once __DIR__.'/_puff/sitewide.php';
	$Page['Type']  = 'Page';
	$Page['Title'] = 'eustasy Extensions &nbsp;&middot;&nbsp; Providing extensions, themes, and apps for modern web browsers.';
	$Page['Keywords'] = 'eustasy extension chrome opera firefox';
	$Page['Description'] = '';
	require_once $Sitewide['Templates']['Header'];
?>

<section class="grid align-center no-margin">
	<h2>Please pick a browser&hellip;</h2>
</section>

<section class="grid align-center pad-bottom">
	<div class="whole smablet-third">
		<a href="/chrome" title="Google Chrome Apps, Extensions, and Themes by eustasy Extensions" class="browser">
			<img src="/assets/images/browsers/Chrome.png" alt="Google Chrome Logo">
			<h2>Google Chrome</h2>
		</a>
	</div>
	<div class="whole smablet-third">
		<a href="/firefox" title="Mozilla Firefox Extensions and Personas by eustasy Extensions" class="browser">
			<img src="/assets/images/browsers/Firefox.png" alt="Mozilla Firefox Logo">
			<h2>Mozilla Firefox</h2>
		</a>
	</div>
	<div class="whole smablet-third">
		<a href="/opera" title="Opera Extensions by eustasy Extensions" class="browser">
			<img src="/assets/images/browsers/Opera.png" alt="Opera Logo">
			<h2>Opera</h2>
		</a>
	</div>
</section>

<section class="grid align-center pad-bottom">
	<div class="whole smablet-quarter faded">
		<a href="/internet-explorer" title="Internet Explorer Extensions by eustasy Extensions" class="browser leanmodal-link" data-modal-id="#modal-ie-no">
			<img src="/assets/images/browsers/IE.png" alt="Internet Explorer Logo">
			<h2>Internet Explorer</h2>
		</a>
	</div>
	<div class="whole smablet-quarter faded">
		<a href="/safari" title="Apple's Safari Extensions by eustasy Extensions" class="browser leanmodal-link" data-modal-id="#modal-safari-no">
			<img src="/assets/images/browsers/Safari.png" alt="Apple's Safari Logo">
			<h2>Apple's Safari</h2>
		</a>
	</div>
	<div class="whole smablet-quarter faded">
		<a href="/rockmelt" title="Facebook's RockMelt Extensions by eustasy Extensions" class="browser leanmodal-link" data-modal-id="#modal-rockmelt-no">
			<img src="/assets/images/browsers/RockMelt.png" alt="Opera Logo">
			<h2>RockMelt</h2>
		</a>
	</div>
	<div class="whole smablet-quarter">
		<a href="/support" title="Support for eustasy Extensions" class="browser-support">
			<img src="/assets/images/Help.png" alt="Support Icon">
			<h2>Support</h2>
		</a>
	</div>
</section>

<div id="modal-ie-no" class="display-none modal rounded">
	<img src="/assets/images/caution.png" alt="Warning Icon" class="float-right">
	<h3>Sorry&hellip;</h3>
	<p>We don't currently deliver any extensions or toolbars for Internet Explorer. Internet Explorer doesn't tend to handle extras well, and most extensions available are not necessary, especially toolbars. In fact, if you are an IE user, you should probably look at <a href="https://support.microsoft.com/en-gb/help/17447/windows-internet-explorer-11-manage-add-ons" title="Remove Internet Explorer Extensions & Toolbars">removing Internet Explorer Extensions & Toolbars</a>.</p>
	<p><a class="js-leanmodal-close color-pomegranate" href="#">Close</a></p>
</div>
<div id="modal-safari-no" class="display-none modal rounded">
	<img src="/assets/images/caution.png" alt="Warning Icon" class="float-right">
	<h3>Sorry&hellip;</h3>
	<p>Due to certification issues, along with complex and unstanardised coding, we have decied to cease development on our Safari Extensions at this time. It is possible work will restart in the future, but even if it does, it may still be some time before our extensions are available for Apple Safari.</p>
	<p><a class="js-leanmodal-close color-pomegranate" href="#">Close</a></p>
</div>
<div id="modal-rockmelt-no" class="display-none modal rounded">
	<img src="/assets/images/caution.png" alt="Warning Icon" class="float-right">
	<h3>Sorry&hellip;</h3>
	<p>RockMelt was discontinued on the 31st of July, 2013, after being aquired by Yahoo!.</p>
	<p><a class="js-leanmodal-close color-pomegranate" href="#">Close</a></p>
</div>
<script>
	$(function() {
		$('.leanmodal-link').leanModal();
	});
</script>

<?php
	require_once $Sitewide['Templates']['Footer'];
