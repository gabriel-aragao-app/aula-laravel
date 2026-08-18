<dialog id="myModal{{ $id }}" class="m-auto w-full max-w-md rounded-lg bg-white p-0 shadow-xl backdrop:bg-black/40">
    <div class="p-6">
        <div class="mb-5 flex items-center justify-between">
            <h2 class="text-lg font-semibold text-gray-900">Atualizar dados</h2>
            <form method="dialog">
                <button type="submit" class="rounded-md p-2 text-gray-500 hover:bg-gray-100" aria-label="Fechar">&times;</button>
            </form>
        </div>

        <form action="{{ route('dash.update', ['id' => $id]) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="novo_nome{{ $id }}" class="mb-1 block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500" id="novo_nome{{ $id }}" name="novo_nome" value="{{ $nome }}" required>
            </div>
            <div>
                <label for="novo_peso{{ $id }}" class="mb-1 block text-sm font-medium text-gray-700">Peso</label>
                <input type="number" step="0.01" class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500" id="novo_peso{{ $id }}" name="novo_peso" value="{{ $peso }}" required>
            </div>
            <div>
                <label for="nova_altura{{ $id }}" class="mb-1 block text-sm font-medium text-gray-700">Altura</label>
                <input type="number" step="0.01" class="block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-emerald-500 focus:outline-none focus:ring-1 focus:ring-emerald-500" id="nova_altura{{ $id }}" name="nova_altura" value="{{ $altura }}" required>
            </div>
            <button type="submit" class="w-full rounded-md bg-emerald-600 px-4 py-2 font-medium text-white hover:bg-emerald-700">Atualizar</button>
        </form>
    </div>
</dialog>
