<?php

namespace Emtudo\Support\Http;

class Respond
{
    public function ok($value)
    {
        return response()->json($value, 200);
    }

    public function notFound($message)
    {
        return response()->json($message, 404);
    }

    public function error($value)
    {
        return response()->json($value, 500);
    }
}
