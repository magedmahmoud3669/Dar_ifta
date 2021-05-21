@extends('layout')


@section('mainsection')
    <h1> Edit company  {{$company->id}} </h1>
    <form action="{{route("company.update",$company->id)}}" method="post" enctype="multipart/form-data">
        @csrf


        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" value="{{$company['Name']}}" class="form-control"
                   name="Name" id="post_title" aria-describedby="titleHelp">
            <label class="text-danger"> {{$errors->first("Name")}}</label>
        </div>
        <div class="form-group">
            <label for="name">email</label>
            <input type="text" value="{{$company['email']}}" class="form-control"
                   name="email" id="post_title" aria-describedby="titleHelp">
{{--            <label class="text-danger"> {{$errors->first("Name")}}</label>--}}
        </div>
        <div class="form-group">
            <label for="name">logo</label>
            <input type="file" value="{{$company['logo']}}" class="form-control"
                   name="photo" id="post_title" aria-describedby="titleHelp">
            <label class="text-danger"> {{$errors->first("logo")}}</label>
        </div>
        <div class="form-group">
            <label for="name">website</label>
            <input type="text" value="{{$company['website']}}" class="form-control"
                   name="website" id="post_title" aria-describedby="titleHelp">
            <label class="text-danger"> {{$errors->first("website")}}</label>
        </div>



        <button type="submit"  class="btn btn-success">Submit</button>
        <a class="btn btn-primary" href="{{route("company.index")}}">Back</a>

    </form>

@endsection
