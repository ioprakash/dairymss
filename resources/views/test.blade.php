<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All users</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 py-8  bg-slate-200">
        <h2 class="text-2xl font-bold mb-4">All Users List</h2>
        <table id="example" class="table-auto w-full">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created At</th>
                    <th>Role</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $id => $user)
                  <tr>
                   
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}   </td>
                        <td>{{ $user->email }}  </td>
                        {{-- <p>{{ $user->password }}</p> --}}
                        <td>{{ $user->created_at }} </td>
                        <td>{{ $user->role }} </td>
                        <td><a href="{{ route('view.singleUser', $user->id) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View</a></td>
                            
                    
                    </tr>
                    @endforeach
                
                <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                // Add any customization options here
            });
        });
    </script>



    <table class= "table-auto border-collapse border border-green-800">
        <thead>
          
        </tbody>
    </table>
</body>
</html>