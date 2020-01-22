<template>
  <div>
    <nav-bar />

    <slot />

    <page-footer />
  </div>
</template>

<script>
import NavBar from '@/Shared/NavBar'
import PageFooter from '@/Shared/PageFooter'

export default {
  components: {
    NavBar,
    PageFooter
  }
}
</script>

<style scoped>

</style>
