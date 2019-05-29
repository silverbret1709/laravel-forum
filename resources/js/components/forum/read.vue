<template>
    <div v-if="question">
        <edit-question
                v-if="editing"
                :data=question
        ></edit-question>

        <show-question
                :data=question
                v-else>

        </show-question>
        <v-container>
            <replies :question="question"></replies>
            <new-reply :questionSlug="question.slug"></new-reply>
        </v-container>
    </div>

</template>

<script>
    import ShowQuestion from './ShowQuestion'
    import EditQuestion from './editQuestion'
    import Replies from '../replies/replies'
    import NewReply from '../replies/newReply'
    export default {
        components: { ShowQuestion, EditQuestion, Replies, NewReply },
        data() {
            return {
                question: null,
                editing: false
            }
        },
        created() {
            this.listen();
            this.getQuestions();

        },
        methods: {
            listen() {
                EventBus.$on('startEditing', () => {
                    this.editing = true;
                });
                EventBus.$on('cancelEditing', () => {
                    this.editing = false;
                })
            },
            getQuestions() {
                axios.get(`/api/question/${this.$route.params.slug}`)
                    .then(res => this.question = res.data.data)
                    .catch(error => error.response.data)

            }
        }
    }
</script>

<style scoped>

</style>