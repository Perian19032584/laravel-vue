<template>
    <div>
        <spin v-if="loading"></spin>
        <div v-else v-if="posts">
            <h2>Вы смотрите на: {{ posts.title }}</h2>
            <p>{{ posts.body }}</p>
        </div>
        <div v-else>
            <h1>Данных постов нету</h1>
        </div>
    </div>
</template>

<script>

import spin from '../components/spin';

export default {
    components: {
        spin
    },

    data(){
        return {
            posts: [],
            loading: true,
        }
    },

    mounted(){
        //console.log(this.$route.params.id);//Получить id из роутах
        this.loadPost(this.$route.params.id);
    },
    methods: {
        loadPost(id){
            axios.get('/api/posts/' + id).then(res => {
                console.log(res.data);
                this.posts = res.data;
                setTimeout(() => {
                    this.loading = false;
                }, 250);

            }).catch(res => {
                alert('Произошла ошибка нету таких записей');
            });
        }
    }
}

</script>
