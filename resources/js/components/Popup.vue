<template >
    <div class="popup_window">
        
        <div class="popup_container">
            <button class="popup_close" @click="closePopup"> X </button>
            <br />
            <div class="pc_body">
                <form action="./scripts/publish.php" onsubmit="tag_collector();" method="post">
                    <br />
                    <div class="pc_row">
                        <label class="shoutbox-label" for="shoutbox-name">Ваше имя: </label> <input type="text" required id="shoutbox-name" name="name"/>
                    </div>
                    <br />
                    <div class="pc_row">
                        <label class="shoutbox-label" for="shoutbox-comment">Ваше сообщение: </label> <textarea required id="shoutbox-comment" name="comment" maxlength='240'></textarea>
                    </div>
                    <br />
                    <!--<div class="pc_row">
                        <label class="shoutbox-label" for="shoutbox-tags">Теги (бета) </label> <input type="text" required id="shoutbox-tags" placeholder="НЕ ЗАБУДЬ ПЕРЕДЕЛАТЬ СУКА!!!" name="tags"/>
                    </div>-->
                    <div class="tag_warn">Выберите хотя бы один тег (максимум можно выбрать три)</div>

                    <div class="pc_row"> 
                        <input type="button" class="pc_tag_select v-btn" onclick="tag_clicked(this);" style="background-color: #3490dc;" value="Пацаны" name="пацаны; ">
                        <input type="button" class="pc_tag_select v-btn" onclick="tag_clicked(this);" style="background-color: #f66d9b;" value="Леди" name="леди; ">
                        <input type="button" class="pc_tag_select v-btn" onclick="tag_clicked(this);" style="background-color: #9561e2;" value="Грустные" name="грустные; ">
                        <input type="button" class="pc_tag_select v-btn" onclick="tag_clicked(this);" style="background-color: #4dc0b5;" value="Хайповые" name="хайповые; ">
                        <input type="button" class="pc_tag_select v-btn" onclick="tag_clicked(this);" style="background-color: #f6993f;" value="Панки" name="панки; ">
                        <input type="button" class="pc_tag_select v-btn" onclick="tag_clicked(this);" style="background-color: #ffed4a" value="Семья" name="семья; ">
                        <input type="button" class="pc_tag_select v-btn" onclick="tag_clicked(this);" style="background-color: #38c172;" value="Питерские" name="питерские; ">
                        <input type="button" class="pc_tag_select v-btn" onclick="tag_clicked(this);" style="background-color: brown;" value="Реперские" name="реперские; ">
                        <input type="button" class="pc_tag_select v-btn" onclick="tag_clicked(this);" style="background-color: #6574cd;" value="Жизненные" name="жизненные; ">
                        <input type="button" class="pc_tag_select v-btn" onclick="tag_clicked(this);" style="background-color: peachpuff;" value="Лысые" name="лысые; ">
                        <input type="hidden" class="tags_collector__class" name="tags" value=";;;;">
                    </div>
                    <br />
                    <v-btn type="submit" class="pc_submit success" color="primary">Отправить</v-btn>
                </form><!--  -->
            </div>
        </div>
    </div>
</template>

<script>

export default {
    data: {
    },
    methods: {
        closePopup() {
            this.$emit('closePopup')
        }
    }

}
</script>


<style>
    .popup_window {
        position: fixed;
        top: 0%;
        left: 0%;
        right: 0%;
        bottom: 0%;
        background-color: rgba(0, 0, 0, 0.65);
        width: 100%;
        height: 100%;
        z-index: 9999;
    }
    .popup_container {
        position: relative;
        top: 50px;
        width: 60vw;
        margin: 0 auto;
        background-color: #fff;
        border-radius: 15px;
        padding: 20px 60px;
    }
    .pc_body {
        font-size: 17px;
    }
    .pc_body button {
        display: flex;
    }
    .pc_body input,.pc_body textarea {
        width: 69%;
        border-bottom: 1px solid black;
        height: 50px;
    }
    .pc_body input[type=button] {
        width: auto;
        /*border: 1px solid #1976d2;*/
        /*background-color: #1976d2 !important;
        border-color: #1976d2 !important;*/
        height: 42px;
        margin: 0.5%;
        color: #fff;
        font-size: 14px;
        padding: 2px;
        flex: 0 0 24%;
        border-radius: 20px;
        text-shadow: 0px 0px 0px black, 1px 1px 1px black;
    }
    .pc_row {
        display: flex;
        flex-wrap: wrap;
    }
    .pc_row:last-child {
        margin-top: 20px;
    }
    .shoutbox-label {
        width: 30%;
        height: 50px;
        margin: 0;
    }
    .pc_submit {
        margin: 0 auto;
        margin-top: 25px;
        border-radius: 20px;
    }
    .popup_close {
        outline: none;
        box-shadow: none;
        background-color: transparent;
        border: none;
        font-size: 22px;
        float: right;
    }
    .pc_clicked__button {
        background-color: #424242 !important;
        border-color: #424242 !important;
    }

    @media (max-width: 769px) {
        .pc_body input[type=button] {
            /*font-size: 12px;*/
            flex:  0 0 32.333%;
        }
        .popup_container {
            width: 85vw;
        }
        .popup_window {
            overflow: auto;
        }
    }
    @media (max-width: 601px) {
        .popup_container {
            width: 98vw;
            padding: 20px 30px;
        }
        .pc_submit {
            width: 50%;
        }
        .pc_body input, .pc_body textarea {
            width: 100%;
        }
        .shoutbox-label {
            width: 100%;
        }
    }
    @media (max-width: 481px) {
        .pc_body input[type=button] {
            /*font-size: 12px;*/
            flex:  0 0 49%;
        }
        .pc_submit {
            width: 70%;
        }
        .popup_container {
            top: 1vw;
        }
        .tag_warn {
            font-size: 12px;
        }
    }
</style>