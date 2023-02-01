<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Question;
class EditQuestionController extends Controller
{
    public function getEdit() {
        $question = Question::find(1);
        return view('backend.question.edit_question',['breadcrumb'=>'Chỉnh sửa câu hỏi']
        , compact('question'));
    }

    public function updateQuestion(Request $request){
        $question = Question::find(1);
        $data = $request->all();
        $question->update($data);
        return back()->with('success', 'Chỉnh sửa thành công!!!');
    }
}
