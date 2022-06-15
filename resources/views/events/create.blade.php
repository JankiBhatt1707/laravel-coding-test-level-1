<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container-fluid">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-sm">
            <form action="{{ route('events.store') }}" method="POST">
                @csrf
                    <div class="mt-4">
                        <x-label for="name" value="Name" />
                        <x-input class="block mt-1 w-full" type="text" name="name" value="" placeholder="Enter Name" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="slug" value="Slug" />
                        <x-input class="block mt-1 w-full" type="text" name="slug" value="" placeholder="Enter Slug" required />
                    </div>

                    <div class="mt-4">
                        <x-label for="startAt" value="Start At" />
                        <x-input class="block mt-1 w-full" type="datetime-local" name="startAt" value="" />
                    </div>

                    <div class="mt-4">
                        <x-label for="endAt" value="End At" />
                        <x-input class="block mt-1 w-full" type="datetime-local" name="endAt" value="" />
                    </div>

                    <div class="flex items-center mt-4">
           
    
                        <x-button class="ml-4">
                            {{ __('Submit') }}
                        </x-button>
               
                </div>
            </form>
        </div>
        </div>
        </div>
    </div>
</x-app-layout>
