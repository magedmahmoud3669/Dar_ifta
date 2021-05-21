<?php

namespace App\Http\Controllers;

use App\Http\Requests\validRequest;
use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $company=Company::paginate(10);
        return view('company.index',['company'=>$company]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store( Request $request)
    {
        //
        $request->validate([
            "Name"=>"required | min:3",

        ]);
        $file_name=$this->saveImage($request->photo,'logo');


        $this->validate($request, [
            "Name"=>"required | min:3",
        ]);
        $Name=request('Name');
        $email=request('email');
        $photo=request('photo');
        $website=request('website');

        Company::create([
            "Name"=>$Name,
            "email"=>$email,
            "logo"=>$photo,
            "website"=>$website,

        ]);

        return redirect(route("company.index"));

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
        $company = Company::find($id);

        return view("company.show",['company'=>$company]);
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
        $company = Company::find($id);
        return view('company.edit',['company'=>$company]);
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

        $request->validate([
            "Name"=>"required | min:3",

        ]);

        $this->validate($request, [
            "Name"=>"required | min:3",
        ]);

        $company = $request->all();
        Company::find($id)->update($company);


        return redirect(route("company.index"));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $company= Company::find($id);
        $company-> delete();
        return redirect(route("company.index"));
    }
    public  function saveImage($photo,$folder){
        $file_extension=$photo->getClientOriginalExtension();
        $file_name=time().'.'.$file_extension;
        $path=$folder;
        $photo->move($path,$file_name);
        return  $file_name;

    }
}
