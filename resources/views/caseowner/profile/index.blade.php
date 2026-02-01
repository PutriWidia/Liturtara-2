@extends('layout.default')
@section('title', 'Profile')
@section('content')

@include('layout.navbar_after')

<section class="max-w-7xl mx-auto px-6 md:px-10 py-10">
  <div class="grid grid-cols-1 md:grid-cols-4 gap-8">

    <!-- Sidebar -->
    <aside>
      <div class="bg-white rounded-xl shadow-md overflow-hidden">
        <ul class="divide-y font-semibold text-sm">
          <li class="bg-blue-900 text-white px-6 py-3">Profile</li>
          <li><a href="#" class="block px-6 py-3 text-blue-900 hover:bg-blue-900 hover:text-white">Company</a></li>
          <li><a href="#" class="block px-6 py-3 text-blue-900 hover:bg-blue-900 hover:text-white">Project</a></li>
        </ul>
      </div>
    </aside>

    <!-- Content -->
    <div class="md:col-span-3">
      <div class="bg-white rounded-xl shadow-md p-8">

        <!-- Header -->
        <div class="flex items-center justify-between mb-6">
          <div>
            <h2 class="text-xl font-bold text-blue-900">Profile</h2>
            <p class="text-sm text-gray-500">Case Owner</p>
          </div>
          <span class="text-xs bg-blue-100 text-blue-900 px-3 py-1 rounded-full font-semibold">SME</span>
        </div>

        <!-- Avatar -->
        <div class="flex items-center gap-6 mb-8">
          <div class="w-32 h-32 border-2 border-blue-500 rounded-md overflow-hidden">
            @if($profile->photo)
              <img src="{{ asset('storage/' . $profile->photo) }}" class="w-full h-full object-cover">
            @else
              <div class="w-full h-full flex items-center justify-center text-gray-400 text-sm">
                Photo
              </div>
            @endif
          </div>

          <form method="POST" action="{{ route('caseowner.profile.photo') }}" enctype="multipart/form-data" class="flex gap-3">
            @csrf
            <label class="cursor-pointer border border-blue-900 text-blue-900 px-4 py-2 rounded-md text-sm">
              Change Photo
              <input type="file" name="photo" accept="image/*" class="hidden" onchange="this.form.submit()">
            </label>

            @if($profile->photo)
              <a href="{{ asset('storage/' . $profile->photo) }}" target="_blank" class="text-sm text-blue-600 underline">
                View
              </a>
            @endif
          </form>
        </div>

        <!-- FORM -->
        <form method="POST" action="{{ route('caseowner.profile.update') }}" class="space-y-5">
          @csrf

          {{-- NAME --}}
          <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
            <label class="text-sm font-semibold text-blue-900">Name</label>
            <input
              type="text"
              name="full_name"
              value="{{ old('full_name', $profile->full_name) }}"
              disabled
              class="profile-input md:col-span-2 w-full bg-gray-100 border border-gray-300 rounded-md px-4 py-2 text-sm cursor-not-allowed"
            />
            <button type="button" class="edit-btn border border-blue-900 text-blue-900 px-4 py-2 rounded-md text-sm">
              Edit
            </button>
          </div>

          {{-- BIRTH DATE --}}
          <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
            <label class="text-sm font-semibold text-blue-900">Date Birth</label>
            <input
              type="date"
              name="birth_date"
              value="{{ old('birth_date', $profile->birth_date) }}"
              disabled
              class="profile-input md:col-span-2 w-full bg-gray-100 border border-gray-300 rounded-md px-4 py-2 text-sm cursor-not-allowed"
            />
            <button type="button" class="edit-btn border border-blue-900 text-blue-900 px-4 py-2 rounded-md text-sm">
              Edit
            </button>
          </div>

          {{-- ADDRESS --}}
          <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
            <label class="text-sm font-semibold text-blue-900">Domicile</label>
            <input
              type="text"
              name="address"
              value="{{ old('address', $profile->address) }}"
              disabled
              class="profile-input md:col-span-2 w-full bg-gray-100 border border-gray-300 rounded-md px-4 py-2 text-sm cursor-not-allowed"
            />
            <button type="button" class="edit-btn border border-blue-900 text-blue-900 px-4 py-2 rounded-md text-sm">
              Edit
            </button>
          </div>

          {{-- GENDER --}}
          <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
            <label class="text-sm font-semibold text-blue-900">Gender</label>

            <div class="md:col-span-2 flex gap-6 text-sm profile-input">
              <label class="flex items-center gap-2">
                <input type="radio" name="gender" value="male" disabled {{ $profile->gender === 'male' ? 'checked' : '' }}>
                Male
              </label>

              <label class="flex items-center gap-2">
                <input type="radio" name="gender" value="female" disabled {{ $profile->gender === 'female' ? 'checked' : '' }}>
                Female
              </label>

              <label class="flex items-center gap-2">
                <input type="radio" name="gender" value="other" disabled {{ $profile->gender === 'other' ? 'checked' : '' }}>
                Other
              </label>
            </div>

            <button type="button" class="edit-btn border border-blue-900 text-blue-900 px-4 py-2 rounded-md text-sm">
              Edit
            </button>
          </div>

          {{-- PHONE --}}
          <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
            <label class="text-sm font-semibold text-blue-900">Phone Number</label>
            <input
              type="text"
              name="phone_number"
              value="{{ old('phone_number', $profile->phone_number) }}"
              disabled
              class="profile-input md:col-span-2 w-full bg-gray-100 border border-gray-300 rounded-md px-4 py-2 text-sm cursor-not-allowed"
            />
            <button type="button" class="edit-btn border border-blue-900 text-blue-900 px-4 py-2 rounded-md text-sm">
              Edit
            </button>
          </div>

          {{-- EMAIL --}}
          <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-center">
            <label class="text-sm font-semibold text-blue-900">Email</label>
            <input
              type="text"
              value="{{ auth()->user()->email }}"
              disabled
              class="md:col-span-2 w-full bg-gray-100 border border-gray-300 rounded-md px-4 py-2 text-sm cursor-not-allowed"
            />
            <span></span>
          </div>

          {{-- SAVE --}}
          <div class="pt-6">
            <button type="submit" class="bg-blue-900 text-white px-6 py-3 rounded-lg hover:bg-blue-800">
              Save
            </button>
          </div>

        </form>

      </div>
    </div>
  </div>
</section>

@include('layout.footer')

{{-- SCRIPT --}}
<script>
document.querySelectorAll('.edit-btn').forEach(btn => {
  btn.addEventListener('click', () => {
    const row = btn.closest('.grid');

    row.querySelectorAll('input').forEach(input => {
      input.disabled = false;
      input.classList.remove('bg-gray-100', 'cursor-not-allowed');
      input.classList.add('bg-white');
    });

    btn.textContent = 'Editing...';
    btn.disabled = true;
    btn.classList.add('opacity-50');
  });
});

// enable semua input sebelum submit
document.querySelector('form').addEventListener('submit', () => {
  document.querySelectorAll('input').forEach(input => {
    input.disabled = false;
  });
});
</script>

@endsection
