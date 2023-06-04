<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="{{asset('css/register.css')}}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div class="main">
        <div class="contact pt-12 pb-14">
            <h1 class="text-6xl text-center font-bold">Register</h1>

            <div class="con-form mt-24">
                <div class="form">
                    <form action="/register" method="post">
                        @csrf
                        <div>
                            <input type="text" placeholder="Username*" name="username" id="" required/>
                        </div>
                        <div>
                            <input type="password" name="password" placeholder="Password*" id="">
                        </div>
                        <div>
                            <input type="email" placeholder="Email*" name="email" id="" required/>
                        </div>
                        <div>
                            <input type="text" placeholder="Phone*" name="phone" id=""/>
                        </div>
                        <div>

                        </div>

                        <div class="button mt-12">
                            <button type="submit">Register</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</body>
</html>