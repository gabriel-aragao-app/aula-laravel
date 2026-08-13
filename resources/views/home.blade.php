
<x-layout title="Home - Monitor de Saúde">

<main class="grow p-6 flex flex-col items-center justify-center text-center max-w-2xl mx-auto">
    
    <div class="mb-6 p-4 bg-emerald-50 text-emerald-600 rounded-full inline-flex items-center justify-center">
        <svg class="w-16 h-16" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://w3.org">
            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
    </div>

    <h1 class="text-3xl font-extrabold text-gray-900 md:text-4xl mb-4">
        Bem-vindo ao Calculador de IMC
    </h1>
    
    <p class="text-gray-600 text-base mb-8 max-w-md">
        Monitore sua saúde física de forma rápida e prática. Descubra se seu peso ideal está alinhado com a sua altura em poucos segundos.
    </p>
    <a href="/imc">
        <x-btn nomeBotao="Calcular IMC"></x-btn>
    </a>

    
</main>
</x-layout>