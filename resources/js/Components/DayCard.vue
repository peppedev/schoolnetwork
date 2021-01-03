<template>
    <div class="daycard column is-one-quarter-widescreen is-one-third-tablet has-text-centered is-flex is-flex-direction-column is-align-items-center">
        <header class="mb-3 mt-5">
            <h4 class="is-nunito is-lighter is-white is-size-1 is-uppercase">{{__('general.day')}} {{ dayId }}</h4>
        </header>
        <div class="spacer mb-4"></div>
        <div class="hours mb-6">
            <div class="hour level is-size-4 is-mobile" v-for="(hour, index) in hours" :key="index" @click="selectHour(dayId, index)">
                <div class="level-left" v-if="hour===true">
                    <p>{{__('general.hour')}} {{ index+1 }}</p>
                </div>
                <div class="level-left" v-else>
                    <p>{{ hour }}</p>
                </div>
                <div class="level-right" v-if="hour===true">
                    <i class="fas fa-plus-circle"></i>
                </div>
                <div class="level-right" v-else>
                    <i class="fas fa-chevron-circle-right"></i>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            
        }
    },
    props: {
        hours: Array,
        dayId: Number
    },
    methods: {
        selectHour(dayId, hourId) {
            let selected = {
                hourId: hourId,
                dayId: dayId
            };

            this.$emit('selectHour', selected);
        }
    }
}
</script>