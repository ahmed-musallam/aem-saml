<?php
$metadata['http://localhost:8080/simplesaml/saml2/idp/metadata.php'] = [
    /*
     * We use '__DEFAULT__' as the hostname so we won't have to
     * enter a hostname.
     */
    'host' => '__DEFAULT__',

    /* The private key and certificate used by this IdP. */
    'certificate' => 'server.crt',
    'privatekey' => 'server.pem',

    /*
     * The authentication source for this IdP. Must be one
     * from config/authsources.php.
     */
    'auth' => 'example-userpass',
];

