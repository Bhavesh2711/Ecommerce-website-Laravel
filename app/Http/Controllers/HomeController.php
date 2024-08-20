<?php

namespace App\Http\Controllers;
use App\Http\Controllers\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function chartjs()
    {
        $viewer = DB::table('views')
        ->select(DB::raw("SUM(numberofview) as count"))
        ->orderBy("created_at")
        ->groupBy(DB::raw("YEAR(created_at)"))
        ->get()
        ->toArray();
        $viewer = array_column($viewer, 'count');

        $click = DB::table('clicks')
    ->select(DB::raw("SUM(numberofclick) as count"))
    ->orderBy("created_at")
    ->groupBy(DB::raw("YEAR(created_at)"))
    ->get()
    ->toArray();
        $click = array_column($click, 'count');

        return view('chartjs')
            ->with('viewer', json_encode($viewer, JSON_NUMERIC_CHECK))
            ->with('click', json_encode($click, JSON_NUMERIC_CHECK));
    }
}
