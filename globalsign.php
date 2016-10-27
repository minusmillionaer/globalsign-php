<?php

$url = 'https://test-gcc.globalsign.com/qb/ws/GasQuery?wsdl';
$nameSpace = 'http://stub.order.gasapiserver.esp.globalsign.com';
$client = new SoapClient($url);
$client->_namespace = $nameSpace;
$params = array( 'OVOrder' => array(

		'Request' => array(
			'OrderRequestHeader' => array(
				'AuthToken' => array(
					'UserName' => 'PAR0_00000',
					'Password' => 'xxxx'
				)
			),
		'OrderRequestParameter' => array(
		'ProductCode' => 'OV',
		'OrderKind' => 'new',
		'Licenses' => '1',
		'ValidityPeriod' => array(
			'Months' => '12',
		),
		'CSR' => '-----BEGIN CERTIFICATE REQUEST-----
MIIBvzCCASgCAQAwbDELMAkGA1UEBhMCQkUxEDAOBgNVBAgTB0JyYWJhbnQxDzAN
BgNVBAcTBkxldXZlbjETMBEGA1UEChMKR2xvYmFsU2lnbjEMMAoGA1UECxMDd2Vi
MRcwFQYDVQQDEw53d3cucGpiMTU0LmNvbTCBnzANBgkqhkiG9w0BAQEFAAOBjQAw
gYkCgYEAsq7c9pSA56FgV5GIR/Ihl6dMKJyp9Q1NNRaAlPb3cT0QULykhPPBeRVk
g6sPZ/1z2qHL6t9A6qUzFp3ATj+ftX+KK5UwvalHkTvJyV+0g0OUTT/3WcBDQ3kP
DZXM1eS0SwAxU9jaedOlqTSGFD+GHF54CVERFFFFF3JXTD4a+AMCAwEAAaATMBEG
CSqGSIb3DQEJAjEEFAIu5jANBgkqhkiG9w0BAQUFAAOBgQBgVUN0PUxnzkoHhYgg
CIiCF55Z/hB0lxyM11KzdO5cMBw+nmJN+6lIFyfyPGhaOW9I/ACVCDSwY/QYRMh7
LqUex4+xr2t2C8oTIqp3iJMl8Hs+X9hVlnB4WjdiNbnkfgYH89UyQUPVbKxQNJ2F
kT+h2sEZYU7k2ZwYoVnS212G1w==
-----END CERTIFICATE REQUEST-----',
		'Options' => array(
			'Option' => array(
				'OptionName' => 'SAN',
				'OptionValue' => 'false',
			),
		),
		),
		'SubID'=> NULL,
		'ContactInfo' => array(
			'FirstName' => 'John',
			'LastName' => 'Doe',
			'Phone' => '00000000000',
			'Email' => 'admin@johndoe.com',
		),
		'OrganizationInfo' => array(
			'OrganizationName' => 'John Doe Inc.',
				'OrganizationAddress' => array(
					'AddressLine1' => 'asdfasdf 12',
					'City' => 'Cologne',
					'Region' => 'NRW',
					'PostalCode' => '51149',
					'Country' => 'DE',
					'Phone' => '00000000000',
				),
			),

		),
	),

);
//var_dump($params);
$res = $client->__soapCall('OVOrder', $params);
echo "<pre>";
var_dump($res);