<?php
	return [
		'subscribe' => [
				'api_key' => '',
				'list_uid' => '',//List unique id from here - http://admin.mailchimp.com/lists/
		        'gateway' => 'file', // allow values are "mailchimp" or "file"
			],
		'contact'   => [
			'to'      => 'nils.andersson@hyperisland.se',
			'subject' => 'your subject',
			'headers' => "From: (Your site) \r\n Content-type: text/html; charset=utf-8",
			'SmtpHost'   => 'smtp.gmail.com',
			'SmtpPort'   => '587',
			'SmtpUser'   => 'nils.andersson@hyperisland.se',
			'SmtpPass'   => 'smurfen91',
			'SmtpSecure' => 'tls',
			'debug' => false,
		],
	];