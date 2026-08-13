@vite(['resources/css/btn.css'])

@props([
    'nomeBotao' => 'Confirmar',
    'cor' => '#28a745'
])

@if($nomeBotao == 'Calcular')
    <h4>Confira os dados antes de calcular</h4>
@else
    <h4>Conteúdo Aleatório</h4>
@endif

<br>
<button type="submit" class="inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-emerald-600 hover:bg-emerald-700 font-semibold rounded-lg transition duration-200 shadow-sm btn-confirmar" background-color="{{ $cor }}">
        {{ $nomeBotao }}    
        <svg class="w-5 h-5 ms-2 rtl:rotate-180" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://w3.org">
            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
</button>