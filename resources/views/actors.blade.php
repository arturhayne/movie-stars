<!-- actors.blade.php -->

<form method="get" action="{{ route('actors.index') }}" id="filterForm">
    <label for="name">Filter by Actor Name:</label>
    <input type="text" name="name" id="name" value="{{ request('name') }}">
    <button type="submit" onclick="resetForm()">Apply Filter</button>
</form>

<script>
    function resetForm() {
        var nameValue = document.getElementById('name').value.trim();

        if (nameValue !== '') {
            document.getElementById('filterForm').submit();
        } else {
            document.getElementById('name').value = '';

            var newUrl = window.location.href.split('?')[0];
            window.history.pushState({ path: newUrl }, '', newUrl);
        }
    }
</script>

@foreach ($actors as $actor)
    <h2>{{ $actor->name }}</h2>
    <p>Movies:</p>
    <ul>
        @foreach ($actor->movies as $movie)
            <li>{{ $movie->title }}</li>
        @endforeach
    </ul>
@endforeach
