<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\User;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Sheet;


class UsersExport implements FromCollection
{
    public function collection()
    {
        return User::select('nom','prenom','telephone','adresse')->get();
    }
    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                // $event->sheet->mergeCells('A1:B1'); // Fusionner les cellules A1 et B1
                $event->sheet->setCellValue('A1', 'Nom'); // Écrire "Nom" dans la cellule A1
                $event->sheet->setCellValue('B1', 'Prénom'); // Écrire "Prénom" dans la cellule C1
                $event->sheet->setCellValue('C1', 'telephone'); // Écrire "Prénom" dans la cellule C1
                $event->sheet->setCellValue('D1', 'adresse'); // Écrire "Prénom" dans la cellule C1

            },
        ];
    }
}
