<a href="{{ route('users.show', $user->id) }}">
    <img width="80px;" src="{{ $user->gravatar('140') }}" alt="{{ $user->name }}" class="gravatar" style=" border-radius: 50%;"/>
</a>
<h1>{{ $user->name }}</h1>