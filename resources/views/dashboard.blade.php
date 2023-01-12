<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("Your Bookmarks  will apper here.") }}
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ol class="list-group list-group-numbered">
                        
                        <li class="list-group-item d-flex justify-content-between align-items-start">
                            
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">This is the Article title. <i style="font-size:20px;color:rgb(204, 255, 0)" class="bi bi-bookmark-check-fill"></div></i>
                                This is the article short description.
                            </div>
                            <span style="font-size:20px;background-color:rgb(204, 255, 0)" class="badge  rounded-pill">14</span>
                        </li>

                    </ol>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
