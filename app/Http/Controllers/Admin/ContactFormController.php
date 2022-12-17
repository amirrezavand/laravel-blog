<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use App\Models\User;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $forms=ContactForm::query()->orderBy('id','desc');

        $keywords=$request->input('keywords');
        if($keywords) {
            $forms=$forms->where('name','LIKE','%'.$keywords.'%')
                ->orWhere('title','LIKE','%'.$keywords.'%')
                ->orWhere('body','LIKE','%'.$keywords.'%')
                ->paginate(10)->withQueryString();
        }
        else
            $forms=$forms->paginate(10)->withQueryString();

        return view('admin.contact_form.index',compact('forms'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactForm $contactForm)
    {
        $contactForm->delete();
        return redirect(route('admin.contact_form.index'));
    }
}
