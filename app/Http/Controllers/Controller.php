<?php

namespace App\Http\Controllers;
use App\Services\ClassName;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use MoveMoveIo\DaData\Enums\Language;
use MoveMoveIo\DaData\Facades\DaDataAddress;
use Location\Coordinate;
use Location\Polyline;
use Location\Distance\Vincenty;
use Request;
class Controller extends BaseController
{
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
 
}
