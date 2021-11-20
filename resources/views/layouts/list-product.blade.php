<html>
  <head>
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js"
      defer=""
    ></script>

    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
      rel="stylesheet"
      href="https://tailwindui.com/css/components-v2.css"
    />
  </head>
  <body>
    <div>
      <div class="min-h-screen bg-gray-100">
        <header x-data="{ open: false }" class="bg-white shadow">
          <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
            <div class="flex justify-between h-16">
              <div class="flex px-2 lg:px-0">
                <div class="flex-shrink-0 flex items-center">
                  <a href="#">
                    <img
                      class="h-8 w-auto"
                      src="https://tailwindui.com/img/logos/workflow-mark-blue-600.svg"
                      alt="Workflow"
                    />
                  </a>
                </div>
                <nav
                  aria-label="Global"
                  class="hidden lg:ml-6 lg:flex lg:items-center lg:space-x-4"
                >
                  <a
                    href="#"
                    class="px-3 py-2 text-gray-900 text-sm font-medium"
                  >
                    Dashboard
                  </a>
                  <a
                    href="#"
                    class="px-3 py-2 text-gray-900 text-sm font-medium"
                  >
                    Jobs
                  </a>
                  <a
                    href="#"
                    class="px-3 py-2 text-gray-900 text-sm font-medium"
                  >
                    Applicants
                  </a>
                  <a
                    href="#"
                    class="px-3 py-2 text-gray-900 text-sm font-medium"
                  >
                    Company
                  </a>
                </nav>
              </div>
              <div
                class="
                  flex-1 flex
                  items-center
                  justify-center
                  px-2
                  lg:ml-6 lg:justify-end
                "
              >
                <div class="max-w-lg w-full lg:max-w-xs">
                  <label for="search" class="sr-only">Search</label>
                  <div class="relative">
                    <div
                      class="
                        absolute
                        inset-y-0
                        left-0
                        pl-3
                        flex
                        items-center
                        pointer-events-none
                      "
                    >
                      <svg
                        class="h-5 w-5 text-gray-400"
                        x-description="Heroicon name: solid/search"
                        xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                        aria-hidden="true"
                      >
                        <path
                          fill-rule="evenodd"
                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                          clip-rule="evenodd"
                        ></path>
                      </svg>
                    </div>
                    <input
                      id="search"
                      name="search"
                      class="
                        block
                        w-full
                        pl-10
                        pr-3
                        py-2
                        border border-gray-300
                        rounded-md
                        leading-5
                        bg-white
                        shadow-sm
                        placeholder-gray-500
                        focus:outline-none
                        focus:placeholder-gray-400
                        focus:ring-1
                        focus:ring-blue-600
                        focus:border-blue-600
                        sm:text-sm
                      "
                      placeholder="Search"
                      type="search"
                    />
                  </div>
                </div>
              </div>
              <div class="flex items-center lg:hidden">
                <!-- Mobile menu button -->
                <button
                  type="button"
                  @click="open = !open"
                  class="
                    inline-flex
                    items-center
                    justify-center
                    p-2
                    rounded-md
                    text-gray-400
                    hover:text-gray-500 hover:bg-gray-100
                    focus:outline-none
                    focus:ring-2
                    focus:ring-inset
                    focus:ring-blue-500
                  "
                  x-bind:aria-expanded="open"
                  aria-expanded="false"
                >
                  <span class="sr-only">Open main menu</span>
                  <!-- Icon when menu is closed. -->
                  <svg
                    x-state:on="Menu open"
                    x-state:off="Menu closed"
                    :class="{ 'hidden': open, 'block': !open }"
                    class="block h-6 w-6"
                    x-description="Heroicon name: outline/menu"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M4 6h16M4 12h16M4 18h16"
                    ></path>
                  </svg>
                  <!-- Icon when menu is open. -->
                  <svg
                    x-state:on="Menu open"
                    x-state:off="Menu closed"
                    :class="{ 'hidden': !open, 'block': open }"
                    class="hidden h-6 w-6"
                    x-description="Heroicon name: outline/x"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M6 18L18 6M6 6l12 12"
                    ></path>
                  </svg>
                </button>
              </div>
              <div class="hidden lg:ml-4 lg:flex lg:items-center">
                <button
                  type="button"
                  class="
                    flex-shrink-0
                    bg-white
                    p-1
                    text-gray-400
                    rounded-full
                    hover:text-gray-500
                    focus:outline-none
                    focus:ring-2
                    focus:ring-offset-2
                    focus:ring-blue-500
                  "
                >
                  <span class="sr-only">View notifications</span>
                  <svg
                    class="h-6 w-6"
                    x-description="Heroicon name: outline/bell"
                    xmlns="http://www.w3.org/2000/svg"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    aria-hidden="true"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                    ></path>
                  </svg>
                </button>

                <!-- Profile dropdown -->
                <div
                  @click.away="open = false"
                  class="ml-4 relative flex-shrink-0"
                  x-data="{ open: false }"
                >
                  <div>
                    <button
                      type="button"
                      @click="open = !open"
                      class="
                        bg-white
                        rounded-full
                        flex
                        text-sm
                        focus:outline-none
                        focus:ring-2
                        focus:ring-offset-2
                        focus:ring-blue-500
                      "
                      id="user-menu"
                      aria-haspopup="true"
                      x-bind:aria-expanded="open"
                    >
                      <span class="sr-only">Open user menu</span>
                      <img
                        class="h-8 w-8 rounded-full"
                        src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=256&amp;h=256&amp;q=80"
                        alt=""
                      />
                    </button>
                  </div>
                  <transition
                    enter-active-class="transition ease-out duration-100"
                    enter-class="transform opacity-0 scale-95"
                    enter-to-class="transform opacity-100 scale-100"
                    leave-active-class="transition ease-in duration-75"
                    leave-class="transform opacity-100 scale-100"
                    leave-to-class="transform opacity-0 scale-95"
                    ><div
                      x-show="open"
                      x-description="Profile dropdown panel, show/hide based on dropdown state."
                      class="
                        origin-top-right
                        absolute
                        right-0
                        mt-2
                        w-48
                        rounded-md
                        shadow-lg
                        py-1
                        bg-white
                        ring-1 ring-black ring-opacity-5
                      "
                      role="menu"
                      aria-orientation="vertical"
                      aria-labelledby="user-menu"
                    >
                      <a
                        href="#"
                        class="
                          block
                          px-4
                          py-2
                          text-sm text-gray-700
                          hover:bg-gray-100
                        "
                        role="menuitem"
                        >Your Profile</a
                      >
                      <a
                        href="#"
                        class="
                          block
                          px-4
                          py-2
                          text-sm text-gray-700
                          hover:bg-gray-100
                        "
                        role="menuitem"
                        >Settings</a
                      >
                      <a
                        href="#"
                        class="
                          block
                          px-4
                          py-2
                          text-sm text-gray-700
                          hover:bg-gray-100
                        "
                        role="menuitem"
                        >Sign out</a
                      >
                    </div></transition
                  >
                </div>
              </div>
            </div>
          </div>

          <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div class="border-t border-gray-200 py-3">
              <nav class="flex" aria-label="Breadcrumb">
                <div class="flex sm:hidden">
                  <a
                    href="#"
                    class="
                      group
                      inline-flex
                      space-x-3
                      text-sm
                      font-medium
                      text-gray-500
                      hover:text-gray-700
                    "
                  >
                    <svg
                      class="
                        flex-shrink-0
                        h-5
                        w-5
                        text-gray-400
                        group-hover:text-gray-600
                      "
                      x-description="Heroicon name: solid/arrow-narrow-left"
                      xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z"
                        clip-rule="evenodd"
                      ></path>
                    </svg>
                    <span>Back to Applicants</span>
                  </a>
                </div>
                <div class="hidden sm:block">
                  <ol class="flex items-center space-x-4">
                    <li>
                      <div>
                        <a href="#" class="text-gray-400 hover:text-gray-500">
                          <svg
                            class="flex-shrink-0 h-5 w-5"
                            x-description="Heroicon name: solid/home"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                          >
                            <path
                              d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"
                            ></path>
                          </svg>
                          <span class="sr-only">Home</span>
                        </a>
                      </div>
                    </li>
                    <li>
                      <div class="flex items-center">
                        <svg
                          class="flex-shrink-0 h-5 w-5 text-gray-300"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          aria-hidden="true"
                        >
                          <path
                            d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"
                          ></path>
                        </svg>
                        <a
                          href="#"
                          class="
                            ml-4
                            text-sm
                            font-medium
                            text-gray-500
                            hover:text-gray-700
                          "
                          >Jobs</a
                        >
                      </div>
                    </li>
                    <li>
                      <div class="flex items-center">
                        <svg
                          class="flex-shrink-0 h-5 w-5 text-gray-300"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          aria-hidden="true"
                        >
                          <path
                            d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"
                          ></path>
                        </svg>
                        <a
                          href="#"
                          aria-current="page"
                          class="
                            ml-4
                            text-sm
                            font-medium
                            text-gray-500
                            hover:text-gray-700
                          "
                          >Front End Developer</a
                        >
                      </div>
                    </li>
                    <li>
                      <div class="flex items-center">
                        <svg
                          class="flex-shrink-0 h-5 w-5 text-gray-300"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="currentColor"
                          viewBox="0 0 20 20"
                          aria-hidden="true"
                        >
                          <path
                            d="M5.555 17.776l8-16 .894.448-8 16-.894-.448z"
                          ></path>
                        </svg>
                        <a
                          href="#"
                          aria-current="page"
                          class="
                            ml-4
                            text-sm
                            font-medium
                            text-gray-500
                            hover:text-gray-700
                          "
                          >Applicants</a
                        >
                      </div>
                    </li>
                  </ol>
                </div>
              </nav>
            </div>
          </div>

          <transition
            enter-active-class="duration-150 ease-out"
            enter-class="opacity-0"
            enter-to-class="opacity-100"
            leave-active-class="duration-150 ease-in"
            leave-class="opacity-100"
            leave-to-class="opacity-0"
            ><div
              x-description="Mobile menu overlay, show/hide based on mobile menu state."
              x-show="open"
              class="z-20 fixed inset-0 bg-black bg-opacity-25 lg:hidden"
              aria-hidden="true"
            ></div
          ></transition>

          <transition
            enter-active-class="duration-150 ease-out"
            enter-class="opacity-0 scale-95"
            enter-to-class="opacity-100 scale-100"
            leave-active-class="duration-150 ease-in"
            leave-class="opacity-100 scale-100"
            leave-to-class="opacity-0 scale-95"
            ><div
              x-description="Mobile menu, show/hide based on mobile menu state."
              x-show="open"
              class="
                z-30
                absolute
                top-0
                right-0
                max-w-none
                w-full
                p-2
                transition
                transform
                origin-top
                lg:hidden
              "
            >
              <div
                class="
                  rounded-lg
                  shadow-lg
                  ring-1 ring-black ring-opacity-5
                  bg-white
                  divide-y divide-gray-200
                "
              >
                <div class="pt-3 pb-2">
                  <div class="flex items-center justify-between px-4">
                    <div>
                      <img
                        class="h-8 w-auto"
                        src="https://tailwindui.com/img/logos/workflow-mark-blue-600.svg"
                        alt="Workflow"
                      />
                    </div>
                    <div class="-mr-2">
                      <button
                        @click="open = false"
                        type="button"
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
                          focus:ring-blue-500
                        "
                      >
                        <span class="sr-only">Close menu</span>
                        <svg
                          class="h-6 w-6"
                          x-description="Heroicon name: outline/x"
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                          aria-hidden="true"
                        >
                          <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                          ></path>
                        </svg>
                      </button>
                    </div>
                  </div>
                  <div class="mt-3 px-2 space-y-1">
                    <a
                      href="#"
                      class="
                        block
                        rounded-md
                        px-3
                        py-2
                        text-base text-gray-900
                        font-medium
                        hover:bg-gray-100 hover:text-gray-800
                      "
                      >Dashboard</a
                    >
                    <a
                      href="#"
                      class="
                        block
                        rounded-md
                        px-3
                        py-2
                        text-base text-gray-900
                        font-medium
                        hover:bg-gray-100 hover:text-gray-800
                      "
                      >Jobs</a
                    >
                    <a
                      href="#"
                      class="
                        block
                        rounded-md
                        px-3
                        py-2
                        text-base text-gray-900
                        font-medium
                        hover:bg-gray-100 hover:text-gray-800
                      "
                      >Applicants</a
                    >
                    <a
                      href="#"
                      class="
                        block
                        rounded-md
                        px-3
                        py-2
                        text-base text-gray-900
                        font-medium
                        hover:bg-gray-100 hover:text-gray-800
                      "
                      >Company</a
                    >
                  </div>
                </div>
                <div class="pt-4 pb-2">
                  <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                      <img
                        class="h-10 w-10 rounded-full"
                        src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=256&amp;h=256&amp;q=80"
                        alt=""
                      />
                    </div>
                    <div class="ml-3">
                      <div class="text-base font-medium text-gray-800">
                        Whitney Francis
                      </div>
                      <div class="text-sm font-medium text-gray-500">
                        whitney@example.com
                      </div>
                    </div>
                    <button
                      class="
                        ml-auto
                        flex-shrink-0
                        bg-white
                        p-1
                        text-gray-400
                        rounded-full
                        hover:text-gray-500
                        focus:outline-none
                        focus:ring-2
                        focus:ring-offset-2
                        focus:ring-blue-500
                      "
                    >
                      <span class="sr-only">View notifications</span>
                      <svg
                        class="h-6 w-6"
                        x-description="Heroicon name: outline/bell"
                        xmlns="http://www.w3.org/2000/svg"
                        fill="none"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                        aria-hidden="true"
                      >
                        <path
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"
                        ></path>
                      </svg>
                    </button>
                  </div>
                  <div class="mt-3 px-2 space-y-1">
                    <a
                      href="#"
                      class="
                        block
                        rounded-md
                        px-3
                        py-2
                        text-base text-gray-900
                        font-medium
                        hover:bg-gray-100 hover:text-gray-800
                      "
                      >Your Profile</a
                    >
                    <a
                      href="#"
                      class="
                        block
                        rounded-md
                        px-3
                        py-2
                        text-base text-gray-900
                        font-medium
                        hover:bg-gray-100 hover:text-gray-800
                      "
                      >Settings</a
                    >
                    <a
                      href="#"
                      class="
                        block
                        rounded-md
                        px-3
                        py-2
                        text-base text-gray-900
                        font-medium
                        hover:bg-gray-100 hover:text-gray-800
                      "
                      >Sign out</a
                    >
                  </div>
                </div>
              </div>
            </div></transition
          >
        </header>

        <main class="py-10">
          <!-- Page header -->
          <div
            class="
              max-w-3xl
              mx-auto
              px-4
              sm:px-6
              md:flex md:items-center md:justify-between md:space-x-5
              lg:max-w-7xl lg:px-8
            "
          >
            <div class="flex items-center space-x-5">
              <div class="flex-shrink-0">
                <div class="relative">
                  <img
                    class="h-16 w-16 rounded-full"
                    src="https://images.unsplash.com/photo-1463453091185-61582044d556?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=1024&amp;h=1024&amp;q=80"
                    alt=""
                  />
                  <span
                    class="absolute inset-0 shadow-inner rounded-full"
                    aria-hidden="true"
                  ></span>
                </div>
              </div>
              <div>
                <h1 class="text-2xl font-bold text-gray-900">Ricardo Cooper</h1>
                <p class="text-sm font-medium text-gray-500">
                  Applied for
                  <a href="#" class="text-gray-900">Front End Developer</a> on
                  <time datetime="2020-08-25">August 25, 2020</time>
                </p>
              </div>
            </div>
            <div
              class="
                mt-6
                flex flex-col-reverse
                justify-stretch
                space-y-4 space-y-reverse
                sm:flex-row-reverse
                sm:justify-end
                sm:space-x-reverse
                sm:space-y-0
                sm:space-x-3
                md:mt-0 md:flex-row md:space-x-3
              "
            >
              <button
                type="button"
                class="
                  inline-flex
                  items-center
                  justify-center
                  px-4
                  py-2
                  border border-gray-300
                  shadow-sm
                  text-sm
                  font-medium
                  rounded-md
                  text-gray-700
                  bg-white
                  hover:bg-gray-50
                  focus:outline-none
                  focus:ring-2
                  focus:ring-offset-2
                  focus:ring-offset-gray-100
                  focus:ring-blue-500
                "
              >
                Disqualify
              </button>
              <button
                type="button"
                class="
                  inline-flex
                  items-center
                  justify-center
                  px-4
                  py-2
                  border border-transparent
                  text-sm
                  font-medium
                  rounded-md
                  shadow-sm
                  text-white
                  bg-blue-600
                  hover:bg-blue-700
                  focus:outline-none
                  focus:ring-2
                  focus:ring-offset-2
                  focus:ring-offset-gray-100
                  focus:ring-blue-500
                "
              >
                Advance to offer
              </button>
            </div>
          </div>

          <div
            class="
              mt-8
              max-w-3xl
              mx-auto
              grid grid-cols-1
              gap-6
              sm:px-6
              lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3
            "
          >
            <div class="space-y-6 lg:col-start-1 lg:col-span-2">
              <!-- Description list-->
              <section aria-labelledby="applicant-information-title">
                <div class="bg-white shadow sm:rounded-lg">
                  <div class="px-4 py-5 sm:px-6">
                    <h2
                      id="applicant-information-title"
                      class="text-lg leading-6 font-medium text-gray-900"
                    >
                      Applicant Information
                    </h2>
                    <p class="mt-1 max-w-2xl text-sm text-gray-500">
                      Personal details and application.
                    </p>
                  </div>
                  <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                    <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                      <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                          Application for
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                          Backend Developer
                        </dd>
                      </div>
                      <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                          Email address
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                          ricardocooper@example.com
                        </dd>
                      </div>
                      <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">
                          Salary expectation
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">$120,000</dd>
                      </div>
                      <div class="sm:col-span-1">
                        <dt class="text-sm font-medium text-gray-500">Phone</dt>
                        <dd class="mt-1 text-sm text-gray-900">
                          +1 555-555-5555
                        </dd>
                      </div>
                      <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">About</dt>
                        <dd class="mt-1 text-sm text-gray-900">
                          Fugiat ipsum ipsum deserunt culpa aute sint do nostrud
                          anim incididunt cillum culpa consequat. Excepteur qui
                          ipsum aliquip consequat sint. Sit id mollit nulla
                          mollit nostrud in ea officia proident. Irure nostrud
                          pariatur mollit ad adipisicing reprehenderit deserunt
                          qui eu.
                        </dd>
                      </div>
                      <div class="sm:col-span-2">
                        <dt class="text-sm font-medium text-gray-500">
                          Attachments
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900">
                          <ul
                            class="
                              border border-gray-200
                              rounded-md
                              divide-y divide-gray-200
                            "
                          >
                            <li
                              class="
                                pl-3
                                pr-4
                                py-3
                                flex
                                items-center
                                justify-between
                                text-sm
                              "
                            >
                              <div class="w-0 flex-1 flex items-center">
                                <svg
                                  class="flex-shrink-0 h-5 w-5 text-gray-400"
                                  x-description="Heroicon name: solid/paper-clip"
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 20 20"
                                  fill="currentColor"
                                  aria-hidden="true"
                                >
                                  <path
                                    fill-rule="evenodd"
                                    d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                    clip-rule="evenodd"
                                  ></path>
                                </svg>
                                <span class="ml-2 flex-1 w-0 truncate">
                                  resume_back_end_developer.pdf
                                </span>
                              </div>
                              <div class="ml-4 flex-shrink-0">
                                <a
                                  href="#"
                                  class="
                                    font-medium
                                    text-blue-600
                                    hover:text-blue-500
                                  "
                                >
                                  Download
                                </a>
                              </div>
                            </li>
                            <li
                              class="
                                pl-3
                                pr-4
                                py-3
                                flex
                                items-center
                                justify-between
                                text-sm
                              "
                            >
                              <div class="w-0 flex-1 flex items-center">
                                <svg
                                  class="flex-shrink-0 h-5 w-5 text-gray-400"
                                  x-description="Heroicon name: solid/paper-clip"
                                  xmlns="http://www.w3.org/2000/svg"
                                  viewBox="0 0 20 20"
                                  fill="currentColor"
                                  aria-hidden="true"
                                >
                                  <path
                                    fill-rule="evenodd"
                                    d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                    clip-rule="evenodd"
                                  ></path>
                                </svg>
                                <span class="ml-2 flex-1 w-0 truncate">
                                  coverletter_back_end_developer.pdf
                                </span>
                              </div>
                              <div class="ml-4 flex-shrink-0">
                                <a
                                  href="#"
                                  class="
                                    font-medium
                                    text-blue-600
                                    hover:text-blue-500
                                  "
                                >
                                  Download
                                </a>
                              </div>
                            </li>
                          </ul>
                        </dd>
                      </div>
                    </dl>
                  </div>
                  <div>
                    <a
                      href="#"
                      class="
                        block
                        bg-gray-50
                        text-sm
                        font-medium
                        text-gray-500 text-center
                        px-4
                        py-4
                        hover:text-gray-700
                        sm:rounded-b-lg
                      "
                      >Read full application</a
                    >
                  </div>
                </div>
              </section>

              <!-- Comments-->
              <section aria-labelledby="notes-title">
                <div class="bg-white shadow sm:rounded-lg sm:overflow-hidden">
                  <div class="divide-y divide-gray-200">
                    <div class="px-4 py-5 sm:px-6">
                      <h2
                        id="notes-title"
                        class="text-lg font-medium text-gray-900"
                      >
                        Notes
                      </h2>
                    </div>
                    <div class="px-4 py-6 sm:px-6">
                      <ul class="space-y-8">
                        <li>
                          <div class="flex space-x-3">
                            <div class="flex-shrink-0">
                              <img
                                class="h-10 w-10 rounded-full"
                                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                alt=""
                              />
                            </div>
                            <div>
                              <div class="text-sm">
                                <a href="#" class="font-medium text-gray-900"
                                  >Leslie Alexander</a
                                >
                              </div>
                              <div class="mt-1 text-sm text-gray-700">
                                <p>
                                  Ducimus quas delectus ad maxime totam
                                  doloribus reiciendis ex. Tempore dolorem
                                  maiores. Similique voluptatibus tempore non
                                  ut.
                                </p>
                              </div>
                              <div class="mt-2 text-sm space-x-2">
                                <span class="text-gray-500 font-medium"
                                  >4d ago</span
                                >
                                <span class="text-gray-500 font-medium">·</span>
                                <button
                                  type="button"
                                  class="text-gray-900 font-medium"
                                >
                                  Reply
                                </button>
                              </div>
                            </div>
                          </div>
                        </li>

                        <li>
                          <div class="flex space-x-3">
                            <div class="flex-shrink-0">
                              <img
                                class="h-10 w-10 rounded-full"
                                src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                alt=""
                              />
                            </div>
                            <div>
                              <div class="text-sm">
                                <a href="#" class="font-medium text-gray-900"
                                  >Michael Foster</a
                                >
                              </div>
                              <div class="mt-1 text-sm text-gray-700">
                                <p>
                                  Et ut autem. Voluptatem eum dolores sint
                                  necessitatibus quos. Quis eum qui dolorem
                                  accusantium voluptas voluptatem ipsum. Quo
                                  facere iusto quia accusamus veniam id
                                  explicabo et aut.
                                </p>
                              </div>
                              <div class="mt-2 text-sm space-x-2">
                                <span class="text-gray-500 font-medium"
                                  >4d ago</span
                                >
                                <span class="text-gray-500 font-medium">·</span>
                                <button
                                  type="button"
                                  class="text-gray-900 font-medium"
                                >
                                  Reply
                                </button>
                              </div>
                            </div>
                          </div>
                        </li>

                        <li>
                          <div class="flex space-x-3">
                            <div class="flex-shrink-0">
                              <img
                                class="h-10 w-10 rounded-full"
                                src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80"
                                alt=""
                              />
                            </div>
                            <div>
                              <div class="text-sm">
                                <a href="#" class="font-medium text-gray-900"
                                  >Dries Vincent</a
                                >
                              </div>
                              <div class="mt-1 text-sm text-gray-700">
                                <p>
                                  Expedita consequatur sit ea voluptas quo ipsam
                                  recusandae. Ab sint et voluptatem repudiandae
                                  voluptatem et eveniet. Nihil quas consequatur
                                  autem. Perferendis rerum et.
                                </p>
                              </div>
                              <div class="mt-2 text-sm space-x-2">
                                <span class="text-gray-500 font-medium"
                                  >4d ago</span
                                >
                                <span class="text-gray-500 font-medium">·</span>
                                <button
                                  type="button"
                                  class="text-gray-900 font-medium"
                                >
                                  Reply
                                </button>
                              </div>
                            </div>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="bg-gray-50 px-4 py-6 sm:px-6">
                    <div class="flex space-x-3">
                      <div class="flex-shrink-0">
                        <img
                          class="h-10 w-10 rounded-full"
                          src="https://images.unsplash.com/photo-1517365830460-955ce3ccd263?ixlib=rb-=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=8&amp;w=256&amp;h=256&amp;q=80"
                          alt=""
                        />
                      </div>
                      <div class="min-w-0 flex-1">
                        <form action="#">
                          <div>
                            <label for="comment" class="sr-only">About</label>
                            <textarea
                              id="comment"
                              name="comment"
                              rows="3"
                              class="
                                shadow-sm
                                block
                                w-full
                                focus:ring-blue-500 focus:border-blue-500
                                sm:text-sm
                                border-gray-300
                                rounded-md
                              "
                              placeholder="Add a note"
                            ></textarea>
                          </div>
                          <div class="mt-3 flex items-center justify-between">
                            <a
                              href="#"
                              class="
                                group
                                inline-flex
                                items-start
                                text-sm
                                space-x-2
                                text-gray-500
                                hover:text-gray-900
                              "
                            >
                              <svg
                                class="
                                  flex-shrink-0
                                  h-5
                                  w-5
                                  text-gray-400
                                  group-hover:text-gray-500
                                "
                                x-description="Heroicon name: solid/question-mark-circle"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                              >
                                <path
                                  fill-rule="evenodd"
                                  d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z"
                                  clip-rule="evenodd"
                                ></path>
                              </svg>
                              <span> Some HTML is okay. </span>
                            </a>
                            <button
                              type="submit"
                              class="
                                inline-flex
                                items-center
                                justify-center
                                px-4
                                py-2
                                border border-transparent
                                text-sm
                                font-medium
                                rounded-md
                                shadow-sm
                                text-white
                                bg-blue-600
                                hover:bg-blue-700
                                focus:outline-none
                                focus:ring-2
                                focus:ring-offset-2
                                focus:ring-blue-500
                              "
                            >
                              Comment
                            </button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
            </div>

            <section
              aria-labelledby="timeline-title"
              class="lg:col-start-3 lg:col-span-1"
            >
              <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
                <h2
                  id="timeline-title"
                  class="text-lg font-medium text-gray-900"
                >
                  Timeline
                </h2>

                <!-- Activity Feed -->
                <div class="mt-6 flow-root">
                  <ul class="-mb-8">
                    <li>
                      <div class="relative pb-8">
                        <span
                          class="
                            absolute
                            top-4
                            left-4
                            -ml-px
                            h-full
                            w-0.5
                            bg-gray-200
                          "
                          aria-hidden="true"
                        ></span>
                        <div class="relative flex space-x-3">
                          <div>
                            <span
                              class="
                                h-8
                                w-8
                                rounded-full
                                bg-gray-400
                                flex
                                items-center
                                justify-center
                                ring-8 ring-white
                              "
                            >
                              <svg
                                class="h-5 w-5 text-white"
                                x-description="Heroicon name: solid/user"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                              >
                                <path
                                  fill-rule="evenodd"
                                  d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                  clip-rule="evenodd"
                                ></path>
                              </svg>
                            </span>
                          </div>
                          <div
                            class="
                              min-w-0
                              flex-1
                              pt-1.5
                              flex
                              justify-between
                              space-x-4
                            "
                          >
                            <div>
                              <p class="text-sm text-gray-500">
                                Applied to
                                <a href="#" class="font-medium text-gray-900"
                                  >Front End Developer</a
                                >
                              </p>
                            </div>
                            <div
                              class="
                                text-right text-sm
                                whitespace-nowrap
                                text-gray-500
                              "
                            >
                              <time datetime="2020-09-20">Sep 20</time>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="relative pb-8">
                        <span
                          class="
                            absolute
                            top-4
                            left-4
                            -ml-px
                            h-full
                            w-0.5
                            bg-gray-200
                          "
                          aria-hidden="true"
                        ></span>
                        <div class="relative flex space-x-3">
                          <div>
                            <span
                              class="
                                h-8
                                w-8
                                rounded-full
                                bg-blue-500
                                flex
                                items-center
                                justify-center
                                ring-8 ring-white
                              "
                            >
                              <svg
                                class="h-5 w-5 text-white"
                                x-description="Heroicon name: solid/thumb-up"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                              >
                                <path
                                  d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"
                                ></path>
                              </svg>
                            </span>
                          </div>
                          <div
                            class="
                              min-w-0
                              flex-1
                              pt-1.5
                              flex
                              justify-between
                              space-x-4
                            "
                          >
                            <div>
                              <p class="text-sm text-gray-500">
                                Advanced to phone screening by
                                <a href="#" class="font-medium text-gray-900"
                                  >Bethany Blake</a
                                >
                              </p>
                            </div>
                            <div
                              class="
                                text-right text-sm
                                whitespace-nowrap
                                text-gray-500
                              "
                            >
                              <time datetime="2020-09-22">Sep 22</time>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="relative pb-8">
                        <span
                          class="
                            absolute
                            top-4
                            left-4
                            -ml-px
                            h-full
                            w-0.5
                            bg-gray-200
                          "
                          aria-hidden="true"
                        ></span>
                        <div class="relative flex space-x-3">
                          <div>
                            <span
                              class="
                                h-8
                                w-8
                                rounded-full
                                bg-green-500
                                flex
                                items-center
                                justify-center
                                ring-8 ring-white
                              "
                            >
                              <svg
                                class="h-5 w-5 text-white"
                                x-description="Heroicon name: solid/check"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                              >
                                <path
                                  fill-rule="evenodd"
                                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                  clip-rule="evenodd"
                                ></path>
                              </svg>
                            </span>
                          </div>
                          <div
                            class="
                              min-w-0
                              flex-1
                              pt-1.5
                              flex
                              justify-between
                              space-x-4
                            "
                          >
                            <div>
                              <p class="text-sm text-gray-500">
                                Completed phone screening with
                                <a href="#" class="font-medium text-gray-900"
                                  >Martha Gardner</a
                                >
                              </p>
                            </div>
                            <div
                              class="
                                text-right text-sm
                                whitespace-nowrap
                                text-gray-500
                              "
                            >
                              <time datetime="2020-09-28">Sep 28</time>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="relative pb-8">
                        <span
                          class="
                            absolute
                            top-4
                            left-4
                            -ml-px
                            h-full
                            w-0.5
                            bg-gray-200
                          "
                          aria-hidden="true"
                        ></span>
                        <div class="relative flex space-x-3">
                          <div>
                            <span
                              class="
                                h-8
                                w-8
                                rounded-full
                                bg-blue-500
                                flex
                                items-center
                                justify-center
                                ring-8 ring-white
                              "
                            >
                              <svg
                                class="h-5 w-5 text-white"
                                x-description="Heroicon name: solid/thumb-up"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                              >
                                <path
                                  d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z"
                                ></path>
                              </svg>
                            </span>
                          </div>
                          <div
                            class="
                              min-w-0
                              flex-1
                              pt-1.5
                              flex
                              justify-between
                              space-x-4
                            "
                          >
                            <div>
                              <p class="text-sm text-gray-500">
                                Advanced to interview by
                                <a href="#" class="font-medium text-gray-900"
                                  >Bethany Blake</a
                                >
                              </p>
                            </div>
                            <div
                              class="
                                text-right text-sm
                                whitespace-nowrap
                                text-gray-500
                              "
                            >
                              <time datetime="2020-09-30">Sep 30</time>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>

                    <li>
                      <div class="relative pb-8">
                        <div class="relative flex space-x-3">
                          <div>
                            <span
                              class="
                                h-8
                                w-8
                                rounded-full
                                bg-green-500
                                flex
                                items-center
                                justify-center
                                ring-8 ring-white
                              "
                            >
                              <svg
                                class="h-5 w-5 text-white"
                                x-description="Heroicon name: solid/check"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                              >
                                <path
                                  fill-rule="evenodd"
                                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                  clip-rule="evenodd"
                                ></path>
                              </svg>
                            </span>
                          </div>
                          <div
                            class="
                              min-w-0
                              flex-1
                              pt-1.5
                              flex
                              justify-between
                              space-x-4
                            "
                          >
                            <div>
                              <p class="text-sm text-gray-500">
                                Completed interview with
                                <a href="#" class="font-medium text-gray-900"
                                  >Katherine Snyder</a
                                >
                              </p>
                            </div>
                            <div
                              class="
                                text-right text-sm
                                whitespace-nowrap
                                text-gray-500
                              "
                            >
                              <time datetime="2020-10-04">Oct 4</time>
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="mt-6 flex flex-col justify-stretch">
                  <button
                    type="button"
                    class="
                      inline-flex
                      items-center
                      justify-center
                      px-4
                      py-2
                      border border-transparent
                      text-sm
                      font-medium
                      rounded-md
                      shadow-sm
                      text-white
                      bg-blue-600
                      hover:bg-blue-700
                      focus:outline-none
                      focus:ring-2
                      focus:ring-offset-2
                      focus:ring-blue-500
                    "
                  >
                    Advance to offer
                  </button>
                </div>
              </div>
            </section>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
