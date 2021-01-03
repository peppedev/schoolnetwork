<template>
  <div id="omega">
        <navbar></navbar>
        <main :role="mainRole" :class="mainClass" :id="mainId">
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
        mainRole: String,
        mainId: String,
        mainClass: String
    }
}
</script>

<style>

</style>