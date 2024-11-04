@extends('dashboard')

@section('content')
<div class="profile-container">
    @if($user)
        <!-- Profile Details -->
        <div class="profile-details">
            <div class="profile-box">
                <h3>User Profile</h3>
                <p><strong>Name:</strong> {{ $user->name }}</p>
                <p><strong>Email:</strong> {{ $user->email }}</p>
                <p><strong>Password:</strong> ******</p> <!-- Hidden for security -->
                <p><strong>Telephone:</strong> {{ $user->telephone }}</p>
                <p><strong>Place of Birth:</strong> {{ $user->tempat_lahir }}</p>
                <p><strong>Date of Birth:</strong> {{ $user->tanggal_lahir->format('F d, Y') }}</p>
                <p><strong>Gender:</strong> {{ $user->jenis_kelamin }}</p>
                <p><strong>Religion:</strong> {{ $user->agama }}</p>
            </div>
        </div>
    @else
        <p>User not found.</p>
    @endif
</div>
@endsection

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #691a20;
        color: #f5f5f5;
        display: flex;
        justify-content: center;
        padding-top: 20px;
    }

    .profile-container {
        max-width: 800px;
        padding: 20px;
    }

    .profile-details {
        display: flex;
        justify-content: center;
        flex-direction: column;
        gap: 20px;
    }

    .profile-box {
        background-color: #a6826d;
        padding: 20px;
        border-radius: 10px;
        color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.2s;
    }

    .profile-box:hover {
        transform: scale(1.02);
    }

    .profile-box h3 {
        margin-bottom: 15px;
        font-size: 24px;
        text-align: center;
        color: #fff;
    }

    .profile-box p {
        margin: 8px 0;
        font-size: 16px;
        border-bottom: 1px solid #fff;
        padding-bottom: 5px;
    }
</style>
