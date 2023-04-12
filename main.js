'use strict';

const { createApp } = Vue;

createApp({
    data() {
        return {
            todoList: [],
            newTodo: ''
        }
    },
    methods: {
        addTodo() {
            const data = {
                newtodo: this.newTodo
            };
            axios.post('server.php', data,
                {
                    headers: { 'Content-Type': 'multipart/form-data' }
                }).then((response) => {
                    this.todoList = response.data;
                    console.log(this.todoList);
                });
            this.newTodo = '';
        },
        deleteTodo(index) {
            console.log(index);
            axios.get('server.php', {
                params: {
                    index
                }
            })
                .then((response) => {
                    this.todoList = response.data;
                });
        }
    },
    created () {
        axios.get('server.php')
            .then((response) => {
                this.todoList = response.data;
            })
    },
    // updated() {
    //     axios.get('server.php')
    //         .then((response) => {
    //             this.todoList = response.data;
    //         })
    // }
}).mount('#app');