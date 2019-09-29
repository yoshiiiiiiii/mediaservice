<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Content;


class AdminController extends Controller
{
    // 1ページ当たりの表示件数
    const NUM_PER_PAGE = 10;

    protected $content;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $list = Content::paginate(10);
        //$list = Content::getContentList(self::NUM_PER_PAGE);
        return view('admin', ['list' => $list]);
        //return view('admin');
    }


}
