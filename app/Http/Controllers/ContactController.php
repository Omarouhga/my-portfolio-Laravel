<?php 
 
namespace App\Http\Controllers;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Http\Response;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;
 
class ContactController extends Controller
{
   
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'message' => 'required'
        ]);

        Mail::to('omarouhga12@gmail.com')
            ->send(new ContactMail($validated['name'], $validated['email'], $validated['message']));

        return $request->all();
    }
   
}