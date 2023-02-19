@extends('layouts.app')

@section('title')
Show User
@endsection

@section('content')
<div class="bg-light rounded">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Show user</h5>

            <div class="container mt-4">
                <div>
                    Name: {{ $user->name }}
                </div>
                <div>
                    Email: {{ $user->email }}
                </div>
                <div>
                    Username: {{ $user->username }}
                </div>

                <div class="mt-4">
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info">Edit</a>
                    <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection