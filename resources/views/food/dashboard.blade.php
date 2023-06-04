<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <div class="table">
        <table>
            <tr>
                <th>id</th>
                <td>Name</td>
                <td>Price</td>
                <td>Category</td>
                <td>Status</td>
            </tr>
            @foreach($foods as $food)
            <tr>
                <th>{{ $loop->iteration }}</th>
                <td>{{ $food->name }}</td>
                <td>{{ $food->price  }}</td>
                <td><img src="{{'/'.$food->image_path}}" height="50px" width="50px" alt=""></td>
                <td>{{ $food->category->name }}</td>
                <td>{{ $food->status }}</td>
                <td>

                    <a href="/dashboard/{{$food->id}}/edit"><button>Edit</button></a>

                    <form action="/dashboard/{{$food->id}}" method="POST">
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