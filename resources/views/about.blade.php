@extends('layout.default')
@section('title', 'Tentang Kami | Liturtara')

@include('layout.navbar')

@section('content')

<!-- WRAPPER WITH GRADIENT BACKGROUND -->
<div class="relative w-full bg-gradient-to-br from-blue-50 via-white to-green-50">

  <!-- LITURTARA PROFILE -->
  <section class="fade-in-section w-full px-6 py-20">
    <div class="max-w-6xl mx-auto">
      <div class="rounded-2xl overflow-hidden shadow-lg">
        <div class="relative">
          <img 
            src="{{ asset('image/open-book-with-white-background 1.png') }}" 
            alt="Liturtara Profile" 
            class="w-full h-80 object-cover"
          />
          <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-white/90 to-transparent p-6">
            <h3 class="text-3xl md:text-4xl font-extrabold tracking-wide text-[#0a2e5c] uppercase">
              Liturtara Profile
            </h3>
            <p class="text-gray-600 text-sm md:text-base">
              A literacy-driven digital consulting platform empowering MSMEs across Indonesia.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT LITURTARA AT A GLANCE -->
  <section class="fade-in-section w-full px-6 py-20 text-center">
    <div class="max-w-6xl mx-auto">
      <h2 class="text-3xl md:text-5xl font-extrabold tracking-wider text-[#0a2e5c] mb-8 uppercase">
        About Liturtara at a Glance
      </h2>
      <p class="max-w-3xl mx-auto text-base md:text-lg text-gray-700 leading-relaxed">
        Liturtara is a digital consulting platform that bridges academia, professionals, and businesses 
        in solving real-world business challenges. We connect MSMEs, students, academics, and young consultants 
        through a collaborative ecosystem powered by research and tokenization.
        <br><br>
        Through this ecosystem, MSMEs gain access to strategic and affordable solutions, 
        while young talents earn hands-on experience and professional portfolios. 
        With our web-based technology and the “TARA” token system, 
        Liturtara fosters cross-sector collaboration to achieve inclusive and sustainable 
        digital economic growth across Indonesia.
      </p>
      <div class="flex justify-center mt-10">
        <div class="w-full md:w-3/4 lg:w-2/3 bg-gray-100 rounded-2xl h-64 flex items-center justify-center shadow-inner">
          <span class="material-icons text-gray-400 text-8xl">
            play_circle_filled
          </span>
        </div>
      </div>
    </div>
  </section>
</div>

<!-- VISION & MISSION -->
<section class="bg-gray-50 mt-20 py-16 fade-in-section">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-8">
    <!-- VISION -->
    <div class="bg-white p-10 rounded-2xl shadow-md">
      <h3 class="text-2xl md:text-3xl font-bold text-[#0a2e5c] mb-6 uppercase tracking-wide">
        Our Vision
      </h3>
      <ul class="space-y-4 text-gray-700 text-base leading-relaxed">
        <li class="flex items-start">
          <span class="text-green-600 mr-2">•</span>
          To become a bridge for collaboration between academia, professionals, and industries 
          in creating real, measurable solutions for Indonesia’s MSMEs.
        </li>
        <li class="flex items-start">
          <span class="text-green-600 mr-2">•</span>
          To promote inclusive, literacy-based, and sustainable digital economic growth.
        </li>
      </ul>
    </div>

    <!-- MISSION -->
    <div class="bg-white p-10 rounded-2xl shadow-md">
      <h3 class="text-2xl md:text-3xl font-bold text-[#0a2e5c] mb-6 uppercase tracking-wide">
        Our Mission
      </h3>
      <ul class="space-y-4 text-gray-700 text-base leading-relaxed">
        <li class="flex items-start">
          <span class="text-green-600 mr-2">•</span>
          To connect MSMEs with academics and young professionals in solving research-driven business problems.
        </li>
        <li class="flex items-start">
          <span class="text-green-600 mr-2">•</span>
          To build a fair incentive and reputation system through our tokenized ecosystem “TARA.”
        </li>
        <li class="flex items-start">
          <span class="text-green-600 mr-2">•</span>
          To transform academic research and insights into practical, real-world business solutions.
        </li>
        <li class="flex items-start">
          <span class="text-green-600 mr-2">•</span>
          To create a cross-sector innovation network through collaboration among academia, industry, and communities.
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- TEAM MEMBERS -->
<section class="py-20 fade-in-section">
  <div class="max-w-6xl mx-auto px-6 text-center">
    <h2 class="text-3xl md:text-5xl font-extrabold text-[#0a2e5c] uppercase tracking-wider mb-12">
      Team Members
    </h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10 place-items-center">
      @foreach ([
        [
          'Bobby Romadhoni', 
          'Chief Executive Officer', 
          'image/CEO - Bobby.png', 
          'A Senior Brand Executive at UniPin with experience in project management, business development, and brand strategy for companies such as Cakap, Telkomsel, Pertamina Gas Negara, and Indigo Telkom. Holds a Master’s degree in Design and a Bachelor’s in Management from Telkom University. Former Head of BEM FEB Telkom and exchange participant at Universiti Utara Malaysia.'
        ],
        [
          'Azhar Muhammad Fuad', 
          'Chief Operating Officer', 
          'image/COO - Azhar.png', 
          'CEO of Curaweda Palagan Innotech & VP of Operations at PT Universal Cloma Catalyst. Holds a Master’s in Business Administration from ITB and a Bachelor’s in Manufacturing Engineering from ITS. Experienced in intelligent systems development and international publications. Former President of BEM PPNS-ITS and member of the English Debate Team.'
        ],
        [
          'Lasata Larasati', 
          'Chief Marketing Officer', 
          'image/CMO - Lasata Larasati.png', 
          'A Business Administration graduate from Telkom University focusing on Business Analysis. Experienced as an HR Intern at PT Kimia Farma Tbk. Active in campus organizations and awardee of Adbis Juara 2022–2024.'
        ]
      ] as [$name, $role, $photo, $bio])
        <div 
          class="bg-white p-6 rounded-2xl shadow-md w-64 hover:shadow-lg transition cursor-pointer"
          onclick="openModal('{{ $name }}', '{{ $role }}', '{{ $photo }}', `{{ $bio }}`)">
          <img src="{{ asset($photo) }}" alt="{{ $name }}" class="w-32 h-32 object-cover rounded-xl mx-auto mb-4">
          <h3 class="font-bold text-[#0a2e5c] text-lg">{{ $name }}</h3>
          <p class="text-gray-500 text-sm">{{ $role }}</p>
        </div>
      @endforeach
    </div>
  </div>
</section>

@include('layout.contact')
@include('layout.footer')
@endsection

<!-- ======== MODAL ======== -->
<div id="teamModal" class="fixed inset-0 bg-black/60 flex items-center justify-center z-50 hidden">
  <div class="bg-white rounded-2xl max-w-lg w-full mx-4 p-8 relative shadow-lg animate-fadeIn">
    <button onclick="closeModal()" class="absolute top-4 right-4 text-gray-400 hover:text-gray-700 text-2xl">&times;</button>
    <img id="modalPhoto" src="" alt="" class="w-32 h-32 object-cover rounded-xl mx-auto mb-4">
    <h3 id="modalName" class="font-bold text-2xl text-[#0a2e5c] mb-1"></h3>
    <p id="modalRole" class="text-gray-500 mb-4"></p>
    <p id="modalBio" class="text-gray-700 text-base leading-relaxed"></p>
  </div>
</div>

<!-- ======== STYLE ======== -->
<style>
.fade-in-section {
  opacity: 0;
  transform: translateY(20px);
  transition: opacity 0.8s ease-out, transform 0.8s ease-out;
}
.fade-in-section.is-visible {
  opacity: 1;
  transform: translateY(0);
}
@keyframes fadeIn {
  from { opacity: 0; transform: scale(0.95); }
  to { opacity: 1; transform: scale(1); }
}
.animate-fadeIn {
  animation: fadeIn 0.3s ease-out forwards;
}
</style>

<!-- ======== SCRIPT ======== -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const sections = document.querySelectorAll(".fade-in-section");
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.2 });
  sections.forEach(section => observer.observe(section));
});

function openModal(name, role, photo, bio) {
  document.getElementById('modalName').innerText = name;
  document.getElementById('modalRole').innerText = role;
  document.getElementById('modalPhoto').src = photo;
  document.getElementById('modalBio').innerText = bio;
  document.getElementById('teamModal').classList.remove('hidden');
}

function closeModal() {
  document.getElementById('teamModal').classList.add('hidden');
}
</script>