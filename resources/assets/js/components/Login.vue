<template>
    <section class="hero is-fullheight is-light">
        <div class="hero-body">
            <div class="container">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-grey has-text-centered">IMechanix</h3>
                    <p class="subtitle has-text-grey has-text-centered">Please login to proceed.</p>
                    <div class="box">
                        <form @submit.prevent="login">
                            <div class="field">
                                <label class="label has-text-grey has-text-weight-light">Username</label>
                                <div class="control has-icons-left">
                                    <input class="input" type="text" placeholder="Username" v-model="credentials.email">
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label has-text-grey has-text-weight-light">Password</label>
                                <p class="control has-icons-left">
                                    <input class="input" type="password" placeholder="Password" v-model="credentials.password">
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </p>
                            </div>
                            <button class="button is-primary is-medium is-fullwidth">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
        data() {
            return {
                credentials: {
                    email: '',
                    password: ''
                }
            }
        },
        methods: {
            login() {
                this.$store.dispatch('auth/login', this.credentials)
            }
        },
        mounted() {
            
        }
    }
</script>
