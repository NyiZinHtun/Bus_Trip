<!DOCTYPE html>
<html>
<head>
 <title>Laravel Send Email Example</title>
</head>
<body>
        <h1>Bus Information</h1>
        <p>Name : {{ $customer->name }}</p><br>
        <p>Email : {{ $customer->email }}</p><br>
        <p>Phone : {{ $customer->phone }}</p><br>
        <p>Route Name : {{ $customer->home->route_id }}</p>
        <p>Thank you</p>
 
</body>
</html> 