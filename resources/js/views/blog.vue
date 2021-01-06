<template>
    <div>
        <br>
        <spin v-if="loading"></spin>
        <div v-else v-for="item in posts">
            <h3>{{ item.title }}</h3>
            <p>{{ item.body }}</p>
            <router-link class=mb-2 :to="'/post/' + item.id">Посмотреть</router-link>
            <br><br>
        </div>
    </div>
</template>

<script>
import spin from '../components/spin';
import axios from 'axios';
export default {
    components: {//Добавить компонент из другого файла
        spin
    },
    data(){
        return {
            loading: true,
            posts: [],
        }
    },
    mounted() {//Извлечение данных из функции и прочий фигни
        this.index1();
        //123
    },
    methods: {
        index1(){
            axios.get('/api/posts').then(res => {//Это как success
                this.posts = res.data;
                console.log(this.posts);
                setTimeout(() => {
                    this.loading = false;
                }, 250);
            });
        }
    }
}

</script>
