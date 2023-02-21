<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>incert</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="">
    <div class="">

        <form action="{{route('emp.insert')}}" method="post">
            @csrf
            <div class="mb-5">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    name</label>
                <input type="text" id="name"
                name="fullname"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter Your name" value="{{old('fullname')}}">
                    @error('fullname')
                        <p class="text-red-500 text-xs">{{$message}}</p>
                    @enderror

            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    email</label>
                <input type="email" id="email"
                name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter Your email">
                    @error('email')
                        <p class="text-red-500 text-xs">{{$message}}</p>
                    @enderror
            </div>
            <div class="mb-5">
                <label for="contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    mobile no</label>
                <input type="text" id="contact" name="contact"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter Your mobile number">
                    @error('contact')
                        <p class="text-red-500 text-xs">{{$message}}</p>
                    @enderror
            </div>
            <div class="mb-5">
                <label for="salary" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    salary</label>
                <input type="number" id="salary"
                name="salary"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Enter Your salary">
            </div>

            <div class="mb-5">
                <label for="add" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your
                    Address</label>
                <textarea type="text" id="add"
                name="address"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                     >
                </textarea>
            </div>

           <div class="w-full"> <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 ">Submit</button></div>
        </form>

    </div>
</body>

</html>