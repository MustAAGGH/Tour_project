<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use App\Models\Tour;
use App\Models\Transport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{


    private const LATEST_TOURS = 6;

    public function index()
    {
        $Tours = Tour::where('name','<>','')
            ->with('organizers')
            ->with('transports')
            ->orderBy('created_at','desc')
            ->take(self::LATEST_TOURS)
            ->get();

        return view('index.index', [
            'tours' => $Tours
          ]);
    }
}
