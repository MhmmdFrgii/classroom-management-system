<?php

namespace App\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

trait UploadTrait
{
    /**
     * Upload file gambar ke dalam storage.
     *
     * @param UploadedFile $file
     * @param string $folder
     * @return string
     */
    public function uploadImage(UploadedFile $file, string $folder): string
    {
        $filename = time() . '_' . $file->getClientOriginalName();
        $path = $file->storeAs($folder, $filename, 'public');
        return $path;
    }
}