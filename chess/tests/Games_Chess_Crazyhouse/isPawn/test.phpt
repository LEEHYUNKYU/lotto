--TEST--
Games_Chess_Crazyhouse->isPawn()
--SKIPIF--
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php.inc';
$board->addPiece('W', 'B', 'e1');
$board->addPiece('W', 'B', 'e2');
$board->addPiece('W', 'B', 'e3');
$board->addPiece('W', 'R', 'e4');
$board->addPiece('W', 'P', 'e5');
$phpunit->assertFalse($board->isPawn('WB0'), 'WB0');
$phpunit->assertFalse($board->isPawn('WB2'), 'WB2');
$phpunit->assertFalse($board->isPawn('WP0'), 'WP0');
$phpunit->assertFalse($board->isPawn('WR0'), 'WR0');
$phpunit->assertTrue($board->isPawn('WP1'), 'WP1');
echo 'tests done';
?>
--EXPECT--
tests done