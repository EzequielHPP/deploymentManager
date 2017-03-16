<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Sites;

/**
 * Created by PhpStorm.
 * User: ezequielpereira
 * Date: 16/03/2017
 * Time: 12:24
 */
class WebsitesController extends Controller
{

    public function create(Request $request)
    {
        if (!Auth::check()) {
            return response()->json([
                'error' => "You are not authenticated"
            ], 401);
        }

        $data = json_decode($request->get('websiteData'));

        $insertData = array();
        $insertData['name'] = $data->website_name;
        $insertData['local_url'] = $data->website_url_local;
        $insertData['local_path'] = $data->website_path_local;
        $insertData['remote_url'] = $data->website_url_remote;
        $insertData['remote_path'] = $data->website_path_remote;
        $insertData['git_project_url'] = $data->website_git;

        $exists = Sites::where('local_path', $insertData['local_path'])->get()->first();
        if (!is_null($exists)) {
            return response()->json([
                'error' => "A website with the local folder ".$insertData['local_path']." already exists!"
            ]);
        }

        $site = Sites::create($insertData);

        return response()->json($site, 201);
    }

}