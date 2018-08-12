<?php
namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('authadmin:admin');
    }

    public function index()
    {
        return view('admin.index');
    }
}