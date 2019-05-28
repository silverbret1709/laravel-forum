<template>
     <v-toolbar>
<!--    <v-toolbar-side-icon></v-toolbar-side-icon>-->
    <v-toolbar-title>BonRoom</v-toolbar-title>
    <v-spacer></v-spacer>
    <v-toolbar-items class="hidden-sm-and-down">
      <v-btn flat>Forum</v-btn>
      <v-btn flat>Ask Question</v-btn>
      <v-btn flat>Category</v-btn>
      <v-btn flat>Log In</v-btn>
    </v-toolbar-items>
  </v-toolbar>
</template>

<script>
    export default {
        name: "ToolBar"
    }
</script>

<style scoped>

</style>