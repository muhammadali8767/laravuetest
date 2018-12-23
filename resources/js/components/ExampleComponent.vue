<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Url</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for="url in urlData">
                                    <td>{{url.title}}</td>
                                    <td><a :href="url.url">{{url.url}}</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'urlData'
        ],
        mounted() {
            this.update()
        },
        methods: {
            update:function() {
                console.log(this.urlData);
            }
        }
    }
</script>
