<?php

////	Puff Core Settings
//
// The root URL of your site (with trailing slash)
$Sitewide['Settings']['Site Root']                      = 'https://extensions.eustasy.org/';
// A title for your site.
$Sitewide['Settings']['Site Title']                     = 'eustasy Extensions';
// Something much longer or much shorter.
$Sitewide['Settings']['Alternative Site Title']         = '';
// Stripping the .php from URLs requires server-side configuration.
// Check it works before enabling it.
$Sitewide['Settings']['Strip PHP from URLs']            = true;
// Stop the loading of asset from external domains.
$Sitewide['Settings']['Content Security Policy Header'] = false;
// Honor Do Not Track Headers
$Sitewide['Settings']['Honor DNT Headers']              = true;
// Change to your tracking id like 'UA-1234567-89' for tracking.
$Sitewide['Settings']['Google Analytics']               = 'UA-45667989-10';
// Use a secure connection in future if it's available.
$Sitewide['Settings']['Try to Secure']                  = true;
// Load all the functions to be ready.
$Sitewide['Settings']['AutoLoad']['Functions']          = true;

// Some social settings for your site.
$Sitewide['Social']['Facebook'] = 'https://www.facebook.com/eustasy/';
$Sitewide['Social']['Google+']  = 'https://plus.google.com/+eustasyOrg';
$Sitewide['Social']['Twitter']  = 'https://twitter.com/eustasyorg';

// Default Page Settings
$Sitewide['Page']['Title']          = 'eustasy Extensions';
$Sitewide['Page']['Author']         = 'eustasy';
$Sitewide['Page']['Description']    = '';
$Sitewide['Page']['Tagline']        = '';
$Sitewide['Page']['Image']          = '/assets/images/Logo.png';
$Sitewide['Page']['Published']      = '';
$Sitewide['Page']['Theme Color']    = '#212121';
$Sitewide['Page']['Author Name']    = 'eustasy';
$Sitewide['Page']['Google+ Author'] = $Sitewide['Social']['Google+'];
$Sitewide['Page']['Twitter Author'] = $Sitewide['Social']['Twitter'];
$Sitewide['Page']['Twitter Site']   = $Sitewide['Social']['Twitter'];

// Version
$Sitewide['Version']['Core'] = '0.4';
