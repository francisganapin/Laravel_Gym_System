<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gym Members</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-5xl bg-white shadow-lg rounded-xl p-6">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Gym Members</h1>

            <a href="{{ route('gym-member.create') }}"
               class="px-2 py-1 bg-blue-600 text-white text-sm font-medium rounded-lg shadow hover:bg-blue-700 transition">
               ➕ Add Member
            </a>

            <a href="http://127.0.0.1:8000/member-login"
   class="px-2 py-1 bg-blue-600 text-white text-sm font-medium rounded-lg shadow hover:bg-blue-700 transition">
   ➕ Login
</a>

        </div>

        <!-- Search -->
        <form method="GET" action="{{ route('gym-member.index') }}" class="flex gap-2 mb-6">
            <input type="text" name="search" value="{{ request('search') }}"
                placeholder="Search by Name"
                class="flex-1 border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            <button type="submit"
                class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                🔍 Search
            </button>
        </form>

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full border border-gray-200 rounded-lg overflow-hidden">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">ID Card</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Name</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Membership</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Expiry</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($members as $member)
                    <tr class="border-t hover:bg-gray-50 transition">
                        <td class="px-4 py-3 text-gray-700">{{ $member->id_card }}</td>
                        <td class="px-4 py-3 text-gray-700 font-medium">
                            {{ $member->first_name }} {{ $member->last_name }}
                        </td>
                        <td class="px-4 py-3 text-gray-600">{{ $member->membership }}</td>
                        <td class="px-4 py-3 font-bold 
                            @if(\Carbon\Carbon::parse($member->expiry)->isPast()) 
                                text-red-600 
                            @else 
                                text-green-600 
                            @endif">
                            {{ \Carbon\Carbon::parse($member->expiry)->format('M d, Y') }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="px-4 py-6 text-center text-gray-500">No members found.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="mt-6">
            {{ $members->links() }}
        </div>
    </div>
</body>
</html>
