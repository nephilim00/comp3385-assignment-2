@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Feedback Form</h2>
    <form action="/feedback/send" method="POST">
        @csrf <!-- CSRF token for security -->
        <div class="form-group">
            <label for="fullName">Full Name (Required)</label>
            <input type="text" class="form-control" id="fullName" name="fullName" required>
        </div>
        <div class="form-group">
            <label for="email">Email (Required)</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="comments">Comments (Required)</label>
            <textarea class="form-control" id="comments" name="comments" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

