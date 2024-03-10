<div class="current-card w-full bg-{{ $background }} text-ghost rounded-xl mt-4">
    <div class="flex flex-col ">
        <h3 class="text-2xl text-ghost p-4">{{ $title }}</h2>
    </div>
    <div class="flex justify-between items-center p-4">
        <h2 class="balance text-5xl text-ghost rounded-lg">€ xx.xxx,xx</h2>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-10 h-10">
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
          </svg>          
    </div>
    <div class="flex justify-between items-center p-4">
        <h2 class="card-number text-lg text-ghost rounded-lg w-full">7364-2876-7642-4738</h2>
        <div class="w-1/2 flex justify-end hover:transform hover:scale-105 transition duration-300 ease-in-out">
            <x-arrow />
        </div>
    </div>
</div>
<div class="w-full mx-auto">
    @for ($i=0; $i<intval($cards)-1; $i++)
        <div class="w-{{ 12-$i-1 }}/12 h-2 mx-auto bg-{{ $background }} rounded-b opacity-{{ 100 - (25 * $i) }}"></div>
    @endfor
</div>