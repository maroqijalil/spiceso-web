<x-admin-layout page="payment">
  <div class="container px-6 mx-auto grid">
    <h2 class="mt-6 text-3xl font-bold text-gray-900">
      Data Metode Pembayaran
    </h2>
    <!-- CTA -->
    <a class="mt-6 flex items-center justify-between p-4 mb-8 text-sm font-semibold text-sp-primary-50 bg-sp-primary-100 rounded-lg shadow-md focus:outline-none focus:shadow-outline-purple"
      href="#" id="add-payment">
      <div class="flex items-center gap-2">
        @include('components.admin.icons.credit-card')
        <span>{{ $payments->total() }} Metode Pembayaran</span>
      </div>
      <span class="flex items-center gap-2">
        <p>Tambah Metode</p>
        @include('components.admin.icons.plus')
      </span>
    </a>

    <!-- New Table -->
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
      <div class="w-full overflow-x-auto">
        <table class="w-full whitespace-no-wrap">
          <thead>
            <tr
              class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
              <th class="px-4 py-3 w-4/12">Bank</th>
              <th class="px-4 py-3 w-3/12">Nama</th>
              <th class="px-4 py-3 w-3/12">Rekening</th>
              <th class="px-4 py-3 w-2/12">Aksi</th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
            @foreach ($payments as $payment)
              <tr class="text-gray-700 dark:text-gray-400">
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm cursor-pointer">
                    <div>
                      <p class="font-semibold">{{ $payment->bank }}</p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3">
                  <div class="flex items-center text-sm cursor-pointer">
                    <div>
                      <p class="font-semibold">{{ $payment->nama }}</p>
                    </div>
                  </div>
                </td>
                <td class="px-4 py-3 text-sm">
                  {{ $payment->rekening }}
                </td>
                <td class="px-4 py-3 text-sm flex gap-3">
                  <button
                    class="px-2 py-1 text-xs font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red"
                    id="delete-payment" data-id="{{ $payment->payment_method_id }}">
                    @include('components.admin.icons.trash')
                  </button>
                </td>
              </tr>

              <div class="fixed inset-0 z-30 hidden items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
                id="modal-delete-payment-{{ $payment->payment_method_id }}">
                <div
                  class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
                  role="dialog" id="modal">

                  <header class="flex justify-end">
                    <button
                      class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
                      aria-label="close" id="modal-close-button" data-id="{{ $payment->payment_method_id }}">
                      <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
                        <path
                          d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                          clip-rule="evenodd" fill-rule="evenodd"></path>
                      </svg>
                    </button>
                  </header>

                  <!-- Modal body -->
                  <div class="mt-4 mb-6">

                    <!-- Modal title -->
                    <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
                      Hapus Metode Pembayaran
                    </p>

                    <!-- Modal description -->
                    <p class="text-sm text-gray-700 dark:text-gray-400">
                      Apakah Anda ingin menghapus metode pembayaran melalui {{ $payment->bank }} atas
                      {{ $payment->nama }}?
                    </p>
                  </div>

                  <footer class="flex flex-col items-center justify-end gap-2 sm:flex-row bg-gray-50 dark:bg-gray-800">
                    <button id="modal-close-button" data-id="{{ $payment->payment_method_id }}"
                      class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded-lg dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                      Batal
                    </button>

                    <form method="POST"
                      action={{ route('admin.payments.delete', ['id' => $payment->payment_method_id]) }}>
                      @csrf
                      @method('DELETE')

                      <button
                        class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg sm:w-auto sm:px-4 sm:py-2 active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red m-0">
                        Iya
                      </button>
                    </form>
                  </footer>
                </div>
              </div>
            @endforeach
          </tbody>
        </table>
      </div>

      {{ $payments->links('components.admin.pagination.pagination') }}
    </div>
  </div>

  <x-slot name="modal">
    <div class="fixed inset-0 z-30 hidden items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
      id="modal-add-payment">
      <div
        class="w-full px-6 py-4 overflow-hidden bg-white rounded-t-lg dark:bg-gray-800 sm:rounded-lg sm:m-4 sm:max-w-xl"
        role="dialog" id="modal">

        <header class="flex justify-end">
          <button
            class="inline-flex items-center justify-center w-6 h-6 text-gray-400 transition-colors duration-150 rounded dark:hover:text-gray-200 hover: hover:text-gray-700"
            aria-label="close" id="add-payment-close">
            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20" role="img" aria-hidden="true">
              <path
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd" fill-rule="evenodd"></path>
            </svg>
          </button>
        </header>

        <!-- Modal body -->
        <div class="mt-4">

          <!-- Modal title -->
          <p class="mb-2 text-lg font-semibold text-gray-700 dark:text-gray-300">
            Tambah Metode Pembayaran
          </p>

          <form method="POST" action={{ route('admin.payments.store') }}>
            @csrf

            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">
                Bank
              </span>
              <input
                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                name="bank" placeholder="Jasa Penyedia" required />
            </label>

            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">
                Nama
              </span>
              <input
                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                name="nama" placeholder="Nama Metode" required />
            </label>

            <label class="block mt-4 text-sm">
              <span class="text-gray-700 dark:text-gray-400">
                Rekening
              </span>
              <input
                class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray form-input"
                name="rekening" placeholder="No. Rekening" />
            </label>

            <footer class="flex flex-col items-center justify-end gap-2 sm:flex-row bg-white dark:bg-gray-800 mt-6">
              <button id="add-payment-close" type="button"
                class="w-full px-5 py-3 text-sm font-medium leading-5 text-gray-700 transition-colors duration-150 border border-gray-300 rounded dark:text-gray-400 sm:px-4 sm:py-2 sm:w-auto active:bg-transparent hover:border-gray-500 focus:border-gray-500 active:text-gray-500 focus:outline-none focus:shadow-outline-gray">
                Batal
              </button>

              <button type="submit"
                class="w-full px-5 py-3 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-sp-primary-100 border border-transparent rounded sm:w-auto sm:px-4 sm:py-2 active:bg-sp-primary-100 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple m-0">
                Tambah
              </button>
            </footer>
          </form>
        </div>
      </div>
    </div>
  </x-slot>

  <x-slot name="script">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
        $("body").on('click', "#delete-payment", function(e) {
          var paymentId = $(this).data(("id"));
          $(`#modal-delete-payment-${paymentId}`).removeClass('hidden').addClass('flex');
        });

        $("body").on('click', "#modal-close-button", function(e) {
          var paymentId = $(this).data(("id"));
          $(`#modal-delete-payment-${paymentId}`).removeClass('flex').addClass('hidden');
        });

        $("body").on('click', "#add-payment", function(e) {
          $(`#modal-add-payment`).removeClass('hidden').addClass('flex');
        });

        $("body").on('click', "#add-payment-close", function(e) {
          $(`#modal-add-payment`).removeClass('flex').addClass('hidden');
        });
      });
    </script>
  </x-slot>
</x-admin-layout>
