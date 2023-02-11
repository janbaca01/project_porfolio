<template>

    <transition name="fade">
        <div class="notification"
        v-show="visible"
        >
            <button class="button-flash-message-delete" @click="hide"></button>
            <p>{{ text }}</p>
        </div>
    </transition>

</template>

<script>
    export default {
        props: ["text"],

        data() {
            return {
                visible: false
            };
        },

        created() {
            this.show();
        },

        methods: {
            show() {
                this.visible = true;

                setTimeout(() => this.hide(), 3000);

            },

            hide() {
                this.visible = false;
            }
        }
    };
</script>

<style lang="scss" scoped>
    .notification {
        background-color: rgba(31, 217, 31, 0.849);
        padding: 1em !important;
        margin: 1em !important;
        position: fixed;
        right: 2em;
        bottom: 2em;

        p {
            color: #000;
        }
    }

    .button-flash-message-delete {
        width: 1.3em;
        height: 1.3em;
        padding: 0 !important;
        border-radius: 50%;
        border: none !important;
        background-color: rgba(0, 0, 0, 0.378);
        line-height: 1.2em;

        &:after{
        display: inline-block;
        content: "\00d7"; /* This will render the 'X' */
        color: rgb(36, 34, 34);
        font-weight: 700;
        font-size: 1.5em;
    }
}

.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.35s;
}

.fade-enter,
.fade-leave-to {
    opacity: 0;
}
</style>
