<template>
    <div>
        <h1 class="font-normal text-3xl text-grey-darkest leading-none mb-8">
            Your Achievements
        </h1>

        <ul>
            <li
                v-for="achievement in achievements"
                :key="achievement.id"
                v-text="achievement.name"
            ></li>
        </ul>
    </div>
</template>

<script>
export default {
    data() {
        return {
            achievements: [],
        };
    },

    created() {
        axios.get("/api/achievements").then((response) => {
            console.log(response.data);
            this.achievements = response.data;
            console.log(this.achievements);
        });
    },
};
</script>
