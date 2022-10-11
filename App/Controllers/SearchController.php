<?php

namespace App\Controllers;

use App\Scrapers\EbayScraper;
use App\Scrapers\AmazonScraper;

class SearchController
{
    public function show()
    {
        $amazon = new AmazonScraper($_GET['keywords']);
        $amazon->search();

        $ebay = new EbayScraper($_GET['keywords']);
        $ebay->search();

        if ($_GET['sort'] == 'asc') {
            $amazon->sortAsc();
            $ebay->sortAsc();
        }

        if ($_GET['sort'] == 'desc') {
            $amazon->sortDesc();
            $ebay->sortDesc();
        }

        return view('search', [
            'amazonResults' => $amazon->getResults(),
            'ebayResults' => $ebay->getResults(),
        ]);
    }
}
