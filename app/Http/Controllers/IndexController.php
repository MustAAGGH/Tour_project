<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{


    private const LATEST_COUNT = 3;

    public function index()
    {
        $Tours = Tour::query()
            ->with('transports')
            ->with('organizers')
            ->select(
                'tours.id',
                'tours.name',
                'tours.tour_date',
                'tours.image',
                'tours.durance',
                )
            ->orderBy('tours.tour_date')
            ->take(static::LATEST_COUNT)
            ->get();


        return view('index.index', [
            'tours' => $Tours
        ]);
    }
}
