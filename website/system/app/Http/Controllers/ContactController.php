<?php namespace 

App\Http\Controllers; 
use Illuminate\Http\Request; 
use App\Contact; 
use Mail; 

class ContactController extends Controller { 
   
      public function getContact() { 

       return view('contact_us'); 
     } 

      public function saveContact(Request $request) { 

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone_number' => 'required',
            'message' => 'required',
            'date' => 'required'
        ]);

        $contact = new contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;
        $contact->date = $request->date;

        $contact->save();
        
        return back()->with('success', 'Thank you for contact us! We will Contact Back soon!!');

    }

 public function index()
    {
       $contact = contact::all();
        return view('user.backend.Contact.index', compact('contact'));
    }

    public function create()
    {
        return view('user.backend.Contact.create');
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'full_name' =>  'nullable',
            'phone' =>  'required | numeric | unique:contacts,phone'
        ]);
        $store = Contact::create($request->all());
        return redirect()->back();
    }

    public function show(Contact $contact)
    {
        //
    }

    public function edit(Contact $contact)
    {
        return view('user.backend.Contact.edit', compact('contact'));

    }

    public function update(Request $request, Contact $contact): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'full_name' =>  'nullable',
            'phone' =>  'required | numeric'
        ]);
        $contact->update($request->all());
        return redirect()->back();
    }

    public function destroy(Contact $contact): \Illuminate\Http\RedirectResponse
    {
        try {
            $contact->delete();
        } catch (\Exception $e) {
            Log::alert('Could not delete contact because of'. $e);
        }
        return redirect()->back();

    }

    
}