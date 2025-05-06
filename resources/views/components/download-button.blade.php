<a
    href="{{ $url }}"
    class="flex items-center justify-center gap-2 px-6 py-3 bg-white border border-gray-300 rounded-lg shadow-md text-gray-700 font-semibold text-sm hover:bg-blue-100 hover:border-blue-400 hover:text-blue-600 transition duration-200 ease-in-out"
    download
>
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
        <path fill-rule="evenodd" d="M3 10a4 4 0 014-4h6a4 4 0 014 4v1a3 3 0 11-2 0v-1a2 2 0 00-2-2H7a2 2 0 00-2 2v1a3 3 0 11-2 0v-1zm7 3a1 1 0 01.707-.293h.586a1 1 0 01.707.293l2 2a1 1 0 01-1.414 1.414L11 15.414V18a1 1 0 11-2 0v-2.586l-1.293 1.293a1 1 0 01-1.414-1.414l2-2z" clip-rule="evenodd"/>
    </svg>
    {{ $slot }}
</a>
