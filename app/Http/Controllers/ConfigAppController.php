<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConfigAppModel;
use Validator;

class ConfigAppController extends Controller
{
    private $configApp;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->configApp = new ConfigAppModel;
    }

    
    /**
     * edit the config app
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function edit(Request $request)
    {
        $config = $this->getConfig();

        echo "<pre>"; var_dump($config); echo "</pre>";
    }

    /**
     * store the config app
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $rules = [
            'app_name' => 'required',
            'title' => 'required',
            'description' => 'required'
        ];

        $messages = [
            'app_name.required' => 'You should enter the app name',
            'title.required' => 'You should enter the title for app',
            'description.required' => 'You should enter the description for app'
        ];

        $validator = Validator::make( $request->all(), $rules, $messages);
        if (count($validator->getMessageBag()->toArray()) > 0 ){
            $errors = $validator->getMessageBag()->toArray();
            return back()
                ->with('errors', $validator->getMessageBag()->toArray());

        }

        try {

            \DB::beginTransaction();
            $app_name  = $this->configApp::where('field','app_name')->first();
            $app_name->update([
                'field' => 'app_name',
                'value' => $request->app_name
            ]);
            $title  = $this->configApp::where('field','title')->first();
            $title->update([
                'field' => 'title',
                'value' => $request->title
            ]);
            $description  = $this->configApp::where('field','description')->first();
            $description->update([
                'field' => 'description',
                'value' => $request->description
            ]);

            \DB::commit();

        } catch(\Exception $e) {

            \DB::rollback();
            \Log::debug($e->getMessage());

            return back()
                ->with('errors', [ 0 => [ 'Failed to save Configuration App' ] ]);
        }

        return redirect('/');
    }


    public function getConfig(){
        $config_temp = $this->configApp::all();
        $config = [];
        foreach ($config_temp as $c) {
            $config[$c->field] = $c->value;
        }

        return  $config;
    }
}
