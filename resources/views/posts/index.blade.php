<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('bootstrap/bootstrap.min.css') }}" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .blog {
            padding: 5px;
            x border-bottom: 1px solid lightgray;
        }

        small {
            color: gray;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>HALOO BLOGGER</h1>
        @foreach ($posts as $post)
        <div class="card mb-3">
            <div class="card-body">
                    @php($post = explode(",", $post))
                    <h5 class="card-title">{{ $post[0] }}</h5>
                    <p class="card-text">{{ $post[0] }}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated at {{ date("d M Y H:i", strtotime($post[0]))}}</small></p>

                    <a href="{{ url("posts/{$post[0]}") }}" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
        @endforeach
    </div>


    <script src="{{ asset('bootstrap/bootstrap.bundle.min.js')}}"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>
