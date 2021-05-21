@extends('layout')


@section('mainsection')
    <h1> Add new post </h1>
    <form action={{route('company.store')}} method="Post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control"  name="Name" id="title" aria-describedby="std_nameHelp">
            <label class="text-danger"> {{$errors->first("Name")}}</label>
        </div>
        <div class="form-group">
            <label for="name">email</label>
            <input type="text" class="form-control"  name="email" id="title" aria-describedby="std_nameHelp">
            <label class="text-danger"> {{$errors->first("email")}}</label>
        </div>
        <div class="form-group">
            <label for="name">logo</label>
            <input type="file" class="form-control"  name="photo" multiple>
            <label class="text-danger"> {{$errors->first("photo")}}</label>
        </div>
        <div class="form-group">
            <label for="name">website</label>
            <input type="text" class="form-control"  name="website" id="title" aria-describedby="std_nameHelp">
            <label class="text-danger"> {{$errors->first("website")}}</label>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
