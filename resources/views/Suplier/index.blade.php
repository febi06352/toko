<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Index Page</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <br/>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <p>{{ \Session::get('success') }}</p>
        </div><br/>
    @endif
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Phone Number</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
        <tbody>

        @foreach($Suplier as $Supliers)
            <tr>
                <td>{{$Supliers['id']}}</td>
                <td>{{$Supliers['name']}}</td>
                <td>{{$Supliers['address']}}</td>
                <td>{{$Supliers['phone']}}</td>

                <td><a href="{{action('SuplierController@edit', $Supliers['id'])}}"
                       class="btn btn-warning">Edit</a></td>
                <td>
                    <form action="{{action('SuplierController@destroy', $Supliers['id'])}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>
