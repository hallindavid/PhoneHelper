<?php
return [
	
	/**
	 * Default Format
	 * What format should the PhoneHelper use if you don't pass in any configuration option
	 */
	'default_format'=>'10-dash',

	/**
	 * 	Should it throw errors? (default = false)
	 * 	If false it will try to finish formatting the phone number with default settings if passed in variables are not valid
	 */
	'throw_errors'=>false,

	/**
	 * Formats
	 * Add your own or modify the stock formats here
	 */
	'formats'=>[
		/* Here is where you can define your own custom phone formats - keep in mind this is really only for 10 digit phone numbers in Canada/US
		/////EXAMPLE//////
		'my-custom-format'=> [
			'parts'=>[     for the examples X will be the indicated part, 8 will be the rest of the numbers.
				'country',  <- include the country code in the formatted phone number.  +X-888-888-8888
				'area',  <- include the area code in the formatted phone number +8-XXX-888-8888
				'exchange', <- include the exchange/central office code number +8-888-XXX-8888
				'line', <- include the line number  +8-888-888-XXXX
				'extension', <- include the extension +8-888-888-8888 ext. XXXX
			],
			'delimiters'=>[	for the examples i'll show you what the number 1-888-888-8888 would look like with only that delimiter enabled
				'prefix'=> '+', <- eg. +18888888888
				'country_area'=> ' (', <- eg. 1 (8888888888
				'area_exchange'=> ') ', <- eg. 1888) 8888888
				'exchange_line'=>'-', <- eg. 1888888-8888
				'line_extension'=>' ext. ', <- eg. 18888888888 ext. 888
			]
		],
		*/ 

		//These are the pre-loaded formats - feel free to add/remove/modify as needed!
		'10'=>[ // format("8888888888") = "8888888888"
			'parts'=>['area','exchange','line']
		],
		'10-dash'=>[ // format("8888888888") = "888-888-8888"
			'parts'=>['area', 'exchange','line'],
			'delimiters'=>[
				'area_exchange'=>'-',
				'exchange_line'=>'-',
			],
		],
		'10-brack'=>[ 	//	format("8888888888") = "(888) 888-8888"
			'parts'=>['area', 'exchange','line'],
			'delimiters'=>[
				'country_area'=>'(',
				'area_exchange'=>') ',
				'exchange_line'=>'-',
			],
		],
		'10-brack-ext'=>[ 	//	format("8888888888") = "(888) 888-8888"
			'parts'=>['area', 'exchange','line', 'extension'],
			'delimiters'=>[
				'country_area'=>'(',
				'area_exchange'=>') ',
				'exchange_line'=>'-',
				'line_extension'=>' ext. ',
			],
		],
		'10-dot'=>[ 	//	format("8888888888") = "888.888.8888"
			'parts'=>['area', 'exchange','line'],
			'delimiters'=>[
				'area_exchange'=>'.',
				'exchange_line'=>'.',
			],
		],
		'11'=>[ // format("8888888888") = "18888888888"
			'parts'=>['country','area', 'exchange','line'],
		],
		'11-dash'=>[ // format("8888888888") = "1-888-888-8888"
			'parts'=>['country','area', 'exchange','line'],
			'delimiters'=>[
				'country_area'=>'-',
				'area_exchange'=>'-',
				'exchange_line'=>'-',
			],
		],
		'11-brack'=>[ 	//	format("8888888888") = "1 (888) 888-8888"
			'parts'=>['country','area', 'exchange','line'],
			'delimiters'=>[
				'country_area'=>' (',
				'area_exchange'=>') ',
				'exchange_line'=>'-',
			],
		],
		'11-dot'=>[ 	//	format("8888888888") = "1.888.888.8888"
			'parts'=>['country','area', 'exchange','line'],
			'delimiters'=>[
				'country_area'=>'.',
				'area_exchange'=>'.',
				'exchange_line'=>'.',
			],
		],
		'E.164'=>[ // +1xxxxxxxxxx  (common for services like Twilio)
			'parts'=>['country','area', 'exchange','line'],
			'delimiters'=>[
				'prefix'=>'+',
			]
		],
		'+11-brack'=>[ // format("8888888888") = "+1 (888) 888-8888"
			'parts'=>['country', 'area','exchange','line'],
			'delimiters'=>[
				'prefix'=>'+',
				'country_area'=>' (',
				'area_exchange'=> ') ',
				'exchange_line'=>'-',
			]
		],
	],
];
?>