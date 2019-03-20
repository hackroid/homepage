<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\SiteMap;

class HomePageController extends Controller
{
    public function siteMap(SiteMap $siteMap)
    {
        $map = $siteMap->getSiteMap();

        return response($map)
            ->header('Content-type', 'text/xml');
    }
}
