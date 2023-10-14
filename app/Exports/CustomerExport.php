<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;

class CustomerExport implements FromCollection, WithMapping, WithHeadings
{
  public function collection()
  {
    return Customer::all();
  }

  public function headings(): array
  {
    return [
      'Nombre y Apellido',
      'Medio de contacto',
      'DNI',
      'Direccion',
      'Correo',
      'Celular',
      'Estado',
    ];
  }

  public function map($customer): array
  {
    return [
      $customer->name . ' ' . $customer->lastname,
      $customer->meansOfContact->name,
      $customer->document,
      $customer->address,
      $customer->email,
      $customer->phone,
      \Util::status($customer->status),
    ];
  }
}
