<?php

namespace App\Imports;

use App\Models\UserUpload;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UserImport implements ShouldQueue, ToModel, WithChunkReading, WithHeadingRow
{
    public function model(array $row): UserUpload
    {
        return new UserUpload([
            'name' => $row['name'],
            'email' => $row['email'],
            'contact_no' => $row['contact_number'],
            'address' => $row['address'],
            'birthday' => $row['birthday'],
        ]);
    }

    public function chunkSize(): int
    {
        return 1000;
    }

    public function headingRow(): int
    {
        return 1;
    }
}
