<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactModel;
use Validator;

class ContactController extends Controller
{
    private $contactModel;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->contact = new ContactModel;
    }

    /**
     * Show the contact
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $date = new \DateTime();
        $date = $date->format('Y-m-d H:i:s');

        $rules = [
            'name' => 'required',
            'email' => 'required',
            'message' => 'required'
        ];

        $messages = [
            'name.required' => 'You should enter the full name',
            'email.required' => 'You should enter your valid email',
            'message.required' => 'You should enter the message'
        ];

        $validator = Validator::make( $request->all(), $rules, $messages);
        if (count($validator->getMessageBag()->toArray()) > 0 ){
            $errors = $validator->getMessageBag()->toArray();
            return back()
                ->with('errors', $validator->getMessageBag()->toArray());

        }

      
        try {

            \DB::beginTransaction();
            
            $this->contact->fullname = $request->name;
            $this->contact->email = $request->email;
            $this->contact->phone = (trim($request->phone) != "" ? $request->phone: null );
            $this->contact->message = $request->message;
            $this->contact->created_at = $date;
            $this->contact->save();

            \DB::commit();

        } catch(\Exception $e) {

            \DB::rollback();
            \Log::debug($e->getMessage());

            return back()
                ->with('errors', [ 0 => [ 'Failed to save contact message' ] ]);
        }

        return redirect('/');
        return back()
            ->with('success', ['Contact message successfully savede']);
    }

    /**
     * List of Contact
     *
     */
    public function getist(){

        return $this->contact->all();
    }
}
