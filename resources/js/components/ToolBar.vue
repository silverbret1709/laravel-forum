<template>
     <v-toolbar>
<!--    <v-toolbar-side-icon></v-toolbar-side-icon>-->
    <v-toolbar-title>BonRoom</v-toolbar-title>
    <v-spacer></v-spacer>
    <div class="hidden-sm-and-down">

        <router-link to="/forum">
            <v-btn flat>Forum</v-btn>
        </router-link>


      <v-btn flat>Ask Question</v-btn>
      <v-btn flat>Category</v-btn>

        <router-link to="/login">
            <v-btn flat>Log In</v-btn>
        </router-link>
       
    </div>
  </v-toolbar>
</template>

<script>
    export default {
        name: "ToolBar"
    }
</script>

<style scoped>

</style>