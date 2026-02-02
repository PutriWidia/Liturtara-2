@extends('layout.default')
@section('title', 'Docs Detail')
@section('content')
@include('layout.navbar_after')

<body class="bg-gradient-to-br from-blue-50 to-green-50 min-h-screen p-8">

    <!-- WRAPPER AGAR KONTEN DI TENGAH -->
    <div class="max-w-5xl mx-auto"> <!-- DIBESARKAN -->

        <!-- Back Button -->
        <div class="mb-2">
            <button class="flex items-center gap-2 text-sm hover:underline">
                <svg class="w-6 h-6 translate-y-[1px]" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
                <span class="-ml-1 font-semibold">Back</span>
            </button>
        </div>


        <!-- GRID 2 KOLOM -->
        <div class="grid grid-cols-1 lg:grid-cols-[320px_1fr] gap-8 lg:gap-20">

            <!-- LEFT CARD -->
            <div class="bg-white shadow-lg rounded-xl p-3 h-auto lg:h-[530px] w-full lg:w-[350px] relative mx-auto">

                <div
                    class="absolute top-0 right-0 bg-green-500 text-white text-lg font-semibold px-5 py-2 rounded-tr-xl rounded-bl-xl">
                    Complete
                </div>

                <h2 class="text-3xl flex justify-center font-bold mt-10 mb-28">Headline</h2>

                <div class="flex justify-center mb-24">
                    <img src="Liturtara Secondary Logo 1.png" alt="Logo" class="w-48">
                </div>

                <div class="text-center mb-3">
                    <p class="font-semibold text-lg">John Doe</p>
                    <p class="text-black font-semibold">UD Maju Jaya</p>
                </div>

                <p class="text-center text-black text-sm mt-24">
                    20 Oktober 2024
                </p>
            </div>

            <!-- RIGHT CONTENT -->
            <div class="w-full lg:pr-6">

                <h1 class="text-2xl font-semibold mb-2">Lorem ipsum dolor sit amet</h1>

                <!-- Categories -->
                <div class="flex gap-2 mb-3">
                    <span class="border border-blue-900 text-blue-900 text-sm px-3 py-1 rounded-2xl">Category</span>
                    <span class="border border-blue-900 text-blue-900 text-sm px-3 py-1 rounded-2xl">Category</span>
                </div>

                <div class="flex gap-6">

                    <!-- Info Card -->
                    <div class="bg-white shadow-md rounded-xl p-4 w-full sm:w-80 mb-6 relative">

                        <div
                            class="absolute top-0 right-0 bg-gray-200 text-blue-900 font-semibold text-xs px-3 py-2 rounded-bl-lg rounded-tr-lg flex items-center gap-1">
                            <svg class="w-4 h-4 text-blue-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <span>15 Des 2024</span>
                        </div>

                        <div class="flex items-center gap-2 mb-2 text-medium font-semibold">
                            <svg class="w-6 h-6 text-blue-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M12 21a9 9 0 1 0 0-18 9 9 0 0 0 0 18Zm0 0a8.949 8.949 0 0 0 4.951-1.488A3.987 3.987 0 0 0 13 16h-2a3.987 3.987 0 0 0-3.951 3.512A8.948 8.948 0 0 0 12 21Zm3-11a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg>
                            <p>John Doe</p>
                        </div>

                        <div class="flex items-center gap-2 mb-2 text-medium font-semibold">
                            <svg class="w-6 h-6 text-blue-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z" />
                            </svg>
                            <p>UD Maju Jaya</p>
                        </div>

                        <div class="flex items-center gap-2 mb-4 text-medium font-semibold">
                            <svg class="w-6 h-6 text-blue-900" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 10h16M8 14h8m-4-7V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Z" />
                            </svg>
                            <p>2 Oktober 2024</p>
                        </div>

                        <div class="flex justify-end">
                            <button class="text-blue-900 text-sm font-semibold hover:underline">
                                View Profile
                            </button>
                        </div>
                    </div>

                    <!-- Solution By Card -->
                    <div class="bg-white shadow-md rounded-xl p-4 w-full sm:w-80 mb-6 relative">

                        <!-- Title -->
                        <p class="text-gray-500 mb-2">Solution by :</p>

                        <!-- Profile -->
                        <div class="flex items-center gap-3 mb-3">
                            <!-- Avatar -->
                            <img src="karyawan.png" alt="Profile" class="w-6 h-6 rounded-full object-cover" />

                            <!-- Name -->
                            <p class="font-semibold text-gray-900">
                                Muhammad Patel
                            </p>
                        </div>

                        <!-- University -->
                        <div class="flex items-center gap-2 text-gray-700 mb-3">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path fill-rule="evenodd"
                                    d="M10.915 2.345a2 2 0 0 1 2.17 0l7 4.52A2 2 0 0 1 21 8.544V9.5a1.5 1.5 0 0 1-1.5 1.5H19v6h1a1 1 0 1 1 0 2H4a1 1 0 1 1 0-2h1v-6h-.5A1.5 1.5 0 0 1 3 9.5v-.955a2 2 0 0 1 .915-1.68l7-4.52ZM17 17v-6h-2v6h2Zm-6-6h2v6h-2v-6Zm-2 6v-6H7v6h2Z"
                                    clip-rule="evenodd" />
                                <path d="M2 21a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1Z" />
                            </svg>
                            <p class="font-semibold">Universitas Haluoleo</p>
                        </div>

                        <div class="flex justify-between items-center">
                            <!-- Stars -->
                            <div class="flex items-center text-yellow-400 text-sm mt-2">
                                <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z" />
                                </svg>
                                <svg class="w-4 h-4 text-yellow-400 dark:text-white" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                    viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2"
                                        d="M11.083 5.104c.35-.8 1.485-.8 1.834 0l1.752 4.022a1 1 0 0 0 .84.597l4.463.342c.9.069 1.255 1.2.556 1.771l-3.33 2.723a1 1 0 0 0-.337 1.016l1.03 4.119c.214.858-.71 1.552-1.474 1.106l-3.913-2.281a1 1 0 0 0-1.008 0L7.583 20.8c-.764.446-1.688-.248-1.474-1.106l1.03-4.119A1 1 0 0 0 6.8 14.56l-3.33-2.723c-.698-.571-.342-1.702.557-1.771l4.462-.342a1 1 0 0 0 .84-.597l1.753-4.022Z" />
                                </svg>
                            </div>

                            <!-- View Profile -->
                            <button class="text-blue-900 text-sm font-semibold hover:underline">
                                View Profile
                            </button>
                        </div>

                    </div>


                </div>


                <!-- Description -->
                <p class="text-gray-700 leading-relaxed mb-5 text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                    voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>
                <p class="text-gray-700 leading-relaxed mb-5 text-justify">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                    ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                    ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                    reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                </p>

                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4">

                    <!-- LEFT : Solusi Masalah Card -->
                    <div class="flex items-center gap-3 bg-white shadow-md rounded-xl px-5 py-3 w-full max-w-md">
                        <!-- Icon -->
                        <div class="text-blue-900">
                            <svg class="w-5 h-5 text-blue-900 group-hover:text-white transition"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                stroke="currentColor">
                                <path stroke-linejoin="round"
                                    d="M10 3v4a1 1 0 0 1-1 1H5m14-4v16a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V7.914a1 1 0 0 1 .293-.707l3.914-3.914A1 1 0 0 1 9.914 3H18a1 1 0 0 1 1 1Z" />
                            </svg>
                        </div>

                        <!-- Text -->
                        <div class="flex-1">
                            <p class="text-sm font-semibold">Solusi Masalah:</p>
                            <p class="text-sm font-semibold">Lorem ipsum dolor sit amet</p>
                        </div>

                        <!-- View Button -->
                        <button id="openModal"
                        class="bg-blue-900 text-white px-4 py-2 rounded-lg inline-flex items-center gap-2">
                            <span class="-translate-y-[2px] inline-block">View</span>
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                            </svg>
                        </button>
                    </div>

                    <!-- RIGHT : Send Button -->
                    <button class="bg-blue-900 text-white px-3 py-2 rounded-lg flex items-center gap-1">
                        <span class="-translate-y-0.5 inline-block">Download</span>
                        <svg class="w-6 h-5 text-white dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19V5m0 14-4-4m4 4 4-4" />
                        </svg>
                    </button>

                </div>

            </div>

        </div>

    </div>
    @include('layout.footer')
    @endsection


    
  <div id="detailModal" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50 hidden">

    <div class="bg-white rounded-2xl shadow-2xl w-[95%] sm:w-4/5 lg:w-1/2 max-w-4xl max-h-[90vh] overflow-y-auto p-6 sm:p-10 lg:p-20 relative">

      <!-- Close -->
      <button id="closeModal"
        class="absolute right-6 top-6 text-gray-700 hover:text-black text-3xl font-bold">✕</button>

      <!-- Header Card -->
      <div class="bg-white rounded-xl shadow-lg p-10 text-center mb-10">
        <h1 class="text-3xl font-bold mb-40">Headline</h1>

        <img src="Liturtara Secondary Logo 1.png" class="mx-auto h-16 mb-40">

        <p class="text-lg font-semibold">John Doe</p>
        <p class="font-semibold mb-10 sm:mb-20 lg:mb-40">UD Maju Jaya</p>

        <p class="text-sm">20 Oktober 2024</p>
      </div>

      <!-- 5W+1H -->
      <div class="bg-white rounded-xl shadow-lg p-5 sm:p-8 lg:p-10 space-y-6 sm:space-y-12 lg:space-y-20 mb-6 sm:mb-8 lg:mb-10 text-justify">

        <div>
          <h2 class="text-lg sm:text-xl font-bold mb-2">What?</h2>
          <p class="text-sm sm:text-base text-black leading-relaxed">Understanding myself has always been a quiet and personal journey,
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

      <div class="bg-white rounded-xl shadow-lg p-5 sm:p-8 lg:p-10 space-y-6 sm:space-y-12 lg:space-y-20 mb-6 sm:mb-8 lg:mb-10 text-justify">

        <div>
          <h2 class="text-lg sm:text-xl font-bold mb-2">Who?</h2>
          <p class="text-sm sm:text-base text-black leading-relaxed">Growth is rarely something we notice while it is happening. It
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

      <div class="bg-white rounded-xl shadow-lg p-5 sm:p-8 lg:p-10 space-y-6 sm:space-y-12 lg:space-y-20 mb-6 sm:mb-8 lg:mb-10 text-justify">

        <div>
          <h2 class="text-lg sm:text-xl font-bold mb-2">When?</h2>
          <p class="text-sm sm:text-base text-black leading-relaxed">There are moments in life when growth becomes visible—not because
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

      <div class="bg-white rounded-xl shadow-lg p-5 sm:p-8 lg:p-10 space-y-6 sm:space-y-12 lg:space-y-20 mb-6 sm:mb-8 lg:mb-10 text-justify">

        <div>
          <h2 class="text-lg sm:text-xl font-bold mb-2">Where?</h2>
          <p class="text-sm sm:text-base text-black leading-relaxed">Growth often begins in the quiet places we never expected to find it.
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

      <div class="bg-white rounded-xl shadow-lg p-5 sm:p-8 lg:p-10 space-y-6 sm:space-y-12 lg:space-y-20 mb-6 sm:mb-8 lg:mb-10 text-justify">

        <div>
          <h2 class="text-lg sm:text-xl font-bold mb-2">Why?</h2>
          <p class="text-sm sm:text-base text-black leading-relaxed">There are people, moments, and experiences that shape us in ways we
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

      <div class="bg-white rounded-xl shadow-lg p-5 sm:p-8 lg:p-10 space-y-6 sm:space-y-12 lg:space-y-20 mb-6 sm:mb-8 lg:mb-10 text-justify">

        <div>
          <h2 class="text-lg sm:text-xl font-bold mb-2">How?</h2>
          <p class="text-sm sm:text-base text-black leading-relaxed">There are people, moments, and experiences that shape us in ways we
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

  <script>
    document.getElementById("openModal").addEventListener("click", function () {
      document.getElementById("detailModal").classList.remove("hidden");
    });

    document.getElementById("closeModal").addEventListener("click", function () {
      document.getElementById("detailModal").classList.add("hidden");
    });
  </script>

</body>
