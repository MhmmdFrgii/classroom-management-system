<?php

namespace App\Services;

use App\Contracts\Interfaces\Eloquents\ClassmeetInterface;
use App\Enums\ImageCategory;
use App\Traits\UploadTrait;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ClassmeetService
{
    use UploadTrait;

    protected $classmeetRepository;

    public function __construct(ClassmeetInterface $classmeetRepository)
    {
        $this->classmeetRepository = $classmeetRepository;
    }
    /**
     * Mengunggah gambar slide ke folder yang sesuai.
     *
     * @param UploadedFile $file
     * @return string
     */

    public function uploadClassmeetImage(UploadedFile $file): string
    {
        $category = ImageCategory::CLASSMEET;
        $folder = $category->folderPath();
        return $this->uploadImage($file, $folder);
    }

    public function getAllClassmeet()
    {
        try {
            return $this->classmeetRepository->getAll();
        } catch (\Exception $e) {
            Log::error('Error fetching slides: ' . $e->getMessage());
            return null;
        }
    }

    public function createClassmeet(array $data)
    {
        try {
            // Cek jika ada file gambar di dalam data
            if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
                $data['image'] = $this->uploadClassmeetImage($data['image']);
            }

            return $this->classmeetRepository->create($data);
        } catch (\Exception $e) {
            Log::error('Error creating slide: ' . $e->getMessage());
            return null;
        }
    }

    public function updateClassmeet($id, array $data)
    {
        try {
            $classmeet = $this->classmeetRepository->find($id);

            // Cek apakah ada gambar baru
            if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
                // Hapus gambar lama jika ada
                if ($classmeet->image) {
                    Storage::disk('public')->delete($classmeet->image);
                }
                // Upload gambar baru dan simpan path
                $data['image'] = $this->uploadClassmeetImage($data['image']);
            }

            // Lakukan update dengan data baru
            return $this->classmeetRepository->update($id, $data);
        } catch (\Exception $e) {
            Log::error('Error updating slide: ' . $e->getMessage());
            return null;
        }
    }

    public function deleteClassmeet($id)
    {
        try {
            return $this->classmeetRepository->delete($id);
        } catch (\Exception $e) {
            Log::error('Error deleting slide: ' . $e->getMessage());
            return null;
        }
    }
}
