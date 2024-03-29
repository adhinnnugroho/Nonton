<div>
    <x-card.simple-card>
        <div class="flex flex-wrap gap-3">
            @if (stripos($users_login->foto, 'https://lh3.googleusercontent.com') !== false)
                <img src="{{ Auth::user()->foto }}" class="rounded-full object-cover w-44" alt="" />
            @else
                <img src="{{ asset('/assets/images/avatar.png') }}" class="rounded-full object-cover w-full"
                    alt="" />
            @endif
            <div class="profile-users block mt-16">
                <h5 class="text-xl font-semibold">
                    {{ $users_login->name }}
                </h5>
                <p>
                    {{ $users_login->email }}
                </p>
            </div>
        </div>
        <a href="{{ route('profile-setting.edit') }}">
            <div class="border border-gray-700 float-right p-1 pl-1 pr-2 rounded-lg lg:-mt-24 cursor-pointer">
                <i class="fa-solid fa-pen ml-1"></i> Ubah Data
            </div>
        </a>

        <div class="tabs-profile mt-16">
            <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 border-b  dark:text-gray-400">
                <li class="me-2">
                    <a href="#" aria-current="page"
                        class="inline-block p-4  text-black text-lg
                                    border border-white border-b-2 border-b-red-600">Beranda</a>
                </li>
                <li class="me-2">
                    <a href="#" class="inline-block p-4 text-black text-lg">
                        Vidio
                    </a>
                </li>
                <li class="me-2">
                    <a href="#" class="inline-block p-4 text-black text-lg">Settings</a>
                </li>
            </ul>
        </div>
    </x-card.simple-card>

</div>
