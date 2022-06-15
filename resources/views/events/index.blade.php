<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Events') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container-fluid">

        @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
            </div>
        @endif

                <div>
                   
                    <div class="float-end">
                        <a href="{{ route('events.create') }}" class="btn btn-success mx-3 my-2"> Create New Event</a>
                    </div>

                </div>
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Start At</th>
                            <th scope="col">End At</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Deleted At</th>
                            <th scope="col">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($events as $event)
                            <tr>
                                <td class="px-6 py-4">{{ $event->id }}</td>
                                <td class="px-6 py-4">{{ $event->name }}</td>
                                <td class="px-6 py-4">{{ $event->slug }}</td>
                                <td class="px-6 py-4">{{ $event->startAt }}</td>
                                <td class="px-6 py-4">{{ $event->endAt }}</td>
                                <td class="px-6 py-4">{{ $event->createdAt }}</td>
                                <td class="px-6 py-4">{{ $event->updatedAt }}</td>
                                <td class="px-6 py-4">{{ $event->deletedAt ?? '' }}</td>
                                <td class="px-6 py-4"><a href='{{ route("events.edit",$event->id) }}'>Edit</a></td>
                                <td class="px-6 py-4">
                                    <form action="{{ route('events.destroy', $event->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button value="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    {{ $events->links() }}
                </div>
            </div>
    </div>
</x-app-layout>
