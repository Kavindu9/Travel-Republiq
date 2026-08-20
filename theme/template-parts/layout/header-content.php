<?php
/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package travel-republiq
 */

?>

<header id="masthead">
	<!-- Navigation Container -->
<nav class="bg-[#fff] text-white" style="box-shadow: 0 2px 15px rgba(0, 0, 0, .1);">
  <div class="container mx-auto px-4 py-2">
    <div class="flex items-center justify-between h-16">
      
      <!-- Logo -->
      <div class="text-xl font-bold">
        <a class="" href="https://trmaldives.com/"><img alt="Travel RepubliQ Maldives" src="https://trmaldives.com/wp-content/uploads/2026/07/17549031248133.webp" class="img-fluid w-[55%]" width="230" height="45"></a>
      </div>
      
      <!-- Hamburger Button (Mobile Only) -->
      <button id="menu-btn" class="md:hidden text-black">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
      
      <!-- Desktop Menu (Hidden on Mobile) -->
      <div class="hidden md:flex space-x-6">
        <a href="<?php echo esc_url(home_url('/travel-guide/')); ?>" class="font-body text-lg text-black hover:text-blue-400">TRAVEL GUIDE</a>
        <a href="<?php echo esc_url(home_url('/services/')); ?>" class="font-body text-lg text-black hover:text-blue-400">SERVICES</a>
        <a href="<?php echo esc_url(home_url('/spo/')); ?>" class="font-body text-lg text-black hover:text-blue-400">SPO</a>
        <!-- <a href="#" class="text-black hover:text-blue-400">Contact</a> -->
      </div>
      
    </div>
    
    <!-- Mobile Menu (Hidden by Default) -->
    <div id="mobile-menu" class="hidden md:hidden pb-4">
      <a href="<?php echo esc_url(home_url('/travel-guide/')); ?>" class="font-body text-lg text-black block py-2 hover:bg-blue-400 px-2 rounded">TRAVEL GUIDE</a>
      <a href="<?php echo esc_url(home_url('/services/')); ?>" class="font-body text-lg text-black block py-2 hover:bg-blue-400 px-2 rounded">SERVICES</a>
      <a href="<?php echo esc_url(home_url('/spo/')); ?>" class="font-body text-lg text-black block py-2 hover:bg-blue-400 px-2 rounded">SPO</a>
      <!-- <a href="#" class="font-body text-lg text-black block py-2 hover:bg-blue-400 px-2 rounded">Contact</a> -->
    </div>
    
  </div>
</nav>

<style>
	#masthead {
		transition: .5s;
		z-index: 997;
/* 		padding: 15px 0 0; */
		top: 41px;
		box-shadow: 0 2px 15px rgba(0, 0, 0, .1);
	}

</style>
	

</header>

<script>
  // Get the button and menu elements
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  
  // Add click event listener
  menuBtn.addEventListener('click', () => {
    // Toggle the 'hidden' class
    mobileMenu.classList.toggle('hidden');
  });
</script>

<!-- </header>#masthead -->
