<!DOCTYPE html>
<html>
<head>
    <title>Add Member</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex item-center justify-center p-5">
    <div class="w-full max-w-lg bg-white p-8 rounded-2x1 shadow-lg">
        <h1 class="text-2x1 font-bold text-gray-800 mb-6">➕ Add Member</h1>
    <form action="{{ route('gym-member.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
        <label>ID CARD:</label>
        <input type="text" name="id_card" min="8" maxlength="9" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <label>First Name:</label>
        <input type="text" name="first_name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

        <label>Last Name:</label>
        <input type="text" name="last_name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

        <label>Membership:</label>
        <input type="text" name="membership" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

        <label>Expiry:</label>
        <input type="date" name="expiry" min="{{ date('Y-m-d') }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

        <label>Phone:</label>
        <input type="text" name="phone_number" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

        <label>Address:</label>
        <textarea name="address" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>

        <label>Profile Image:</label>
        <input type="file" name="profile_image" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

        <div class="mt-4">
                <button type="submit"
                        class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow hover:bg-blue-700 transition">
                    Save Member
                </button>
            </div>

    </form>
    </div>
</body>
</html>
