<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Gym Members</title>
    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="overflow-x-auto min-h-[400px]-screen flex items-center justify-center p-6">
    <div class="w-full max-w-5xl bg-white shadow-lg rounded-xl p-6">





    <!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->

<el-dialog>
  <dialog id="dialog" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
    <el-dialog-backdrop class="fixed inset-0 bg-gray-500/75 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

    <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
      <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="sm:flex sm:items-start">
           
    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">

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

        <select name="membership"  class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 ">
                
                <option value="Standard" {{ $membership == "Standard" ? 'selected':'' }}> Standard</option>
                <option value="Premium" {{ $membership =='Premium' ? 'selected':'' }}>    Premium</option>
                <option value="VIP"{{ $membership == 'Vip' ? 'selected':'' }}>   VIP              </option>
            </select>

        <label>Expiry:</label>
        <input type="date" name="expiry" min="{{ date('Y-m-d') }}" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

        <label>Phone:</label>
        <input type="text" name="phone_number" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">

        <label>Address:</label>
        <textarea name="address" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"></textarea>

        <label>Profile Image:</label>
        <input type="file" name="profile_image" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">


    </div>
    </div>
    </div>
        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
          <button type="button" command="close" commandfor="dialog" class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-red-500 sm:ml-3 sm:w-auto">Cancel</button>
          <button type="submit"
                        class="w-full bg-blue-600 text-white font-semibold py-2 px-4 rounded-lg shadow hover:bg-blue-700 transition">
                    Save Member
                </button>
        </div>
    </form>
      </el-dialog-panel>
    </div>
  </dialog>
</el-dialog>




<el-dialog>
  <dialog id="dialog2" aria-labelledby="dialog-title" class="fixed inset-0 size-auto max-h-none max-w-none overflow-y-auto bg-transparent backdrop:bg-transparent">
    <el-dialog-backdrop class="fixed inset-0 bg-gray-500/75 transition-opacity data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in"></el-dialog-backdrop>

    <div tabindex="0" class="flex min-h-full items-end justify-center p-4 text-center focus:outline-none sm:items-center sm:p-0">
      <el-dialog-panel class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all data-closed:translate-y-4 data-closed:opacity-0 data-enter:duration-300 data-enter:ease-out data-leave:duration-200 data-leave:ease-in sm:my-8 sm:w-full sm:max-w-lg data-closed:sm:translate-y-0 data-closed:sm:scale-95">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="sm:flex sm:items-start">
           
    <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">

    
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



    </div>
    </div>
    </div>

        <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
        
        </div>

      </el-dialog-panel>
    </div>
  </dialog>
</el-dialog>



    <!--header -->

           <!-- Header -->
        <div class="flex items-center justify-between mb-8">
            <h1 class="text-4xl font-extrabold text-gray-800">🏋️ Gym Members</h1>
            

          

            <div class="flex gap-3">

            <button command="show-modal" commandfor="dialog" class="px-4 py-2 bg-green-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-green-700 transition">➕ Add Member</button> 


            <button command="show-modal" commandfor="dialog2" class="px-4 py-2 bg-green-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-green-700 transition">🔑 Login</button> 

        
                <a href="http://127.0.0.1:8000/dashboard"
                   class="px-4 py-2 bg-orange-600 text-white text-sm font-semibold rounded-lg shadow hover:bg-orange-700 transition">
                   📊 DashBoard
                </a>

            </div>
        </div>

        <!-- Search -->
        <form method="GET" action="{{ route('gym-member.index') }}" class="flex gap-2 mb-6">
            <input type="text" name="search" value="{{ request('search') }}"
                placeholder="Search by Name"
                class="flex-1 border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            
            <select name="membership" onchange="this.form.submit()" class="flex-1 border border-gray-300 px-3 py-2 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500" >
                <option value="">--All Categories --<</option>
                <option value="Standard" {{ $membership == "Standard" ? 'selected':'' }}> Standard</option>
                <option value="Premium" {{ $membership =='Premium' ? 'selected':'' }}>    Premium</option>
                <option value="VIP"{{ $membership == 'Vip' ? 'selected':'' }}>   VIP              </option>
            </select>

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
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">ID</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">ID Card</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Name</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Membership</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Expiry</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold text-gray-700">Update</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($members as $member)
                    <tr class="border-t hover:bg-gray-50 transition">
                        <td class="px-4 py-3 text-gray-700">{{ $member->id }}</td>
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
                        <td> 
                        <a href="{{ route('gym-member.edit-expiry', $member->id) }}" 
   class="bg-blue-600 text-white px-3 py-1 rounded hover:bg-blue-700">
    Update Expiry
</a>
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
