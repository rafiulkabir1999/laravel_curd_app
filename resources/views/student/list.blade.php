<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            width: 1200px;
            margin:0 auto;
            
        }
        li{
            display: flex;
            justify-content: space-around;
            padding:5px;
            margin:5px;border:1px solid gray
        }
    </style>
</head>
<body>
    <ul>
        <a href='student/create' style="background:blue;padding:10px 20px; border:none; width:102px; color:white;border-radious:10px">Create Student</a>
        <li style="background:gray ; color:white">
            <p>Name</p>
            <p>Email</p>
            <p>Address</p>
            <p>id</p>
            <p>Action</p>
        </li>
        
    
        @foreach($data as $item)
        <li>
            <p>{{$item->name}}</p>
            <p>{{$item->email}}</p>
            <p>rafi.eee.1999@gmail.com</p>
            <p>{{$item->address}}</p>
            <div>
                <span style="background: red;color:white; padding:10px">DELETE</span>
                <a href='student/edit/{{$item->s_id}}' style="background: yellow;color:white; padding:10px">Edit</a>
            </div>
        </li>
        @endforeach
        <hr>
    </ul>
</body>
</html>