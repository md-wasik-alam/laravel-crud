<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>emp_crud</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="">
    @include('header')

    <div class=" flex w-full h-96">
        <div class="w-2/6 p-4">
            @include('incert')
        </div>
        <!-- // table -->
        <div class="w-4/6">
            <div class="p-4">
                <table class='w-full'>
                    <thead class='border-2 border-black'>
                        <tr class=''>
                            <th class='border-2 border-black'>Id</th>
                            <th class='border-2 border-black'>Name</th>
                            <th class='border-2 border-black'>Contact</th>
                            <th class='border-2 border-black'>Email</th>
                            <th class='border-2 border-black'>salary</th>
                            <th class='border-2 border-black'>Address</th>
                            <th class='border-2 border-black'>Action</th>

                        </tr>
                    </thead>



                    <tbody class='text-center border-2 py-2'>
                        @foreach($dataa as $row)
                        <tr class=''>
                            <td class='border-2'>{{$row['id']}}</td>
                            <td class='border-2'>{{$row['fullname']}}</td>
                            <td class='border-2'>{{$row['contact']}}</td>
                            <td class='border-2'>{{$row['email']}}</td>
                            <td class='border-2'>{{$row['salary']}}</td>
                            <td class='border-2'>{{$row['address']}}</td>



                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</body>

</html>