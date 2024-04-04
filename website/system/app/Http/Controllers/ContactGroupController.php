<?php

namespace App\Http\Controllers;

use App\Contact;
use App\ContactGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactGroupController extends Controller
{

    public function index()
    {
        $contactGroups = ContactGroup::latest()->get();
        return view('user.backend.Group.index', compact('contactGroups'));
    }

    public function create()
    {
        $contacts = Contact::latest()->get();
        return view('user.backend.Group.create', compact('contacts'));
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name'  =>  'required  |   unique:contact_groups,name',
            'contacts'  => 'required | array',
            'contacts.*'    =>  'numeric | exists:contacts,id',
        ]);
        $store = ContactGroup::create($request->all());
        $store->Contact()->sync($request->input('contacts'), []);
        return redirect()->back();
    }

    public function show(ContactGroup $contactGroup)
    {
        //
    }

    public function edit($id)
    {
        $contactGroup = ContactGroup::find($id);
        $contacts = Contact::latest()->get();
        return view('user.backend.Group.edit', compact('contactGroup','contacts'));
    }

    public function update(Request $request, $id): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'name'  =>  'required  |   unique:contact_groups,name,'.$request->name.',name',
            'contacts'  => 'required | array',
            'contacts.*'    =>  'numeric | exists:contacts,id',
        ]);
        $contactGroup = ContactGroup::find($id);
        $contactGroup->update($request->all());
        $contactGroup->Contact()->sync($request->input('contacts'), []);
        return redirect()->back();
    }

    public function destroy(ContactGroup $contactGroup): \Illuminate\Http\RedirectResponse
    {
        try {
            $contactGroup->delete();
        } catch (\Exception $e) {
            Log::alert('Could not delete Contact Group because of'. $e);
        }
        return redirect()->back();
    }
}
