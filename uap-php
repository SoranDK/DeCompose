<?php
require_once 'Exception/FileNotFoundException.php';
require_once 'Exception/DomainException.php';
require_once 'Exception/FetcherException.php';
require_once 'Exception/InvalidArgumentException.php';
require_once 'Exception/ReaderException.php';

require_once 'arserFactoryMethods.php';
require_once 'AbstractParser.php';
require_once 'Result/AbstractClient.php';
require_once 'Result/AbstractSoftware.php';
require_once 'Result/AbstractVersionedSoftware.php';
require_once 'UserAgentParser.php';
require_once 'Result/UserAgent.php';
require_once 'DeviceParser.php';
require_once 'Result/Device.php';
require_once 'OperatingSystemParser.php';
require_once 'Result/OperatingSystem.php';
require_once 'Result/Client.php';
require_once 'Parser.php';

use UAParser\Parser;

$parser = Parser::create("../resources/regexes.php");
$v_ua = $parser->parse($_SERVER["HTTP_USER_AGENT"]);
?>
