<?php namespace App\Http\Controllers;

use App\Answer;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Question;
use App\Http\Requests\CreateQuestionRequest;
use App\Http\Requests\EditQuestionRequest;
use Illuminate\Contracts\Auth\Guard;
use Request;
use Illuminate\Pagination\Paginator;

class QuestionsController extends Controller {

    private $pg_data = array();

    public function __construct() {
        $this->middleware('auth', ['except' => ['index','show']]);
    }

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        //this will eventually change to be the latest
        //questions that have been answered
      Question::paginate(3);
        $this->pg_data["questions"] = Question::latest()->get();
        return view('questions.showw',$this->pg_data);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('questions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(CreateQuestionRequest $request, Guard $guard)
	{
		$question = new Question($request->all());
        $question->startValues();

         $question['user_id'] = $guard->id();
        $question->save();

        return redirect('/questions/' . $question->id);
         $qui = new Question($request->input()) ;
     // $image2 = new Image($request->input()) ;
         if($file = $request->hasFile('image')) {
            
            $file = $request->file('image') ;
            
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/image/' ;
            $file->move($destinationPath,$fileName);
            $qui->product_image = $fileName ;
           
       
        }
        $qui->save();
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Question $question, Guard $guard)
	{
        if($guard->id() != $question->user->id) {
            $question['views'] = $question['views'] + 1;
            $question->update();
        }

        $this->pg_data['question'] = $question;

        //i feel there is a better way to do this
        if($question->answers->where('is_solution', 1)->count() > 0) {
            $this->pg_data['solution'] = $question->answers->where('is_solution', 1)->first();
        }else {
            $this->pg_data['solution'] = null;
        }

        return view('questions.show', $this->pg_data);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit(Question $question)
	{
		$this->pg_data['question'] = $question;
        return view('questions.edit',$this->pg_data);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Question $question, EditQuestionRequest $request)
	{
		$question['topic'] = $request['topic'];
        $question['title'] = $request['title'];
        $question['question'] = $request['question'];
        $question->update();

        return redirect('/questions/' . $question->id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function destroy(Question $question)
	{

		//
	}

    /**
     * @param Question $question
     * @param Answer $answer
     *
     */
    public function solved(Question $question, Answer $answer) {
        $question['is_solved'] = 1;
        $question->update();
        $answer['is_solution'] = 1;
        $answer->update();

        return redirect('/questions/' . $question->id);
    }

}
