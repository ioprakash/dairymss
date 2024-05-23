<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single User Details</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div>
        <h1>Single User details</h1>
        <table class="table-auto border-collapse border border-green-800">
            <thead>
                <tr>
                    <th class="border border-green-600">Id</th>
                    <th class="border border-green-600">Name</th>
                    <th class="border border-green-600">Email</th>
                    <th class="border border-green-600">Created At</th>
                    <th class="border border-green-600">Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $id => $user)    
                <tr>
                    <td class="border border-green-600">{{ $user->id }}</td>
                    <td class="border border-green-600">{{ $user->name }}</td>
                    <td class="border border-green-600">{{ $user->email }}</td>
                    <td class="border border-green-600">{{ $user->created_at }}</td>
                    <td class="border border-green-600">{{ $user->role }}</td>
                </tr>
                @endforeach
            </tbody>    
</html>