<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events') }} - {{ $event->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container-fluid">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p class="px-6 py-4">ID: {{ $event->id }}</p>
                    <p class="px-6 py-4">Name: {{ $event->name }}</p>
                    <p class="px-6 py-4">Slug: {{ $event->slug }}</p>
                    <p class="px-6 py-4">Start At: {{ $event->startAt }}</p>
                    <p class="px-6 py-4">End At: {{ $event->endAt }}</p>
                    <p class="px-6 py-4">Created At: {{ $event->createdAt }}</p>
                    <p class="px-6 py-4">Updated At: {{ $event->updatedAt }}</p>
                    <p class="px-6 py-4">Deleted At: {{ $event->deletedAt ?? 'Not Deleted' }}</p>
                </div>

             
            </div>
        </div>
        </div>
    </div>
</x-app-layout>
