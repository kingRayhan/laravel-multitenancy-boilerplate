<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <h1>Dashboard for x</h1>
            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul>
                        @foreach($projects as $project)
                            <li class="border p-2 mb-2">
                                <a href="/{{$project->id}}">{{$project->company->name}} - {{$project->name}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>

    {{--    <div class="py-12">--}}
    {{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
    {{--            <h1>Add new Project</h1>--}}
    {{--            <div class="bg-white overflow-hidden shadow-md sm:rounded-lg">--}}
    {{--                <div class="p-6 bg-white border-b border-gray-200">--}}
    {{--                    <form action="{{route('projects.store')}}" method="POST">--}}
    {{--                        @csrf--}}
    {{--                        <div>--}}
    {{--                            <x-label for="name" :value="__('Project name')"/>--}}
    {{--                            <x-input name="name" placeholder="Project name"/>--}}
    {{--                        </div>--}}
    {{--                        <div class="mt-4">--}}
    {{--                            <x-button>Save</x-button>--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</x-app-layout>
