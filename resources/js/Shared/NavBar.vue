<template>
  <nav
    ref="header"
    class="fixed w-full z-10 top-0"
  >
    <div
      ref="progress"
      class="h-1 z-20 top-0"
    />

    <div class="w-full md:max-w-4xl mx-auto flex flex-wrap items-center justify-between mt-0 py-3">
      <div class="pl-4">
        <a
          class="text-gray-900 text-base no-underline hover:no-underline font-extrabold text-xl"
          href="#"
        >
          Blog
        </a>
      </div>

      <div class="block lg:hidden pr-4">
        <button
          id="nav-toggle"
          class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-900 hover:border-teal-500 appearance-none focus:outline-none"
        >
          <svg
            class="fill-current h-3 w-3"
            viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg"
          ><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" /></svg>
        </button>
      </div>

      <div
        ref="nav-content"
        class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden lg:block mt-2 lg:mt-0 bg-gray-100 md:bg-transparent z-20"
      >
        <ul class="list-reset lg:flex justify-end flex-1 items-center">
          <li class="mr-3">
            <a
              class="inline-block text-gray-600 no-underline hover:text-gray-900 hover:text-underline py-2 px-4"
              href="#"
            >Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</template>

<script>
export default {
  mounted() {
    const navContent = this.$refs.navContent;

    document.addEventListener('scroll', () => {
      if(window.scrollY > 10){
        this.$refs.header.classList.add("bg-white");
        this.$refs.header.classList.add("shadow");
        navContent.classList.remove("bg-gray-100");
        navContent.classList.add("bg-white");

        return;
      }

      this.$refs.header.classList.remove("bg-white");
      this.$refs.header.classList.remove("shadow");
      navContent.classList.remove("bg-white");
      navContent.classList.add("bg-gray-100");
    })
  }
}
</script>
