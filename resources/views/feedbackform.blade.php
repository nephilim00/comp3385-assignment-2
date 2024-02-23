@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Feedback Form</h1>
    <form action="{{ url('/feedback/send') }}" method="POST">
        @csrf <!-- CSRF Token -->
        <div class="form-group">
            <label for="full-name">Full Name (Required)</label>
            <input type="text" class="form-control" id="full-name" name="full_name" required>
        </div>
        <div class="form-group">
            <label for="email">Email (Required)</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="comments">Comments (Required)</label>
            <textarea class="form-control" id="comments" name="comments" required></textarea>
        </div>
        <p>Let us know what you think of our website.</p>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
