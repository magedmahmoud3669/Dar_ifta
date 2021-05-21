@extends('layout')


@section('mainsection')
    <h1>  company details </h1>

    <table class="table table-bordered">


        <tr>
            <th >name</th>
            <td> {{$company["Name"]}} </td>
        </tr>

        <tr>
            <th >email</th>
            <td>  {{$company["email"]}}</td>
        </tr>

        <tr>
            <th >website</th>
            <td>  {{$company["website"]}}</td>
        </tr>

        <tr>
            <th > Created at</th>
            <td> {{$company["created_at"]}}  </td>
        </tr>
        <tr>
            <th>Updated at </th>
            <td> {{$company["updated_at"]}} </td>
        </tr>

    </table>
    <a class="btn btn-info" href="{{route("company.index")}}">Back</a>



@endsection
