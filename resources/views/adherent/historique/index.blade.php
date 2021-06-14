<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Historique des adhérents') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex items-center justify-between my-5 w-full">
                        <div class="flex items-center">
                            
                            <button class="flex items-center relative focus:outline-none border focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-72 mr-4">

                                <input  type="search" class="block px-2 py-3 text-xs flex-1 relative z-10 rounded-l-md border-gray-200 focus:outline-none focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" placeholder="Chercher" />
                        
                                <div class="px-5 py-3 bg-gray-100 rounded-r-md">
                                    <div class="w-4">
                                        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><defs></defs><title>x</title><path class="cls-1" d="M120.5891,106.37506,96.5609,80.39355l-3.842,3.8457-4.35187-4.35187c.33368-.43195.667-.864.98346-1.30475A46.77661,46.77661,0,1,0,77.87956,89.85687q.99472-.68619,1.955-1.42987l4.34509,4.345-4.31427,4.31409,26.5097,23.5246a10.0585,10.0585,0,1,0,14.21405-14.23566ZM74.21977,74.22931a32.4793,32.4793,0,1,1,9.48859-22.94189A32.48241,32.48241,0,0,1,74.21977,74.22931Z"/></svg>
                                    </div>
                                </div>
                            </button>
                            <span class="block w-8">
                                <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g id="Page-1" stroke="none" stroke-width="1" class="fill-current text-red-400" fill-rule="evenodd">
                                        <g id="icon-shape">
                                            <path
                                                d="M16,16 L20,16 L20,6 L0,6 L0,16 L4,16 L4,10 L16,10 L16,16 Z M4,10 L16,10 L16,20 L4,20 L4,10 Z M6,12 L14,12 L14,18 L6,18 L6,12 Z M4,0 L16,0 L16,5 L4,5 L4,0 Z M2,8 L4,8 L4,10 L2,10 L2,8 Z M6,8 L8,8 L8,10 L6,10 L6,8 Z"
                                                id="Combined-Shape"></path>
                                        </g>
                                    </g>
                                </svg>
                            </span>
                        </div>
                        
                        <div class="flex items-center">
                            <a href="{{ route('adherent.create') }}"
                                class="block px-12 py-3 bg-purple-500 rounded text-gray-100 mr-3">
                                Ajouter Adhérent
                            </a>
                            <a href="{{ route('adherent.create') }}"
                                class="block px-12 py-3 bg-purple-500 rounded text-gray-100">
                                Historique
                            </a>
                        </div>
                    </div>
                    
                    
                    @foreach ($activities as $activity)

                    <div class="mb-4">
                        <div class="flex text-red-400">
                            <span class="block font-bold mr-3">Adhérent Modifié</span>
                            <span class="block font-normal mr-3">{{ $activity->subject->firstname }}</span>
                            <span class="block font-bold mr-3">Par</span>
                            <span class="block">{{ $activity->user->firstname }}</span>
                        </div>

                        <div class="w-full flex">
                            <div class="bg-white rounded shadow p-8 flex-1 mr-2">
                                <h1 class="text-xl font-bold">Avant</h1>
                                @foreach ($activity->changes['before'] as  $key => $node)
                                    <div>
                                        {{$key}} => {{$node}} 
                                    </div>
                                @endforeach
                            </div>
                            <div class="bg-white rounded shadow p-8 flex-1">
                                <h1 class="text-xl font-bold">Aprés</h1>
                                @foreach ($activity->changes['after'] as  $key => $node)
                                    <div>
                                        {{$key}} => {{$node}} 
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                        
                     
                        
                        
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
