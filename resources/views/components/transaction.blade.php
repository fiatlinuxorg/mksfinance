<div class="flex items-center mt-4 border-b border-gray-200 pb-4 cursor-pointer">
    <img src="{{ asset($image) }}" alt="" class="w-10 h-10 rounded-lg">
    <div class="ml-4 w-full">
        <h3 class="text-lg font-semibold text-gray-900">{{ $shop }}</h3>
        <p class="text-sm leading-relaxed text-gray-500}">{{ Number::currency(floatval($balance), "EUR") }}</p>
    </div>
    <div class="w-full flex justify-end hover:transform hover:scale-105 transition duration-300 ease-in-out">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
        </svg>          
    </div>
</div>