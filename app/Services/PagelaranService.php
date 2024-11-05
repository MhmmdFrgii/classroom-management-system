<?php

namespace App\Services;

use App\Contracts\Interfaces\Eloquents\PagelaranInterface;
use App\Enums\ImageCategory;
use App\Traits\UploadTrait;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class PagelaranService
{
    use UploadTrait;

    protected $pagelaranRepository;

    public function __construct(PagelaranInterface $slideRepository)
    {
        $this->pagelaranRepository = $slideRepository;
    }

    /**
     * Mengunggah gambar slide ke folder yang sesuai.
     *
     * @param UploadedFile $file
     * @return string
     */

    public function uploadPagelaranImage(UploadedFile $file): string
    {
        $category = ImageCategory::PAGELARAN;
        $folder = $category->folderPath();
        return $this->uploadImage($file, $folder);
    }

    public function getAllPagelaran()
    {
        try {
            return $this->pagelaranRepository->getAll();
        } catch (\Exception $e) {
            Log::error('Error fetching slides: ' . $e->getMessage());
            return null;
        }
    }

    public function createPagelaran(array $data)
    {
        try {
            // Cek jika ada file gambar di dalam data
            if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
                $data['image'] = $this->uploadPagelaranImage($data['image']);
            }

            return $this->pagelaranRepository->create($data);
        } catch (\Exception $e) {
            Log::error('Error creating slide: ' . $e->getMessage());
            return null;
        }
    }

    public function updatePagelaran($id, array $data)
    {
        try {
            $pagelaran = $this->pagelaranRepository->find($id);

            // Cek apakah ada gambar baru
            if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
                // Hapus gambar lama jika ada
                if ($pagelaran->image) {
                    Storage::disk('public')->delete($pagelaran->image);
                }
                // Upload gambar baru dan simpan path
                $data['image'] = $this->uploadPagelaranImage($data['image']);
            }

            // Lakukan update dengan data baru
            return $this->pagelaranRepository->update($id, $data);
        } catch (\Exception $e) {
            Log::error('Error updating slide: ' . $e->getMessage());
            return null;
        }
    }

    public function deletePagelaran($id)
    {
        try {
            return $this->pagelaranRepository->delete($id);
        } catch (\Exception $e) {
            Log::error('Error deleting slide: ' . $e->getMessage());
            return null;
        }
    }
}
