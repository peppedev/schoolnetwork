<template>
    <b-navbar :shadow="true" :spaced="true" :centered="true">
        <template slot="brand">
            <inertia-link class="navbar-item" href="/">
                <img
                    class="ml-2 mr-3"
                    src="/icons/icon.svg"
                    alt="Studentsweek"
                >
                <h1 class="is-nunito is-regular is-size-5 is-black">StudentsWeek</h1>
            </inertia-link>
        </template>
        <template slot="start">
            <inertia-link class="navbar-item" href="/">
                {{ __('general.home') }}
            </inertia-link>
            <inertia-link class="navbar-item" href="/docs">
                {{ __('general.docs') }}
            </inertia-link>
            <inertia-link class="navbar-item" href="/support">
                {{ __('general.support') }}
            </inertia-link>
        </template>

        <template slot="end">
            <b-navbar-item tag="div" v-if="!guest">
                <div class="buttons">
                    <inertia-link class="button is-primary" href="/dashboard">
                        <strong>{{ __('general.dashboard') }}</strong>
                    </inertia-link>
                    <a class="button is-light" @click="logout">
                        {{ __('general.logout') }}
                    </a>
                </div>
            </b-navbar-item>
            <b-navbar-item tag="div" v-else>
                <div class="buttons">
                    <inertia-link class="button is-primary" href="/register">
                        <strong>{{ __('general.signup') }}</strong>
                    </inertia-link>
                    <inertia-link class="button is-light" href="/login">
                        {{ __('general.login') }}
                    </inertia-link>
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
    },
    methods: {
        logout() {
            axios.post(route('logout').url()).then(response => {
                window.location = '/';
            });
        }
    }
}
</script>

<style lang="scss">

</style>