<?php
	require_once __DIR__.'/../_puff/sitewide.php';
	$Page['Type']        = 'Page';
	$Page['Title']       = 'Facebook &nbsp;&middot;&nbsp; eustasy Extensions';
	$Page['Description'] = '';
	require_once $Sitewide['Templates']['Header'];
?>
<style>
.shoutyman {
	font-size: 22px !important;
	line-height: 42px !important;
	text-align: center !important;
}
#download {
	text-align: center;
	font-size: 64px;
	color: #BAE9FA;
	background: rgba(0, 0, 0, 0.7);
	padding: 5px 10px 10px 10px;
	border-radius: 5px;
	margin: 0px auto 20%;
	width: 728px;
	text-decoration: none;
}
.aubergine {
	color: #772953;
	text-decoration: none;
}
.blue {
	color: #19B6EE;
	text-decoration: none;
}
.green {
	color: #38B44A;
	text-decoration: none;
}
.yellow {
	color: #EFB73E;
	text-decoration: none;
}
.orange {
	color: #DD4814;
	text-decoration: none;
}
.red {
	color: #DF382C;
	text-decoration: none;
}
.grey {
	color: #AEA79F;
	text-decoration: none;
}
.b-blue {
	color: rgba(0, 0, 0, 0.7);
	background: #BAE9FA;
	margin: 1rem 0 2rem;
	padding: 2rem;
	border-radius: 1rem;
}
</style>

<section class="grid align-center">

	<p class="shoutyman" id="preface">Unfortunately, <a href="http://www.facebook.com/" class="blue">Facebook</a> saw fit to <span class="orange">attack</span> the <span class="blue">Facebook</span> <span class="green">Chrome App</span><br />
	<span class="grey">(which we so lovingly made for them when they couldn't be bothered)</span><br />
	and have it <span class="red">permanently removed</span> from the <span class="blue">Chrome</span> <span class="yellow">Web</span> <span class="green">Store</span>.</p>

	<p class="shoutyman" id="notsobad">But, being on the <span class="blue">cutting edge</span>, <span class="grey">(<span class="orange">nearly eighteen months behind</span>)</span> they have of course released their own <a href="https://chrome.google.com/webstore/detail/facebook/boeajhmfdjldchidhphikilcgdacljfm" class="blue">App</a> on the <span class="blue">Chrome</span> <span class="yellow">Web</span> <span class="green">Store</span>. <span class="blue" id="orhoorah">Hooray!</span></p>

	<p class="shoutyman" id="below">This is the <a href="https://chrome.google.com/webstore/detail/facebook/boeajhmfdjldchidhphikilcgdacljfm" class="blue">App</a> you can <a href="#download" class="blue">Download below</a>.</p>

	<a href="https://chrome.google.com/webstore/detail/facebook/boeajhmfdjldchidhphikilcgdacljfm" title="The Official Facebook App for Chrome" style="text-decoration: none;">
	<h2 id="download">Download</h2>
	</a>

	<h3>Why am i seeing this page?</h3>
	<p>eustasy Extensions was the coder of the Facebook App you have been using, that worked like a big bookmark for Facebook. Facebook have now released their own one again, which means we need to get rid of our one. See the video and instructions below to get it back working as normal.</p>

	<h3>How To</h3>
	<iframe width="640" height="360" src="https://www.youtube.com/embed/diOSTIqxNKQ?rel=0" frameborder="0" allowfullscreen></iframe>
	<div class="b-blue">
		<span style="font-style:italic;font-size:18px;">Note: While many of the designs featured in this video have changed dramatically over time, the procedures remain much the same.</span>
		<ol class="align-left">
			<li>Open a New Tab.</li>
			<li>Hover over the current Facebook app. Do <em>not</em> click it.</li>
			<li>Click the wrench that appears in the top right corner of the grey box.</li>
			<li>Uninstall it.</li>
			<li>Click the big download button up the top of this page.</li>
			<li>Install the Official Facebook App.</li>
		</ol>
	</div>

	<p>@Daniel Huang (and the 42 people who found his review useful):</p>
	<ol class="align-left">
		<li>We've updated the app icon! The official Faceook app hasn't, but you'lll have to talk to them abut that.</li>
		<li>The App does <span style="font-weight:bold;">not</span> <span style="font-style:italic;">usually</span> go via another site, but a local html page with a (Google) Analytics Code which lets me know your country and visit. It cannot be a direct link because that requires me to authenticate as the owner of the site (facebook.com) which i am not, nor ever claimed to be. The Analytics code is completely anonymous, and i only ever see the thousands of visits all grouped together.</li>
		<li>The <span style="font-weight:bold;">?ref=eustasy</span> is counting it as a referral from us, eustasy. The Original Official App had <span style="font-weight:bold;">?ref=cws</span>, short for Chrome Web Store.</li>
		<li>Also, the spelling of eustasy varies, as it is a little used word. Google accepts eustasy, but not <a href="http://www.google.com/search?q=eustacy">eustacy</a>. But in British (British Enterprise, British Coder) it is <span style="font-style:italic;">always</span> spelt <span style="font-weight:bold;">eustasy</span>, no questions asked.</li>
	</ol>

</section>

<?php
	require_once $Sitewide['Templates']['Footer'];
