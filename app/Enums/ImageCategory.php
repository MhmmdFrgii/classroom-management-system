<?php

namespace App\Enums;

enum ImageCategory: string
{
    case SLIDE = 'slides';

    public function folderPath(): string
    {
        return "images/" . $this->value;
    }
}