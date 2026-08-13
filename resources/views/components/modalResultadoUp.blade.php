
@props(['resultado'])

<dialog id="modalResultado" class="m-auto w-full max-w-md rounded-lg bg-white p-0 shadow-xl backdrop:bg-black/40">

    <div class="p-6">

        <div class="mb-5 flex items-center justify-between">

            <h2 class="text-lg font-semibold text-gray-900">Resultado do IMC</h2>

            <form method="dialog">

                <button type="submit" class="rounded-md p-2 text-gray-500 hover:bg-gray-100" aria-label="Fechar">&times;</button>

            </form>
        </div>

        <div class="mb-5 space-y-2 rouded-md bg-emerald-50 p-4 text-emerald-900">

            <p>IMC: <strong>{{ $resultado['imc'] }}</strong></p>
            <p>Faixa: <strong>{{ $resultado['faixa'] }}</strong></p>

        </div>

        <form action="{{ route('imc.salvar') }}" method="POST" enctype="multipart/form-data">
            @csrf 

            <input type="hidden" name="nome" value="{{ $resultado['nome'] }}">
            <input type="hidden" name="peso" value="{{ $resultado['peso'] }}">
            <input type="hidden" name="altura" value="{{ $resultado['altura'] }}">
            <input type="hidden" name="imc" value="{{ $resultado['imc'] }}">
            <input type="hidden" name="faixa" value="{{ $resultado['faixa'] }}">

            <div class="mb-5" >
                
                <label for="image" class="mb-1 block text-sm font-medium text-gray-700" >
                    Envie sua foto
                </label>

                <input type="file" id="image" name="image" accept="image/png,image/jpeg,image/jpg,image/gif" required class="block w-full rounded-md border border-gray-300 px-3 py-2 text-sm text-gray-700">

            </div>    
                
            <button type="submit" class="w-full rounded-md bg-emerald-600 px-4 py-2 font-medium text-white hover:bg-emerald-700">
                Salvar
            </button>
            

        </form>

        @if ($errors->any())
        <div class= "mt-4 rounded-md border border-red-200 bg-red-50 p-4 text-sm text-red-700">
            <ul class="list-disc space-y-1 pl-5">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

    </div>
</dialog>