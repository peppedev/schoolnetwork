<template>
    <main-layout page="dashboard" :guest="false">
        <direction-bar :page="__('general.subscriptions')" to="/"></direction-bar>
        <div id="cardsholder" class="is-flex">
            <day-card :hours="hours" :dayId="1" @selectHour="hourClicked"></day-card>
            <day-card :hours="hours" :dayId="2" @selectHour="hourClicked"></day-card>
        </div>
        <b-modal 
            v-model="isDayComponentChosen"
            has-modal-card
            trap-focus
            :destroy-on-hide="false"
            aria-role="dialog"
            aria-modal>
            <template>
                <div class="card" v-if="selected">
                    <h1>{{ selected.hourId }}</h1>
                </div>
            </template>
        </b-modal>
    </main-layout>
</template>

<script>
import MainLayout from '@/Layouts/MainLayout';
import DirectionBar from '@/Components/DirectionBar';
import DayCard from '@/Components/DayCard';

export default {
    name: 'Testing',
    data() {
        return {
            hours: [
                'Danza',
                true,
                true,
                true,
                true
            ],
            isDayComponentChosen: false,
            selected: null
        }
    },
    watch: {
        selected: function () {
            console.log(this.selected);
        }
    },
    components: {
        MainLayout,
        DirectionBar,
        DayCard
    },
    methods: {
        hourClicked(selected) {
            this.selected = selected;
            this.isDayComponentChosen = true;
        }
    }
}
</script>

<style lang="scss">
body, html, #omega {
    height: 100%;
}

body {
    overflow: hidden;
}
</style>