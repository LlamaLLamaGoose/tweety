@component('components.app')
    <header class="mb-6 relative">
        <div class="relative">
            <img
                src="/images/default-profile-banner.jpg"
                alt="banner"
                class="mb-2"
            >
            <img
                src="{{ $user->avatar }}"
                alt="avatar"
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                width="150"
                style="left: 50%"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-0">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can ('edit', $user)
                    <a href="{{ $user->path('edit') }}"
                        class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2"
                    >
                        Edit Profile
                    </a>
                @endcan

                @component('components.follow-button', ['user' => $user])

                @endcomponent

            </div>
        </div>

        <p class="text-sm">
            Don't forget that gifts often come with costs that go beyond their purchase price. When you purchase a child the latest smartphone, you're also committing to a monthly phone bill. When you purchase the latest gaming system, you're likely not going to be satisfied with the games that come with it for long and want to purchase new titles to play. When you buy gifts it's important to remember that some come with additional costs down the road that can be much more expensive than the initial gift itself.
        </p>

    </header>


    @include('_timeline', [
        'tweets' => $user->tweets
    ])
@endcomponent

