<?php

namespace App\Services;

use App\Imports\UserImport;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;

class UploadService
{
    /**
     * upload data from csv
     */
    public function uploadData(): void
    {
        try {
            if (request()->hasFile('file')) {

                $file = request()->file('file');
                $path = $file->store('uploads', 'public');
                $realPath = Storage::disk('public')->path($path);

                Log::info('File uploaded: ' . $realPath);

                Excel::import(new UserImport, $realPath);
            } else {
                Log::error("File not found");
            }
        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
