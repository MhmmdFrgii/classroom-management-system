<?php

namespace App\Services;

use App\Contracts\Interfaces\Eloquents\PlimaInterface;
use App\Enums\ImageCategory;
use App\Traits\UploadTrait;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PlimaService
{
    use UploadTrait;

    protected $plimaRepository;

    public function __construct(PlimaInterface $plimaRepository)
    {
        $this->plimaRepository = $plimaRepository;
    }
    /**
     * Mengunggah gambar slide ke folder yang sesuai.
     *
     * @param UploadedFile $file
     * @return string
     */

    public function uploadPlimaImage(UploadedFile $file): string
    {
        $category = ImageCategory::PLIMA;
        $folder = $category->folderPath();
        return $this->uploadImage($file, $folder);
    }

    public function getAllPlima()
    {
        try {
            return $this->plimaRepository->getAll();
        } catch (\Exception $e) {
            Log::error('Error fetching slides: ' . $e->getMessage());
            return null;
        }
    }

    public function createPlima(array $data)
    {
        try {
            // Cek jika ada file gambar di dalam data
            if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
                $data['image'] = $this->uploadPlimaImage($data['image']);
            }

            return $this->plimaRepository->create($data);
        } catch (\Exception $e) {
            Log::error('Error creating slide: ' . $e->getMessage());
            return null;
        }
    }

    public function updatePlima($id, array $data)
    {
        try {
            $plima = $this->plimaRepository->find($id);

            // Cek apakah ada gambar baru
            if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
                // Hapus gambar lama jika ada
                if ($plima->image) {
                    Storage::disk('public')->delete($plima->image);
                }
                // Upload gambar baru dan simpan path
                $data['image'] = $this->uploadPlimaImage($data['image']);
            }

            // Lakukan update dengan data baru
            return $this->plimaRepository->update($id, $data);
        } catch (\Exception $e) {
            Log::error('Error updating slide: ' . $e->getMessage());
            return null;
        }
    }

    public function deletePlima($id)
    {
        try {
            return $this->plimaRepository->delete($id);
        } catch (\Exception $e) {
            Log::error('Error deleting slide: ' . $e->getMessage());
            return null;
        }
    }
}
