<!DOCTYPE html>
<html>
<head>
    <title>Member Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white p-8 rounded-lg shadow w-96">
        <h2 class="text-xl font-bold mb-4">Member Login</h2>

        <form action="{{ route('member.login.post') }}" method="POST">
            @csrf
            <input type="text" name="id_card" placeholder="Enter ID Card"
                   class="w-full border px-3 py-2 rounded-lg mb-4" value="{{ old('id_card') }}">

            <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg">Login</button>

            @error('id_card')
                <p class="text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </form>

        {{-- If member is found, show details --}}
        @isset($member)
            <div class="mt-6 p-4 border rounded bg-gray-50">
                <h3 class="text-lg font-semibold mb-2">Member Details</h3>
                <p><strong>ID:</strong>{{ $member->id_card }}</p>
                <p><strong>Name:</strong> {{ $member->first_name }} {{ $member->last_name }}</p>
                <p><strong>Expiry:</strong> {{ $member->expiry_date }}</p>
                <p><strong>Phone:</strong> {{ $member->phone }}</p>
                
                @if($member->picture)
                    <img src="{{ asset('storage/'.$member->picture) }}" alt="Member Picture" class="mt-3 w-32 h-32 object-cover rounded-full">
                @endif
            </div>
        @endisset
    </div>

</body>
</html>
