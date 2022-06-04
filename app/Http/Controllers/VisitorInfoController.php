<?php


namespace App\Http\Controllers;
use App\Visitor;
use Illuminate\Http\Request;
use Session;

class VisitorInfoController extends Controller
{
    public function visitorSignup()
    {
        return view('visitor-info.visitor-signup');
    }

    public function visitorLogin()
    {
        return view('visitor-info.visitor-login');
    }

//
    public function visitorRemember(Request $request)
    {
        $checkEmail = Visitor::where('visitor_email', '=', $request->visitor_email)->first();
        if ($checkEmail) {

            if (password_verify($request->visitor_password, $checkEmail->visitor_password)) {
                Session::put('visitorID', $checkEmail->id);
                Session::put('vaisitorName', $checkEmail->visitor_name);
                Session::put('visitorEmail', $checkEmail->visitor_email);
                return redirect('/');
            }
            return back()->with('message', 'Password Error!!!');
        } else {
            return back()->with('message', 'Email error!!!');
        }

    }

    public function visitorSave(Request $request)
    {
        if ($request->visitor_password == $request->confirm_password) {
            $encryptPass = bcrypt($request->visitor_password);
            $image = $request->file('visitor_image');
            $imageName = $image->getClientOriginalName();
            $directory = 'visitor_image';
            $path = $image->move($directory, $imageName);
            Visitor::visitorinfoSave($request, $path, $encryptPass);
            return back();
        }
//        return $request->all();
    }

    public function visitorView()
    {
        return view('visitor-info.visitor-view', [
            'visitors' => Visitor::orderBy('id', 'desc')->get(),
            'total_visitors' => count(Visitor::orderBy('id', 'desc')->get())
        ]);
    }


    public function visitorEdit($id)
    {
        return view('visitor-info.visitor-edit', [
            'visitor' => Visitor::find($id),
        ]);

    }

    public function visitorDelete(Request $request)
    {
        $delete_visitor = Visitor::find($request->id);
        if ($delete_visitor) {
            unlink($delete_visitor->visitor_image);

            $delete_visitor->delete();
            return redirect('/visitor-view')->with('message', 'delete Info');

        }
    }

    public function visitorSignout(Request $request)
    {
        Session::forget('visitorID');
        Session::forget('visitorName');
        Session::forget('visitorEmail');
        return redirect('/');
    }

    public function visitorUpdate(Request $request)
    {
        $updatevisiter=Visitor::find($request->id);
        if($request->file('visitor_image')){
            unlink($updatevisiter->visitor_image);
            $image=$request->file('visitor_image');
            $imageName=$image->getClientOriginalName();
            $directory='visitor_image';
            $path=$image->move($directory,$imageName);
            $updatevisiter->visitor_name=$request->visitor_name;
            $updatevisiter->visitor_email=$request->visitor_email;
//           $updatevisiter->visitor_password=$request->visitor_password;
            $updatevisiter->visitor_contact=$request->visitor_contact;
            $updatevisiter->save();

        }
        else{
            $updatevisiter->visitor_name=$request->visitor_name;
            $updatevisiter->visitor_email=$request->visitor_email;
//           $updatevisiter->visitor_password=$request->visitor_password;
            $updatevisiter->visitor_contact=$request->visitor_contact;
            $updatevisiter->save();
        }
        return redirect('/visitor-view')->with('message','Update Info');
    }


}
