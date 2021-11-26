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
  <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
  <div class="font-sans antialiased text-gray-900">
    <div class="flex items-center min-h-screen p-6 bg-gray-50 dark:bg-gray-900">
      <div class="flex-1 h-full max-w-4xl mx-auto overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-800">
        <div class="flex flex-col overflow-y-auto md:flex-row">
          <div class="h-32 md:h-auto md:w-1/2">
            <img aria-hidden="true" class="object-cover w-full h-full dark:hidden"
              src="{{ asset('img/bg-pattern.png') }}" alt="Office" />
            <img aria-hidden="true" class="hidden object-cover w-full h-full dark:block"
              src="{{ asset('img/bg-pattern.png') }}" alt="Office" />
          </div>
          <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
            <div class="w-full">
              <h1 class="mb-4 text-xl font-semibold text-gray-700 dark:text-gray-200">
                Create account
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
                  <span class="text-gray-700 dark:text-gray-400">Name</span>
                  <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="Master" type="text" name="nama" required autofocus
                    autocomplete="nama" />
                </label>
                <label class="block mt-4 text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Email</span>
                  <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="master@example.com" type="email" name="email" required />
                </label>
                <label class="block mt-4 text-sm">
                  <span class="text-gray-700 dark:text-gray-400">Password</span>
                  <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="***************" type="password" name="password" required
                    autocomplete="new-password" />
                </label>
                <label class="block mt-4 text-sm">
                  <span class="text-gray-700 dark:text-gray-400">
                    Konfirmasi password
                  </span>
                  <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-red-400 focus:outline-none focus:shadow-outline-red dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    placeholder="***************" type="password" name="password_confirmation" required
                    autocomplete="new-password" />
                </label>

                <!-- You should use a button here, as the anchor is only used for the example  -->
                <button
                  class="block w-full px-4 py-2 mt-4 text-sm font-medium leading-5 text-center text-white transition-colors duration-150 bg-red-600 border border-transparent rounded-lg active:bg-red-600 hover:bg-red-700 focus:outline-none focus:shadow-outline-red"
                  type="submit">
                  {{ __('Register') }}
                </button>
              </form>

              <p class="mt-4">
                <a class="text-sm font-medium text-red-600 dark:text-red-400 hover:underline"
                  href="{{ route('admin.login') }}">
                  Sudah punya akun? Login
                </a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>