<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StatementController;
use App\Models\Statement;

class AdminController extends Controller
{
    public function index(){
        $statements = Statement::all();
        $statuses = Statement::STATUSES;
        return view('admin.index', compact('statuses', 'statements'));
        }

}
