

<x-layout title="IMC" class="mx-auto">
    
  <form method="post" action="{{route('imc.calculaimc')}}" class="max-w-sm mx-auto mt-5">
      @csrf 
      <h1 class="w-full text-center font-bold">Calcule seu IMC</h1>

      <div class="mb-5">
      <label for="nome" class="block mb-2.5 text-sm font-medium text-heading">Seu Nome</label>
      <input type="" name="nome" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Digite sua peso" required />
    </div>

    <div class="mb-5">
      <label for="" class="block mb-2.5 text-sm font-medium text-heading">Seu Peso</label>
      <input type="" name="peso" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Digite sua peso" required />
    </div>

    <div class="mb-5">
      <label for="" class="block mb-2.5 text-sm font-medium text-heading">Sua Altura</label>
      <input type="" name="altura" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Digite sua altura" required />
    </div>
    
    <a href="/dashboard">
    <x-btn nomeBotao="Calcular IMC"></x-btn>
  </a>
  </form>

  <label for="" id="result">RESULTADO:</label><br>
  <label for="" id="result">IMC: {{$resultado["imc"]}}</label><br>
  <label for="" id="result">Faixa: {{$resultado["faixa"]}}</label><br>


</x-layout>
