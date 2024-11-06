<?php

namespace App\Enums;

enum ImageCategory: string
{
    case SLIDE = 'slides';
    case PAGELARAN = 'pagelarans';
    case CLASSMEET = 'classmeets';
    case PLIMA = 'p5s';
    case RANDOM = 'randoms';

    public function folderPath(): string
    {
        return "images/" . $this->value;
    }
}
