@if (count($errors) > 0)
    @foreach ($errors -> all() as $error)
        <div class="alart alert-warning">{{ $error }}</div>
    @endforeach
@endif