<?php

namespace App\Enums;

enum ImageCategory: string
{
    case SLIDE = 'slides';
    case PAGELARAN = 'pagelarans';

    public function folderPath(): string
    {
        return "images/" . $this->value;
    }
}
