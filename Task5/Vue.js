<template>
  <div>
    <h1>Todo List</h1>
    <ul>
      <li v-for="todo in todos" :key="todo.id">
        {{ todo.title }} - <strong>{{ todo.is_completed ? "Completed" : "Incomplete" }}</strong>
        <button @click="deleteTodo(todo.id)">Delete</button>
      </li>
    </ul>

    <input v-model="newTodo" placeholder="Add new todo" @keyup.enter="addTodo">
  </div>
</template>

<script>
export default {
  data() {
    return {
      todos: [],
      newTodo: '',
    };
  },
  mounted() {
    this.fetchTodos();
  },
  methods: {
    fetchTodos() {
      axios.get('/todos').then((response) => {
        this.todos = response.data;
      });
    },
    addTodo() {
      if (this.newTodo.trim() !== '') {
        axios.post('/todos', { title: this.newTodo }).then((response) => {
          this.todos.push(response.data);
          this.newTodo = '';
        });
      }
    },
    deleteTodo(id) {
      axios.delete(`/todos/${id}`).then(() => {
        this.todos = this.todos.filter((todo) => todo.id !== id);
      });
    }
  },
};
</script>


import Vue from 'vue';
import TodoComponent from './components/TodoComponent.vue';

const app = new Vue({
    el: '#app',
    components: {
        TodoComponent
    }
});

