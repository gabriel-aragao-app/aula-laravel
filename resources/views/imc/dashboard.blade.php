<x-layout title="Dashboard" nomePage="Dashboard">
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-900">Histórico de IMC</h1>
    </div>

    <div class="overflow-x-auto rounded-lg border border-gray-200 bg-white shadow-sm">
        <table class="min-w-full divide-y divide-gray-200 text-left text-sm">
            <thead class="bg-gray-50 text-xs uppercase text-gray-600">
                <tr>
                    <th scope="col" class="px-6 py-3">#</th>
                    <th scope="col" class="px-6 py-3">Nome</th>
                    <th scope="col" class="px-6 py-3">Peso</th>
                    <th scope="col" class="px-6 py-3">Altura</th>
                    <th scope="col" class="px-6 py-3">Categoria</th>
                    <th scope="col" class="px-6 py-3">Ações</th>
                    <th scope="col" class="px-6 py-3"><span class="sr-only">Editar</span></th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 text-gray-700">
                @foreach($showImc as $imc)
                    <tr class="hover:bg-gray-50">
                        <th scope="row" class="whitespace-nowrap px-6 py-4 font-medium text-gray-900">{{ $imc->id }}</th>
                        <td class="whitespace-nowrap px-6 py-4">{{ $imc->nome }}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ $imc->peso }}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ $imc->altura }}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ $imc->categoria }}</td>
                        <td class="px-6 py-4">
                            <form action="{{ route('dash.delete', ['id' => $imc->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="rounded-md p-2 text-red-600 hover:bg-red-50 hover:text-red-700" aria-label="Excluir registro">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z" />
                                        <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4H1.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1h-3.5zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z" />
                                    </svg>
                                </button>
                            </form>
                        </td>
                        <td class="px-6 py-4">
                            <button type="button" class="rounded-md p-2 text-emerald-600 hover:bg-emerald-50 hover:text-emerald-700" onclick="document.getElementById('myModal{{ $imc->id }}').showModal()" aria-label="Editar registro">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M11 5.466V4H5a4 4 0 0 0-3.584 5.777.5.5 0 1 1-.896.446A5 5 0 0 1 5 3h6V1.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384l-2.36 1.966a.25.25 0 0 1-.41-.192m3.81.086a.5.5 0 0 1 .67.225A5 5 0 0 1 11 1.466a.25.25 0 0 1-.41.192l-2.36-1.966a.25.25 0 0 1 0-.384l2.36-1.966a.25.25 0 0 1 .41.192V12h6a4 4 0 0 0 3.585-5.777.5.5 0 0 1 .225-.67Z" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @foreach($showImc as $imc)
        <x-modalUpdate :id="$imc->id" :nome="$imc->nome" :peso="$imc->peso" :altura="$imc->altura" />
    @endforeach
</x-layout>
