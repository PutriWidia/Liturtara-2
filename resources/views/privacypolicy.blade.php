@extends('layout.default')
@section('title', 'Privacy Policy | Liturtara')

@include('layout.navbar')

@section('content')
<!-- WRAPPER -->
<div class="relative w-full bg-gradient-to-br from-blue-50 via-white to-green-50 min-h-screen">
  <section class="max-w-5xl mx-auto px-6 py-24 fade-in-section">
    <h1 class="text-3xl md:text-4xl font-extrabold text-[#0a2e5c] mb-4 uppercase">
      Liturtara Privacy Policy
    </h1>
    <p class="text-gray-500 text-sm mb-12">Effective Date: October 14, 2024</p>

    <!-- CONTENT -->
    <div class="space-y-10 text-gray-700 leading-relaxed text-justify">
      <div>
        <h2 class="text-xl md:text-2xl font-bold text-[#0a2e5c] mb-2 uppercase">Introduction</h2>
        <p>
          At Liturtara, we are committed to protecting your privacy and ensuring that your personal information 
          remains secure. This Privacy Policy explains how we collect, use, and safeguard the personal data 
          you provide when using our services. By accessing or using the Liturtara platform, you agree to comply 
          with this Privacy Policy.
        </p>
      </div>

      <div>
        <h2 class="text-xl md:text-2xl font-bold text-[#0a2e5c] mb-2 uppercase">Acknowledgment and Consent</h2>
        <p>
          By registering, accessing, or using any of our platforms, you acknowledge that you have read, 
          understood, and agreed to this Privacy Policy. If you do not agree to this policy, 
          you may choose not to use our services.
        </p>
      </div>

      <div>
        <h2 class="text-xl md:text-2xl font-bold text-[#0a2e5c] mb-2 uppercase">Summary</h2>
        <p>
          We may update this Privacy Policy from time to time to reflect changes in our services or 
          compliance with applicable laws. Notice of any updates will be provided through our platform 
          or official communication channels.
        </p>
      </div>

      <div>
        <h3 class="font-semibold text-lg md:text-xl text-[#0a2e5c] mb-2">Changes from Previous Versions</h3>
        <p>
          We have made improvements to our services and data collection methods to better meet user needs 
          and comply with updated regulations.
        </p>
      </div>

      <div>
        <h2 class="text-xl md:text-2xl font-bold text-[#0a2e5c] mb-2 uppercase">
          What Data Do We Collect About You?
        </h2>
        <ul class="list-disc pl-6 space-y-2">
          <li><strong>Personal Information:</strong> Full name, email address, and phone number.</li>
          <li><strong>Transaction Information:</strong> Payment details, selected services, and activity history.</li>
          <li><strong>Technical Data:</strong> IP address, device preferences, browser type, and cookies used for analytics.</li>
        </ul>
      </div>

      <div>
        <h2 class="text-xl md:text-2xl font-bold text-[#0a2e5c] mb-2 uppercase">
          How Do We Use Your Data?
        </h2>
        <ul class="list-disc pl-6 space-y-2">
          <li>To improve our services and platform features.</li>
          <li>To process your transactions and service requests.</li>
          <li>To send notifications, promotions, or updates about our services.</li>
          <li>To conduct data analysis and understand user preferences.</li>
          <li>To maintain the security of your account and personal information.</li>
        </ul>
      </div>
    </div>
  </section>
</div>

@include('layout.footer')
@endsection

<!-- STYLE -->
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
</style>

<!-- SCRIPT -->
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
</script>
