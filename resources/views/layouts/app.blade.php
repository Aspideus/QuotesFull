<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app">
      <example-component>
        
      </example-component>
      <?php 
        require "./scripts/load.php";
      ?> 
  </div>
  

  


  <script src="{{ asset('js/app.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>

  <script  src="{{ asset('js/paginator.js') }}"></script>

  <script>
    let Label_Logo_arr = ["Волчья кучка - мудрые мысли как бензин в Тесле", "Волчья кучка - кладмен твоего разума",
    "Волчья кучка - пусть застрянет автозак", "Волчья кучка - лучше, чем ничего", "Волчья кучка - наш ответ Голливуду",
    "Волчья кучка - расплескается синева", "Волчья кучка - диагноз ясен", "Волчья кучка - смотри, куда ступаешь",
    "Волчья кучка - долго, дорого, и так себе", "Волчья кучка - поучительные рассказы", "Волчья кучка - маргинальный уголок",
    "Волчья кучка - а вроде и не пахнет", "Волчья кучка - в огороде главное удобрение", "Волчья кучка - и сразу прибыло",
    "Волчья кучка - кажется, мы не туда пришли", "Волчья кучка - песнь души", "Волчья кучка - теперь на ваших экранах",
    "Волчья кучка - своего рода абсолютный дух", "Волчья кучка - вечное возвращение", "Волчья кучка - запахло философией",
    "Волчья кучка - волка судят по поступкам", "Волчья кучка - килограмм веселья",  "Волчья кучка - Джокер наглый плагиатор",
    "Волчья кучка - покупайте деньги", "Волчья кучка - плавными движениями", "Волчья кучка - главное, не на заводе", 
    "Волчья кучка - фиксируем прибыль", "В0л4ьR k004ka _ u a hxckd"
    ];
    let Logo_place = document.querySelector('.header_logo');
    Logo_place.innerHTML = Label_Logo_arr[Math.floor(Math.random() * Label_Logo_arr.length)];
  </script>
</body>

</html>