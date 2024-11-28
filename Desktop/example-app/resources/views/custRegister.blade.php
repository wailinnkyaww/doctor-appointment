<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Testing Form</h2>
    <form action="{{ route('pp')}}" method="post">
        @csrf
        <button>Test Your App</button> <br> <br>
        Name : <input type="text" name="userName"> 
        Age  : <input type="number" name="userAge">
        Address : <input type="text" name="userAddress">
        Gender:
        <select name="userGender" id="">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
        <input type="submit" value="Save Info">
    </form>
</body>
</html>