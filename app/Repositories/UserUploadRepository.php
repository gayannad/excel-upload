<?php

namespace App\Repositories;

use App\Models\UserUpload;
use App\Repositories\Interfaces\UserUploadRepositoryInterface;

class UserUploadRepository implements UserUploadRepositoryInterface
{
    private UserUpload $userUpload;

    public function __construct(UserUpload $userUpload)
    {
        $this->userUpload = $userUpload;
    }

    public function index()
    {
        return $this->userUpload->paginate(10);
    }
}
