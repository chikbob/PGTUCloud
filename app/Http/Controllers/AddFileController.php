<?php

namespace App\Http\Controllers;

use App\Http\Resources\FileResource;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class AddFileController extends Controller
{
    public function index() {
        $files = FileResource::collection(File::all());

        return inertia('Files/Index', compact('files'));
    }

    public function create() {
        return inertia('Files/Create');
    }

    public function store(Request $request)
    {
        File::create([
            'name' => $request->name,
            'lastModifiedDate' => $request->lastModifiedDate,
            'size' => $request->size,
            'type' => $request->type,
        ]);
        return redirect('/list');
    }
}
