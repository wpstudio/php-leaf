<?php

## Simple command-line script to show examples

require "./Leaf.php";

$config = array(
    'user' => 'leafcoinrpc',
    'pass' => '--password--',
    'host' => '127.0.0.1',
    'port' => '22555' );

// create client conncetion
$leaf = new Leaf( $config );


// create a new address
$address = $leaf->get_address( 'name' );
print( "Address: $address \n" );

// list accounts in wallet
print_r( $leaf->list_accounts() );

// get balance in wallet
print( "name: " . $leaf->get_balance( 'name' ) );

// move money from accounts in wallet
// moves from 'name2' to account 'name'
$leaf->move( 'name2', 'name', 10000 );

// send money externally (withdrawl?)
// send from account to external address
$leaf->send( 'name', 'fVBFddNsND9TkWn3GoSeeiCFZ1tbAi6yVa', 100 );


