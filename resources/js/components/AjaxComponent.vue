<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <button v-if="!is_refresh" @click="update" class="btn btn-primary">Refresh - {{ id }} ...</button>
                        <span class="badge badge-primary" v-if="is_refresh">refreshing</span>

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
        data: function() {
            return {
                urlData: [],
                is_refresh: false,
                id: 0
            }
        },
        mounted() {
            this.update()
        },
        methods: {
            update:function() {
                this.is_refresh = true;
                axios.get('/start/get-json').then((response) => {
                    console.log(response);
                    this.urlData = response.data;
                    this.is_refresh = false;
                    this.id++;
                });
            }
        }
    }
</script>
