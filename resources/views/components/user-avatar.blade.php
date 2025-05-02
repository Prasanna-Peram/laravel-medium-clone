@props(['user', 'size' => 'w-12 h-12'])
@if($user->image)
<img src="{{$user->imageUrl() }}" alt="{{ $user->name }}"
    class="{{ $size }} rounded-full" />
@else
<img src="https://cdn2.iconfinder.com/data/icons/business-and-finance-related-hand-gestures/256/face_female_blank_user_avatar_mannequin-512.png"
    alt="Dummy Avatar" class="{{ $size }} rounded-full" />
@endif