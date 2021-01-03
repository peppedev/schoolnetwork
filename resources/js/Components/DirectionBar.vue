<template>
    <nav class="level mb-0" id="dbar">
        <div class="level-left">
            <inertia-link :href="to">
                <i class="fas fa-chevron-left is-black is-size-4 ml-4 mr-3"></i>
            </inertia-link>
            <h3 class="is-nunito is-black is-bold is-size-1">{{ page }}</h3>
        </div>
    </nav>
</template>

<script>
export default {
    name: 'DirectionBar',
    props: {
        page: String,
        to: String
    }
}
</script>

<style lang="scss">
// Direction Bar custom css
#dbar {
    .level-left {
        h3 {
            letter-spacing: -2.5px;
            display: inline-block;
        }
    }
}
</style>