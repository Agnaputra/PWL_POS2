<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LevelModel;
use Monolog\Level;

class LevelController extends Controller
{
    // Menampilkan semua data level
    public function index()
    {
        return LevelModel::all();
    }

    // Menyimpan data level baru
    public function store(Request $request)
    {
        $level = LevelModel::create($request->all());
        return response()->json($level, 201);
    }

    // Menampilkan detail satu level
    public function show(LevelModel $level)
    {
        return LevelModel::find($level);
    }

    // Mengupdate level
    public function update(Request $request, LevelModel $level)
    {
        $level->update($request->all());
        return LevelModel::find($level);
    }

    // Menghapus level
    public function destroy(LevelModel $level)
    {
        $level->delete();
        return response()->json([
            'success' => true,
            'message' => 'Data terhapus',
        ]);
    }
}
