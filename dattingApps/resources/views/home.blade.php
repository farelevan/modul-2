<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datting App</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .user-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .user-card p {
            margin: 0;
        }

        .like-button, .dislike-button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
        }

        .dislike-button {
            background-color: #f44336;
        }

    </style>
</head>
<body>

    <h1>Welcome to Datting App</h1>

    @foreach($users as $user)
        <div class="user-card" style="{{ $user->disliked ? 'display:none;' : '' }}">
            <p><strong>Name:</strong> {{ $user->name }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
            
            <form action="{{ route('like', $user->id) }}" method="post">
                @csrf
                <button class="like-button" type="submit" name="action" value="like">Like</button>
            </form>
            
            <form action="{{ route('like', $user->id) }}" method="post">
                @csrf
                <button class="dislike-button" type="submit" name="action" value="dislike">Dislike</button>
            </form>

            <hr>
        </div>
    @endforeach

    <div style="text-align: center; margin-top: 20px;">
        <form action="{{ route('logout') }}" method="post">
            @csrf
        </form>

    </div>

</body>
</html>
