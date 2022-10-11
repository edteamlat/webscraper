<?php

namespace App\Controllers;

use App\Scrapers\EbayScraper;
use App\Scrapers\AmazonScraper;

class SearchController
{
    public function show()
    {
        $amazon = new AmazonScraper(input('keywords'));
        $amazon->search();

        $ebay = new EbayScraper(input('keywords'));
        $ebay->search();

        if (input('sort') == 'asc') {
            $amazon->sortAsc();
            $ebay->sortAsc();
        }

        if (input('sort') == 'desc') {
            $amazon->sortDesc();
            $ebay->sortDesc();
        }

        return view('search', [
            'amazonResults' => $amazon->getResults(),
            'ebayResults' => $ebay->getResults(),
        ]);
    }
}
