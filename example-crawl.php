<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/bootstrap.php';

use GuzzleHttp\Client  as HttpClient;
use PHPHtmlParser\Dom;

/*
 * example for crawler
 */
 try {
 	// fetch
 	$client = new HttpClient;
 	$res = $client->get('http://example.for.crawled');

 	// dom
 	$html = $res->getBody();
 	$dom = new Dom;
 	$dom->load($html);

 	// extract
 	$nodes = $dom->find('div.blog-content');

 	$images = [];
 	foreach ($nodes as $item) {
 		$img = $item->find('.img-blog')[0];
 		$images[] = $img->getAttribute('src');
 	}

 	echo json_encode($images);
 } catch(Exception $e) {
 	echo json_encode([]);
 }
