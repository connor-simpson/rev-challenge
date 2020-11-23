<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Stock;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Stock::truncate();

        $csv = array_map('str_getcsv', file(resource_path("csv") . "/plu.csv"));
        array_walk($csv, function(&$a) use ($csv) {
          $a = array_combine($csv[0], $a);
        });
        array_shift($csv);

        foreach($csv as $stock){
            Stock::create([
                "date" => Carbon::createFromFormat("d/m/Y", $stock["date"], "Europe/London"),
                "quantity" => $stock["quantity"],
                "plu" => $stock["plu"],
                "price" => $stock["gross"]
            ]);
        }
    }
}
