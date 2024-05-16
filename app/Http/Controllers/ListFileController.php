<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;

class ListFileController extends Controller
{
    public function index(Request $request): Response
    {
        $user = $request->user(); // Получаем текущего аутентифицированного пользователя
        $files = File::where('user_id', $user->id)->get(); // Получаем список файлов для определенного пользователя
        return Inertia::render('files', [
            'files' => $files,
            'user' => $user
        ]);
    }

    public function destroy(File $file)
    {
        $file->delete();

        return redirect('/');
    }
}
