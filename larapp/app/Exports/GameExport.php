<?php

namespace App\Exports;

use App\Game;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;


class GameExport implements FromView, WithColumnWidths, WithStyles
{
    public function view(): View
    {
        return view('games.excel', [
            'games' => Game::all()
        ]);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 20,  
            'C' => 40,            
            'D' => 20,            
            'E' => 10,
            'F' => 10,
            'G' => 10, 
            'H' => 10,           
        ];
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true, 'size' => 10]],
        ];
    }
}