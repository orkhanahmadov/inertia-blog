<template>
  <div>
    <nav-bar />

    <div class="container w-full md:max-w-3xl mx-auto pt-20">
      <div class="w-full px-4 md:px-6 text-xl text-gray-800 leading-normal">
        <div class="font-sans">
          <slot />
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import NavBar from '@/Shared/NavBar'
import PageFooter from '@/Shared/PageFooter'

export default {
  components: {
    NavBar
  }
}
</script>

<style scoped>

</style>
