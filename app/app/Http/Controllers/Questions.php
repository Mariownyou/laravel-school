<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;
use function Illuminate\Events\queueable;

class Questions extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::latest()->get();

        return view('pages.questions.index')->with('questions', $questions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = $request->validate([
            'text' => 'required',
            'email' => 'required'
        ]);

        $email = $request->input('email');
        $text = $request->input('text');
        $question = new Question();
        $question->email = $email;
        $question->text = $text;
        $question->save();

        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question = Question::find($id);
        $questions = Question::all();

        return view('pages.questions.index')->with('question', $question)->with('questions', $questions);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $valid = $request->validate([
            'text' => 'required',
            'email' => 'required'
        ]);

        $email = $request->input('email');
        $text = $request->input('text');
        $question = Question::find($id);
        $question->email = $email;
        $question->text = $text;
        $question->save();

        return redirect()->route('questions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::find($id)->delete();
        return redirect()->route('questions.index');
    }

    public function answer($id)
    {
        $question = Question::find($id);
        return view('pages.questions.answer')->with('question', $question)->with('q_id', $id);
    }

    public function answer_store(Request $request, $id)
    {
        $valid = $request->validate([
            'text' => 'required',
        ]);

        $text = $request->input('text');
        $question = Question::find($id);

        $answer = new Answer();
        $answer->text = $text;
        $answer->question_id = $id;
        $answer->save();

        $question->answered = true;
        $question->save();
//        $question->answer->attach($answer->id);

        return redirect()->route('questions.index');
    }

    public function answer_update()
    {

    }
}
