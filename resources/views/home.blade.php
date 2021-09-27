<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>Stripe Payment</title>
</head>
<body class="h-screen flex items-center justify-center bg-gray-100">
    <div class="">
        <form action="">
            <div class="space-y-4">
                <div>
                    <input type="text" name="first_name" class="px-3 py-1 border placeholder-gray-300 text-sm" placeholder="First Name">
                </div>
                <div>
                    <input type="text" name="last_name" class="px-3 py-1 border placeholder-gray-300 text-sm" placeholder="Last Name">
                </div>
                <div>
                    <input type="email" name="email" class="px-3 py-1 border placeholder-gray-300 text-sm" placeholder="Your email">
                </div>
                <div>
                    <input type="number" name="amount" class="px-3 py-1 border placeholder-gray-300 text-sm" placeholder="$21">
                </div>
                <div class="space-x-4 text-sm">
                    <label for="once">Once
                        <input type="radio" name="frequency" id="once" class="px-3 py-1 border">
                    </label>
                    <label for="monthly">Monthly
                        <input type="radio" name="frequency" id="monthly" class="px-3 py-1 border">
                    </label>
                </div>
                <div class="w-full">
                    <button class="bg-gray-200 hover:bg-gray-300 transition ease-in-out duration-150 px-4 py-2 w-full text-sm">
                        Submit
                    </button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>