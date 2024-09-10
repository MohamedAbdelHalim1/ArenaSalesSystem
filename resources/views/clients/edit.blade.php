<x-app-layout>
    <div class="container mt-5">
        <h2>Edit Client</h2>
        <form action="{{ route('clients.update', $client->id) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" name="name" value="{{ $client->name }}" required>
            </div>
            <div class="mb-3">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" value="{{ $client->phone }}" required>
            </div>
            <div class="mb-3">
                <label>Brand Name</label>
                <input type="text" class="form-control" name="brand_name" value="{{ $client->brand_name }}">
            </div>
            <div class="mb-3">
                <label>Business Type</label>
                <input type="text" class="form-control" name="business_type" value="{{ $client->business_type }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Client</button>
        </form>
    </div>
</x-app-layout>
