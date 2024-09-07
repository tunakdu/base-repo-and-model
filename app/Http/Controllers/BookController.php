<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Http\Request;

class BookController extends Controller
{
    protected $bookRepository;

    public function __construct(BookRepository $bookRepository)
    {
        $this->bookRepository = $bookRepository;
    }

    public function index()
    {
        return $this->bookRepository->all();
    }

    public function create()
    {
        // HTML Formu oluşturmak için kullanılıyor.
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
        ]);

        return $this->bookRepository->create($validatedData);
    }

    public function show(string $id)
    {
        return $this->bookRepository->find($id);
    }

    public function edit(string $id)
    {
        // Düzenleme formunu göstermek için kullanılabilir.
    }

    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
        ]);

        return $this->bookRepository->update($id, $validatedData);
    }

    public function destroy(string $id)
    {
        $this->bookRepository->delete($id);
        return response()->json(['message' => 'Book deleted successfully']);
    }
}
