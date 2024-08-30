@forelse ($users as $user)
    {{ $user->fullname }}
@empty
    User not found 😢
@endforelse