<header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
  <div x-data="{ mobileMenuOpen: false }" class="bg-white">
    <div
      class="
        flex
        justify-between
        items-center
        max-w-7xl
        mx-auto
        px-4
        py-2
        sm:px-6
        md:justify-start md:space-x-10
        lg:px-8
      ">
      <div class="flex justify-start lg:w-0 lg:flex-1">
        <a href="{{ route('dashboard') }}">
          <span class="sr-only">Spiceso</span>
          <img class="h-14 w-auto sm:h-16" src="{{ asset('/img/logo-sp.png') }}" alt="" />
        </a>
      </div>
      <div class="-mr-2 -my-2 md:hidden">
        <button @click="mobileMenuOpen = true" type="button"
          class="
            bg-white
            rounded-md
            p-2
            inline-flex
            items-center
            justify-center
            text-gray-400
            hover:text-gray-500 hover:bg-gray-100
            focus:outline-none
            focus:ring-2
            focus:ring-inset
            focus:ring-indigo-500
          ">
          <span class="sr-only">Open menu</span>
          <svg class="h-6 w-6" x-description="Heroicon name: outline/menu" xmlns="http://www.w3.org/2000/svg"
            fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
            </path>
          </svg>
        </button>
      </div>
      <nav class="hidden md:flex space-x-10">
        <a href="{{ route('products') }}" class="flex mx-16 text-sm font-medium text-gray-500 hover:text-gray-900 gap-2">
          @include('components.admin.icons.shop-bag')
          Produk
        </a>
      </nav>

      <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
        <a href="{{ route('user.login') }}"
          class="
            whitespace-nowrap
            text-base
            font-medium
            text-gray-500
            hover:text-gray-900
          ">
          Masuk
        </a>
        <a href="{{ route('user.register') }}"
          class="
            ml-8
            whitespace-nowrap
            inline-flex
            items-center
            justify-center
            px-4
            py-2
            border border-transparent
            rounded-md
            shadow-sm
            text-base
            font-medium
            text-white
            bg-gradient-to-r
            from-sp-primary-100
            to-sp-primary-200
            hover:from-sp-primary-300 hover:to-sp-primary-400
          ">
          Daftar
        </a>
      </div>
    </div>

    <transition enter-active-class="duration-200 ease-out" enter-class="opacity-0 scale-95"
      enter-to-class="opacity-100 scale-100" leave-active-class="duration-100 ease-in"
      leave-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
      <div x-description="Mobile menu, show/hide based on mobile menu state." x-show="mobileMenuOpen"
        class="
          absolute
          z-30
          top-0
          inset-x-0
          p-2
          transition
          transform
          origin-top-right
          md:hidden
        ">
        <div
          class="
            rounded-lg
            shadow-lg
            ring-1 ring-black ring-opacity-5
            bg-white
            divide-y-2 divide-gray-50
          ">
          <div class="pt-5 pb-6 px-5">
            <div class="flex items-center justify-between">
              <div>
                <img class="h-14 w-auto" src="{{ asset('/img/logo-sp.png') }}" alt="Workflow" />
              </div>
              <div class="-mr-2">
                <button @click="mobileMenuOpen = false" type="button"
                  class="
                    bg-white
                    rounded-md
                    p-2
                    inline-flex
                    items-center
                    justify-center
                    text-gray-400
                    hover:text-gray-500 hover:bg-gray-100
                    focus:outline-none
                    focus:ring-2
                    focus:ring-inset
                    focus:ring-indigo-500
                  ">
                  <span class="sr-only">Tutup menu</span>
                  <svg class="h-6 w-6" x-description="Heroicon name: outline/x"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                  </svg>
                </button>
              </div>
            </div>
            <div class="mt-6">
              <nav class="grid grid-cols-1 gap-7">
                <a href="#"
                  class="
                    -m-3
                    p-3
                    flex
                    items-center
                    rounded-lg
                    hover:bg-gray-50
                  ">
                  <div
                    class="
                      flex-shrink-0 flex
                      items-center
                      justify-center
                      h-10
                      w-10
                      rounded-md
                      bg-gradient-to-r
                      from-sp-primary-100
                      to-sp-primary-200
                      text-white
                    ">
                    <svg class="h-6 w-6" x-description="Heroicon name: outline/inbox"
                      xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                      aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4">
                      </path>
                    </svg>
                  </div>
                  <div class="ml-4 text-base font-medium text-gray-900">
                    List Pemesanan
                  </div>
                </a>

                <a href="#"
                  class="
                    -m-3
                    p-3
                    flex
                    items-center
                    rounded-lg
                    hover:bg-gray-50
                  ">
                  <div
                    class="
                      flex-shrink-0 flex
                      items-center
                      justify-center
                      h-10
                      w-10
                      rounded-md
                      bg-gradient-to-r
                      from-sp-primary-100
                      to-sp-primary-200
                      text-white
                    ">
                    <svg class="h-6 w-6" x-description="Heroicon name: outline/annotation"
                      xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                      aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z">
                      </path>
                    </svg>
                  </div>
                  <a href="{{ route('products') }}" class="flex mx-16 text-sm font-medium text-gray-500 hover:text-gray-900 gap-2">
                    @include('components.admin.icons.shop-bag')
                    Produk
                  </a>
                </a>
              </nav>
            </div>
          </div>
          <div class="py-6 px-5">
            <div class="grid grid-cols-2 gap-4">
              <a href="#"
                class="
                  text-base
                  font-medium
                  text-gray-900
                  hover:text-gray-700
                ">
                FAQs
              </a>

              <a href="#"
                class="
                  text-base
                  font-medium
                  text-gray-900
                  hover:text-gray-700
                ">
                Kontak Kami
              </a>

              <a href="#"
                class="
                  text-base
                  font-medium
                  text-gray-900
                  hover:text-gray-700
                ">
                Tentang
              </a>
            </div>
            <div class="mt-6">
              <a href="{{ route('user.register') }}"
                class="
                  w-full
                  flex
                  items-center
                  justify-center
                  px-4
                  py-2
                  border border-transparent
                  rounded-md
                  shadow-sm
                  text-base
                  font-medium
                  text-white
                  bg-gradient-to-r
                  from-sp-primary-100
                  to-sp-primary-200
                  hover:from-sp-primary-300 hover:to-sp-primary-400
                ">
                Daftar
              </a>
              <p
                class="
                  mt-6
                  text-center text-base
                  font-medium
                  text-gray-500
                ">
                Sudah pernah daftar?
                <a href="{{ route('user.login') }}" class="text-gray-900"> Masuk </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </transition>
  </div>
</header>
