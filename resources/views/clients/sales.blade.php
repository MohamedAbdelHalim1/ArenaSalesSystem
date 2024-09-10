<x-app-layout>
    <div class="container mt-5">
        <h2>Sales Report</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User</th>
                    <th>Clients Added</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                    <tr>
                        <td><a href="{{ route('users.clients', ['user' => $user->id]) }}">{{ $user->name }}</a></td>
                        <td>{{ $user->clients_count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
