# php-leaf

A basic PHP library to talk to a leafcoind daemon to get you started in your leafcoin project.

I plan to expand upon the end points of the API.  Right now accounts and movement of coins is working.

*Notes:* You can follow along (and suggest... please do) which API endpoints I work on next.  Head to the [issues area](https://github.com/wpstudio/php-leaf/issues) to contribute or to see what upcoming endpoints will be added to this api.


## Requirements

Requires **leafcoind** to already be installed and running on your local server or reachable by your server.  

Get leafcoin source from: https://github.com/leafcoin/leafcoin


## Usage:

Example use, see examples.php for more

```
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
print( $address );

// check balance 
print( "name: " . $leaf->get_balance( 'name' ) );

// send money externally (withdrawl?)
$leaf->send( 'name', 'fVBFddNsND9TkWn3GoSeeiCFZ1tbAi6yVa', 100 );

```


## About

Library originally created by Marcus Kazmierczak, http://mkaz.com/, for Dogecoin

Library adapted for LeafCoin


