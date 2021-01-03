<template>
  <div id="omega">
        <navbar :guest="guest"></navbar>
        <main :role="role" :class="page" :id="page">
            <slot></slot>
        </main>
  </div>
</template>

<script>
import Navbar from '@/Components/Navbar';

export default {
    components: {
        Navbar
    },
    props: {
        role: String,
        page: String,
        guest: Boolean
    }
}
</script>

<style>

</style>