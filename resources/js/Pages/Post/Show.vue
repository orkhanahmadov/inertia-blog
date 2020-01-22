<template>
  <div>
    <span class="text-base md:text-sm text-teal-500 font-bold">&lt;</span>
    <inertia-link
      :href="$route('home')"
      class="text-base md:text-sm text-teal-500 font-bold no-underline hover:underline"
    >
      BACK TO BLOG
    </inertia-link>
    <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">
      {{ post.title }}
    </h1>
    <p class="text-sm md:text-base font-normal text-gray-600">
      {{ post.formatted_created_at }}
    </p>

    <p
      class="mt-5"
      v-text="post.content"
    />
  </div>
</template>

<script>
import Layout from '@/Shared/Layout'

export default {
  layout: Layout,

  props: {
    post: {
      type: Object,
      required: true
    }
  },

  metaInfo () {
    return {
      title: this.post.title
    }
  },
}
</script>
