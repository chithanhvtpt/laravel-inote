<?php

namespace App\Repositories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

;


class NoteRepository extends BaseRepository
{
    public function __construct(Note $note)
    {
        parent::__construct($note);
    }

    public function create(Request $request)
    {
        $data = $request->only("title", "content", "date", "category_id");
        return Note::query()->create($data);
    }

    public function edit(Request $request, $id)
    {
        Note::query()->findOrFail($id);
        $data = $request->only("title", "content", "date", "category_id");
        return Note::query()->where("id","=", $id)->update($data);
    }

}
