--TEST--
PostgreSQL pg_get_pid() functions
--EXTENSIONS--
pgsql
--SKIPIF--
<?php include("inc/skipif.inc"); ?>
--FILE--
<?php
// optional functions

include('inc/config.inc');

$db = pg_connect($conn_str);
$pid = pg_get_pid($db);

is_integer($pid) ? print 'OK' : print 'NG';
?>
--EXPECT--
OK
