<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <table>
        <tr>
            <th>id</th>
            <th>Name</th>
        </tr>

        @foreach($categories as $category)
        <tr>
            <th>{{ $loop->iteration }}</th>
            <td>{{ $category->name }}</td>
            <td>
                <a href="/category/{{ $category->id }}/edit"><button>Edit</button></a>

                <form action="/category/{{ $category->id }}" method="post">
                    @csrf
                    @method('delete')

                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        
    </table>

    <div class="button">
        <a href="/category/create"><button>Create</button></a>
    </div>
</body>
</html>