<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuestionRequest;
use App\Models\Blog;
use App\Models\Lookup;
use App\Models\Question;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $questions=Question::query()->orderBy('id','desc');

        $keywords=$request->input('keywords');
        if($keywords) {
            $questions=$questions->whereHas('user', function ($query) use ($keywords){
                $query->where('name', 'like', '%'.$keywords.'%');
            })->orWhere('title','LIKE','%'.$keywords.'%')->paginate(10)->withQueryString();
        }
        else
            $questions=$questions->paginate(10)->withQueryString();

        return view('admin.question.index',compact('questions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $question=new Question();

        return view('admin.question.create-edit',compact('question'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(QuestionRequest $request)
    {
        $validatedData=$request->validated();
        Question::create($validatedData);

        return redirect(route('admin.question.index'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        return view('admin.question.create-edit',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(QuestionRequest $request, Question $question)
    {
        $validateData= $request->all();

        $question->update($validateData);
        return redirect(route('admin.question.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return back();
    }
}
