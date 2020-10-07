@component('components.master')
    <section class="px-8">
        <main class="container mx-auto">
            <div class="lg:flex justify-between">
                <div class="lg:w-32">
                    @include('_sidebar-links')
                </div>
                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                    {{ $slot }}
                </div>
                <div class="">
                    @include('_friends-list')
                </div>
            </div>
        </main>
    </section>
    </div>
@endcomponent
