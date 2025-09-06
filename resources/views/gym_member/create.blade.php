<!DOCTYPE html>
<html>
<head>
    <title>Add Member</title>
</head>
<body>
    <form action="{{ route('gym-member.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>ID CARD:</label>
        <input type="text" name="id_card"><br>

        <label>First Name:</label>
        <input type="text" name="first_name"><br>

        <label>Last Name:</label>
        <input type="text" name="last_name"><br>

        <label>Membership:</label>
        <input type="text" name="membership"><br>

        <label>Expiry:</label>
        <input type="date" name="expiry" min="{{ date('Y-m-d') }}"><br>

        <label>Phone:</label>
        <input type="text" name="phone_number"><br>

        <label>Address:</label>
        <textarea name="address"></textarea><br>

        <label>Profile Image:</label>
        <input type="file" name="profile_image"><br>

        <button type="submit">Save</button>
    </form>
</body>
</html>
