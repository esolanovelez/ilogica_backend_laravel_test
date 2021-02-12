<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ConfigAppController;
use App\Http\Controllers\ContactController;

class DashboardController extends Controller
{
    private $configApp;
    private $contacts;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->configApp = new ConfigAppController;
        $this->contacts = new ContactController;
    }

    /**
     * Show the home
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $config = $this->configApp->getConfig();
        $ist_contacts = $this->contacts->getist();

        return view('dashboard')
            ->with('app_name', $config['app_name'])
            ->with('title', $config['title'])
            ->with('description', $config['description'])
            ->with('list_contacts', $ist_contacts);
    }
}
