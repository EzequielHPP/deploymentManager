<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sites;

class WebsiteViewerController extends Controller
{
    //

    public function view($websiteId){

        $currentSite = Sites::find($websiteId);
        if (is_null($currentSite)) {
            return redirect('/');
        }

        return view('viewwebsite', ['currentSite' => $currentSite, 'websiteId' => $websiteId]);
    }
}
