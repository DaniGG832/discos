


<x-app-layout>
    <x-slot name="header">
        Albumes
    </x-slot>
    <div class="flex flex-col items-center mt-4">
        <h1 class="mb-4 text-2xl font-semibold">Albumes</h1>
        <div class="border border-gray-200 shadow">
            <table>
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Id
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Titulo
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Año
                        </th>

                        <th class="px-6 py-2 text-xs text-gray-500">
                            Editar
                        </th>
                        <th class="px-6 py-2 text-xs text-gray-500">
                            Borrar
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white">
                    @foreach ($albumes as $album)
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-blue-500 hover:underline">
                                <a href="{{ route('albumes.show', $album) }}">
                                    {{ $album->id }}
                                </a>
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $album->titulo }}
                                </div>
                            </td>

                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    {{ $album->anyo }}
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('albumes.edit', $album) }}"
                                    class="px-4 py-1 text-sm text-white bg-blue-400 rounded">Editar</a>
                            </td>
                            <td class="px-6 py-4">
                                <form action="{{ route('albumes.destroy', $album) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="px-4 py-1 text-sm text-white bg-red-400 rounded">
                                        Borrar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <a href="/albumes/create" class="mt-4 text-blue-900 hover:underline">Insertar un nuevo album</a>
    </div>

</x-app-layout>
