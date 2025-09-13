<!DOCTYPE html>
<html>
    <head>
        <title>Edit Expiry</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    </head>>
    <body class = "bg-gray-100 p-6">
        
    <h1 class="text-xl font-bold mb-4">Expiry for {{ $member->first_name }} {{ $member->last_name }}</h1>

        <form action="{{ route('gym-member.update-expiry',$member->id) }}"
         method="POST" class="space-y-3 bg-white p-4 rounded shadow">

        @csrf
        @method('PATCH')
        
        <label class="block">Expiry Date:</label>
        <input type="date" name="expiry" value="{{ $member->expiry }}" class="border p-2 w-full">

        <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Save
        </button>


        </form>

    </body>

</html>