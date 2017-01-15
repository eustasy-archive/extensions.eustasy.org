<?php
	require_once __DIR__.'/_puff/sitewide.php';
	$Page['Type']        = 'Page';
	$Page['Title']       = 'Internet Explorer Extensions by eustasy Extensions &nbsp;&middot;&nbsp; eustasy Extensions.';
	$Page['Description'] = '';
	require_once $Sitewide['Templates']['Header'];
?>

<h2 class="align-center">Microsoft's Internet Explorer</h2>

<section class="grid">
	<div class="whole">
		<img src="/assets/images/caution.png" alt="Warning Icon" class="float-right">
		<h3>Sorry&hellip;</h3>
		<p>We don't currently deliver any extensions or toolbars for Internet Explorer. Internet Explorer doesn't tend to handle extras well, and most extensions available are not necessary, especially toolbars. In fact, if you are an IE user, you should probably look at <a href="https://support.microsoft.com/en-gb/help/17447/windows-internet-explorer-11-manage-add-ons" title="Remove Internet Explorer Extensions & Toolbars">removing Internet Explorer Extensions & Toolbars</a>.</p>
	</div>
</section>

<?php
	require_once $Sitewide['Templates']['Footer'];
