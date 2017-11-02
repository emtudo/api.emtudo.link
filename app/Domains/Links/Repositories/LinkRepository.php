<?php 

namespace Emtudo\Domains\Links\Repositories;

use Emtudo\Support\Domain\Repository;
use Emtudo\Domains\Links\Link;

class LinkRepository extends Repository
{
    protected $modelClass = Link::class;
}