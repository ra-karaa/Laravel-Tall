
    <div class="flex flex-col w-full h-screen items-center px-3 mt-5">

        <a href="#">
            <x-logo class="w-auto h-16 mx-auto text-indigo-600 mb-3" />
        </a>

        <div class="mt-1 container">
            <div class="bloc w-full bg-gray-200 rounded-lg">
                <div class="block w-full font-bold p-3 bg-white border border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
                    <p> Lengkapi Form Di Bawah </p>
                </div>
                <div class="text-right px-2 py-3 mt-2">
                    <a href="/" class="bg-blue-700 text-white font-medium rounded-lg px-2 py-2 hover:text-white">
                        Kembali
                    </a>
                </div>
                <div class="w-full h-auto px-2 pb-3">
                    <form wire:submit.prevent="store">
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium">
                                Nama Lengkap</label>
                            <input type="text" wire:model="name"
                                class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                                required>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm font-medium">
                                Jenis Paket</label>
                            <select type="text" wire:model="paket"
                                class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
                                <option value="">-- Pilih Paket -- </option>
                                @foreach(App\Enums\PaketEnum::values() as $key=>$value)
                                    <option value="{{ $key }}">{{ $value }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

