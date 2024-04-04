<?php

namespace App\Exports;

use App\pcr;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;

class pcrTestExport implements FromCollection, Responsable, ShouldAutoSize, WithMapping, WithHeadings, WithEvents
{
    use Exportable;
    private $fileName = 'PCR.xlsx';
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return pcr::with('users')->get();
    }
    public function map($pcr): array
    {
        return [
            $pcr->uploaded_date,
            $pcr->pcr,
            $pcr->isolation,
            $pcr->quarantine,
            $pcr->users->name,
        ];
    }
    public function headings(): array
    {
        return [

            'Uploaded Date',
            'Pcr Tests',
            'Isolation',
            'Quarantine',
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
