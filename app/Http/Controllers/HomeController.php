<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfigAppModel;

class HomeController extends Controller
{
    private $configApp;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->configApp = new ConfigAppModel;
    }

    /**
     * Show the home
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $app_name = $this->configApp::where('field', 'app_name')->first();
        $title = $this->configApp::where('field', 'title')->first();
        $description = $this->configApp::where('field', 'description')->first();

        return view('home')
            ->with('app_name', $app_name->value)
            ->with('title', $title->value)
            ->with('description', $description->value);
    }
}
