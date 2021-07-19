//отслеживаем нажатия по тегам
let maxtags = 0;
function tag_clicked(el) {

  
  if (el.classList.contains('pc_clicked__button')) {
    el.classList.remove('pc_clicked__button');
    maxtags--;
  }
  else {
    if (maxtags < 3) {
      el.classList.toggle('pc_clicked__button');
      maxtags++; 
    }
  }

  if (maxtags == 0)
    document.querySelector('.tag_warn').innerHTML = "Выберите хотя бы один тег (максимум можно выбрать три)";
  else
    document.querySelector('.tag_warn').innerHTML = "";
  //console.log(maxtags);
};

let tags_to_send= ``;

let tag_fill_check = false;
function tag_collector() {
  
  if (document.querySelector('.pc_clicked__button') != null) {
    tags_to_send += document.querySelector('.pc_clicked__button').name;
    document.querySelector('.pc_clicked__button').classList.remove('pc_clicked__button');
    tag_fill_check = true;
    tag_collector();
  }
  else
    //console.log(tags_to_send);
    if (tag_fill_check)
    {
      document.querySelector('.tags_collector__class').value=tags_to_send;
    }
    else {
      confirm('Не выбрано ни одного тега. Страница будет перезагружена.');
      window.location.reload();
    }
};


function burger_shows_menu(){
  document.querySelector('.v-navigation-drawer').classList.toggle('burger_shows_menu');
};
