@extends('admin.layouts.master')

@section('content')

<div class="container">
    <h1>Create Receiver</h1>
    <form action="{{ route('api.receivers.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="fullname">Full Name:</label>
            <input type="text" name="fullname" id="fullname" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="country">Country:</label>
            <input type="text" name="country" id="country" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="state">State:</label>
            <input type="text" name="state" id="state" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="city">City:</label>
            <input type="text" name="city" id="city" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="street_address">Street Address:</label>
            <input type="text" name="street_address" id="street_address" class="form-control">
        </div>
        <div class="form-group">
            <label for="postal_code">Postal Code:</label>
            <input type="text" name="postal_code" id="postal_code" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="phone_no">Phone No:</label>
            <input type="text" name="phone_no" id="phone_no" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('api.receivers.index') }}" class="btn btn-secondary">Back to List</a>
    </form>
</div>

@endsection