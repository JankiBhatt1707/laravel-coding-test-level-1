<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container-fluid">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
            <form method="POST" action="{{ route('events.update', $event->id) }}" >
                @csrf

                @method('PUT')

                <div class="bg-white overflow-hidden shadow-sm p-4">
                    <div class="form-group mb-6">
                        <div class="mt-4">
                            <x-label for="name" value="Name" />
                            <x-input class="block mt-1 w-full" type="text" name="name" value="{{ $event->name }}"  />
                        </div>

                        <div class="mt-4">
                            <x-label for="slug" value="Slug" />
                            <x-input class="block mt-1 w-full" type="text" name="slug" value="{{ $event->slug }}"  />
                        </div>
                        
                        <div class="mt-4">
                        <p>Slug: {{ $event->slug }}</p>
                        </div>

                        <div class="mt-4">
                        <p>Start At: {{ $event->startAt }}</p>
                        </div>

                        <div class="mt-4">
                        <p>End At: {{ $event->endAt }}</p>
                        </div>

                        <div class="mt-4">
                        <p>Created At: {{ $event->createdAt }}</p>
                        </div>

                        <div class="mt-4">
                        <p>Updated At: {{ $event->updatedAt }}</p>
                        </div>

                        <div>
                        <p>Deleted At: {{ $event->deletedAt ?? 'Not Deleted' }}</p>
                        </div>
                        
                        <div class="flex items-center mt-4">
                                <x-button class="ml-4">
                                    {{ __('Submit') }}
                                </x-button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        </div>
        </div>
    </div>
</x-app-layout>
