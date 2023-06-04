<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <div class="table">
        <table>
            <tr>
                <th>id</th>
                <td>Username</td>
                <td>Password</td>
                <td>Email</td>
                <td>Phone</td>
            </tr>
            @foreach($users as $user)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $user->username }}</td>
                <td>{{ $user->password  }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->phone }}</td>
                <td>

                    <a href="/users/{{$user->id}}/edit"><button>Edit</button></a>

                    <form action="/users/{{$user->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button>Delete</button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </table>

        <div class="button">
            <a href="/dashboard/create"><button>Create</button></a>
        </div>
    </div>

</body>
</html>