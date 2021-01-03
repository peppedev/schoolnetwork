<template>
    <main-layout>
        <direction-bar page="Test" to="/"></direction-bar>
    </main-layout>
</template>

<script>
import MainLayout from '@/Layouts/MainLayout';
import DirectionBar from '@/Components/DirectionBar';

export default {
    name: 'Testing',
    components: {
        MainLayout,
        DirectionBar
    }
}
</script>

<style>

</style>