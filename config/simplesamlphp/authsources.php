<?php

$config = array(

    'admin' => array(
        'core:AdminPassword',
    ),

    'example-userpass' => array(
        'exampleauth:UserPass',
        'user1:user1' => array(
            'uid' => 'user1',
            'groups' => array('content-authors', 'contributor'),
            'email' => 'user@example.com',
            'firstName' => 'User1',
            'lastName' => 'Last1',
        ),
        'user2:user2' => array(
            'uid' => 'user2',
            'groups' => array('content-authors', 'dam-users'),
            'email' => 'user1@example.com',
            'firstName' => 'User2',
            'lastName' => 'Last2',
        ),
        'user3:user3' => array(
            'uid' => 'user3',
            'groups' => array('content-authors', 'workflow-administrators'),
            'email' => 'user3@example.com',
            'firstName' => 'User3',
            'lastName' => 'Last3',
        ),
    ),

    'default-sp' => array(
        'saml:SP',
        'entityID' => 'aem-sample-sp',
        'RelayState' => 'http://localhost:4502',
    ),

);
