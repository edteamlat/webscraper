<?php

namespace App\Controllers;

use App\Scrapers\AmazonScraper;

class SearchController
{
    public function show()
    {
        $amazon = new AmazonScraper('keyboard bluetooth');
        $amazon->search()->sortDesc();

        $amazonResults = $amazon->getResults();

        return view('search', [
            'amazonResults' => $amazonResults,
        ]);
    }
}
