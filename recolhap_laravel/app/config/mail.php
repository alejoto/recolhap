<?php

return array(

	/*  Mail Driver */				'driver' 	=> 'smtp',
	/* SMTP Host Address */ 		'host' 		=> 'secure32.webhostinghub.com',
	/* SMTP Host Port  */			'port' 		=> 25,

	/* Global "From" Address */
									'from' => array(
										'address' => 'support@recolhap.com', 
										'name' => 'Soporte registro RECOLHAP'
										)
									,

	/* E-Mail Encryption Protocol */'encryption'=> 'tls',
	/* SMTP Server Username */		'username' 	=> 'support@recolhap.com',
	/* SMTP Server Password*/		'password'	=> 'laravel',
	
	/*attempts
	1. host mail.recolhap.com
	   port 587
	   encryption '' (empty)
	   result: no email was sent

	2. host mail.recolhap.com
	   port 25
	   encryption '' (empty)
	   result: no email was sent

	3. host secure32.webhostinghub.com
	   port 25
	   encryption '' (empty)
	   result: no email was sent

	4. host secure32.webhostinghub.com
	   port 465
	   encryption '' (empty)
	   result: status 500 (server did not responded)
	   log file: Connection to secure32.webhostinghub.com:465 Timed Out

	5. host secure32.webhostinghub.com
	   port 465
	   encryption '' (empty)
	   emtpy password
	   result: Connection to secure32.webhostinghub.com:465 Timed Out

	6. From email config (cpanel) password was reset to 'laravel'
	   host secure32.webhostinghub.com
	   port 465
	   encryption '' (empty)
	   password added after changing (same word) in cpanel
	   Asigned password: 'laravel'
	   result: Connection to secure32.webhostinghub.com:465 Timed Out

	7. host secure32.webhostinghub.com
	   port 25
	   encryption '' (empty)
	   result: no email was sent

	8. host secure32.webhostinghub.com
	   port 25
	   encryption 'tls'
	   result: Connection to secure32.webhostinghub.com:25 Timed Out
	*/

	/*
	|--------------------------------------------------------------------------
	| Sendmail System Path
	|--------------------------------------------------------------------------
	|
	| When using the "sendmail" driver to send e-mails, we will need to know
	| the path to where Sendmail lives on this server. A default path has
	| been provided here, which will work well on most of your systems.
	|
	|
	|'sendmail' => '/usr/sbin/sendmail -bs'
	*/

	'sendmail' => '/usr/sbin/sendmail -bs',

	/*
	|--------------------------------------------------------------------------
	| Mail "Pretend"
	|--------------------------------------------------------------------------
	|
	| When this option is enabled, e-mail will not actually be sent over the
	| web and will instead be written to your application's logs files so
	| you may inspect the message. This is great for local development.
	|
	*/

	'pretend' => false,

);