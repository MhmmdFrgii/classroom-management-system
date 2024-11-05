<?php

namespace App\Services;

use App\Contracts\Interfaces\Eloquents\SlidesInterface;
use App\Enums\ImageCategory;
use App\Traits\UploadTrait;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class SlideService
{
    use UploadTrait;

    protected $slideRepository;

    public function __construct(SlidesInterface $slideRepository)
    {
        $this->slideRepository = $slideRepository;
    }

    /**
     * Mengunggah gambar slide ke folder yang sesuai.
     *
     * @param UploadedFile $file
     * @return string
     */
    public function uploadSlideImage(UploadedFile $file): string
    {
        $category = ImageCategory::SLIDE;
        $folder = $category->folderPath();
        return $this->uploadImage($file, $folder);
    }

    public function getAllSlide()
    {
        try {
            return $this->slideRepository->getAll();
        } catch (\Exception $e) {
            Log::error('Error fetching slides: ' . $e->getMessage());
            return null;
        }
    }

    public function createSlide(array $data)
    {
        try {
            // Cek jika ada file gambar di dalam data
            if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
                $data['image'] = $this->uploadSlideImage($data['image']);
            }

            return $this->slideRepository->create($data);
        } catch (\Exception $e) {
            Log::error('Error creating slide: ' . $e->getMessage());
            return null;
        }
    }

    public function updateSlide($id, array $data)
    {
        try {
            $slide = $this->slideRepository->find($id);

            // Cek apakah ada gambar baru
            if (isset($data['image']) && $data['image'] instanceof UploadedFile) {
                // Hapus gambar lama jika ada
                if ($slide->image) {
                    Storage::disk('public')->delete($slide->image);
                }
                // Upload gambar baru dan simpan path
                $data['image'] = $this->uploadSlideImage($data['image']);
            }

            // Lakukan update dengan data baru
            return $this->slideRepository->update($id, $data);
        } catch (\Exception $e) {
            Log::error('Error updating slide: ' . $e->getMessage());
            return null;
        }
    }

    public function deleteSlide($id)
    {
        try {
            return $this->slideRepository->delete($id);
        } catch (\Exception $e) {
            Log::error('Error deleting slide: ' . $e->getMessage());
            return null;
        }
    }
}
