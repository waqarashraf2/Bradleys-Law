@extends('layouts.app')

@section('title', 'Login or Register — Bradleys Law')
@section('robots', 'noindex, nofollow')

@section('content')


<section 
  class="flex justify-center items-center min-h-screen py-40 relative bg-fixed bg-center bg-cover overflow-hidden" 
  style="background-image: url('https://tse4.mm.bing.net/th/id/OIP.y-JCbcWu_PkOmnJzr4e1KQHaE7?cb=12&rs=1&pid=ImgDetMain&o=7&rm=3');"
>
  <!-- Dark overlay for contrast -->
  <div class="absolute inset-0 bg-gradient-to-br from-[#0a0f1c]/90 via-[#1a2238]/85 to-[#0a0f1c]/90 py-40"></div>

  <!-- Subtle glowing accent circles -->
  <div class="absolute top-20 left-1/3 w-64 h-64 bg-[#c9a227]/10 rounded-full blur-3xl"></div>
  <div class="absolute bottom-10 right-1/3 w-72 h-72 bg-[#c9a227]/10 rounded-full blur-3xl"></div>

  <div class="relative bg-white/95 backdrop-blur-lg p-8 md:p-10 rounded-2xl shadow-2xl w-full max-w-md border border-[#c9a227]/30 transition-all duration-700 ease-in-out transform opacity-0 section-fade-in">
    <!-- Header Section -->
    <div class="text-center mb-8">
      <div class="flex justify-center mb-4">
        <div class="w-12 h-12 bg-gradient-to-br from-[#1a2238] to-[#2c3e50] rounded-full flex items-center justify-center shadow-md shadow-[#c9a227]/30">
          <svg class="w-6 h-6 text-[#f6f1e5]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
          </svg>
        </div>
      </div>
      <h1 class="text-2xl md:text-3xl font-bold font-playfair text-[#1a2238]" id="formTitle">Welcome Back</h1>
      <p class="text-gray-600 mt-2 text-sm" id="formSubtitle">Sign in to your account to continue</p>
      <div class="w-16 h-1 bg-gradient-to-r from-[#c9a227] to-[#e6d18a] mx-auto mt-3 rounded-full"></div>
    </div>

    <!-- Messages -->
    @if ($errors->any())
      <div class="bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-lg mb-6 transition-all duration-500 ease-in-out transform -translate-x-4 opacity-0 error-message">
        <div class="flex items-center">
          <svg class="w-5 h-5 text-red-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path>
          </svg>
          <span class="text-sm">{{ $errors->first() }}</span>
        </div>
      </div>
    @endif

    @if (session('status'))
      <div class="bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-lg mb-6 transition-all duration-500 ease-in-out transform -translate-x-4 opacity-0 success-message">
        <div class="flex items-center">
          <svg class="w-5 h-5 text-green-500 mr-3 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
          </svg>
          <span class="text-sm">{{ session('status') }}</span>
        </div>
      </div>
    @endif

    <!-- LOGIN FORM -->
    <form id="loginForm" method="POST" action="{{ route('auth.login') }}" class="space-y-6 transition-all duration-500 ease-in-out">
      @csrf
      <div class="space-y-4">
        <div class="transition-all duration-500 ease-in-out form-group transform translate-y-4 opacity-0">
          <label class="block text-sm font-semibold text-gray-800 mb-2">Email Address</label>
          <input type="email" name="email" placeholder="your@email.com" required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-white text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#c9a227] focus:border-transparent transition-all duration-300">
        </div>

        <div class="transition-all duration-500 ease-in-out form-group transform translate-y-4 opacity-0">
          <label class="block text-sm font-semibold text-gray-800 mb-2">Password</label>
          <input type="password" name="password" placeholder="Enter your password" required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-white text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#c9a227] focus:border-transparent transition-all duration-300">
          <div class="mt-2 text-right">
            <a href="{{ route('password.request') }}" class="text-xs font-semibold text-[#1a2238] hover:text-[#c9a227]">
              Forgot password?
            </a>
          </div>
        </div>
      </div>

      <button type="submit" 
        class="w-full bg-gradient-to-r from-[#1a2238] to-[#2c3e50] text-white py-3.5 rounded-lg font-semibold transition-all duration-500 transform translate-y-4 opacity-0 hover:from-[#2a3350] hover:to-[#3c4e60] hover:scale-[1.03] shadow-lg hover:shadow-[#c9a227]/40 login-btn">
        Sign In
      </button>
    </form>

    <!-- REGISTER FORM -->
    <form id="registerForm" method="POST" action="{{ route('auth.register') }}" class="space-y-6 hidden transition-all duration-500 ease-in-out">
      @csrf
      <div class="space-y-4">
        <div class="form-group transform translate-y-4 opacity-0">
          <label class="block text-sm font-semibold text-gray-800 mb-2">Full Name</label>
          <input type="text" name="name" placeholder="John Doe" required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-white text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#c9a227]">
        </div>

        <div class="form-group transform translate-y-4 opacity-0">
          <label class="block text-sm font-semibold text-gray-800 mb-2">Email Address</label>
          <input type="email" name="email" placeholder="your@email.com" required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-white text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#c9a227]">
        </div>

        <div class="form-group transform translate-y-4 opacity-0">
          <label class="block text-sm font-semibold text-gray-800 mb-2">Password</label>
          <input type="password" name="password" placeholder="Create a strong password" required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-white text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#c9a227]">
        </div>

        <div class="form-group transform translate-y-4 opacity-0">
          <label class="block text-sm font-semibold text-gray-800 mb-2">Confirm Password</label>
          <input type="password" name="password_confirmation" placeholder="Confirm your password" required
            class="w-full px-4 py-3 border border-gray-300 rounded-lg bg-white text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-[#c9a227]">
        </div>
      </div>

      <button type="submit" 
        class="w-full bg-gradient-to-r from-[#1a2238] to-[#2c3e50] text-white py-3.5 rounded-lg font-semibold transition-all duration-500 transform translate-y-4 opacity-0 hover:from-[#2a3350] hover:to-[#3c4e60] hover:scale-[1.03] shadow-lg hover:shadow-[#c9a227]/40 register-btn">
        Create Account
      </button>
    </form>

    <!-- Toggle Section -->
    <div class="text-center mt-8 pt-6 border-t border-gray-200">
      <p class="text-sm text-gray-600">
        <span id="toggleText">Don't have an account?</span>
        <button id="toggleLink" class="text-[#1a2238] font-semibold ml-1 transition-all duration-300 hover:text-[#c9a227] focus:outline-none focus:ring-2 focus:ring-[#c9a227]/50 rounded px-2 py-1">
          Sign up
        </button>
      </p>
    </div>
  </div>
</section>


<script>
document.addEventListener('DOMContentLoaded', function() {
  const loginForm = document.getElementById('loginForm');
  const registerForm = document.getElementById('registerForm');
  const toggleLink = document.getElementById('toggleLink');
  const toggleText = document.getElementById('toggleText');
  const formTitle = document.getElementById('formTitle');
  const formSubtitle = document.getElementById('formSubtitle');
  const container = document.querySelector('section > div');
  
  // Initialize animations
  setTimeout(() => {
    container.classList.remove('opacity-0');
    
    // Animate form groups
    const formGroups = document.querySelectorAll('.form-group');
    formGroups.forEach((group, index) => {
      setTimeout(() => {
        group.classList.remove('translate-y-4', 'opacity-0');
        group.classList.add('translate-y-0', 'opacity-100');
      }, index * 100);
    });
    
    // Animate buttons
    const loginBtn = document.querySelector('.login-btn');
    setTimeout(() => {
      if (loginBtn) {
        loginBtn.classList.remove('translate-y-4', 'opacity-0');
        loginBtn.classList.add('translate-y-0', 'opacity-100');
      }
    }, 400);
    
    // Animate messages
    const messages = document.querySelectorAll('.error-message, .success-message');
    messages.forEach(msg => {
      setTimeout(() => {
        msg.classList.remove('-translate-x-4', 'opacity-0');
        msg.classList.add('translate-x-0', 'opacity-100');
      }, 200);
    });
  }, 100);
  
  // Toggle functionality
  toggleLink.addEventListener('click', (e) => {
    e.preventDefault();
    const isLoginVisible = !loginForm.classList.contains('hidden');
    
    // Add transition effect
    container.style.transform = 'scale(0.98)';
    container.style.opacity = '0.8';
    
    setTimeout(() => {
      // Toggle forms
      loginForm.classList.toggle('hidden');
      registerForm.classList.toggle('hidden');
      
      // Update content
      if (loginForm.classList.contains('hidden')) {
        formTitle.textContent = 'Create Account';
        formSubtitle.textContent = 'Join us today to get started';
        toggleText.textContent = 'Already have an account?';
        toggleLink.textContent = 'Sign in';
      } else {
        formTitle.textContent = 'Welcome Back';
        formSubtitle.textContent = 'Sign in to your account to continue';
        toggleText.textContent = "Don't have an account?";
        toggleLink.textContent = 'Sign up';
      }
      
      // Reset container style
      container.style.transform = '';
      container.style.opacity = '';
      
      // Animate new form elements
      const visibleForm = loginForm.classList.contains('hidden') ? registerForm : loginForm;
      const formGroups = visibleForm.querySelectorAll('.form-group');
      const submitBtn = visibleForm.querySelector('button[type="submit"]');
      
      // Reset animation state
      formGroups.forEach(group => {
        group.classList.add('translate-y-4', 'opacity-0');
        group.classList.remove('translate-y-0', 'opacity-100');
      });
      
      if (submitBtn) {
        submitBtn.classList.add('translate-y-4', 'opacity-0');
        submitBtn.classList.remove('translate-y-0', 'opacity-100');
      }
      
      // Animate with delay
      setTimeout(() => {
        formGroups.forEach((group, index) => {
          setTimeout(() => {
            group.classList.remove('translate-y-4', 'opacity-0');
            group.classList.add('translate-y-0', 'opacity-100');
          }, index * 100);
        });
        
        if (submitBtn) {
          setTimeout(() => {
            submitBtn.classList.remove('translate-y-4', 'opacity-0');
            submitBtn.classList.add('translate-y-0', 'opacity-100');
          }, formGroups.length * 100);
        }
      }, 50);
    }, 200);
  });
  
  // Form submission handling
  const forms = document.querySelectorAll('form');
  forms.forEach(form => {
    form.addEventListener('submit', function(e) {
      const submitBtn = this.querySelector('button[type="submit"]');
      if (submitBtn) {
        const originalText = submitBtn.textContent;
        submitBtn.innerHTML = `
          <svg class="animate-spin -ml-1 mr-2 h-4 w-4 text-white inline" fill="none" viewBox="0 0 24 24">
            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
          </svg>
          Processing...
        `;
        submitBtn.disabled = true;
      }
    });
  });
});
</script>

<style>
  /* Ensure text visibility */
  input {
    color: #1a2238 !important;
    background-color: white !important;
  }
  
  input::placeholder {
    color: #6b7280 !important;
  }
  
  /* Focus states */
  input:focus {
    background-color: white !important;
    color: #1a2238 !important;
    box-shadow: 0 0 0 3px rgba(201, 162, 39, 0.1);
  }
  
  /* Smooth transitions */
  * {
    transition-property: color, background-color, border-color, transform, opacity;
    transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    transition-duration: 300ms;
  }
</style>
@endsection
