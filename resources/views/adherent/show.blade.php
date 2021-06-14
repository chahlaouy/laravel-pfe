<x-app-layout>

    @if (Session::get('success'))

        <div class="fixed top-0 right-0 p-8" x-data="{show: true}" x-show="show">
            <div class="bg-green-300 text-sm rounded shadow-xl px-12 py-3 flex items-center justify-between">
                <span class="block mr-6">
                    {{ Session::get('success') }}
                </span>
                <span class="block w-4 cursor-pointer" x-on:click="show = false">
                    <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" class="fill-current text-green-800" fill-rule="evenodd">
                            <g id="icon-shape">
                                <polygon id="Combined-Shape"
                                    points="10 8.58578644 2.92893219 1.51471863 1.51471863 2.92893219 8.58578644 10 1.51471863 17.0710678 2.92893219 18.4852814 10 11.4142136 17.0710678 18.4852814 18.4852814 17.0710678 11.4142136 10 18.4852814 2.92893219 17.0710678 1.51471863 10 8.58578644">
                                </polygon>
                            </g>
                        </g>
                    </svg>
                </span>
            </div>
        </div>
    @endif
    @if (Session::get('error'))

        <div class="fixed top-0 right-0 p-8" x-data="{show: true}" x-show="show">
            <div class="bg-red-300 text-sm rounded shadow-xl px-12 py-3 flex items-center justify-between">
                <span class="block mr-6">
                    {{ Session::get('error') }}
                </span>
                <span class="block w-4 cursor-pointer" x-on:click="show = false">
                    <svg viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" class="fill-current text-red-800" fill-rule="evenodd">
                            <g id="icon-shape">
                                <polygon id="Combined-Shape"
                                    points="10 8.58578644 2.92893219 1.51471863 1.51471863 2.92893219 8.58578644 10 1.51471863 17.0710678 2.92893219 18.4852814 10 11.4142136 17.0710678 18.4852814 18.4852814 17.0710678 11.4142136 10 18.4852814 2.92893219 17.0710678 1.51471863 10 8.58578644">
                                </polygon>
                            </g>
                        </g>
                    </svg>
                </span>
            </div>
        </div>
    @endif
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Adhérent {{$adherent->firstname}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex">
                        <div class="w-64 mr-4">
                            <img src="{{asset('assets/images')}}/{{$adherent->image}}" alt="" class="w-full shadow-md rounded">
                        </div>
                        <div class="flex-1">
                            <div class="grid grid-cols-3 gap-4">
                                <div class="mb-4 w-64 flex">
                                    <span class="mr-2 font-bold text-sm">Code adhérent: </span>
                                    <span class="text-sm">{{$adherent->code_adherent}}</span>
                                </div>
        
                                <div class="mb-4 w-64 flex">
                                    <span class="mr-2 font-bold text-sm">Nom: </span>
                                    <span class="text-sm">{{$adherent->firstname}}</span>
                                </div>
        
                                <div class="mb-4 w-64 flex">
                                    <span class="mr-2 font-bold text-sm">Prénom: </span>
                                    <span class="text-sm">{{$adherent->lastname}}</span>
                                </div>
        
                                <div class="mb-4 w-64 flex">
                                    <span class="mr-2 font-bold text-sm">CIN/Passport: </span>
                                    <span class="text-sm">{{$adherent->cin }}</span>
                                </div>
        
                                <div class="mb-4 w-64 flex">
                                    <span class="mr-2 font-bold text-sm">Nationalité: </span>
                                    <span class="text-sm">{{$adherent->nationality}}</span>
                                </div>
        
                                <div class="mb-4 w-64 flex">
                                    <span class="mr-2 font-bold text-sm">Profession: </span>
                                    <span class="text-sm">{{$adherent->profession}}</span>
                                </div>
        
                                <div class="mb-4 w-64 flex">
                                    <span class="mr-2 font-bold text-sm">Genre: </span>
                                    <span class="text-sm">{{$adherent->gender}}</span>
                                </div>
        
                                <div class="mb-4 w-64 flex">
                                    <span class="mr-2 font-bold text-sm"> Date de naissance: </span>
                                    <span class="text-sm">{{$adherent->birth_date}}</span>
                                </div>
        
                                <div class="mb-4 w-64 flex">
                                    <span class="mr-2 font-bold text-sm">Lieu de naissance: </span>
                                    <span class="text-sm">{{$adherent->place_birth}}</span>
                                </div>
                                <div class="mb-4 w-64 flex">
                                    <span class="mr-2 font-bold text-sm">Type Adhérent: </span>
                                    <span class="text-sm">{{$adherent->type_adherent}}</span>
                                </div>
        
                                <div class="mb-4 w-64 flex">
                                    <span class="mr-2 font-bold text-sm">Date d'adhésion: </span>
                                    <span class="text-sm">{{$adherent->joinning_date}}</span>
                                </div>
        
                                <div class="mb-4 w-64 flex">
                                    <span class="mr-2 font-bold text-sm">Email: </span>
                                    <span class="text-sm">{{$adherent->email}}</span>
                                </div>
        
                                <div class="mb-4 w-64 flex">
                                    <span class="mr-2 font-bold text-sm">Telephone: </span>
                                    <span class="text-sm">{{$adherent->phone}}</span>
                                </div>
        
                                <div class="mb-4 w-64 flex">
                                    <span class="mr-2 font-bold text-sm">Code Strcuture: </span>
                                    <span class="text-sm">{{$adherent->structer->code_structer}}</span>
                                </div>
        
                                <div class="mb-4 w-64 flex">
                                    <span class="mr-2 font-bold text-sm">Code Commission : </span>
                                    <span class="text-sm">{{$adherent->code_commession}}</span>
                                </div>
                                <div class="mb-4 w-64 flex">
                                    <span class="mr-2 font-bold text-sm">Observation : </span>
                                    <span class="text-sm">{{$adherent->observation}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
