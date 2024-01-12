<?php

namespace App\Http\Controllers;

use App\Models\Statement;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class StatementController extends Controller
{
    private ?\Illuminate\Contracts\Auth\Authenticatable $user;

    /**
     * Display a listing of the resource.
     * @param $id
     */
    public function index()
    {
        $id = '';
//        $user = User::user()->find($id);
        $statuses = Statement::STATUSES;
        $statements = Statement::all();
//        $statements = Statement::where('id' , '=', auth()->user()->id)->findOrFail($id);
        return view('statement.index', compact(['statements' => 'statements', 'statuses']));
//        dd($statements);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return  view('statement.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    protected function validator(array $data)
    {

    }

    public function store(Request $request)
    {
       request() -> validate ([
        'number_auto'=> 'required|max:6',
        'description_trespassing' => 'required|max:25'
    ]);

        Statement::create([
            'user_id' => Auth::id(),
            'number_auto' => $request['number_auto'],
            'description_trespassing' => $request['description_trespassing'],

            ]);
//       $data = \request([
//          'user_id' =>  [Auth::id()],
//           'number_auto' => ['number_auto'],
//           'description_trespassing' => ['description_trespassing']
//       ]);
        return redirect()->route('statements');
//        dd(
//            \auth()->id() ?? '?',
//            Auth::id() ?? '?',
//            $request->user()->id ?? '?',
//            \auth()->check(),
//            get_class(auth()->guard())
//        );
    }
//\auth()->id() ?? '?',
//Auth::id() ?? '?',
//$request->user()->id ?? '?',
//\auth()->check(),
//get_class(auth()->guard())
    /**
     * Display the specified resource.
     */
    public function show(Statement $statement)
    {
        $statuses = Statement::STATUSES;
        return view('admin.show', compact('statement', 'statuses'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statement $statement)
    {
        $statuses = Statement::STATUSES;
        return view('admin.edit', compact('statement', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Statement $statement)
    {
        $statuses = Statement::STATUSES;

       $data = request()->validate([
           'name' => 'string',
           'lastname' => 'string',
           'surname' => 'string',
           'login' => 'string|max:20',
           'status' => 'required'
               ]);
       $statement->update($data);
       return redirect()->route('admin.index', compact('statuses'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }




}
