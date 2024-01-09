<template>
    <ul>
        <li v-for="message in messages">
            {{message}}
        </li>
    </ul>
</template>

<script>
import Pusher from 'pusher-js';
export default {
    name: "Notification",
    data() {
        return {
            messages: [],
        };
    },
    created() {
        const pusher = new Pusher('Here you need to provide your PUSHER_APP_KEY', {
            cluster: 'Here you need to provide your PUSHER_APP_CLUSTER',
        });

        const channel = pusher.subscribe('blog-channel');
        channel.bind('blog-event', this.handlePusherEvent);
    },
    methods: {
        handlePusherEvent(data) {

            this.messages.push(data);
        },
    },
}
</script>

<style scoped>

</style>
