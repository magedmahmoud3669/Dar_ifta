@extends('layout')

@section("mainsection")


    <h2>companies </h2>
    <a class="btn btn-danger" href="{{url("company/create")}}">Add another company</a>
    <table class="table table-striped " border="1px">
        <tr  class="bg-info">
            <th>
               {{ __('messages.id')}}
            </th>
            <th>
                             {{ __('messages.Name')}}

            </th>
            <th>
                  {{ __('messages.email')}}
            </th>
            <th>
                {{ __('messages.logo')}}
            </th>
            <th>
                {{ __('messages.website')}}
            </th>

            <th>
               {{ __('messages.Show')}}
            </th>
            <th>
                {{ __('messages.Edit')}}
            </th>
            <th>
               {{ __('messages.Delete')}}
            </th>
        </tr>

        @foreach($company as $comp )
            <tr>
                <td>
                    {{$comp["id"]}}
                </td>
                <td>
                    {{$comp["Name"]}}
                </td>
                <td>
                    {{$comp["email"]}}
                </td>
                <td>
                    {{$comp["logo"]}}
                </td>
                <td>
                    {{$comp["website"]}}
                </td>
                <td>
                    {{--                                        {{$post["user"]["name"]}}--}}

                    <a  href="{{route("company.show",$comp->id)}}">show</a>

                </td>


                <td>
                    <a class="btn btn-warning" href="{{route("company.edit",$comp->id)}}">Edit</a>

                </td>
                <td>
                    <form action="{{route("company.delete",$comp->id)}}" method="post">
                        @csrf
                        @method("delete")
                        <input type="submit" value="Delete"  class="btn btn-danger" >
                    </form>
                </td>



                </td>
            </tr>
        @endforeach
    </table>



@endsection





