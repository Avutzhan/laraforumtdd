<template>
    <div>
        <div v-if="signedIn">
            <div class="form-group">
                <textarea name="body"
                          id="body"
                          class="form-control"
                          placeholder="Say!"
                          rows="5"
                          required
                          v-model="body"></textarea>

                <button type="submit"
                        class="btn btn-default"
                        @click="addReply">Post</button>
            </div>
        </div>



        <p class="text-center">
            <a href="/login">Sign in</a>
            to participate
        </p>
    </div>
</template>

<script>
    export default {
        props: ['endpoint'],

        data() {
            return {
                body: ''
            }
        },

        computed: {
            signedIn() {
                return window.App.signedIn;
            }
        },

        methods: {
            addReply() {
                axios.post(this.endpoint, { body: this.body })
                    .then(({data}) => {
                        this.body = '';

                        flash('Your reply has been posted.');

                        this.$emit('created', data);
                    });
            }
        }
    }
</script>