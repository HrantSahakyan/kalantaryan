<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        I'm an example component.
                        <ul v-for="post in posts">
                            <li>{{ post.text }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            posts: [
                {text: 'Learn JavaScript'},
                {text: 'Learn Vue'},
                {text: 'Build something awesome'}
            ],
        }
    },
    mounted() {
        console.log('Component mounted.')
    },


}
</script>
