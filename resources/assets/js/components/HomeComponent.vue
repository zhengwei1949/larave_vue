<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Home Component</div>

                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item" v-for="(item,index) in list" :key="index">{{item.name}} - {{item.email}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
                return {
                    list:[]
                }
            },
        mounted() {
            axios.get('/json').then((data)=>{
                // console.log(data);
                this.list = data.data.data;
            })
        }
    }
</script>
