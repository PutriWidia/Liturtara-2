<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
</head>

<body>
    <h1>Reviewer</h1>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>
<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Liturtara - Talent & Case Reviewer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <style>
      body {
        font-family: "Inter", sans-serif;
      }
      .hero-background {
        background-image: url("/image/Group 737.png");
      }
      .cta-background {
        background-image: url("/image/Group 741.png");
      }
    </style>
  </head>
  <body class="text-blue-900 bg-white">
    <!-- Header -->
    <header
      class="fixed top-0 left-0 right-0 bg-white shadow-[0_2px_10px_rgba(0,17,79,0.44)] z-[1000]"
    >
      <div class="max-w-7xl mx-auto px-5">
        <div class="flex items-center justify-between py-4">
          <div class="flex items-center gap-2 bg-transparent p-0">
            <img
              src="{{ asset('image/Liturtara Secondary Logo 1.png') }}"
              alt="Liturtara Logo"
              class="h-10 w-auto border-none outline-none bg-transparent"
            />
          </div>
          <nav class="flex-1 flex justify-center">
            <ul class="flex list-none gap-8">
              <li>
                <a
                  href="#"
                  class="no-underline text-blue-900 font-medium transition-colors duration-300 relative hover:text-green-500"
                  >Home</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="no-underline text-blue-900 font-medium transition-colors duration-300 relative hover:text-green-500"
                  >About Us</a
                >
              </li>
              <li class="relative group">
                <a
                  href="#"
                  class="no-underline text-blue-900 font-medium transition-colors duration-300 relative hover:text-green-500"
                  >Service <i class="fas fa-chevron-down"></i
                ></a>
                <div
                  class="hidden group-hover:block absolute bg-white min-w-[200px] shadow-lg rounded-lg p-4 top-full left-0 z-[1001]"
                >
                  <a
                    href="#"
                    class="block py-2 text-blue-900 no-underline transition-colors duration-300 hover:text-green-500"
                    >Case Owner</a
                  >
                  <a
                    href="#"
                    class="block py-2 text-blue-900 no-underline transition-colors duration-300 hover:text-green-500"
                    >Talent Researcher</a
                  >
                </div>
              </li>
              <li>
                <a
                  href="#"
                  class="no-underline text-blue-900 font-medium transition-colors duration-300 relative hover:text-green-500"
                  >News</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="no-underline text-blue-900 font-medium transition-colors duration-300 relative hover:text-green-500"
                  >Our Contact</a
                >
              </li>
            </ul>
          </nav>
          <div class="flex items-center gap-6">
            <div class="flex items-center gap-1">
              <button
                class="bg-none border-none py-2 px-4 cursor-pointer rounded-full transition-all duration-300 flex items-center gap-1 relative text-blue-900 font-medium no-underline hover:bg-gray-100 hover:text-green-500"
                aria-label="Token Balance"
              >
                <span class="text-sm text-blue-900 font-medium leading-none"
                  >0</span
                >
                <span
                  class="text-sm text-blue-900 font-medium normal-case tracking-normal"
                  >Token</span
                >
              </button>
              <button
                class="bg-none border-none py-2 px-4 cursor-pointer rounded-full transition-all duration-300 flex items-center gap-1 relative text-blue-900 font-medium no-underline hover:bg-gray-100 hover:text-green-500"
                aria-label="Point Balance"
              >
                <span class="text-sm text-blue-900 font-medium leading-none"
                  >0</span
                >
                <span
                  class="text-sm text-blue-900 font-medium normal-case tracking-normal"
                  >Poin</span
                >
              </button>
              <button
                class="bg-none border-none p-2 cursor-pointer rounded-full transition-all duration-300 flex items-center justify-center relative hover:bg-gray-100 hover:scale-110 active:scale-95"
                aria-label="Notifications"
              >
                <img
                  src="{{ asset('image/notifications.png') }}"
                  alt="notifications"
                  class="w-5 h-5 transition-opacity duration-300"
                />
              </button>
            </div>
            <button
              class="bg-white border-2 border-blue-900 text-blue-900 py-2 px-4 rounded-full cursor-pointer flex items-center gap-2 font-medium transition-all duration-300 hover:bg-blue-900 hover:text-white"
            >
              <i class="fas fa-user"></i>
              <span>Account</span>
            </button>
          </div>
        </div>
      </div>
    </header>

    <!-- Hero Section -->
    <section class="relative h-[500px] flex items-center mt-20 overflow-hidden">
      <div
        class="hero-background absolute top-[50px] left-20 right-20 bottom-20 bg-cover bg-center rounded-t-[20px]"
      >
        <div class="absolute inset-0"></div>
      </div>
      <div class="max-w-7xl mx-auto px-5 relative z-[2] w-full">
        <div
          class="text-white max-w-[600px] flex flex-col items-start justify-center h-full pl-9"
        >
          <h1 class="text-[2.5rem] font-extrabold mb-6 leading-tight text-left">
            Talent & Case Reviewer
          </h1>
          <p class="text-xl opacity-95 leading-relaxed text-left max-w-[550px]">
            Give accurate evaluations and insightful feedback to improve case
            results. Your expertise helps shape the future of talent research
            and case management.
          </p>
        </div>
      </div>
      <div
        class="absolute bottom-0 left-0 right-0 bg-white/95 backdrop-blur-[10px] z-[3]"
      >
        <div class="max-w-7xl mx-auto px-5">
          <div class="flex gap-0">
            <button
              class="bg-none border-none py-4 px-8 text-base font-medium text-slate-500 cursor-pointer transition-all duration-300 relative hover:text-blue-900"
              data-tab="case-grading"
            >
              Case Grading
            </button>
            <button
              class="bg-none border-none py-4 px-8 text-base font-medium text-blue-900 cursor-pointer transition-all duration-300 relative hover:text-blue-900 after:content-[''] after:absolute after:bottom-0 after:left-0 after:right-0 after:h-[3px] after:bg-blue-900"
              data-tab="talent-grading"
            >
              Talent Grading
            </button>
          </div>
        </div>
      </div>
    </section>

    <!-- Review Insights Section -->
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-5">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold text-blue-900 mb-4">
            Your Review Insights
          </h2>
          <p class="text-lg text-slate-500">
            Track your reviewing performance and impact.
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div
            class="bg-white rounded-xl p-8 shadow-md flex items-center gap-6 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
          >
            <div
              class="w-15 h-15 bg-green-100 text-green-500 rounded-xl flex items-center justify-center text-2xl"
            >
              <i class="fas fa-check-circle"></i>
            </div>
            <div class="flex-1">
              <h3 class="text-base font-semibold text-blue-900 mb-2">
                Reviews Completed
              </h3>
              <div class="text-4xl font-extrabold text-blue-900 mb-1">150</div>
            </div>
          </div>
          <div
            class="bg-white rounded-xl p-8 shadow-md flex items-center gap-6 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
          >
            <div
              class="w-15 h-15 bg-amber-100 text-amber-500 rounded-xl flex items-center justify-center text-2xl"
            >
              <i class="fas fa-star"></i>
            </div>
            <div class="flex-1">
              <h3 class="text-base font-semibold text-blue-900 mb-2">
                Average Score Given
              </h3>
              <div class="text-4xl font-extrabold text-blue-900 mb-1">4.2</div>
              <div class="text-sm text-slate-500">Balance rating</div>
            </div>
          </div>
          <div
            class="bg-white rounded-xl p-8 shadow-md flex items-center gap-6 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
          >
            <div
              class="w-15 h-15 bg-blue-100 text-blue-500 rounded-xl flex items-center justify-center text-2xl"
            >
              <i class="fas fa-search"></i>
            </div>
            <div class="flex-1">
              <h3 class="text-base font-semibold text-blue-900 mb-2">
                Active Cases
              </h3>
              <div class="text-4xl font-extrabold text-blue-900 mb-1">12</div>
              <div class="text-sm text-slate-500">4 urgent reviews</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Talent Researchers Section -->
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-5">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold text-blue-900 mb-4">
            Talent Researchers to Review
          </h2>
          <p class="text-lg text-slate-500">
            Evaluate performance and provide feedback to Talent Researchers.
          </p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
          <div
            class="bg-white rounded-xl p-6 shadow-md relative transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
          >
            <div
              class="absolute top-4 right-4 bg-blue-900 text-white py-1 px-3 rounded-2xl text-xs font-medium"
            >
              Ready to review
            </div>
            <div class="mb-6">
              <h3 class="text-xl font-bold text-blue-900 mb-2">
                Alex Thompson
              </h3>
              <p class="text-slate-500 mb-4">Market Research</p>
              <div class="flex flex-col gap-2">
                <span class="text-sm text-slate-500"
                  >12 completed projects</span
                >
                <div class="flex items-center gap-2">
                  <span class="text-sm text-slate-500">Current Rating:</span>
                  <div class="flex gap-0.5">
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star-half-alt text-amber-400 text-sm"></i>
                  </div>
                  <span class="font-semibold text-blue-900">4.5</span>
                </div>
                <span class="text-sm text-slate-500">15 Des 2024</span>
              </div>
            </div>
            <div class="flex gap-4">
              <button
                class="bg-transparent border-2 border-slate-200 text-blue-900 py-3 px-6 rounded-lg font-medium cursor-pointer transition-all duration-300 flex items-center gap-2 hover:bg-slate-50 hover:border-blue-900"
              >
                View Profile
              </button>
              <button
                class="bg-blue-900 text-white py-3 px-6 rounded-lg font-medium cursor-pointer transition-all duration-300 border-none flex items-center gap-2 hover:bg-blue-800"
              >
                Grade →
              </button>
            </div>
          </div>

          <div
            class="bg-white rounded-xl p-6 shadow-md relative transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
          >
            <div
              class="absolute top-4 right-4 bg-blue-900 text-white py-1 px-3 rounded-2xl text-xs font-medium"
            >
              Ready to review
            </div>
            <div class="mb-6">
              <h3 class="text-xl font-bold text-blue-900 mb-2">
                Jessica Williams
              </h3>
              <p class="text-slate-500 mb-4">Data Analysis</p>
              <div class="flex flex-col gap-2">
                <span class="text-sm text-slate-500">8 completed projects</span>
                <div class="flex items-center gap-2">
                  <span class="text-sm text-slate-500">Current Rating:</span>
                  <div class="flex gap-0.5">
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                  </div>
                  <span class="font-semibold text-blue-900">4.8</span>
                </div>
                <span class="text-sm text-slate-500">15 Des 2024</span>
              </div>
            </div>
            <div class="flex gap-4">
              <button
                class="bg-transparent border-2 border-slate-200 text-blue-900 py-3 px-6 rounded-lg font-medium cursor-pointer transition-all duration-300 flex items-center gap-2 hover:bg-slate-50 hover:border-blue-900"
              >
                View Profile
              </button>
              <button
                class="bg-blue-900 text-white py-3 px-6 rounded-lg font-medium cursor-pointer transition-all duration-300 border-none flex items-center gap-2 hover:bg-blue-800"
              >
                Grade →
              </button>
            </div>
          </div>

          <div
            class="bg-white rounded-xl p-6 shadow-md relative transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
          >
            <div
              class="absolute top-4 right-4 bg-blue-900 text-white py-1 px-3 rounded-2xl text-xs font-medium"
            >
              Ready to review
            </div>
            <div class="mb-6">
              <h3 class="text-xl font-bold text-blue-900 mb-2">
                Robert Martinez
              </h3>
              <p class="text-slate-500 mb-4">Business Strategy</p>
              <div class="flex flex-col gap-2">
                <span class="text-sm text-slate-500"
                  >15 completed projects</span
                >
                <div class="flex items-center gap-2">
                  <span class="text-sm text-slate-500">Current Rating:</span>
                  <div class="flex gap-0.5">
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="far fa-star text-amber-400 text-sm"></i>
                  </div>
                  <span class="font-semibold text-blue-900">4.3</span>
                </div>
                <span class="text-sm text-slate-500">15 Des 2024</span>
              </div>
            </div>
            <div class="flex gap-4">
              <button
                class="bg-transparent border-2 border-slate-200 text-blue-900 py-3 px-6 rounded-lg font-medium cursor-pointer transition-all duration-300 flex items-center gap-2 hover:bg-slate-50 hover:border-blue-900"
              >
                View Profile
              </button>
              <button
                class="bg-blue-900 text-white py-3 px-6 rounded-lg font-medium cursor-pointer transition-all duration-300 border-none flex items-center gap-2 hover:bg-blue-800"
              >
                Grade →
              </button>
            </div>
          </div>

          <div
            class="bg-white rounded-xl p-6 shadow-md relative transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
          >
            <div
              class="absolute top-4 right-4 bg-blue-900 text-white py-1 px-3 rounded-2xl text-xs font-medium"
            >
              Ready to review
            </div>
            <div class="mb-6">
              <h3 class="text-xl font-bold text-blue-900 mb-2">
                Lisa Anderson
              </h3>
              <p class="text-slate-500 mb-4">Financial Analysis</p>
              <div class="flex flex-col gap-2">
                <span class="text-sm text-slate-500"
                  >10 completed projects</span
                >
                <div class="flex items-center gap-2">
                  <span class="text-sm text-slate-500">Current Rating:</span>
                  <div class="flex gap-0.5">
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                  </div>
                  <span class="font-semibold text-blue-900">4.9</span>
                </div>
                <span class="text-sm text-slate-500">15 Des 2024</span>
              </div>
            </div>
            <div class="flex gap-4">
              <button
                class="bg-transparent border-2 border-slate-200 text-blue-900 py-3 px-6 rounded-lg font-medium cursor-pointer transition-all duration-300 flex items-center gap-2 hover:bg-slate-50 hover:border-blue-900"
              >
                View Profile
              </button>
              <button
                class="bg-blue-900 text-white py-3 px-6 rounded-lg font-medium cursor-pointer transition-all duration-300 border-none flex items-center gap-2 hover:bg-blue-800"
              >
                Grade →
              </button>
            </div>
          </div>

          <div
            class="bg-white rounded-xl p-6 shadow-md relative transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
          >
            <div
              class="absolute top-4 right-4 bg-blue-900 text-white py-1 px-3 rounded-2xl text-xs font-medium"
            >
              Ready to review
            </div>
            <div class="mb-6">
              <h3 class="text-xl font-bold text-blue-900 mb-2">Noah Patel</h3>
              <p class="text-slate-500 mb-4">UX Research</p>
              <div class="flex flex-col gap-2">
                <span class="text-sm text-slate-500">9 completed projects</span>
                <div class="flex items-center gap-2">
                  <span class="text-sm text-slate-500">Current Rating:</span>
                  <div class="flex gap-0.5">
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="far fa-star text-amber-400 text-sm"></i>
                  </div>
                  <span class="font-semibold text-blue-900">4.0</span>
                </div>
                <span class="text-sm text-slate-500">15 Des 2024</span>
              </div>
            </div>
            <div class="flex gap-4">
              <button
                class="bg-transparent border-2 border-slate-200 text-blue-900 py-3 px-6 rounded-lg font-medium cursor-pointer transition-all duration-300 flex items-center gap-2 hover:bg-slate-50 hover:border-blue-900"
              >
                View Profile
              </button>
              <button
                class="bg-blue-900 text-white py-3 px-6 rounded-lg font-medium cursor-pointer transition-all duration-300 border-none flex items-center gap-2 hover:bg-blue-800"
              >
                Grade →
              </button>
            </div>
          </div>

          <div
            class="bg-white rounded-xl p-6 shadow-md relative transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
          >
            <div
              class="absolute top-4 right-4 bg-blue-900 text-white py-1 px-3 rounded-2xl text-xs font-medium"
            >
              Ready to review
            </div>
            <div class="mb-6">
              <h3 class="text-xl font-bold text-blue-900 mb-2">Sofia Nguyen</h3>
              <p class="text-slate-500 mb-4">Machine Learning</p>
              <div class="flex flex-col gap-2">
                <span class="text-sm text-slate-500"
                  >11 completed projects</span
                >
                <div class="flex items-center gap-2">
                  <span class="text-sm text-slate-500">Current Rating:</span>
                  <div class="flex gap-0.5">
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star text-amber-400 text-sm"></i>
                    <i class="fas fa-star-half-alt text-amber-400 text-sm"></i>
                    <i class="far fa-star text-amber-400 text-sm"></i>
                  </div>
                  <span class="font-semibold text-blue-900">3.8</span>
                </div>
                <span class="text-sm text-slate-500">15 Des 2024</span>
              </div>
            </div>
            <div class="flex gap-4">
              <button
                class="bg-transparent border-2 border-slate-200 text-blue-900 py-3 px-6 rounded-lg font-medium cursor-pointer transition-all duration-300 flex items-center gap-2 hover:bg-slate-50 hover:border-blue-900"
              >
                View Profile
              </button>
              <button
                class="bg-blue-900 text-white py-3 px-6 rounded-lg font-medium cursor-pointer transition-all duration-300 border-none flex items-center gap-2 hover:bg-blue-800"
              >
                Grade →
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Reviews & Feedback Section -->
    <section class="py-16">
      <div class="max-w-7xl mx-auto px-5">
        <div class="text-center mb-12">
          <h2 class="text-4xl font-bold text-blue-900 mb-4">
            Reviews & Feedback
          </h2>
          <p class="text-lg text-slate-500">
            What Case Owners and Talent Researchers say about your reviews.
          </p>
        </div>
        <div class="flex justify-center mb-12">
          <div
            class="bg-white rounded-xl py-6 px-8 shadow-md flex items-center gap-4"
          >
            <div class="text-5xl font-extrabold text-blue-900">4.3</div>
            <div class="text-2xl text-amber-400">
              <i class="fas fa-star"></i>
            </div>
            <div class="text-slate-500 font-medium">6 Reviews</div>
          </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
          <div
            class="bg-white rounded-xl p-6 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
          >
            <div class="flex justify-between items-start mb-4">
              <div class="flex items-center gap-4">
                <div
                  class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center text-slate-500"
                >
                  <i class="fas fa-user"></i>
                </div>
                <div>
                  <h4 class="text-base font-semibold text-blue-900 mb-1">
                    Sarah Johnson
                  </h4>
                  <p class="text-sm text-slate-500">Case Owner</p>
                </div>
              </div>
              <div class="flex flex-col items-end gap-1">
                <div class="flex gap-0.5">
                  <i class="fas fa-star text-amber-400 text-sm"></i>
                  <i class="fas fa-star text-amber-400 text-sm"></i>
                  <i class="fas fa-star text-amber-400 text-sm"></i>
                  <i class="fas fa-star text-amber-400 text-sm"></i>
                  <i class="fas fa-star text-amber-400 text-sm"></i>
                </div>
                <span class="text-xs text-slate-500">2 Oktober 2024</span>
              </div>
            </div>
            <p class="text-slate-500 leading-relaxed italic">
              "Exceptional attention to detail and very helpful feedback. The
              review process was thorough and constructive."
            </p>
          </div>

          <div
            class="bg-white rounded-xl p-6 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
          >
            <div class="flex justify-between items-start mb-4">
              <div class="flex items-center gap-4">
                <div
                  class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center text-slate-500"
                >
                  <i class="fas fa-user"></i>
                </div>
                <div>
                  <h4 class="text-base font-semibold text-blue-900 mb-1">
                    Michael Chen
                  </h4>
                  <p class="text-sm text-slate-500">Talent Researcher</p>
                </div>
              </div>
              <div class="flex flex-col items-end gap-1">
                <div class="flex gap-0.5">
                  <i class="fas fa-star text-amber-400 text-sm"></i>
                  <i class="fas fa-star text-amber-400 text-sm"></i>
                  <i class="fas fa-star text-amber-400 text-sm"></i>
                  <i class="fas fa-star text-amber-400 text-sm"></i>
                  <i class="far fa-star text-amber-400 text-sm"></i>
                </div>
                <span class="text-xs text-slate-500">12 maret 2024</span>
              </div>
            </div>
            <p class="text-slate-500 leading-relaxed italic">
              "Very professional and constructive feedback. Helped me improve my
              research methodology significantly."
            </p>
          </div>

          <div
            class="bg-white rounded-xl p-6 shadow-md transition-all duration-300 hover:-translate-y-1 hover:shadow-xl"
          >
            <div class="flex justify-between items-start mb-4">
              <div class="flex items-center gap-4">
                <div
                  class="w-12 h-12 bg-slate-100 rounded-full flex items-center justify-center text-slate-500"
                >
                  <i class="fas fa-user"></i>
                </div>
                <div>
                  <h4 class="text-base font-semibold text-blue-900 mb-1">
                    Emily Rodriguez
                  </h4>
                  <p class="text-sm text-slate-500">Case Owner</p>
                </div>
              </div>
              <div class="flex flex-col items-end gap-1">
                <div class="flex gap-0.5">
                  <i class="fas fa-star text-amber-400 text-sm"></i>
                  <i class="fas fa-star text-amber-400 text-sm"></i>
                  <i class="fas fa-star text-amber-400 text-sm"></i>
                  <i class="fas fa-star text-amber-400 text-sm"></i>
                  <i class="fas fa-star text-amber-400 text-sm"></i>
                </div>
                <span class="text-xs text-slate-500">5 mei 2024</span>
              </div>
            </div>
            <p class="text-slate-500 leading-relaxed italic">
              "Outstanding reviewer with great insights. Really appreciated the
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- Pagination (add this after the reviews grid, before closing the Reviews & Feedback Section) -->
    <div class="flex items-center justify-center gap-4 mt-8">
      <button
        class="bg-white border-2 border-slate-200 text-blue-900 py-3 px-4 rounded-lg font-medium cursor-pointer transition-all duration-300 flex items-center gap-2 hover:bg-blue-900 hover:text-white hover:border-blue-900"
      >
        <i class="fas fa-chevron-left"></i>
      </button>
      <span class="text-slate-500 font-medium">Page 1 of 2</span>
      <button
        class="bg-white border-2 border-slate-200 text-blue-900 py-3 px-4 rounded-lg font-medium cursor-pointer transition-all duration-300 flex items-center gap-2 hover:bg-blue-900 hover:text-white hover:border-blue-900"
      >
        Next <i class="fas fa-chevron-right"></i>
      </button>
    </div>

    <!-- Call to Action Section -->
    <section class="relative pt-16 pb-0 overflow-hidden">
      <div
        class="cta-background absolute top-[100px] left-0 right-0 bottom-0 z-[1] bg-cover bg-center"
      ></div>
      <div class="max-w-7xl mx-auto px-5 relative z-[2]">
        <div class="w-1/2 ml-0 mr-auto">
          <h2
            class="pt-12 text-[2.5rem] font-bold mb-6 leading-tight text-left text-white"
          >
            The future of your business, starts with Liturtara
          </h2>
          <p
            class="text-lg mb-8 opacity-90 leading-relaxed text-left text-white"
          >
            Lets explore and discuss with the MetaNesia team to help your
            business enter the metaverse world.
          </p>
          <button
            class="bg-green-500 text-white border-none py-4 px-4 mb-5 rounded-lg text-lg font-semibold cursor-pointer inline-flex items-center gap-2 transition-all duration-300 hover:bg-green-600"
          >
            Contact Now <i class="fas fa-chevron-right"></i>
          </button>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#00114f] text-white pt-12 pb-4">
      <div class="max-w-7xl mx-auto px-5">
        <div class="flex justify-between mb-8">
          <div class="flex-1">
            <div class="flex items-center gap-2 mb-4">
              <img
                src="{{ asset('image/liturtara putih.png') }}"
                alt="Liturtara Logo"
                class="h-10 w-auto"
              />
            </div>
            <p class="text-slate-300 leading-relaxed mb-6">
              Jl. Geger Kalong Hilir, Sukarasa,Kec. Sukasari, Kota Bandung, Jawa
              Barat 40152
            </p>
            <div class="flex gap-4">
              <a
                href="#"
                class="flex items-center justify-center w-10 h-10 bg-slate-700 text-white rounded-full no-underline transition-all duration-300 hover:bg-green-500"
              >
                <i class="fab fa-facebook-f"></i>
              </a>
              <a
                href="#"
                class="flex items-center justify-center w-10 h-10 bg-slate-700 text-white rounded-full no-underline transition-all duration-300 hover:bg-green-500"
              >
                <i class="fab fa-instagram"></i>
              </a>
              <a
                href="#"
                class="flex items-center justify-center w-10 h-10 bg-slate-700 text-white rounded-full no-underline transition-all duration-300 hover:bg-green-500"
              >
                <i class="fab fa-twitter"></i>
              </a>
              <a
                href="#"
                class="flex items-center justify-center w-10 h-10 bg-slate-700 text-white rounded-full no-underline transition-all duration-300 hover:bg-green-500"
              >
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
          <div class="flex gap-12">
            <div>
              <h4 class="text-lg font-semibold mb-4">Company</h4>
              <ul class="list-none">
                <li class="mb-2">
                  <a
                    href="#"
                    class="text-slate-300 no-underline transition-colors duration-300 hover:text-green-500"
                    >Home</a
                  >
                </li>
                <li class="mb-2">
                  <a
                    href="#"
                    class="text-slate-300 no-underline transition-colors duration-300 hover:text-green-500"
                    >About</a
                  >
                </li>
                <li class="mb-2">
                  <a
                    href="#"
                    class="text-slate-300 no-underline transition-colors duration-300 hover:text-green-500"
                    >News</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <h4 class="text-lg font-semibold mb-4">Service</h4>
              <ul class="list-none">
                <li class="mb-2">
                  <a
                    href="#"
                    class="text-slate-300 no-underline transition-colors duration-300 hover:text-green-500"
                    >Case Owner</a
                  >
                </li>
                <li class="mb-2">
                  <a
                    href="#"
                    class="text-slate-300 no-underline transition-colors duration-300 hover:text-green-500"
                    >Talent Researcher</a
                  >
                </li>
              </ul>
            </div>
            <div>
              <h4 class="text-lg font-semibold mb-4">Help</h4>
              <ul class="list-none">
                <li class="mb-2">
                  <a
                    href="#"
                    class="text-slate-300 no-underline transition-colors duration-300 hover:text-green-500"
                    >Contact Us</a
                  >
                </li>
                <li class="mb-2">
                  <a
                    href="#"
                    class="text-slate-300 no-underline transition-colors duration-300 hover:text-green-500"
                    >FAQ</a
                  >
                </li>
                <li class="mb-2">
                  <a
                    href="#"
                    class="text-slate-300 no-underline transition-colors duration-300 hover:text-green-500"
                    >Terms and Conditions</a
                  >
                </li>
                <li class="mb-2">
                  <a
                    href="#"
                    class="text-slate-300 no-underline transition-colors duration-300 hover:text-green-500"
                    >Privacy Policy</a
                  >
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="text-center pt-8 border-t border-slate-700">
          <p class="text-slate-300">© 2024 Liturtara. All rights reserved.</p>
        </div>
      </div>
    </footer>
  </body>
</html>

</html>
