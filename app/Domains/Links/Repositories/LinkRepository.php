<?php

namespace Emtudo\Domains\Links\Repositories;

use Emtudo\Domains\Links\Link;
use Emtudo\Support\Domain\Repository;

class LinkRepository extends Repository
{
    protected $modelClass = Link::class;

    public function doClick(Link $link)
    {
        $link->clicks = $link->clicks + 1;

        return $link->save();
    }
}
