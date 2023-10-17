<?php

namespace App\Exports;

use App\Models\User;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithDrawings;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;


class UserExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithStyles, WithCustomStartCell, WithDrawings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return User::all();
    }

    public function startCell(): string{
      return 'A7';
    }
    public function headings(): array{
      return [
        'Nombre del usuario',
        'Area',
        'Correo',
        'Rol',
        'Foto',
        'Estado',
      ];
    }
    public function map($users): array{
      return [
        $users->name . ' ' . $users->lastname,
        $users->areas->name,
        $users->email,
        \Util::role($users->role),
        $users->image,
        \Util::estado($users->status),

      ];
    }
    public function styles(Worksheet $sheet){
      $sheet->getStyle('A7:F7')->getFont()->setBold(true)->setSize(12)->getColor()->setARGB('000000');
      $sheet->getStyle('A7:F7')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('edb339');
      $sheet->setShowGridlines(false);
      $totalRows = $sheet->getHighestRow();
      $estilo = [
        'alignment' => [
          'wrapText' => true,
        ],
        'borders' => [
          'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            'color' => ['rgb' => 'edb339'],
          ]
        ],
        'font' => [
          'size' => 12,
        ],
      ];
      $estilo2 = [
        'borders' => [
          'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
            'color' => ['rgb' => 'fdfdfd'],
          ]
        ]
      ];
      $sheet->getStyle("A7:F{$totalRows}")->applyFromArray($estilo);
      $sheet->getStyle("A7:F7")->applyFromArray($estilo2);
    }
    public function drawings(){
      $drawing = new Drawing();
      $drawing->setName('Logo');
      $drawing->setDescription('This is my logo');
      $drawing->setPath(public_path('/companies/'.session('logoCompany')));
      $drawing->setHeight(90);
      $drawing->setCoordinates('C1');

      return $drawing;
    }
}
