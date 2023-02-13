<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CommentController extends Controller
{
    public function comment(Request $request){
        $validator = Validator::make($request->all(), [
            'body' => 'required',
            'model'=>'required',
            'object_id'=>'required'
        ]);

        if ($validator->fails()) {
            return json_encode(['status'=>false,'message'=>'فرمت اطلاعاتی درخواست ارسالی به سرور صحیح نمی باشد.']);
        }




        $validatedData = $validator->validated();
        $validatedData['user_id']=auth()->user()->id;

        Comment::create($validatedData);

        return json_encode(['status'=>true,'message'=>'نطر با موفقیت ثبت گردید.']);
    }
}
