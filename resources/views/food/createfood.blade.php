<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <div class="form">
        <form action="/dashboard" method="post" enctype="multipart/form-data">
            @csrf
            <label for="">Name</label>
            <div>
                <input type="text" name="name" placeholder="Name*" id="">
            </div>

            <label for="">Price</label>
            <div>
                <input type="text" name="price" placeholder="Price*" id="">
            </div>

            <label for="">Status</label>
            <div>
                <select name="status" id="">
                    <option value="active">Active</option>
                    <option value="inactive">Inactive</option>
                </select>
            </div>

            <label for="">Category</label>
            <div>
                <select name="category_id" id="">

                    @foreach( $categories as $category )
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                    
                </select>
            </div>
            <label for="">Image:</label>
            <div>
                <input type="file" name="image_path" id="">
            </div>

            <div>
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>