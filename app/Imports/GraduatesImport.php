<?php

namespace App\Imports;

use App\Column;
use App\Graduate;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GraduatesImport implements ToModel, WithHeadingRow
{

    use Importable;


    public function model(array $row)
    {
        //
    }

    /**
    * @param Collection $collection
    */
//    public function collection(Collection $collection)
//    {
//        $arr = [];
//        $y = 0;
//
//        for($i = 1; $i < count($collection); $i++){
//
//            for($x = 0; $x < count($collection[0]); $x++){
//                $arr[$y][$collection[0][$x]] = $collection[$i][$x];
//            }
//            $y++;
//        }
//
//        if(count($arr)){
//            DB::table('graduates')->insert($arr);
//        }
//    }

}
