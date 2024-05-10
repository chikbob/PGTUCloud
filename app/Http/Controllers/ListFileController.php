<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ListFileController extends Controller
{
    public function __invoke(): Response
    {
        return Inertia::render('files', [
            'files' => File::all()
        ]);
    }
}
