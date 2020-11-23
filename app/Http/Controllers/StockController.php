<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;
use Carbon\Carbon;

class StockController extends Controller
{
    
    public function index(){

        $stock = Stock::all()->toArray();
        return [
            "gross_total" => round(array_sum(array_column($stock, 'gross_total')), 2),
            "net_total" => round(array_sum(array_column($stock, 'net_total')), 2),
            "stock" => $stock
        ];

    }

    public function date(Request $request)
    {
        $this->validate($request, [
            'startDate' => 'required|date_format:d/m/Y',
            'endDate' => 'nullable|date_format:d/m/Y'
        ]);

        if($request->has("endDate")){
            
            $startDate = Carbon::createFromFormat("d/m/Y", $request->startDate)->startOfDay();
            $endDate = Carbon::createFromFormat("d/m/Y", $request->endDate)->endOfDay();
            $stock = Stock::whereBetween("date", [$startDate, $endDate])->get()->toArray();

        }else{
            $date = Carbon::createFromFormat("d/m/Y", $request->startDate)->startOfDay();
            $stock = Stock::where("date", $date)->get()->toArray();
        }

        return [
            "gross_total" => round(array_sum(array_column($stock, 'gross_total')), 2),
            "net_total" => round(array_sum(array_column($stock, 'net_total')), 2),
            "stock" => $stock
        ];
    }

}
