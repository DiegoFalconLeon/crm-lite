<?php

namespace App\Exports;

use App\Models\Customer;
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

class CustomerExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithStyles, WithCustomStartCell, WithDrawings
{
  public function collection(){
    return Customer::all();
  }

  public function startCell(): string{
    return 'A7';
  }
  public function headings(): array{
    return [
      'Nombre y Apellido',
      'Medio de contacto',
      'DNI',
      'Direccion',
      'Correo',
      'Celular',
      'Fecha de creación',
      'Estado',
    ];
  }
  public function map($customer): array{
    return [
      $customer->name . ' ' . $customer->lastname,
      $customer->meansOfContact->name,
      $customer->document,
      $customer->address,
      $customer->email,
      $customer->phone,
      \Fecha::formato($customer->created_at),
      \Util::estado($customer->status),

    ];
  }
  public function styles(Worksheet $sheet){
    $sheet->getStyle('A7:H7')->getFont()->setBold(true)->setSize(12)->getColor()->setARGB('000000');
    $sheet->getStyle('A7:H7')->getFill()->setFillType(Fill::FILL_SOLID)->getStartColor()->setRGB('edb339');
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
    $sheet->getStyle("A7:H{$totalRows}")->applyFromArray($estilo);
    $sheet->getStyle("A7:H7")->applyFromArray($estilo2);

    // $columnBBackground = [
    //     'alignment' => [
    //         'horizontal' => Alignment::HORIZONTAL_CENTER,
    //         'vertical' => Alignment::VERTICAL_CENTER,
    //     ],
    // ];
    // $sheet->getStyle("A7:H7")->applyFromArray($columnBBackground);
  }
  public function drawings(){
    $drawing = new Drawing();
    $drawing->setName('Logo');
    $drawing->setDescription('This is my logo');
    $drawing->setPath(public_path('/companies/default.png'));
    $drawing->setHeight(90);
    $drawing->setCoordinates('C1');

    return $drawing;
  }
}
