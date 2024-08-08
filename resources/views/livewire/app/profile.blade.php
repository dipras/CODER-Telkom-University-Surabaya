<div>

  {{-- Header Start --}}
  <header class="flex items-center justify-between my-7">
    <h2 class="text-2xl font-bold text-white md:text-3xl">Profil Saya</h2>

    <div class="hidden md:block">
      <a href="{{ route('app.profile.edit') }}" wire:navigate
        class="flex items-center px-5 py-3 text-sm font-semibold text-black bg-white rounded-md">Perbarui Profil
        <iconify-icon icon="mingcute:arrow-right-line" class="text-xl ms-2"></iconify-icon></a>
    </div>

    <div class="block md:hidden">
      <a href="{{ route('app.e-learning.meeting.create') }}" wire:navigate
        class="flex items-center justify-center w-10 h-10 text-sm font-semibold text-black bg-white rounded-full"><iconify-icon
          icon="majesticons:plus-line" class="text-2xl"></iconify-icon></a>
    </div>
  </header>
  {{-- Header End --}}

  {{-- Profile Start --}}
  <section class="flex flex-col gap-4 mb-6 md:flex-row">
    <div class="p-6 text-center rounded-lg md:w-4/12 bg-glasses h-fit">
      <div class="w-40 h-40 mx-auto mb-3 overflow-hidden rounded-full">
        <img src="{{ asset('assets/images/avatar.png') }}" alt="Avatar" class="object-cover w-full h-full">
      </div>
      <h2 class="mb-3 text-xl font-semibold text-white">{{ Auth::user()->name }}</h2>
      <p class="mb-3 text-xs font-light text-white">- {{ Auth::user()->division->name }} -</p>
      <p class="mb-3 text-xs font-light text-white">{{ Auth::user()->identity_code }}</p>
      <div class="flex items-center justify-center gap-6">
        <a href="">
          <iconify-icon icon="ic:round-whatsapp" class="text-gray-400 hover:text-green-600"
            height="25"></iconify-icon>
        </a>
        <a href="">
          <iconify-icon icon="mdi:github" class="text-gray-400 hover:text-white" height="25"></iconify-icon>
        </a>
        <a href="">
          <iconify-icon icon="lucide:mail" class="text-gray-400 hover:text-red-600" height="25"></iconify-icon>
        </a>
      </div>
    </div>
    <div class="flex flex-col w-full gap-4">
      <div class="flex w-full h-auto gap-2 md:gap-4">
        <div
          class="flex flex-col items-center w-4/12 p-6 text-center shadow-sm bg-glasses md:items-start md:text-start rounded-xl">
          <div class="bg-[#27292C] p-2 flex items-center justify-center rounded-full w-fit mb-6">
            <iconify-icon icon="ph:user-check" class="text-gray-400 hover:text-red-600" height="30"></iconify-icon>
          </div>
          <h2 class="mb-6 text-xl font-semibold text-white">Presensi</h2>
          <h1 class="text-3xl font-bold text-white">100%</h1>
        </div>
        <div
          class="flex flex-col items-center w-4/12 p-6 text-center shadow-sm bg-glasses md:items-start md:text-start rounded-xl">
          <div class="bg-[#27292C] p-2 flex items-center justify-center rounded-full w-fit mb-6">
            <iconify-icon icon="ph:coin-light" class="text-gray-400 hover:text-yellow-600"
              height="30"></iconify-icon>
          </div>
          <h2 class="mb-6 text-xl font-semibold text-white">Poin</h2>
          <h1 class="text-3xl font-bold text-white">120</h1>
        </div>
        <div
          class="flex flex-col items-center w-4/12 p-6 text-center shadow-sm bg-glasses md:items-start md:text-start rounded-xl">
          <div class="bg-[#27292C] p-2 flex items-center justify-center rounded-full w-fit mb-6">
            <iconify-icon icon="mdi:work-outline" class="text-gray-400 hover:text-lime-600"
              height="30"></iconify-icon>
          </div>
          <h2 class="mb-6 text-xl font-semibold text-white">Project</h2>
          <h1 class="text-3xl font-bold text-white">08</h1>
        </div>
      </div>
      <div class="flex flex-col w-full p-6 bg-glasses rounded-xl">
        <div class="flex items-center gap-4 mb-6">
          <h1 class="text-gray-400 ">Informasi Terkait</h1>
          <hr class="flex-grow border-[#4F4F55] mb-3">
        </div>
        <div class="overflow-x-auto">
          <table class="min-w-full">
            <thead>
              <tr>
                <th scope="col" class="py-2 text-sm font-semibold text-white text-start">NIM</th>
                <th scope="col" class="py-2 text-sm font-semibold text-white text-start">Program
                  Studi</th>
                <th scope="col" class="py-2 text-sm font-semibold text-white text-start">Tahun
                  Angkatan</th>
              </tr>
            </thead>
            <tbody class="">
              <tr>
                <td class="py-2 text-sm font-light text-white whitespace-nowrap">1201201201</td>
                <td class="py-2 text-sm font-light text-white whitespace-nowrap">Rekayasa Perangkat
                  Lunak</td>
                <td class="py-2 text-sm font-light text-white whitespace-nowrap">2022</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  {{-- Profile End --}}

</div>