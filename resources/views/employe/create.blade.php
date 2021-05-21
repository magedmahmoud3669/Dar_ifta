@extends('layout')


@section('mainsection')
    <h1> Add new post </h1>
    <form action={{route('employe.store')}} method="Post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">First name</label>
            <input type="text" class="form-control"  name="Firstname" id="title" >
            <label class="text-danger"> {{$errors->first("Firstname")}}</label>
        </div>
        <div class="form-group">
            <label for="name">last name</label>
            <input type="text" class="form-control"  name="lastname" id="title" >
            <label class="text-danger"> {{$errors->first("lastname")}}</label>
        </div>
        <div class="form-group">
            <label for="name">Company</label>
            <input type="text" class="form-control"  name="Company" id="title" aria-describedby="std_nameHelp">
            <label class="text-danger"> {{$errors->first("Company")}}</label>
        </div>
        <div class="form-group">
            <label for="name">email</label>
            <input type="text" class="form-control"  name="email" id="title" aria-describedby="std_nameHelp">
            <label class="text-danger"> {{$errors->first("email")}}</label>
        </div>

        <div class="form-group">
            <label for="name">phone number</label>
            <input type="text" class="form-control"  name="phonenumberr" id="title" aria-describedby="std_nameHelp">
            <label class="text-danger"> {{$errors->first("phonenumber")}}</label>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
