<template>
    <v-container>
        <div>
           <reply
                v-for="(reply, index) in content"
                :data="reply"
                :key="reply.id"
                :index="index"
                v-if="content"
        ></reply>
        </div>

    </v-container>
</template>

<script>
    import Reply from './reply'
    export default {
        props: ['question'],
        data() {
            return {
                content: this.question.replies
            }
        },
        components: { Reply },
        created() {
            this.listen()
        },
        methods: {
            listen() {
                EventBus.$on('newReply', (reply) => {
                    this.content.unshift(reply);
                })

                EventBus.$on('deleteReply', (index) => {
                    axios.delete(`/api/question/${this.question.slug}/reply/${this.content[index].id}`)
                        .then(res => {
                            this.content.splice(index, 1);
                        });

                })
            }
        }
    }
</script>

<style scoped>

</style>