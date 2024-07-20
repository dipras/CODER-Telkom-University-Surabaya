<div>
  {{-- Header Start --}}
  <header class="flex items-center justify-between my-7">
    <h2 class="text-2xl font-bold text-white md:text-3xl">Daftar Pertemuan</h2>

    <div class="hidden md:block">
      <a href="{{ route('app.e-learning.meeting.create') }}" wire:navigate
        class="flex items-center px-5 py-3 text-sm font-semibold text-black bg-white rounded-md">Buat
        Pertemuan <iconify-icon icon="mingcute:arrow-right-line" class="text-xl ms-2"></iconify-icon></a>
    </div>

    <div class="block md:hidden">
      <a href="{{ route('app.e-learning.meeting.create') }}" wire:navigate
        class="flex items-center justify-center w-10 h-10 text-sm font-semibold text-black bg-white rounded-full"><iconify-icon
          icon="majesticons:plus-line" class="text-2xl"></iconify-icon></a>
    </div>
  </header>
  {{-- Header End --}}


  {{-- View All Meeting Section Start --}}
  <section class="mb-10">
    <a href="{{ route('app.e-learning.meeting.show') }}" wire:navigate class="block">
      <div class="p-5 mb-4 rounded-lg bg-glass hover:border hover:border-gray-500">
        <header class="flex items-center justify-between mb-3 text-white">
          <div class="flex items-center">
            <iconify-icon icon="iconoir:calendar" class="text-2xl me-3"></iconify-icon>
            <span class="text-sm font-light">Minggu, 20 Mei 2024</span>
            <span class="text-sm font-light ms-2"> - 08:00 WIB</span>
          </div>
          <div class="px-2 py-2 text-xs bg-blue-600 rounded-full"></div>
        </header>
        <div>
          <div>
            <h3 class="text-2xl font-semibold text-white">Pertemuan 1</h3>
            <p class="font-light text-gray-400">Mengenal Fundamental HTML dan CSS Dasar untuk Pemula</p>
          </div>

          <div class="flex items-center justify-between w-full mt-4">
            {{-- Icon meeting type start --}}
            <div class="flex items-center w-full">
              <a href=""
                class="flex items-center justify-center w-10 h-10 border border-gray-500 rounded-lg group hover:bg-white">
                <iconify-icon icon="fluent:video-24-regular"
                  class="text-3xl text-white group-hover:text-black"></iconify-icon>
              </a>
              <p class="text-white ms-3">Zoom</p>
            </div>
            {{-- Icon meeting type end --}}

            {{-- Icon action start --}}
            <div class="inline md:flex md:justify-between">
              <div class="flex gap-2 text-gray-400 md:gap-4">
                <a href=""
                  class="flex gap-1 rounded-md items-center text-base font-medium border hover:text-red-600 border-[#27272A] px-2 md:px-4 py-1">
                  <iconify-icon icon="tabler:trash"></iconify-icon><span class="hidden md:block">Hapus</span>
                </a>
                <a href=""
                  class="flex gap-1 rounded-md items-center text-base font-medium border hover:text-yellow-600 border-[#27272A] px-2 md:px-4 py-1">
                  <iconify-icon icon="lucide:edit"></iconify-icon><span class="hidden md:block">Edit</span>
                </a>
              </div>
            </div>
            {{-- Icon action end --}}
          </div>
        </div>
      </div>
    </a>

    <a href="" class="block">
      <div class="p-5 mb-4 rounded-lg bg-glass hover:border hover:border-gray-500">
        <header class="flex items-center justify-between mb-3 text-white">
          <div class="flex items-center">
            <iconify-icon icon="iconoir:calendar" class="text-2xl me-3"></iconify-icon>
            <span class="text-sm font-light">Minggu, 20 Mei 2024</span>
            <span class="text-sm font-light ms-2"> - 08:00 WIB</span>
          </div>
          <div class="px-2 py-2 text-xs bg-green-600 rounded-full"></div>
        </header>
        <div>
          <div>
            <h3 class="text-2xl font-semibold text-white">Pertemuan 2</h3>
            <p class="font-light text-gray-400">Mengenal Fundamental HTML dan CSS Dasar untuk Pemula</p>
          </div>

          <div class="flex items-center justify-between w-full mt-4">
            {{-- Icon meeting type start --}}
            <div class="flex items-center w-full">
              <a href=""
                class="flex items-center justify-center w-10 h-10 border border-gray-500 rounded-lg group hover:bg-white">
                <iconify-icon icon="carbon:location" class="text-3xl text-white group-hover:text-black"></iconify-icon>
              </a>
              <p class="text-white ms-3">Lab. Komputer 1.12</p>
            </div>
            {{-- Icon meeting type end --}}

            {{-- Icon action start --}}
            <div class="inline md:flex md:justify-between">
              <div class="flex gap-2 text-gray-400 md:gap-4">
                <a href=""
                  class="flex gap-1 rounded-md items-center text-base font-medium border hover:text-red-600 border-[#27272A] px-2 md:px-4 py-1">
                  <iconify-icon icon="tabler:trash"></iconify-icon><span class="hidden md:block">Hapus</span>
                </a>
                <a href=""
                  class="flex gap-1 rounded-md items-center text-base font-medium border hover:text-yellow-600 border-[#27272A] px-2 md:px-4 py-1">
                  <iconify-icon icon="lucide:edit"></iconify-icon><span class="hidden md:block">Edit</span>
                </a>
              </div>
            </div>
            {{-- Icon action end --}}
          </div>
        </div>
      </div>
    </a>

    <a href="" class="block">
      <div class="p-5 mb-4 rounded-lg bg-glass hover:border hover:border-gray-500">
        <header class="flex items-center justify-between mb-3 text-white">
          <div class="flex items-center">
            <iconify-icon icon="iconoir:calendar" class="text-2xl me-3"></iconify-icon>
            <span class="text-sm font-light">Minggu, 20 Mei 2024</span>
            <span class="text-sm font-light ms-2"> - 08:00 WIB</span>
          </div>
          <div class="px-2 py-2 text-xs bg-yellow-600 rounded-full"></div>
        </header>
        <div>
          <div>
            <h3 class="text-2xl font-semibold text-white">Pertemuan 3</h3>
            <p class="font-light text-gray-400">Mengenal Fundamental HTML dan CSS Dasar untuk Pemula</p>
          </div>

          <div class="flex items-center justify-between w-full mt-4">
            {{-- Icon meeting type start --}}
            <div class="flex items-center w-full">
              <a href=""
                class="flex items-center justify-center w-10 h-10 border border-gray-500 rounded-lg group hover:bg-white">
                <iconify-icon icon="carbon:location" class="text-3xl text-white group-hover:text-black"></iconify-icon>
              </a>
              <p class="text-white ms-3">Lab. Mechine Learning 1.12</p>
            </div>
            {{-- Icon meeting type end --}}

            {{-- Icon action start --}}
            <div class="inline md:flex md:justify-between">
              <div class="flex gap-2 text-gray-400 md:gap-4">
                <a href=""
                  class="flex gap-1 rounded-md items-center text-base font-medium border hover:text-red-600 border-[#27272A] px-2 md:px-4 py-1">
                  <iconify-icon icon="tabler:trash"></iconify-icon><span class="hidden md:block">Hapus</span>
                </a>
                <a href=""
                  class="flex gap-1 rounded-md items-center text-base font-medium border hover:text-yellow-600 border-[#27272A] px-2 md:px-4 py-1">
                  <iconify-icon icon="lucide:edit"></iconify-icon><span class="hidden md:block">Edit</span>
                </a>
              </div>
            </div>
            {{-- Icon action end --}}
          </div>
        </div>
      </div>
    </a>
  </section>
  {{-- View All Meeting Section End --}}



</div>
