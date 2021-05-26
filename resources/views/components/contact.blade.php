<!-- contact -->
<article id="contact"
         class="relative w-full lg:w-3/6 py-14
         flex flex-col sm:justify-center items-center">
    <div class="relative sm:max-w-sm w-full">
        <div class="card bg-green-900 shadow-lg w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
        <div class="card bg-pink-400 shadow-lg w-full h-full rounded-3xl absolute  transform rotate-6"></div>
        <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
            <label for="input-name" class="block text-normal text-gray-700 text-center font-semibold">
                Obtenir un devis gratuit
            </label>
            <form action="{{ route('contact') }}" method="POST" class="mt-10">
                @csrf
                <div>
                    <label for="input-name" class="hidden"></label>
                    <input type="text"
                           name="contact[name]"
                           placeholder="Nom et Prénom"
                           id="input-name"
                           value="{{ old('contact.name') }}"
                           class="pl-3 mt-1 block w-full border-none bg-gray-100
                            h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" >
                    @error('contact.name')
                    <div class="mt-1">
                        <span class="text-red-400">{{ $message }}</span>
                    </div>
                    @enderror
                </div>

                <div class="mt-7">
                    <label for="input-email" class="hidden"></label>
                    <input type="email"
                           name="contact[email]"
                           id="input-email"
                           value="{{ old('contact.email') }}"
                           placeholder="Adresse E-mail"
                           class="pl-3 mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg
                           hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" >
                    @error('contact.email')
                    <div class="mt-1">
                        <span class="text-red-400">{{ $message }}</span>
                    </div>
                    @enderror
                </div>

                <div class="mt-7">
                    <label for="input-phone" class="hidden"></label>
                    <input type="text"
                           name="contact[phone]"
                           placeholder="Téléphone"
                           value="{{ old('contact.phone') }}"
                           id="input-phone"
                           class="pl-3 mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg
                           hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" >
                    @error('contact.phone')
                    <div class="mt-1">
                        <span class="text-red-400">{{ $message }}</span>
                    </div>
                    @enderror
                </div>


                <div class="mt-7">
                    <button
                        class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                        Obtenir un devis gratuit
                    </button>
                </div>
            </form>
        </div>
    </div>
</article>
