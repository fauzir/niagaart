<?php

namespace App\Http\Controllers\AdminContact;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Session;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $contact = Contact::findOrFail(1);

        return view('admin/contact.contact.index', compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin/contact.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'address' => 'required',
			'phone' => 'required',
			'other_phone' => 'required',
			'email' => 'required',
			'work_hour' => 'required'
		]);
        $requestData = $request->all();

        if(Input::hasFile('side_image')){
          $file = Input::file('side_image');
          $file->move('uploads', $file->getClientOriginalName());
          $requestData['side_image'] = 'uploads/'.$file->getClientOriginalName();
        }

        Contact::create($requestData);

        Session::flash('flash_message', 'Contact added!');

        return redirect('admin/contact');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $contact = Contact::findOrFail($id);

        return view('admin/contact.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $contact_en = Contact::findOrFail(1);
        $contact_id = Contact::findOrFail(2);

        return view('admin/contact.contact.edit', compact('contact_en', 'contact_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
			'address' => 'required',
			'phone' => 'required',
			'other_phone' => 'required',
			'email' => 'required',
			'work_hour' => 'required'
		]);

        if (Input::hasFile('side_image')) {
          $requestData = $request->all();

          $file = Input::file('side_image');
          $file->move('uploads', $file->getClientOriginalName());
          $requestData['side_image'] = 'uploads/'.$file->getClientOriginalName();
        } else {
          $requestData = $request->except('side_image');
        }

        $contact = Contact::findOrFail($id);
        $contact->update($requestData);

        Session::flash('flash_message', 'Contact updated!');

        return redirect('admin/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Contact::destroy($id);

        Session::flash('flash_message', 'Contact deleted!');

        return redirect('admin/contact');
    }
}
