@component('components.master')
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-8 bg-gray-200 rounded-lg border border-gray-300">
            <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                            for="username"
                        >
                            Username
                        </label>

                        <input  class="border border-gray-400 p-2 w-full"
                                type="text"
                                name="username"
                                id="username"
                                autocomplete="username"
                                value="{{ old('username') }}"
                                autofocus
                                required
                        >

                        @error('username')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                            for="name"
                        >
                            Name
                        </label>

                        <input  class="border border-gray-400 p-2 w-full"
                                type="text"
                                name="name"
                                id="name"
                                value="{{ old('name') }}"
                                autocomplete="name"
                                autofocus
                                required
                        >

                        @error('name')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                            for="email"
                        >
                            Email
                        </label>

                        <input  class="border border-gray-400 p-2 w-full"
                                type="email"
                                name="email"
                                id="email"
                                value="{{ old('email') }}"
                                autocomplete="email"
                                required
                        >

                        @error('email')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                            for="password"
                        >
                            Password
                        </label>

                        <input  class="border border-gray-400 p-2 w-full"
                                type="password"
                                name="password"
                                id="password"
                                autocomplete="new-password"
                                required
                        >

                        @error('password')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-6">
                        <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                            for="password-confirm"
                        >
                            Confirm Password
                        </label>

                        <input  class="border border-gray-400 p-2 w-full"
                                type="password"
                                name="password_confirmation"
                                id="password-confirm"
                                autocomplete="new-password"
                                required
                        >

                        @error('password-confirm')
                            <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <button type="submit"
                                class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500"
                        >
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endcomponent
