<x-app-layout>
    <div class="container mt-5">
        <h2>Clients for {{ $user->name }}</h2>
        
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Brand Name</th>
                    <th>Business Type</th>
                </tr>
            </thead>
            <tbody>
                @forelse($clients as $client)
                    <tr>
                        <td>{{ $client->name }}</td>
                        <td>{{ $client->phone }}</td>
                        <td>{{ $client->brand_name ?? 'N/A' }}</td>
                        <td>{{ $client->business_type }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No clients found for this user.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
