@extends('layout')

@section("mainsection")


    <h2>employe </h2>

    <table class="table table-striped " border="1px">
        <tr  class="bg-info">
            <th>
                id
            </th>
            <th>
                First name
            </th>
            <th>
                last name
            </th>
            <th>
                company
            </th>
            <th>
                email
            </th>
            <th>
            phone number
            </th>
            <th>
                Show
            </th>

        </tr>

        @foreach($employe as $empl )
            <tr>
                <td>
                    {{$empl["id"]}}
                </td>
                <td>
                    {{$empl["Firstname"]}}
                </td>
                <td>
                    {{$empl["lastname"]}}
                </td>
                <td>
                    {{$empl["Company"]}}
                </td>
                <td>
                    {{$empl["email"]}}
                </td>
                <td>
                    {{$empl["phonenumber"]}}
                </td>

                <td>
                    {{--                                        {{$post["user"]["name"]}}--}}

                    <a  href="{{route("employe.show",$empl->id)}}">show</a>

                </td>







            </tr>
        @endforeach
    </table>



@endsection





