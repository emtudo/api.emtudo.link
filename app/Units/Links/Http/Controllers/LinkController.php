<?php

namespace Emtudo\Units\Links\Http\Controllers;

use Emtudo\Domains\Links\Repositories\LinkRepository;
use Emtudo\Support\Http\Controller;
use Emtudo\Units\Links\Http\Requests\CreateLinkRequest;

class LinkController extends Controller
{
    public function index(LinkRepository $repository)
    {
        $links = $repository->userOnly(true)->getAll();

        return $this->respond->ok($links);
    }

    public function show($id, LinkRepository $repository)
    {
        $link = $repository->findId($id);
        $repository->doClick($link);

        if (!$link) {
            return $this->respond->notFound('Link não foi encontrado');
        }

        return $this->respond->ok($link);
    }

    public function store(CreateLinkRequest $request, LinkRepository $repository)
    {
        $data = $request->all();
        $link = $repository->create($data);

        if ($link) {
            return $this->respond->ok($link);
        }

        return $this->respond->error('Ocorreu algum erro interno');
    }
}
