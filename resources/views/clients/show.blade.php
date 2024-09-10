<x-app-layout>
    <div class="container mt-5">
        <h2>Client Details</h2>

        <div class="mb-3">
            <label><strong>Name:</strong></label>
            <p>{{ $client->name }}</p>
        </div>
        <div class="mb-3">
            <label><strong>Phone:</strong></label>
            <p>{{ $client->phone }}</p>
        </div>
        <div class="mb-3">
            <label><strong>Brand Name:</strong></label>
            <p>{{ $client->brand_name ?? 'N/A' }}</p>
        </div>
        <div class="mb-3">
            <label><strong>Business Type:</strong></label>
            <p>{{ $client->business_type }}</p>
        </div>

        <a href="{{ route('clients.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</x-app-layout>
