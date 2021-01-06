<template>
  <div>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
          <div class="container">
          <a class="navbar-brand" href="#">Navbar</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">

                  <li class="nav-item active" v-for="data in links">
                      <router-link class="nav-link" :to="data.href">{{ data.title }}</router-link><!-- Забыл нужно добавить :atrribute - иначе нельзя передать в атрибут значение -->
                      <!-- фигасе, вот так пишется сылочка в vue -->
                  </li>

              </ul>
              <form class="form-inline my-2 my-lg-0">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
          </div>
          </div>
      </nav>
  </div>
</template>

<script>
  export default {
      data(){ /* Вовзращает данные вот так(другие методы не будут работать)  */
          return {
              links: [
                  {
                      title: "Главная",
                      href: "/",
                  },
                  {
                      title: "Блог",
                      href: "/blog",
                  },
                  {
                      title: "Создать пост",
                      href: "/create",
                  }
              ],
          }
      }
  }

</script>
