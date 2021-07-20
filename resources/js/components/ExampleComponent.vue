<template> 
    
  <v-app>
  <v-app-bar app hide-on-scroll>
      <div class="header_container">
        <v-app-bar-nav-icon class="burger_menu" @click.stop="drawer = !drawer" onclick="burger_shows_menu();">
          <img src="img/burger.png"/>
        </v-app-bar-nav-icon>
         <v-btn 
         @click="isPopupVisible=true" 
         class="success">
         Выложить свою мысль</v-btn>
        <div class="header_logo">Волчья кучка - мудрые мысли как бензин в Тесле</div>
      </div>
    
  </v-app-bar>


  <v-main> 
    <v-flex>
      <Popup 
          v-if="isPopupVisible"
          @closePopup = "closeInfoPopup"
      />
    </v-flex>
    
  </v-main>
    <v-navigation-drawer app v-model="drawer">
      <v-img src="img/wolf.jpg" class="wolf_img" alt="Волк отошёл"></v-img>
      <div class="nav_drawer_logo">Волчья кучка</div>
      <!--<div class="nav_drawer__label"> Список тегов </div>-->

      <div class="navigation-list-system">
          <v-btn href="./index.php" class="nav_list_sys__button" color="secondary"> Все </v-btn>
          <v-btn href="./index.php?tags=пацаны" class="nav_list_sys__button" color="primary"> #Пацаны </v-btn>
          <v-btn href="./index.php?tags=леди" class="nav_list_sys__button" color="primary"> #Леди </v-btn>
          <v-btn href="./index.php?tags=грустные" class="nav_list_sys__button" color="primary"> #Грустные </v-btn>
          <v-btn href="./index.php?tags=хайповые" class="nav_list_sys__button" color="primary"> #Хайповые </v-btn>
          <v-btn href="./index.php?tags=панки" class="nav_list_sys__button" color="primary"> #Панки </v-btn>
          <v-btn href="./index.php?tags=семья" class="nav_list_sys__button" color="primary"> #Семья </v-btn>
          <v-btn href="./index.php?tags=питерские" class="nav_list_sys__button" color="primary"> #Питерские </v-btn>
          <v-btn href="./index.php?tags=реперские" class="nav_list_sys__button" color="primary"> #Реперские </v-btn>
          <v-btn href="./index.php?tags=жизненные" class="nav_list_sys__button" color="primary"> #Жизненные </v-btn>
          <v-btn href="./index.php?tags=лысые" class="nav_list_sys__button" color="primary"> #Лысые </v-btn>
          <div class="nav_drawer__label_small">VladOS Pictures</div>
      </div>
    </v-navigation-drawer>
  
</v-app>  
</template>

<script>
import Popup from './Popup';
    export default {
      components: { 
        Popup 
      },
      mounted() {
        //console.log('Component mounted.')
      },
      data() {
          return {
            drawer: null,
            isPopupVisible: false
          }
      },
      methods: {
        showPopup() {
          this.isPopupVisible = true;
        },
        closeInfoPopup() {
          this.isPopupVisible = false;
        }

      }
    }
</script>

