<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class TemplateGraduatesExport implements  WithTitle, WithHeadings, ShouldAutoSize
{
    use Exportable;

    private $arr = [];

    public function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function headings(): array
    {
        return $this->arr;
    }

    public function title(): string
    {
        return 'Graduados' ;
    }
}
