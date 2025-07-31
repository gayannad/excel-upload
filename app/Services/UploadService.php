<?php

namespace App\Services;

use App\Imports\UserImport;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class UploadService
{
    /**
     * upload data from csv
     */
    public function uploadData(): void
    {
        if (request()->hasFile('file')) {
            $file = request()->file('file');
            $path = $file->store('uploads', 'public');
            $realPath = Storage::disk('public')->path($path);
            Excel::import(new UserImport, $realPath);
        }
    }
}
