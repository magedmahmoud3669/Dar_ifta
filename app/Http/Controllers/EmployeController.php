<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $employe=Employe::paginate(10);
        return view('employe.index',['employe'=>$employe]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('employe.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            "Firstname"=>"required|min:3",
            "lastname"=>"required|min:3",
        ]);


        $Firstname=request('Firstname');
        $lastname=request('lastname');
        $Company=request('Company');
        $email=request('email');
        $phonenumber=request('phonenumber');

        Employe::create([
            "Firstname"=>$Firstname,
            "lastname"=>$lastname,
            "Company"=>$Company,
            "email"=>$email,
            "phonenumber"=>$phonenumber,

        ]);
        return redirect(route("employe.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $employe = Employe::find($id);

        return view("employe.show",['employe'=>$employe]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employe = Employe::find($id);
        return view('employe.edit',['employe'=>$employe]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
//        $request->validate([
//            "Name"=>"required | min:3",
//
//        ]);
////        $postData = $request->all();
////        $file_name=$this->saveImage($request->photo,'logo');
////
//        $name=request('name');
//        $email=request('email');
//        $photo=request('photo');
//        $website=request('website');
//        Employe::create([
//            "Name"=>$name,
//            "email"=>$email,
//            "logo"=>$photo,
//            "website"=>$website,
//
//        ]);
//
//
//        return redirect(route("employe.index"));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employe= Employe::find($id);
        $employe-> delete();
        return redirect(route("employe.index"));
    }

}
