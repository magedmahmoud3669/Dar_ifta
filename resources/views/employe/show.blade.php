@extends('layout')


@section('mainsection')
    <h1>  employe details </h1>

    <table class="table table-bordered">


        <tr>
            <th >firstname</th>
            <td> {{$employe["Firstname"]}} </td>
        </tr>

        <tr>
            <th >lastname</th>
            <td>  {{$employe["lastname"]}}</td>
        </tr>

        <tr>
            <th >company</th>
            <td>  {{$employe["Company"]}}</td>
        </tr>
        <tr>
            <th >email</th>
            <td>  {{$employe["email"]}}</td>
        </tr>
        <tr>
            <th >phonenumber</th>
            <td>  {{$employe["phonenumber"]}}</td>
        </tr>

        <tr>
            <th > Created at</th>
            <td> {{$employe["created_at"]}} </td>
        </tr>
        <tr>
            <th>Updated at </th>
            <td> {{$employe["updated_at"]}}</td>
        </tr>

    </table>
    <a class="btn btn-info" href="{{route("employe.index")}}">Back</a>



@endsection
