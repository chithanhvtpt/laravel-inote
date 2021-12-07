<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Note;
use App\Repositories\NoteRepository;
use Illuminate\Http\Request;

class NoteController extends Controller
{
    protected $noteRepository;
    public function __construct(NoteRepository $noteRepository)
    {
        $this->noteRepository = $noteRepository;
    }

    public function index()
    {
        $notes = $this->noteRepository->getAll();
        $categories = Category::all();
        return view("frontend.note", compact("notes","categories"));
    }

    public function showFormCreate()
    {
        $categories = Category::all();
        return view("frontend.note", compact("categories"));
    }

    public function create(Request $request)
    {
        $note = $this->noteRepository->create($request);
        $note["category"] = $note->category->name;
        return response()->json($note, 200);
    }

    public function delete($id)
    {
        $this->noteRepository->delete($id);
        return response()->json([
            'status' => 202,
            'message' => 202 ? 'Category Deleted' : 'Error Deleting Category'
        ]);
    }

    public function showFormEdit($id)
    {
        $categories = Category::all();
        $note = $this->noteRepository->getById($id);
        return view("backend.note.edit", compact("note", "categories"));
    }

    public function edit(Request $request, $id)
    {
        $note = $this->noteRepository->edit($request, $id);
        return response()->json($note);
//        return redirect()->route("notes.edit");
    }

    public function detail($id)
    {
        $notes = $this->noteRepository->getById($id);
        return view("backend.note.detail", compact("notes"));
    }

    public function searchAjax()
    {
        $notes = $this->noteRepository->getAll();
        return response()->json($notes);
    }
}
