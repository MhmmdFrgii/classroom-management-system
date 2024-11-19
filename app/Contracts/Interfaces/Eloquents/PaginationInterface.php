<?php

namespace App\Contracts\Interfaces\Eloquents;

interface PaginationInterface
{
    /**
     * Get paginated data.
     *
     * @param int $perPage
     * @return mixed
     */

    public function paginate(int $perPage);
}
