<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidateUploadFile;
use App\Repositories\Interfaces\UserUploadRepositoryInterface;
use App\Services\UploadService;

class UploadController extends Controller
{
    private UploadService $uploadService;

    private UserUploadRepositoryInterface $userUploadRepository;

    public function __construct(UploadService $uploadService, UserUploadRepositoryInterface $userUploadRepository)
    {
        $this->uploadService = $uploadService;
        $this->userUploadRepository = $userUploadRepository;
    }

    /**
     * uploading csv to local storage and import data
     */
    public function upload(ValidateUploadFile $request): \Illuminate\Http\RedirectResponse
    {
        $this->uploadService->uploadData();

        return redirect()->route('uploads.index');
    }

    /**
     * displaying imported data
     */
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory
    {
        return view('upload_data');
    }

    /**
     * retrieving imported data to display
     */
    public function getData()
    {
        return $this->userUploadRepository->index();
    }
}
