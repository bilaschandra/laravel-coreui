@extends('layouts.app')

@section('title')
Create Role
@endsection

@section('content')
<div class="bg-light rounded">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Add new role</h5>
            <div class="p-4 rounded">
                <div class="container mt-4">

                    <form method="POST" action="{{ route('roles.store') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input value="{{ old('name') }}" type="text" class="form-control" name="name"
                                placeholder="Name" required>
                        </div>

                        <label for="permissions" class="form-label">Assign Permissions</label>

                        <table class="table table-striped">
                            <thead>
                                <th scope="col" width="1%"><input type="checkbox" name="all_permission"></th>
                                <th scope="col" width="20%">Name</th>
                                <th scope="col" width="1%">Guard</th>
                            </thead>

                            @foreach($permissions as $permission)
                            <tr>
                                <td>
                                    <input type="checkbox" name="permission[{{ $permission->name }}]"
                                        value="{{ $permission->name }}" class='permission'>
                                </td>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->guard_name }}</td>
                            </tr>
                            @endforeach
                        </table>

                        <button type="submit" class="btn btn-primary">Save user</button>
                        <a href="{{ route('users.index') }}" class="btn btn-default">Back</a>
                    </form>
                </div>

            </div>
        </div>
    </div>

    @endsection

    @push('after-scripts')
    <script type="text/javascript">
    $(document).ready(function() {
        $('[name="all_permission"]').on('click', function() {
            if ($(this).is(':checked')) {
                $.each($('.permission'), function() {
                    $(this).prop('checked', true);
                });
            } else {
                $.each($('.permission'), function() {
                    $(this).prop('checked', false);
                });
            }
        });
    });
    </script>
    @endpush