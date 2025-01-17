<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML Forms with Query Builder</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container py-5">
        <table class="table table-border text-center">
            <h2 class="text-center fw-bold text-uppercase">All User List</h2>
            <a href="/add-user" class="btn btn-primary btn-sm mb-4">Add New</a>
            <tr class="bg-secondary text-light">
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th colspan="3">Operation</th>
            </tr>
            @foreach ($data as $user)
            <tbody>
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->address}}</td>
                    <td>
                        <a href="{{route('view.name', $user->id)}}" class="btn text-primary"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{route('delete.user', $user->id)}}" class="btn text-danger"><i class="fa-solid fa-trash"></i></a>
                        <a href="{{ route('update.page', $user->id) }}" class="btn text-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    </td>
                </tr>
            </tbody>
            @endforeach
            
        </table>
        <div class="mt-5">
            {{ $data->links('pagination::bootstrap-5') }}
        </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>