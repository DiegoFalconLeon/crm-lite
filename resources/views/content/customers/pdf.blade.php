<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        @page {
            font-family: Arial;
            font-size: 13px;
            margin: 0cm 0cm;
        }
        body {
            margin: 1.5cm;
            font-family: Arial;
            color: #666;
        }
        .table {
            width: 100%;
            border-spacing: 0;
        }
        .table tr {
            width: 100%;
            border-bottom: 1px solid #666;
        }
        .table thead {

            border-bottom: 1px solid #666;
        }
        .table td {
            box-sizing: border-box;
            padding: 5px;
            border-bottom: 1px solid #666;
        }

        .table thead th {
            background: #fac64e;
            color: #666;
            text-align: center;
        }
        .table {
            border: 1px solid #666;
            border-radius: 10px;
        }
        .table tbody tr {
            border-bottom: 1px solid #666;
        }
        .center {
            text-align: center;
        }
        .cont-logo {
            width: 100%;
            margin-bottom: 2em;
            text-align: center;
        }
        .cont-info {
            width: 100%;
            /* text-align: center; */
        }
        header {
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 7cm;
            text-align: center;
            line-height: 30px;
        }
        .h {width: 100%;
            border-spacing: 0;}
        .tfin td{
            padding: 5px 0;
        }
    </style>
</head>
<body>
    <table class="h">
        <tr>
            <td width="200px" class="center">
                <img src="{{asset('companies/default.png')  }}" height="60px" style="text-align:center" border="0">
                <br>{{ $company->name }}
                <br>RUC: {{ $company->document }}
            </td>
            <td class="center"><h2><strong>Lista de Clientes</strong></h2>
                <h3>GLOBAL</h3></td>
            <td class="center">Fecha: {{ now(); }}</td>
        </tr>
    </table>
    <br>
    <main>

        <table class="table" border="0">
            <thead>
                <tr>
                  <th>Nombre Completo</th>
                  <th>Documento</th>
                  <th>Correo</th>
                  <th>Celular</th>
                  <th>Contacto por</th>
                  <th>Estado</th>
                </tr>
            </thead>
            <tbody>
                {{-- @php
                    $totalCost = 0;
                    $totalPrice = 0;
                @endphp --}}
                {{-- @foreach($inventaries as $i)
                    @php
                        $totalCost = ((float) $i->cost * (float) $i->stock) + $totalCost;
                        $totalPrice = ((float) $i->price * (float) $i->stock) + $totalPrice;
                    @endphp
                    <tr>
                        <td class="center">{{ $loop->iteration }}</td>
                        <td>{{ $i->code }}</td>
                        <td>{{ $i->product }}</td>
                        <td class="center">{{ $i->stock }}</td>
                        <td class="center">{{ $i->cost }}</td>
                        <td class="center">{{ number_format(((float) $i->cost * (float) $i->stock),2,",",".") }}</td>
                        <td class="center">{{ number_format(((float) $i->price),2,",",".") }}</td>
                        <td class="center">{{ number_format(((float) $i->price * (float) $i->stock),2,",",".") }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td></td>
                    <td colspan="2"><strong>TOTAL</strong></td>
                    <td></td>
                    <td></td>
                    <td class="center">{{ number_format($totalCost,2,",",".") }}</td>
                    <td></td>
                    <td class="center">{{ number_format("$totalPrice",2,",",".") }}</td>
                </tr> --}}
                @foreach ($customers as $customer)
                <tr>
                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$customer->name ." ". $customer->lastname}}</strong></td>
                  <td>{{$customer->document}}</td>
                  <td>{{$customer->email}}</td>
                  <td>{{$customer->phone}}</td>
                  {{-- <td>{{$customer->areas->name}}</td> --}}
                  <td>{{$customer->meansOfContact->name}}</td>
                  <td><span class="badge bg-label-{{Util::bagde($customer->status)}} me-1">{{Util::estado($customer->status)}}</span></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <br>
        {{-- <table class="tfin">
            <tr>
                <td>Responsable de Inventario:</td>
                <td> _______________________________________</td>
            </tr>
            <tr>
                <td>Inicio:</td>
                <td> _______________________________________</td>
            </tr>
            <tr>
                <td>Fin:</td>
                <td> _______________________________________</td>
            </tr>
        </table> --}}
    </main>
    {{-- <script type="text/php">
        if ( isset($pdf) ) {
            $pdf->page_script('
                $font = $fontMetrics->get_font("Arial, Helvetica, sans-serif", "normal");
                $pdf->text(510, 10, "Pagina $PAGE_NUM de $PAGE_COUNT", $font, 10);
            ');
        }
    </script> --}}
</body>
</html>
