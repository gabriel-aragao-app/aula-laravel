

<x-layout title="IMC">
    
<form method="post" class="max-w-sm mx-auto">
    
    <h1>Calcule seu IMC</h1>

  <div class="mb-5">
    <label for="email" class="block mb-2.5 text-sm font-medium text-heading">Your email</label>
    <input type="text" name="peso" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Digite sua peso" required />
  </div>

  <div class="mb-5">
    <label for="password" class="block mb-2.5 text-sm font-medium text-heading">Your password</label>
    <input type="text" name="altura" class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:ring-brand focus:border-brand block w-full px-3 py-2.5 shadow-xs placeholder:text-body" placeholder="Digite sua altura" required />
  </div>
  

  <button type="submit" class="text-white bg-brand box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Submit</button>
</form>

</x-layout>
