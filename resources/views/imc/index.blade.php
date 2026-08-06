

<x-layout title="IMC" class="mx-auto">
    
<form method="post" class="max-w-sm mx-auto mt-5">
    
    <h1 class="w-full text-center font-bold">Calcule seu IMC</h1>

  <div class="mb-5">
    <label for="email" class="block mb-2.5 text-sm font-medium text-heading">Seu Peso</label>
    <input type="text" name="peso" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Digite sua peso" required />
  </div>

  <div class="mb-5">
    <label for="password" class="block mb-2.5 text-sm font-medium text-heading">Sua Altura</label>
    <input type="text" name="altura" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Digite sua altura" required />
  </div>
  
  <a href="/dashboard">
  <x-btn nomeBotao="Calcular IMC"></x-btn>
</a>
</form>

</x-layout>
