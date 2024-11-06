<?php

namespace App\Services;

use App\Contracts\Interfaces\Eloquents\RandomInterface;
use App\Enums\ImageCategory;
use App\Traits\UploadTrait;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class RandomService
{
    use UploadTrait;

    protected $randomRepository;

    public function __construct(RandomInterface $randomRepository)
    {
        $this->randomRepository = $randomRepository;
    }
    /**
     * Mengunggah gambar slide ke folder yang sesuai.
     *
     * @param UploadedFile $file
     * @return string
     */

    public function uploadRandomImage(UploadedFile $file): string
    {
        $category = ImageCategory::RANDOM;
        $folder = $category->folderPath();
        return $this->uploadImage($file, $folder);
    }

    public function getAllRandom()
    {
        try {
            return $this->randomRepository->getAll();
        } catch (\Exception $e) {
            Log::error('Error fetching slides: ' . $e->getMessage());
            return null;
        }
    }

    public function createRandom(array $data)
    {
        try {
            // Cek jika ada file gambar di dalam data
            if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
                $data['image'] = $this->uploadRandomImage($data['image']);
            }

            return $this->randomRepository->create($data);
        } catch (\Exception $e) {
            Log::error('Error creating slide: ' . $e->getMessage());
            return null;
        }
    }

    public function updateRandom($id, array $data)
    {
        try {
            $random = $this->randomRepository->find($id);

            // Cek apakah ada gambar baru
            if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
                // Hapus gambar lama jika ada
                if ($random->image) {
                    Storage::disk('public')->delete($random->image);
                }
                // Upload gambar baru dan simpan path
                $data['image'] = $this->uploadRandomImage($data['image']);
            }

            // Lakukan update dengan data baru
            return $this->randomRepository->update($id, $data);
        } catch (\Exception $e) {
            Log::error('Error updating slide: ' . $e->getMessage());
            return null;
        }
    }

    public function deleteRandom($id)
    {
        try {
            return $this->randomRepository->delete($id);
        } catch (\Exception $e) {
            Log::error('Error deleting slide: ' . $e->getMessage());
            return null;
        }
    }
}
