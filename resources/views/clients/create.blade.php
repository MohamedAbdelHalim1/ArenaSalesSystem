<x-app-layout>
    <div class="container mt-5">
        <h2><b>Add Client</b></h2><br>
        <form action="{{ route('clients.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" name="name" required>
            </div>
            <div class="mb-3">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" required>
            </div>
            <div class="mb-3">
                <label>Brand Name</label>
                <input type="text" class="form-control" name="brand_name">
            </div>
            <div class="mb-3">
                <label>Business Type</label>
                <input type="text" class="form-control" name="business_type" required>
            </div>
            <button type="submit" class="btn btn-primary">Save Client</button>
        </form>
    </div>
</x-app-layout>
