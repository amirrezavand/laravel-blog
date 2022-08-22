<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Validator;

class ContactFormController extends Controller
{
    public function contactUs(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:100',
            'cell' => 'required|max:100',
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        if ($validator->fails()) {
            return json_encode(['status'=>false,'message'=>'فرمت اطلاعاتی درخواست ارسالی به سرور صحیح نمی باشد.']);
        }

        $validatedData = $validator->validated();
        $validatedData['type']='contact_us';

        ContactForm::create($validatedData);

        return json_encode(['status'=>true,'message'=>'درخواست با موفقیت ثبت گردید.']);
    }
}
