<?php

namespace App\Exports;

use App\covid19;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;

class covid19Export implements FromCollection, Responsable, ShouldAutoSize, WithMapping, WithHeadings, WithEvents
{
    use Exportable;
    private $fileName = 'Covid19.xlsx';
    /**
    * @return Collection
    */
    public function collection()
    {
        return covid19::with('users')->get();

    }
    public function map($covid19): array
    {
        return [
           $covid19->updated_date,
           $covid19->new_cases,
           $covid19->healed,
           $covid19->deaths,
           $covid19->users->name,
        ];
    }
    public function headings(): array
    {
       return [

         'Updated Date',
           'New Cases',
         'Healed',
         'Deaths',
         'Uploaded By',
       ];
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class    => function(AfterSheet $event) {
                $event->sheet->getStyle('A1:E1')->applyFromArray([
                    'font'=>[
                        'bold'=>true
                    ]
                ]);
            },
        ];
    }
}
