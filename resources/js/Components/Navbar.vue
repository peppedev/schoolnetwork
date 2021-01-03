<template>
    <b-navbar :shadow="true" :spaced="true" :centered="true">
        <template slot="brand">
            <b-navbar-item>
                <img
                    class="ml-2 mr-3"
                    src="/icons/icon.svg"
                    alt="Studentsweek"
                >
                <h1 class="is-nunito is-regular is-size-5 is-black">StudentsWeek</h1>
            </b-navbar-item>
        </template>
        <template slot="start">
            <b-navbar-item href="#">
                {{ __('general.home') }}
            </b-navbar-item>
            <b-navbar-item href="#">
                {{ __('general.docs') }}
            </b-navbar-item>
            <b-navbar-item href="#">
                {{ __('general.support') }}
            </b-navbar-item>
        </template>

        <template slot="end">
            <b-navbar-item tag="div" v-if="guest">
                <div class="buttons">
                    <a class="button is-primary">
                        <strong>{{ __('general.dashboard') }}</strong>
                    </a>
                    <a class="button is-light">
                        {{ __('general.logout') }}
                    </a>
                </div>
            </b-navbar-item>
            <b-navbar-item tag="div" v-else>
                <div class="buttons">
                    <a class="button is-primary">
                        <strong>{{ __('general.signup') }}</strong>
                    </a>
                    <a class="button is-light">
                        {{ __('general.login') }}
                    </a>
                </div>
            </b-navbar-item>
        </template>
    </b-navbar>
</template>

<script>
export default {
    name: 'Navbar',
    props: {
        guest: Boolean
    }
}
</script>

<style lang="scss">

</style>