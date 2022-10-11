<?php

namespace App\Controllers;

use App\Scrapers\EbayScraper;
use App\Scrapers\AmazonScraper;

class SearchController
{
    public function show()
    {
        $amazon = new AmazonScraper('keyboard bluetooth logitech k830');
        $amazon->search()->sortDesc();

        $ebay = new EbayScraper('keyboard bluetooth logitech k830');
        $ebay->search()->sortDesc();

        return view('search', [
            'amazonResults' => $amazon->getResults(),
            'ebayResults' => $ebay->getResults(),
        ]);
    }
}
