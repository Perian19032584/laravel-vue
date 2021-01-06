<template>
    <div>


        <form>
            <h2> Опубликовать пост </h2>
            <div class="form-group">
                <input type="text" class="form-control" v-model="form.title" id="exampleFormControlInput1" placeholder="Название поста">
            </div><!-- v-model = получить данные из input:), сразу записывает в мою переменую -->
            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" v-model="form.body" rows="3" placeholder="Содержимое"></textarea>
            </div>

            <button type="button" class="btn btn-primary">
                <spin class="ml-1 float-left" v-if="loading"></spin>
                <span class="ml-4" v-else @click="store">Опубликовать</span>
            </button>

        </form>


    </div>
</template>


<script>

import spin from '../components/spin';
import axios from "axios";
export default {
    components: {
        spin
    },
    data(){
        return {
            form: {
                title: "",
                body: "",
            },
            loading: false,
        }
    },

    methods: {
        store(){
            axios.post('/api/posts', this.form).then(res => {
                this.$router.push('/blog/');//Это редирект:)
            }).catch(res => {
                alert('Произошла ошибка');
            });
        }
    }
}

</script>
