<form method="POST" action="{{ route('talent.profile.store') }}" enctype="multipart/form-data">
    @csrf
    <div id="step-1">
        <div class="right-side mb-8 px-4" style="font-family: 'Roboto', sans-serif;">
            <h1 class="text-blue-910 font-bold text-4xl">Profile</h1>
            <p class="text-blue-900 font-bold" style="margin-top: 6px; font-size: 20px;">Talent Researcher</p>
            <br>
            <br>
            <div class="mb-4">
                <label for="full_name" class="block text-gray-700 mb-2">Full Name</label>
                <input type="text" id="full_name" name="full_name" placeholder="Full Name" value="{{ auth()->user()->profileTalent->full_name ?? '' }}"
                    class="px-4 py-2 bg-gray-200 border rounded  focus:outline-none focus:ring-2 focus:ring-navy" style="width:60%;">
                <!-- <button class="text-sm font-medium border-2 border-navy text-navy px-4 py-2 rounded-md">Edit</button> -->
            </div>

            <div class="mb-4">
                <label for="birth_date" class="block text-gray-700 mb-2">Birthday</label>
                <input type="date" id="birth_date" name="birth_date" placeholder="Birth Date" value="{{ auth()->user()->profileTalent->birth_date ?? '' }}"
                    class="px-4 py-2 bg-gray-200 border rounded  focus:outline-none focus:ring-2 focus:ring-navy" style="width:60%;">
                <!-- <button class="text-sm font-medium border-2 border-navy text-navy px-4 py-2 rounded-md">Edit</button> -->
            </div>


            <div class="mb-4">
                <label for="address" class="block text-gray-700 mb-2">Domicile</label>
                <input type="text" id="address" name="address" placeholder="Domicile" value="{{ auth()->user()->profileTalent->address ?? '' }}"
                    class="px-4 py-2 bg-gray-200 border rounded  focus:outline-none focus:ring-2 focus:ring-navy" style="width:60%;">
                <!-- <button class="text-sm font-medium border-2 border-navy text-navy px-4 py-2 rounded-md">Edit</button> -->
            </div>
            
            @php
            $currentGender = old(
            'gender',
            optional(auth()->user()->profileTalent)->gender
            );
            @endphp

            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Gender</label>

                @foreach ($gender as $jk)
                <label class="mr-4">
                    <input
                        type="radio"
                        name="gender"
                        value="{{ $jk }}"
                        @checked($currentGender==$jk)>
                    {{ ucfirst($jk) }}
                </label>
                @endforeach
            </div>


            <div class="mb-4">
                <label for="agency" class="block text-gray-700 mb-2">Agency Name</label>
                <input type="text" id="agency" name="agency" placeholder="Agency" value="{{ auth()->user()->profileTalent->agency ?? '' }}"
                    class="px-4 py-2 bg-gray-200 border rounded  focus:outline-none focus:ring-2 focus:ring-navy" style="width:60%;">
                <!-- <button class="text-sm font-medium border-2 border-navy text-navy px-4 py-2 rounded-md">Edit</button> -->
            </div>

            @php
            $value = old('last_education', optional(auth()->user()->profileTalent)->last_education);
            @endphp

            <div class="mb-4">
                <label for="last_education" class="block text-gray-700 mb-2">Last Education</label>

                <select name="last_education" id="last_education"
                    class="px-4 py-2 bg-gray-200 border rounded focus:outline-none focus:ring-2 focus:ring-navy"
                    style="width:60%;">

                    <option value="">---</option>

                    <option value="smp" @selected($value=='smp' )>SMP</option>
                    <option value="sma" @selected($value=='sma' )>SMA/SMK/Sederajat</option>
                    <option value="d3" @selected($value=='d3' )>D3</option>
                    <option value="d4" @selected($value=='d4' )>D4</option>
                    <option value="s1" @selected($value=='s1' )>S1</option>
                    <option value="s2" @selected($value=='s2' )>S2</option>

                </select>
            </div>


            <div class="mb-4">
                <label for="achievements" class="block text-gray-700 mb-2">Achievements</label>
                <input type="number" id="achievements" name="achievements" placeholder="Achievements" value="{{ auth()->user()->profileTalent->achievements ?? '' }}"
                    class="px-4 py-2 bg-gray-200 border rounded focus:outline-none focus:ring-2 focus:ring-navy" style="width:60%;">
                <!-- <button class="text-sm font-medium border-2 border-navy text-navy px-4 py-2 rounded-md">Edit</button> -->
            </div>

            <div class="mt-8">
                <button type="button" id="btn-continue" class="bg-navy text-white px-8 py-3 rounded-md font-semibold hover:bg-blue-900 transition">Continue</button>
            </div>
        </div>
    </div>

    <!-- continue -->

    <div id="step-2" class="hidden">
        <div class="right-side mb-8 px-4" style="font-family: 'Roboto', sans-serif;">
            <h1 class="text-blue-910 font-bold text-4xl">Profile</h1>
            <p class="text-blue-900 font-bold" style="margin-top: 6px; font-size: 20px;">Talent Researcher</p>
            <br>
            <br>
            <div class="mb-4">
                <label for="phone_number" class="block text-gray-700 mb-2">Phone Number</label>
                <input type="text" id="phone_number" name="phone_number" placeholder="Phone Number" value="{{ auth()->user()->profileTalent->phone_number ?? '' }}"
                    class="px-4 py-2 bg-gray-200 border rounded  focus:outline-none focus:ring-2 focus:ring-navy" style="width:60%;">
                <!-- <button class="text-sm font-medium border-2 border-navy text-navy px-4 py-2 rounded-md">Edit</button> -->
            </div>

            <div class="mb-4">
                <label for="email" class="block text-gray-700 mb-2">Email</label>
                <input type="text" id="email" name="email" placeholder="Email" value="{{ auth()->user()->email }}"
                    class="px-4 py-2 bg-gray-200 border rounded  focus:outline-none focus:ring-2 focus:ring-navy" style="width:60%;">
                <!-- <button class="text-sm font-medium border-2 border-navy text-navy px-4 py-2 rounded-md">Edit</button> -->
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2">Password</label>
                <input type="password" name="password"
                    class="px-4 py-2 bg-gray-200 border rounded w-[60%]">
            </div>

            <div class="mb-4">
                <label class="block text-gray-700 mb-2">LinkedIn URL</label>
                <input type="text" name="linkedin" value="{{ auth()->user()->profileTalent->linkedin ?? '' }}"
                    class="px-4 py-2 bg-gray-200 border rounded w-[60%]">
            </div>

            <div class="mb-6">
                <label class="block text-gray-700 mb-2">Instagram URL</label>
                <input type="text" name="instagram" value="{{ auth()->user()->profileTalent->instagram ?? '' }}"
                    class="px-4 py-2 bg-gray-200 border rounded w-[60%]">
            </div>

            <!-- BUTTON -->
            <div class="flex gap-4 mt-8">
                <button
                    type="button"
                    id="btn-back"
                    class="border border-navy text-navy px-6 py-2 rounded-md">
                    ← Back
                </button>

                <button
                    type="submit"
                    class="bg-navy text-white px-6 py-2 rounded-md">
                    Save Changes
                </button>
            </div>
        </div>
    </div>
    </div>
</form>

<script>
    const step1 = document.getElementById('step-1');
    const step2 = document.getElementById('step-2');

    document.getElementById('btn-continue').addEventListener('click', () => {
        step1.classList.add('hidden');
        step2.classList.remove('hidden');
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    document.getElementById('btn-back').addEventListener('click', () => {
        step2.classList.add('hidden');
        step1.classList.remove('hidden');
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>