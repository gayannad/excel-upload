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
            if (!request()->hasFile('file')) {
                Log::warning('File upload attempted without a file.');
                return;
            }

            $file = request()->file('file');
            $path = $file->store('uploads', 'public');
            $realPath = Storage::disk('public')->path($path);

            Log::info('File uploaded: ' . $realPath);

            Excel::import(new UserImport, $realPath);

            Log::info('Excel import completed.');

        } catch (\Exception $e) {
            Log::error($e->getMessage());
        }
    }
}
