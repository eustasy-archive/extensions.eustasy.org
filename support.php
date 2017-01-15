<?php
	require_once __DIR__.'/_puff/sitewide.php';
	$Page['Type']        = 'Page';
	$Page['Title']       = 'Support &nbsp;&middot;&nbsp; eustasy Extensions.';
	$Page['Description'] = 'Support for eustasy Extensions';
	require_once $Sitewide['Templates']['Header'];
?>

<h2 class="align-center">Support</h2>
<h3 class="align-center sub-title">Got a question/suggestion/bug report?</h3>

<section class="grid">
	<div class="whole medium-half">
		<h3>Google+ Community (Extension issues)</h3>
		<p>This is a universal forum, so please include a few details like:</p>
		<ul>
			<li>Operating System (and Version)</li>
			<li>Browser (and Version)</li>
			<li>Browser Extension (and Version)</li>
			<li>Email (if you want to be contacted)</li>
		</ul>
		<h3><a class="button google-plus" href="https://plus.google.com/communities/101681296933304682272/stream/133a6925-5789-4472-becb-c9fdbdf68cee">Google+</a></h3>
	</div>
	<div class="whole medium-half">
		<h3>eustasy (Website issues)</h3>
		<p><a href="https://eustasy.org/">eustasy</a> are the creators of this website, and you can see it's development on <a href="https://github.com/eustasy/extensions.eustasy.org">GitHub</a>. You should post an issue there if you have a problem with this site.</p>
	</div>
</section>

<?php
	require_once $Sitewide['Templates']['Footer'];
