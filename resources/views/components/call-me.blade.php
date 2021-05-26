<!-- call me back -->
<div id="call-me" class="min-w-screen flex items-center justify-center py-5">
    <div class="w-full px-5 py-16 md:py-24 text-gray-800 font-light">
        <div class="w-full max-w-6xl mx-auto pb-5">
            <div class="-mx-3 md:flex items-center">
                <div class="px-3 md:w-2/3 mb-10 md:mb-0">
                    <h1 class="text-6xl xl:text-10xl font-abhaya-libre text-green-900 font-bold leading-none">
                        Rappelez-moi</h1>
                    <h3 class="text-gray-700 font-alegraya-sans text-shadow mb-7 leading-tight">
                        Inscrivez-vous et vous serez contacté
                    </h3>
                    <div>
                        <span class="inline-block w-40 h-1 rounded-full bg-green-900"></span>
                        <span class="inline-block w-3 h-1 rounded-full bg-green-900 ml-1"></span>
                        <span class="inline-block w-1 h-1 rounded-full bg-green-900 ml-1"></span>
                    </div>
                </div>
                <div class="px-3 md:w-1/3">
                    <form action="{{ route('call-me') }}" method="POST">
                        @csrf
                        <div class="flex mb-3 w-full">
                            <label for="call-input-name" class="hidden"></label>
                            <input type="text"
                                   name="call[name]"
                                   id="call-input-name"
                                   value="{{ old('call.name') }}"
                                   class="w-full pl-10 pr-1 py-2 rounded-lg border-2 border-gray-200
                                       focus:outline-none transition duration-500 ease-in-out
                                transform focus:-translate-x focus:scale-105"
                                   placeholder="Nom et Prénom">
                        </div>
                        @error('call.name')
                        <div class="mt-1">
                            <span class="text-red-400">{{ $message }}</span>
                        </div>
                        @enderror
                        <div class="flex mb-3 w-full">
                            <label for="call-input-phone" class="hidden"></label>
                            <input type="tel"
                                   name="call[phone]"
                                   id="call-input-phone"
                                   value="{{ old('call.phone') }}"
                                   class="w-full pl-10 pr-1 py-2 rounded-lg border-2 border-gray-200
                                       focus:outline-none transition duration-500 ease-in-out
                                transform focus:-translate-x focus:scale-105"
                                   placeholder="Téléphone">
                        </div>
                        @error('call.phone')
                        <div class="mt-1">
                            <span class="text-red-400">{{ $message }}</span>
                        </div>
                        @enderror
                        <div>
                            <button class="bg-white border-2 border-gray-400 w-full py-3 rounded-xl text-shadow
                                shadow-xl hover:shadow-inner
                                focus:outline-none transition duration-500 ease-in-out
                                transform hover:-translate-x hover:scale-105">Rappelez-moi.
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
