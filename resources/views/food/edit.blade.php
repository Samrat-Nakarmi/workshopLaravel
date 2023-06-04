<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <div class="form">
        <form action="/dashboard/{{$food->id}}" method="post">
            @csrf
            @method('PUT')
            <label for="">Name</label>
            <div>
                <input type="text" name="name" placeholder="Name*" value="{{$food->name}}" id="">
            </div>

            <label for="">Price</label>
            <div>
                <input type="text" name="price" placeholder="Price*" value="{{$food->price}}" id="">
            </div>

            <label for="">Category</label>
            <div>
                <select name="category_id" id="">

                    @foreach( $categories as $category )
                    <option value="{{ $food->catefory_id }}">{{ $category->name }}</option>
                    @endforeach
                    
                </select>
            </div>

            <label for="">Status</label>
            <div>
                <select name="status" id="">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>

            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>