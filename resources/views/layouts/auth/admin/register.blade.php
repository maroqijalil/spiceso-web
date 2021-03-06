<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('/css/tailwind.output.css') }}" />

  <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.2.1/dist/alpine.js" defer></script>
  <link rel="stylesheet" href="{{ asset('/css/app.css') }}" />
</head>

<body>
  <div class="font-sans antialiased text-gray-900">
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full dark:hidden"
              src="{{ asset('/img/sp/v6.jpg') }}" alt="Office" />
            <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"
              src="{{ asset('/img/sp/v6.jpg') }}" alt="Office" />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                Daftar Admin Spiceso
              </h1>
              @if ($errors->any())
                <div class="mb-4">
                  <div class="font-medium text-red-600">Whoops! Something went wrong.</div>

                  <ul class="mt-3 text-sm text-red-600 list-disc list-inside">
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif

              @if (session('status'))
                <div class="mb-4 text-sm font-medium text-green-600">
                  {{ session('status') }}
                </div>
              @endif

              <form method="POST" action="{{ route('admin.register.store') }}">
                @csrf
                <label class="block text-sm">
                  <span class="block text-sm font-medium text-gray-700">Nama</span>
                  <div class="mt-1">
                    <input id="nama" name="nama" type="text" required
                      class="
                        appearance-none
                        block
                        w-full
                        px-3
                        py-2
                        border border-gray-300
                        rounded-md
                        shadow-sm
                        placeholder-gray-400
                        focus:outline-none
                        focus:ring-sp-primary-100
                        focus:border-sp-primary-100
                        sm:text-sm
                      " />
                  </div>
                </label>
                <label class="block mt-4 text-sm">
                  <span class="block text-sm font-medium text-gray-700">Email</span>
                  <div class="mt-1">
                    <input id="email" name="email" type="email" autocomplete="email" required
                      class="
                        appearance-none
                        block
                        w-full
                        px-3
                        py-2
                        border border-gray-300
                        rounded-md
                        shadow-sm
                        placeholder-gray-400
                        focus:outline-none
                        focus:ring-sp-primary-100
                        focus:border-sp-primary-100
                        sm:text-sm
                      " />
                  </div>
                </label>
                <label class="block mt-4 text-sm">
                  <span class="block text-sm font-medium text-gray-700">Password</span>
                  <div class="mt-1">
                    <input id="password" name="password" type="password" required
                      class="
                        appearance-none
                        block
                        w-full
                        px-3
                        py-2
                        border border-gray-300
                        rounded-md
                        shadow-sm
                        placeholder-gray-400
                        focus:outline-none
                        focus:ring-sp-primary-100
                        focus:border-sp-primary-100
                        sm:text-sm
                      " />
                  </div>
                </label>
                <label class="block mt-4 text-sm">
                  <span class="block text-sm font-medium text-gray-700">
                    Konfirmasi password
                  </span>
                  <div class="mt-1">
                    <input id="password_confirmation" name="password_confirmation" type="password" required
                      class="
                        appearance-none
                        block
                        w-full
                        px-3
                        py-2
                        border border-gray-300
                        rounded-md
                        shadow-sm
                        placeholder-gray-400
                        focus:outline-none
                        focus:ring-sp-primary-100
                        focus:border-sp-primary-100
                        sm:text-sm
                      " />
                  </div>
                </label>

                <!-- You should use a button here, as the anchor is only used for the example  -->
                <button type="submit"
                    class="
                      mt-6
                      w-full
                      flex
                      justify-center
                      py-2
                      px-4
                      border border-transparent
                      rounded-md
                      shadow-sm
                      text-sm
                      font-medium
                      text-white
                      bg-sp-primary-100
                      hover:bg-sp-primary-300
                      focus:outline-none
                      focus:ring-2
                      focus:ring-offset-2
                      focus:ring-sp-primary-100
                    ">
                    Daftar
                  </button>
              </form>

              <p
                class="
                  mt-6
                  text-center text-base
                  font-medium
                  text-gray-500
                ">
                Sudah pernah daftar?
                <a href="{{ route('admin.login') }}" class="text-sp-primary-100"> Masuk </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
