<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sites;

class WebsiteViewerController extends Controller
{
    //

    public function view($websiteId)
    {

        $currentSite = Sites::find($websiteId);
        if (is_null($currentSite)) {
            return redirect('/');
        }

        $framework = $this->getFrameworkForPath($currentSite->local_path);

        $returnArray = array(
            'currentSite' => $currentSite,
            'websiteId' => $websiteId,
            'framework' => $framework,
            'logs' => $currentSite->logs()->orderBy('created_at', 'desc')->take(10)->get()
        );

        return view('viewwebsite', $returnArray);
    }
}
