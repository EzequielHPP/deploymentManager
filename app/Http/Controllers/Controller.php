<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getFrameworkForPath($path)
    {

        $output = 'custom';

        if (!file_exists($path)){

            $output = 'notfound';

        } else if (file_exists($path . '/wp-config.php')) {

            $output = 'wordpress';

        } else if (file_exists($path . '/sites/all/themes/README.txt')) {

            $output = 'drupal';

        } else if (file_exists($path . '/readme.md') && file_exists($path . '/composer.json')) {

            $output = 'laravel';

        }


        return $output;

    }
}
