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
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $contact = Contact::where('address', 'LIKE', "%$keyword%")
				->orWhere('phone', 'LIKE', "%$keyword%")
				->orWhere('other_phone', 'LIKE', "%$keyword%")
				->orWhere('email', 'LIKE', "%$keyword%")
				->orWhere('work_hour', 'LIKE', "%$keyword%")
				->orWhere('side_image', 'LIKE', "%$keyword%")
				->paginate($perPage);
        } else {
            $contact = Contact::paginate($perPage);
        }

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
        $contact = Contact::findOrFail($id);

        return view('admin/contact.contact.edit', compact('contact'));
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
        $requestData = $request->all();

        $contact = Contact::findOrFail($id);
        $contact->update($requestData);

        Session::flash('flash_message', 'Contact updated!');

        return redirect('admin/contact');
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
