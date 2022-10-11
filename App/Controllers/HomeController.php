<?php

namespace App\Controllers;

use App\Models\Task;
use simplehtmldom\HtmlWeb;

class HomeController
{
    public function show()
    {
        $clientWeb = new HtmlWeb;
        $html = $clientWeb->load('https://www.amazon.com/s/?field-keywords=bluetooth+keyboards');
        dd($html->find('#glow-ingress-line2', 0)->innertext);
        // https://www.amazon.com/s/?field-keywords=bluetooth+keyboards

        return view('index');
    }
}
