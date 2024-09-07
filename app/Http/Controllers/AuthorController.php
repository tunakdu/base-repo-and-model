<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Repositories\AuthorRepository;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    protected $authorRepository;

    public function __construct(AuthorRepository $authorRepository)
    {
        $this->authorRepository = $authorRepository;
    }

    public function index()
    {
        return $this->authorRepository->all();
    }

    public function create()
    {
        // HTML Formu oluşturmak için kullanılıyor.
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        return $this->authorRepository->create($validatedData);
    }

    public function show(string $id)
    {
        return $this->authorRepository->find($id);
    }

    public function edit(string $id)
    {
        // Düzenleme formunu göstermek için kullanılabilir.
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        return $this->authorRepository->update($id, $validatedData);
    }

    public function destroy(string $id)
    {
        $this->authorRepository->delete($id);
        return response()->json(['message' => 'Author deleted successfully']);
    }
}
