@extends('layouts.master')
@section('content')

<div class="container">
<h1>Members List</h1>


<br>

    <!-- Modal HTML embedded directly into document -->
    <div id="ex1" class="modal">
        <table border="1">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Adress</td>
            </tr>
            <tr>
            @foreach($members as $member)
                <tr>
                    <td>{{$member->id}}</td>
                    <td>{{$member->name}}</td>
                    <td>{{$member->email}}</td>
                    <td>{{$member->adress}}</td>
                </tr>
            @endforeach
        </table>

        <a href="#" rel="modal:close">Close</a>
    </div>

    <!-- Link to open the modal -->
    <p><a href="#ex1" rel="modal:open">Open Modal</a></p>

</div>
@endsection
@section('scripts')

@endsection
