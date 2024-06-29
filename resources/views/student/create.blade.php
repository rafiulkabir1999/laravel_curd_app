<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        .formbody{
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;

        }
        input{
            padding:6px;
            border:none;
            border-bottom: 1px solid gray;
            font-size: 24px;
        }
        input:focus{
            outline: none;
            border-color: green;
            border-bottom:4px solid green
        }
        label{
            font-weight: bold;
            font-size: 24px;
            color:gray;
        }
    </style>
</head>
<body class="formbody">
    <form action="{{ route('student.store') }}" method="POST">
        
        @csrf
         <div class="">
            <label for="">Name</label>
            <input type="text" name='name' required>
         </div> 
         <div class="">
            <label for="">Email</label>
            <input type="email" required name='email'>
         </div> 
         <div class="">
            <label for="">Phone </label>
            <input type="text" required name='phone'>
         </div> 
         <div class="">
            <label for="">Address</label>
            <input type="text" required name='address'>
         </div> 
         <div class="">
            <label for="">ID</label>
            <input type="text" required name='id'>
         </div> 
         
         <button class="" type='submit' style="padding:10px ; background:blue; padding:10px 20px ; color:white">Save</button>

    </form>
</body>
</html>