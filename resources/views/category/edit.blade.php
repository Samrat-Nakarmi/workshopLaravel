<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <div class="form">
        <form action="/category/{{ $category->id }}" method="post">
            @csrf
            @method('put')

            <label for="">Category</label>
            <div>
                <input type="text" name="name" value="{{ $category->name }}"" id="">
            </div>
            
            <div class="button">
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
</body>
</html>