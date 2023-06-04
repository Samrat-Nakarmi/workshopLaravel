<!DOCTYPE html>
<html lang="en">
<head>
    
</head>
<body>
    <div class="form">
        <form action="/category" method="post">
            @csrf

            <label for="">Category</label>
            <div>
                <input type="text" name="name" id="">
            </div>
            
            <div class="button">
                <button type="submit">Create</button>
            </div>
        </form>
    </div>
</body>
</html>