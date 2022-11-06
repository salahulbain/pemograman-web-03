<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0  bg-gray-100" style="background-image: url('{{ asset('image/bg.svg') }}'); background-repeat: no-repeat;">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-6 bg-white shadow-2xl overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
</div>
