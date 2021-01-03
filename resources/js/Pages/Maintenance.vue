<template>
    <main role="main is-unselectable">
        <div class="columns is-mobile is-centered is-vcentered" id="maintenance">
            <div class="column is-half has-text-centered is-nunito is-light is-size-1">
                <img src="icons/icon.svg" alt="logo" id="logo">
                <h1 id="brand">StudentsWeek</h1>
            </div>
        </div>
    </main>
</template>

<script>
export default {
    name: 'Maintenance'
}
</script>

<style>
body, html, main, #maintenance{
    height: 100%;
}

#brand {
    color: #2F2F2F;
}

#logo {
    width: 13%;
}
</style>