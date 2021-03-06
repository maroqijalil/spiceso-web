<x-admin-layout page="user">
  <div class="container px-6 mx-auto grid">
    <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
      Data Pelanggan
    </h2>
    <!-- CTA -->
    <a class="bg-sp-primary-100 flex items-center justify-between cursor-default p-4 mb-8 text-sm font-semibold text-sp-primary-50 bg-purple-600 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
      href="#">
      <div class="flex items-center gap-2">
        @include('components.admin.icons.client')
        <span>{{ $users->total() }} Pengguna</span>
      </div>
    </a>

    <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3">Pelanggan</th>
              <th class="px-4 py-3">Jumlah Pemesanan</th>
              <th class="px-4 py-3">Tanggal Daftar</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($users as $user)
            <tr class="text-gray-700 dark:text-gray-400">
              <td class="px-4 py-3">
                <div class="flex items-center text-sm">
                  <div class="relative hidden w-8 h-8 mr-3 rounded-full md:block">
                    <img class="object-cover w-full h-full rounded-full"
                      src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460_1280.png"
                      alt="" loading="lazy" />
                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                  </div>
                  <div>
                    <p class="font-semibold">{{ $user->nama }}</p>
                    <p class="text-xs text-gray-600 dark:text-gray-400">
                      {{-- {{ $user->account->email }} --}}
                    </p>
                  </div>
                </div>
              </td>
              <td class="px-4 py-3 text-sm">
                {{-- {{ count($user->orders()) }} --}}
              </td>
              <td class="px-4 py-3 text-sm">
                {{ $user->created_at }}
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      
      {{ $users->links('components.admin.pagination.pagination') }}
    </div>
  </div>
</x-admin-layout>
