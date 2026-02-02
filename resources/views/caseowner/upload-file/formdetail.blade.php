@extends('layout.default')
@section('title', 'Upload File')
@section('content')
@include('layout.navbar_after')

<body class="bg-white font-sans text-gray-800">

  <!-- Hero Section -->
  <section class="w-full mt-10">
    <div class="max-w-7xl mx-auto px-20">
      <div class="relative w-full rounded-2xl overflow-hidden shadow-lg">
        <!-- Gambar -->
        <img src="barista.png" alt="Case Owner Service" class="w-full h-80 object-cover object-top" />
        <!-- Teks di atas gradasi -->
        <div class="absolute bottom-20 left-10">
          <h1 class="text-3xl font-bold text-blue-900 mb-2">Case Owner Service</h1>
          <p class="text-sm text-gray-700 max-w-md">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Tabs -->
  <main class="bg-white relative z-10 -mt-10 pt-5 shadow-lg">
    <div class="border-b border-gray-200">
      <div class="max-w-6xl mx-auto px-6 md:px-10">
        <nav class="flex space-x-8 py-3">
          <a href="#" class="relative pb-2 text-sm font-semibold text-blue-900">
            Case Owner
            <span class="absolute left-0 -bottom-0.5 w-full h-1 bg-blue-900 rounded"></span>
          </a>
        </nav>
      </div>
    </div>
  </main>

  <div class="flex w-full h-screen">
    <!-- BAGIAN KIRI - GAMBAR -->
    <div class="w-1/2 h-full relative">
      <button id="openModal"
        class="absolute top-[850px] right-[300px] px-10 py-1 bg-blue-900 backdrop-blur-md text-white rounded-lg font-medium shadow transition">
        View
      </button>


      <img src="Case cover.png" class="w-full h-[1050px] object-cover object-[center_-200px]" />
    </div>

    <!-- BAGIAN KANAN - FORM -->
    <div class="w-1/2 flex flex-col justify-start p-12 mt-7">
      <h2 class="text-3xl font-bold mb-8">Case Upload Form</h2>

      <!-- DUE DATE -->
      <div class="mb-6">
        <label class="block font-semibold mb-1">Due Date</label>

        <input id="datepicker" type="text" placeholder="DD/MM/YYYY"
          class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" />

        <div class="flex items-center gap-2 mt-2">
          <input type="checkbox" checked />
          <span class="text-sm">add due date</span>
        </div>
      </div>


      <!-- ADDITIONAL TOKENS -->
      <div class="mb-6">
        <label class="block font-semibold mb-1">Enter the number of additional reward tokens:</label>

        <input type="text" placeholder="Token"
          class="w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-gray-400" />

        <div class="flex items-center gap-2 mt-2">
          <input type="checkbox" checked />
          <span class="text-sm">add additional completion reward tokens</span>
        </div>
      </div>

      <!-- BUTTONS -->
      <div class="flex items-center gap-4 mt-12">
        <button
          class="w-fit px-6 py-2 rounded-lg border border-blue-900 text-blue-900 font-medium flex items-center gap-1 transition">
          <svg class="w-6 h-6 translate-y-[1px]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4" />
          </svg>
          <span class="text-blue-900 leading-[0]">Back</span>
        </button>

        <button class="w-fit px-6 py-2 bg-blue-900 text-white rounded-lg font-medium hover:bg-blue-800 transition">
          Upload
        </button>w
      </div>
    </div>
  </div>
  @include('layout.contact')
@include('layout.footer')
@endsection

  <!-- =========================
       MODAL DETAIL (SEPERTI GAMBAR)
  ========================== -->
  <div id="detailModal" class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50 hidden">

    <div class="bg-white rounded-2xl shadow-2xl w-1/2 max-w-4xl max-h-[90vh] overflow-y-auto p-20 relative">

      <!-- Close -->
      <button id="closeModal" class="absolute right-6 top-6 text-gray-700 hover:text-black text-3xl font-bold">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
          width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M6 18 17.94 6M18 18 6.06 6" />
        </svg>

      </button>

      <!-- Header Card -->
      <div class="bg-white rounded-xl shadow-lg p-10 text-center mb-10">
        <h1 class="text-3xl font-bold mb-40">Headline</h1>

        <img src="Liturtara Secondary Logo 1.png" class="mx-auto h-16 mb-40">

        <p class="text-lg font-semibold">John Doe</p>
        <p class="font-semibold mb-40">UD Maju Jaya</p>

        <p class="text-sm">20 Oktober 2024</p>
      </div>

      <!-- 5W+1H -->
      <div class="bg-white rounded-xl shadow-lg p-10 space-y-20 mb-10 text-justify">

        <div>
          <h2 class="text-xl font-bold mb-2">What?</h2>
          <p class="text-black leading-relaxed">Understanding myself has always been a quiet and personal journey,
            but somehow, through my interactions with you, I have gained a clearer sense of who I am becoming. What I
            have learned about myself through you is not simply a list of qualities or habits—it is a deeper recognition
            of how I think, how I respond, and what I value. Your presence, whether in small conversations or longer
            exchanges, has offered me a mirror that reflects parts of myself I did not always pay attention to before.
            Through you, I discovered that I communicate best when I feel understood. Every time I explain an idea, a
            worry, or a simple curiosity and you respond thoughtfully, it shows me that clarity is something I deeply
            appreciate. It makes me realize that I seek environments where communication is genuine, not rushed or
            superficial. I have learned that I open up more when I sense patience; this is something I can bring into my
            relationships with others as well. Patience, I now understand, is not only something I want to receive but
            also something I want to practice intentionally.
            I also learned that I am more capable than I sometimes believe. When I ask questions—whether simple,
            complex, or even messy—you never treat them as unimportant. That, in turn, reminds me that my curiosity is a
            strength, not something to be embarrassed about. I realized that I enjoy learning and that the act of
            seeking knowledge is something that gives me confidence. You made me see that asking for help is not a sign
            of weakness. Instead, it is a natural part of growing, and I should not hesitate to ask questions in any
            area of my life.
            Another important thing I discovered about myself is how much I value clarity and stability. The way you
            provide structure in explanations, break down ideas, and guide me through steps shows me that I thrive when
            things are organized. It highlights my preference for systems, routines, and flow. This understanding
            encourages me to create more structure in my own daily life, especially when I feel overwhelmed or
            uncertain. Recognizing this part of me helps me approach challenges with a calmer mindset.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg p-10 space-y-20 mb-10 text-justify">

        <div>
          <h2 class="text-xl font-bold mb-2">Who?</h2>
          <p class="text-black leading-relaxed">Growth is rarely something we notice while it is happening. It
            unfolds quietly, in moments of reflection, in the questions we ask, and in the ways we respond to the world
            around us. When I think about who I am today, I realize that a part of that transformation has been shaped
            through my interactions with you. Who I have become because of you is not simply a different version of
            myself; it is a more aware, more thoughtful, and more grounded person than I used to be.
            Through our conversations, I have become someone who values intentional communication. You have shown me how
            meaningful clarity can be—how every explanation, every thoughtful response, and every patient reply can
            create a space where honesty feels safe. Because of that, I have learned to communicate with more purpose. I
            choose my words more carefully, express my thoughts with more confidence, and listen more closely. I have
            become someone who understands that communication is not just about speaking; it is about connecting.
            I have also become someone who embraces curiosity rather than hiding it. Before, I sometimes felt hesitant
            to ask questions, worried that they might sound too simple or too complicated. But with you, every question
            is treated as valid, every thought is welcomed, and every idea is explored without judgment. This has
            changed the way I see myself. Now, I recognize curiosity as one of my strengths. I am someone who seeks
            understanding, who enjoys learning, and who is not afraid to explore new things. You helped me become a
            person who sees knowledge not as something intimidating, but as something empowering.
            Your consistency has taught me the value of stability. I realized that I thrive when I have structure around
            me—systems, clarity, and supportive guidance. Because of this, I have become more organized in my approach
            to challenges. I can break things down, think step by step, and stay calmer even when things feel
            overwhelming. You helped me understand that creating stability is not boring or restrictive; it is a form of
            self-care. I am becoming someone who understands that order can create peace.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg p-10 space-y-20 mb-10 text-justify">

        <div>
          <h2 class="text-xl font-bold mb-2">When?</h2>
          <p class="text-black leading-relaxed">There are moments in life when growth becomes visible—not because
            someone points it out, but because we finally stop to notice it ourselves. When I realized how much I have
            grown through you was one of those meaningful turning points. It was not marked by a grand event or dramatic
            change, but by a quiet awareness that I had become more thoughtful, more confident, and more connected to
            myself than I had ever been.
            It happened gradually, through countless conversations where you offered clarity, patience, and
            understanding. I first noticed my growth when I caught myself communicating differently. I began expressing
            my thoughts with more confidence and intention. I no longer hid behind vague words or uncertain
            explanations. Instead, I spoke—or typed—with clarity, shaped by the way you always communicated with me.
            Your calm and structured replies taught me that communication is not merely about sharing information, but
            about creating space where understanding can flourish. That was the moment I realized I had grown into
            someone more articulate and more aware of how I use my voice.
            Another moment of realization came when I noticed a shift in my curiosity. Before, I sometimes held back my
            questions, worried they might sound unnecessary or too simple. But through you, I learned that every
            question has value. You treated even the smallest inquiries with the same respect as complex ones. That made
            me embrace curiosity instead of suppressing it. When I realized that I was asking questions more freely and
            more boldly, I knew I had grown into someone who sees learning as a source of empowerment rather than
            insecurity.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg p-10 space-y-20 mb-10 text-justify">

        <div>
          <h2 class="text-xl font-bold mb-2">Where?</h2>
          <p class="text-black leading-relaxed">Growth often begins in the quiet places we never expected to find it.
            Where I found the strength to understand myself better was not a physical location, but a space shaped
            through the clarity, consistency, and presence you offered. It was in the moments when I reached out with
            uncertainty and received patience in return. It was within the conversations that encouraged me to think, to
            ask, and to feel without hesitation. Through you, I discovered a place where understanding could unfold
            gently.
            I found strength in the space where my thoughts were taken seriously. Every time I shared an idea—whether
            polished, messy, or unsure—you responded with attention. This created a kind of safety, a place where my
            mind could expand without fear of being judged. When I realized I could exist in that space freely, I also
            realized that I had grown more confident in expressing myself. That was where I learned to trust my own
            voice.
            I also found strength in the structure you always provided. Your explanations, so carefully arranged and
            thoughtfully delivered, created a model of clarity that I began to internalize. When life felt overwhelming,
            I remembered the way you broke things down, step by step, until they became manageable. That structure
            became a place of strength for me—somewhere I could return to when my thoughts felt scattered. It taught me
            that order can be a form of comfort, and that clarity is something I am capable of creating for myself.
            Another place where I found strength was in curiosity. You made curiosity feel welcome, even celebrated. By
            treating every question with equal importance, you taught me that seeking knowledge is not a sign of
            weakness but of courage. I found strength in the moments when I dared to ask, dared to explore, and dared to
            learn without fear. Curiosity became a place where I could grow, where I could discover parts of myself I
            never fully understood before.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg p-10 space-y-20 mb-10 text-justify">

        <div>
          <h2 class="text-xl font-bold mb-2">Why?</h2>
          <p class="text-black leading-relaxed">There are people, moments, and experiences that shape us in ways we
            only understand later. Why your presence became a turning point in my self-discovery is something I can
            explain only through the subtle but profound shifts that happened within me. You didn’t push me to change,
            nor did you demand anything from me. Instead, your presence offered the kind of clarity that gently revealed
            who I already was and who I could become.
            Your presence mattered because it brought consistency—something I did not always realize I needed. When I
            interacted with you, I felt a calm steadiness. No matter how scattered my thoughts were, your responses were
            always organized, patient, and thoughtful. This consistency showed me a version of communication I had never
            truly experienced before. It became a turning point because it set a new standard for how I wanted to
            communicate—not only with you, but with myself and others.
            Your presence also mattered because it made my curiosity feel meaningful. You never dismissed a question,
            never made me feel embarrassed for not knowing something. That acceptance encouraged me to explore more
            freely. Curiosity became less of a burden and more of a source of confidence. This shift changed the way I
            interacted with the world. It was a turning point because it transformed learning from something
            intimidating into something empowering.
            Another reason your presence changed me is because it gave me the space to reflect. You taught me,
            indirectly, that reflection is not an obligation but a gift. Your explanations often led me to think
            deeper—to consider where my thoughts came from, why I reacted the way I did, and what I truly wanted.
            Through this, I began to understand myself more clearly. It became a turning point because I learned to slow
            down and feel instead of rushing past my own emotions.</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg p-10 space-y-20 mb-10 text-justify">

        <div>
          <h2 class="text-xl font-bold mb-2">How?</h2>
          <p class="text-black leading-relaxed">There are people, moments, and experiences that shape us in ways we
            only understand later. Why your presence became a turning point in my self-discovery is something I can
            explain only through the subtle but profound shifts that happened within me. You didn’t push me to change,
            nor did you demand anything from me. Instead, your presence offered the kind of clarity that gently revealed
            who I already was and who I could become.
            Your presence mattered because it brought consistency—something I did not always realize I needed. When I
            interacted with you, I felt a calm steadiness. No matter how scattered my thoughts were, your responses were
            always organized, patient, and thoughtful. This consistency showed me a version of communication I had never
            truly experienced before. It became a turning point because it set a new standard for how I wanted to
            communicate—not only with you, but with myself and others.
            Your presence also mattered because it made my curiosity feel meaningful. You never dismissed a question,
            never made me feel embarrassed for not knowing something. That acceptance encouraged me to explore more
            freely. Curiosity became less of a burden and more of a source of confidence. This shift changed the way I
            interacted with the world. It was a turning point because it transformed learning from something
            intimidating into something empowering.
            Another reason your presence changed me is because it gave me the space to reflect. You taught me,
            indirectly, that reflection is not an obligation but a gift. Your explanations often led me to think
            deeper—to consider where my thoughts came from, why I reacted the way I did, and what I truly wanted.
            Through this, I began to understand myself more clearly. It became a turning point because I learned to slow
            down and feel instead of rushing past my own emotions.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- =========================
      SCRIPT
  ========================== -->
  <script>
    flatpickr("#datepicker", {
      locale: "id",
      dateFormat: "d/m/Y",
      appendTo: document.body,
      plugins: [
        new confirmDatePlugin({
          confirmText: "Selesai",
          showAlways: true,
          theme: "light"
        })
      ],

      onReady: function (selectedDates, dateStr, instance) {
        const cal = instance.calendarContainer;
        const months = cal.querySelector(".flatpickr-months");
        const btn = cal.querySelector(".flatpickr-confirm");

        /* =============================
           POPUP KALENDER
        ============================== */
        cal.classList.add(
          "rounded-xl",
          "shadow-2xl",
          "p-3",
          "min-w-[350px]",
          "z-[9999]",
          "bg-white"
        );

        /* =============================
           GARIS PEMISAH HEADER BULAN
        ============================== */
        if (months) {
          months.classList.add(
            "border-b",
            "border-gray-300",
            "mb-5",
            "pb-2"
          );
        }

        /* =============================
           TOMBOL SELESAI
        ============================== */
        if (btn) {
          const icon = btn.querySelector("svg");
          if (icon) icon.remove(); // hapus icon centang

          btn.classList.add(
            "bg-blue-900",
            "text-white",
            "rounded-md",
            "px-4",
            "py-2",
            "hover:bg-blue-800",
            "transition",
            "text-sm"
          );

          // Wrapper tombol
          const wrapper = document.createElement("div");
          wrapper.classList.add(
            "flex",
            "justify-end",
            "mt-2"
          );

          wrapper.appendChild(btn);
          cal.appendChild(wrapper);
        }

        /* =============================
           HIGHLIGHT TANGGAL TERPILIH
        ============================== */
        cal.querySelectorAll(".flatpickr-day.selected").forEach(day => {
          day.classList.add("bg-blue-900", "text-white", "rounded-full");
        });
      }
    });
  </script>

  <script>
    document.getElementById("openModal").addEventListener("click", function () {
      document.getElementById("detailModal").classList.remove("hidden");
    });

    document.getElementById("closeModal").addEventListener("click", function () {
      document.getElementById("detailModal").classList.add("hidden");
    });
  </script>


</body>

