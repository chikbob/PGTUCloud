<?php

namespace App\Http\Controllers;

use App\Http\Resources\FileResource;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;

class FileController extends Controller
{

    public function __invoke(Request $request): Response
    {
        $user = $request->user(); // Получаем текущего аутентифицированного пользователя
        $files = File::where('user_id', $user->id)->get(); // Получаем список файлов для определенного пользователя
        return Inertia::render('files', [
            'files' => $files
        ]);
    }

    public function index()
    {
        $files = FileResource::collection(File::all());

        return inertia('Files/Index', compact('files'));
    }

    public function create()
    {
        return inertia('Files/Create');
    }

    public function store(Request $request)
    {
        File::create([
            'user_id' => $request->user_id,
            'name' => $request->name,
            'lastModifiedDate' => $request->lastModifiedDate,
            'size' => $request->size,
            'type' => $request->type,
        ]);
        return redirect('/list');
    }

    public function destroy(File $file)
    {
        $file->delete();
        return redirect('/');
    }
}
