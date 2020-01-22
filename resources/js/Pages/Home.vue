<template>
  <div>
    <div
      v-for="post in posts"
      :key="post.id"
      class="my-5"
    >
      <inertia-link :href="$route('posts.show', post)">
        <h1 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-2 text-3xl md:text-4xl">
          {{ post.title }}
        </h1>
      </inertia-link>
      <p class="text-sm md:text-base font-normal text-gray-600">
        {{ post.formatted_created_at }}
      </p>

      <p class="mt-3">
        <span>{{ post.short_content }}...</span>
        <inertia-link
          class="inline-block ml-2 text-blue-500 underline"
          :href="$route('posts.show', post)"
        >
          Read more
        </inertia-link>
      </p>
    </div>
  </div>
</template>

<script>
import Layout from '@/Shared/Layout'

export default {
  layout: Layout,

  props: {
    posts: {
      type: Array,
      required: true
    }
  }
}
</script>
