<div class="flex flex-col w-full h-screen items-center px-3 mt-5">

    <a href="#">
        <x-logo class="w-auto h-16 mx-auto text-indigo-600 mb-3" />
    </a>

    <div class="mt-1 container">
        <div class="bloc w-full bg-gray-200 rounded-lg">
            <div class="block w-full p-3 bg-white border font-bold border-gray-200 rounded-lg shadow-md hover:bg-gray-100">
                <p> Data Pendaftar </p>
            </div>
            <div class="text-right px-2 py-3 mt-2">
                <a href="/pendaftaran" class="bg-blue-700 text-white font-medium rounded-lg px-2 py-2 hover:text-white">
                    Tambah
                </a>
            </div>

            <div class="w-full h-auto justify-center items-center">
                <div class="flex flex-col">
                    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                          <table class="min-w-full">
                            <thead class="border-b">
                              <tr>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                  #
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                  Nama Member
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                  Jenis Paket
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                  Harga
                                </th>
                                <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
                                    Status
                                </th>
                                <th>

                                </th>
                              </tr>
                            </thead>
                            <tbody>
                            @foreach($daftar as $i => $temp)
                              <tr class="border-b">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    {{ ++$i }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                  {{ $temp->name }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                  {{ $temp->paket }}
                                </td>
                                <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                  {{ $temp->harga }}
                                </td>
                                <td>
                                    {{ $temp->status }}
                                </td>
                                <td>
                                    @if ($temp->status->canTransitionTo(\App\State\Daftar\Clear::class))
                                        <button wire:click="update({{ $temp->id }})"
                                                        class="bg-green-300 border-blue-400 text-white hover:bg-blue-400 px-3 rounded-lg">
                                            Bayar
                                        </button>
                                    @endif
                                </td>
                              </tr>
                            @endforeach
                            </tbody>
                          </table>
                          {{ $daftar->links() }}
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>


