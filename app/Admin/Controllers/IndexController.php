<?php
namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;

/**
 * Class IndexController
 * @package App\Admin\Controllers
 */
class IndexController extends Controller
{
    /**
     * IndexController constructor.
     */
    public function __construct()
    {
        $this->middleware('authadmin:admin');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.index');
    }
}