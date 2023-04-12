'use strict';

const { createApp } = Vue;

createApp({
    data() {
        return {
            todoList: []
        }
    },
    created() {
        axios.get('server.php')
            .then((response) => {
                this.todoList = response.data;
            })
    }
}).mount('#app');