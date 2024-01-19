<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Lista de Usuarios') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <p class="mb-4">Olá, <strong> {{ Auth::user()->name }} </strong></p>
                </div>

                <div class="p-6 text-gray-900 ">
                    <table class="table-auto w-full">
                        <thead class="text-left bg-gray-100">
                            <tr>
                                <th class="text-center">Nível</th>
                                <th class="p-4">Nome</th>
                                <th>Email</th>
                                <th>Data de Cadastro</th>
                                <th class="text-center">Editar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="p-6 text-gray-900 dark:text-gray-100">
                                    <td class="text-center">icone</td>
                                    <td class="p-2">{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->created_at}}</td>
                                    <td class="text-center">
                                        <a href="">Editar</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
