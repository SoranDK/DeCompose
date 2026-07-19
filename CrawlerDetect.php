<?php
use Jaybizzle\CrawlerDetect\CrawlerDetect;

require 'CrawlerDetect.php';
require 'Fixtures/AbstractProvider.php';
require 'Fixtures/Crawlers.php';
require 'Fixtures/Exclusions.php';
require 'Fixtures/Headers.php';

$CrawlerDetect = new CrawlerDetect;

if($CrawlerDetect->isCrawler()) {
    $bot .= $CrawlerDetect->getMatches()." ";
}
?>
