<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="style/fonts.css">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/swiper.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Title</title>
</head>
<body>
<header>
  <div class="container header">
    <nav class="navbar navbar-expand-lg">
      <a class="navbar-brand" href="/">
        <svg class="logo" role="img" >
          <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-logo"/>
        </svg>
      </a>
      <button onclick="openDropdown('.navbar-collapse')" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <svg class="navbar-toggler-icon" role="img" >
          <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-toggler"/>
        </svg>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">О ПРОЕКТЕ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">ЖУРНАЛ "ЛЕСНОЙ КОМПЛЕКС"</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">РЕКЛАМОДАТЕЛЯМ</a>
          </li>
        </ul>

        <div class="socialMedia">
          <a href="#">
            <svg class="" role="img" >
              <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-vk"/>
            </svg>
          </a>
          <a href="#">
            <svg class="" role="img" >
              <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-tube"/>
            </svg>
          </a>
          <a href="#">
            <svg class="" role="img" >
              <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-fb"/>
            </svg>
          </a>
        </div>

        <form class="form-inline">
          <label>
            <input class="form-control" type="search" placeholder="Поиск..." aria-label="Search">
          </label>
        </form>

        <div class="hiddenMenu">
          <ul>
            <li class="nav-item">
              <a class="nav-link" href="#">НОВОСТИ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">В ЦЕНТРЕ ВНИМАНИЯ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">РЫНОК</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">ТЕХНОЛОГИИ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">ВЗГЛЯД ИЗНУТРИ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">АНАЛИТИКА</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">КРУПНЫМ ПЛАНОМ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="#">МЕРОПРИЯТИЯ</a>
            </li>

            <li class="nav-item dropdown" onclick="openDrop('.top_dropHidden')">
              <a class="nav-link dropdown-toggle hidden-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">СПЕЦПРОЕКТЫ</a>
              <div class="dropdown-menu top_dropHidden">
                <a class="dropdown-item" href="#">ПРЕДПРИЯТИЯ ЛПК</a>
                <a class="dropdown-item" href="#">МИРОВОЙ ОПЫТ</a>
                <a class="dropdown-item" href="#">СДЕЛАНО В РОССИИ</a>
              </div>
            </li>
          </ul>

        </div>

        <div class="hiddenContacts">
          <a href="tel:+73912371537">+7 391 237 15 37</a>
          <a href="mailto:lks@pgmedia.ru">lks@pgmedia.ru</a>
        </div>
      </div>
    </nav>
  </div>

  <div class="menu ">
    <div class="container">
      <ul class="menu__row">
        <li class="nav-item">
          <a class="nav-link" href="#">НОВОСТИ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">В ЦЕНТРЕ ВНИМАНИЯ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">РЫНОК</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ТЕХНОЛОГИИ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">ВЗГЛЯД ИЗНУТРИ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">АНАЛИТИКА</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">КРУПНЫМ ПЛАНОМ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">МЕРОПРИЯТИЯ</a>
        </li>
        <li class="nav-item dropdown"  onclick="openDrop('.top_drop')">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            СПЕЦПРОЕКТЫ
          </a>
          <div class="dropdown-menu top_drop">
            <a class="dropdown-item" href="#">ПРЕДПРИЯТИЯ ЛПК</a>
            <a class="dropdown-item" href="#">МИРОВОЙ ОПЫТ</a>
            <a class="dropdown-item" href="#">СДЕЛАНО В РОССИИ</a>
          </div>
        </li>
      </ul>
    </div>

  </div>
</header>

<div class="container">
  <div class="rubric">
    <div class="breadcrumbs">
      <h2 class="h2Title">Технологии</h2>
      <div>
        <a href="#">Главная</a>
        <span>/</span>
        <a href="#">Технологии</a>
      </div>
    </div>

    <div class="horizontalBar horizontalBar1">
      <div>
        <div>
          <a href="#" class="horizontalBarFirst imgBlock">
            <img src="https://picsum.photos/800/600?random=1">
          </a>
          <div class="horizontalBar__Right">
            <a href="#">
              Семинар о технологиях переработки древесных отходов
            </a>
            <span class="date">
                  11.11.2020
                </span>
            <a href="#">
              Современные технологии для переработки древесных отходов обсудили представители лесопромышленной отрасли на семинаре, которое прошло на базе предприятия «АСТ-Регион» в р.п. Выездное Нижегородской области.
            </a>

            <div class="dateAndViews">
              <div class="tags">
                <a href="#">Ponsse</a>
                <a href="#">Карелия</a>
                <a href="#">Петрозаводский техникум</a>
                <a href="#">Поннсе</a>
                <a href="#">Учебный класс</a>
              </div>
            </div>


          </div>
        </div>
      </div>

      <div>
        <div>
          <a href="#" class="horizontalBarFirst imgBlock">
            <img src="https://picsum.photos/800/600?random=1">
          </a>
          <div class="horizontalBar__Right">
            <a href="#">
              Семинар о технологиях переработки древесных отходов
            </a>
            <a href="#">
              Современные технологии для переработки древесных отходов обсудили представители лесопромышленной отрасли на семинаре, которое прошло на базе предприятия «АСТ-Регион» в р.п. Выездное Нижегородской области.
            </a>

            <div class="dateAndViews">
                <span class="date">
                  11.11.2020
                </span>
              <div class="tags">
                <a href="#">Ponsse</a>
                <a href="#">Карелия</a>
                <a href="#">Петрозаводский техникум</a>
                <a href="#">Поннсе</a>
                <a href="#">Учебный класс</a>
              </div>
            </div>


          </div>
        </div>
      </div>

      <div>
        <div>
          <a href="#" class="horizontalBarFirst imgBlock">
            <img src="https://picsum.photos/800/600?random=1">
          </a>
          <div class="horizontalBar__Right">
            <a href="#">
              Семинар о технологиях переработки древесных отходов
            </a>
            <a href="#">
              Современные технологии для переработки древесных отходов обсудили представители лесопромышленной отрасли на семинаре, которое прошло на базе предприятия «АСТ-Регион» в р.п. Выездное Нижегородской области.
            </a>

            <div class="dateAndViews">
                <span class="date">
                  11.11.2020
                </span>
              <div class="tags">
                <a href="#">Ponsse</a>
                <a href="#">Карелия</a>
                <a href="#">Петрозаводский техникум</a>
                <a href="#">Поннсе</a>
                <a href="#">Учебный класс</a>
              </div>
            </div>


          </div>
        </div>
      </div>

      <div>
        <div>
          <a href="#" class="horizontalBarFirst imgBlock">
            <img src="https://picsum.photos/800/600?random=1">
          </a>
          <div class="horizontalBar__Right">
            <a href="#">
              Семинар о технологиях переработки древесных отходов
            </a>
            <a href="#">
              Современные технологии для переработки древесных отходов обсудили представители лесопромышленной отрасли на семинаре, которое прошло на базе предприятия «АСТ-Регион» в р.п. Выездное Нижегородской области.
            </a>

            <div class="dateAndViews">
                <span class="date">
                  11.11.2020
                </span>
              <div class="tags">
                <a href="#">Ponsse</a>
                <a href="#">Карелия</a>
                <a href="#">Петрозаводский техникум</a>
                <a href="#">Поннсе</a>
                <a href="#">Учебный класс</a>
              </div>
            </div>


          </div>
        </div>
      </div>

      <div>
        <div>
          <a href="#" class="horizontalBarFirst imgBlock">
            <img src="https://picsum.photos/800/600?random=1">
          </a>
          <div class="horizontalBar__Right">
            <a href="#">
              Семинар о технологиях переработки древесных отходов
            </a>
            <a href="#">
              Современные технологии для переработки древесных отходов обсудили представители лесопромышленной отрасли на семинаре, которое прошло на базе предприятия «АСТ-Регион» в р.п. Выездное Нижегородской области.
            </a>

            <div class="dateAndViews">
                <span class="date">
                  11.11.2020
                </span>
              <div class="tags">
                <a href="#">Ponsse</a>
                <a href="#">Карелия</a>
                <a href="#">Петрозаводский техникум</a>
                <a href="#">Поннсе</a>
                <a href="#">Учебный класс</a>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
    <div class="horizontalBar horizontalBar2">
      <div>
        <div>
          <a href="#" class="horizontalBarFirst imgBlock">
            <img src="https://picsum.photos/800/600?random=1">
          </a>
          <div class="horizontalBar__Right">
            <a href="#">
              Семинар о технологиях переработки древесных отходов
            </a>
            <a href="#">
              Современные технологии для переработки древесных отходов обсудили представители лесопромышленной отрасли на семинаре, которое прошло на базе предприятия «АСТ-Регион» в р.п. Выездное Нижегородской области.
            </a>

            <div class="dateAndViews">
                <span class="date">
                  11.11.2020
                </span>
              <div class="tags">
                <a href="#">Ponsse</a>
                <a href="#">Карелия</a>
                <a href="#">Петрозаводский техникум</a>
                <a href="#">Поннсе</a>
                <a href="#">Учебный класс</a>
              </div>
            </div>


          </div>
        </div>
      </div>

      <div>
        <div>
          <a href="#" class="horizontalBarFirst imgBlock">
            <img src="https://picsum.photos/800/600?random=1">
          </a>
          <div class="horizontalBar__Right">
            <a href="#">
              Семинар о технологиях переработки древесных отходов
            </a>
            <a href="#">
              Современные технологии для переработки древесных отходов обсудили представители лесопромышленной отрасли на семинаре, которое прошло на базе предприятия «АСТ-Регион» в р.п. Выездное Нижегородской области.
            </a>

            <div class="dateAndViews">
                <span class="date">
                  11.11.2020
                </span>
              <div class="tags">
                <a href="#">Ponsse</a>
                <a href="#">Карелия</a>
                <a href="#">Петрозаводский техникум</a>
                <a href="#">Поннсе</a>
                <a href="#">Учебный класс</a>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
    <div class="horizontalBar horizontalBar3">
      <div>
        <div>
          <a href="#" class="horizontalBarFirst imgBlock">
            <img src="https://picsum.photos/800/600?random=1">
          </a>
          <div class="horizontalBar__Right">
            <a href="#">
              Семинар о технологиях переработки древесных отходов
            </a>
            <a href="#">
              Современные технологии для переработки древесных отходов обсудили представители лесопромышленной отрасли на семинаре, которое прошло на базе предприятия «АСТ-Регион» в р.п. Выездное Нижегородской области.
            </a>

            <div class="dateAndViews">
                <span class="date">
                  11.11.2020
                </span>
              <div class="tags">
                <a href="#">Ponsse</a>
                <a href="#">Карелия</a>
                <a href="#">Петрозаводский техникум</a>
                <a href="#">Поннсе</a>
                <a href="#">Учебный класс</a>
              </div>
            </div>


          </div>
        </div>
      </div>

      <div>
        <div>
          <a href="#" class="horizontalBarFirst imgBlock">
            <img src="https://picsum.photos/800/600?random=1">
          </a>
          <div class="horizontalBar__Right">
            <a href="#">
              Семинар о технологиях переработки древесных отходов
            </a>
            <a href="#">
              Современные технологии для переработки древесных отходов обсудили представители лесопромышленной отрасли на семинаре, которое прошло на базе предприятия «АСТ-Регион» в р.п. Выездное Нижегородской области.
            </a>

            <div class="dateAndViews">
                <span class="date">
                  11.11.2020
                </span>
              <div class="tags">
                <a href="#">Ponsse</a>
                <a href="#">Карелия</a>
                <a href="#">Петрозаводский техникум</a>
                <a href="#">Поннсе</a>
                <a href="#">Учебный класс</a>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
    <div class="horizontalBar horizontalBar4">
      <div>
        <div>
          <a href="#" class="horizontalBarFirst imgBlock">
            <img src="https://picsum.photos/800/600?random=1">
          </a>
          <div class="horizontalBar__Right">
            <a href="#">
              Семинар о технологиях переработки древесных отходов
            </a>
            <a href="#">
              Современные технологии для переработки древесных отходов обсудили представители лесопромышленной отрасли на семинаре, которое прошло на базе предприятия «АСТ-Регион» в р.п. Выездное Нижегородской области.
            </a>

            <div class="dateAndViews">
                <span class="date">
                  11.11.2020
                </span>
              <div class="tags">
                <a href="#">Ponsse</a>
                <a href="#">Карелия</a>
                <a href="#">Петрозаводский техникум</a>
                <a href="#">Поннсе</a>
                <a href="#">Учебный класс</a>
              </div>
            </div>


          </div>
        </div>
      </div>

      <div>
        <div>
          <a href="#" class="horizontalBarFirst imgBlock">
            <img src="https://picsum.photos/800/600?random=1">
          </a>
          <div class="horizontalBar__Right">
            <a href="#">
              Семинар о технологиях переработки древесных отходов
            </a>
            <a href="#">
              Современные технологии для переработки древесных отходов обсудили представители лесопромышленной отрасли на семинаре, которое прошло на базе предприятия «АСТ-Регион» в р.п. Выездное Нижегородской области.
            </a>

            <div class="dateAndViews">
                <span class="date">
                  11.11.2020
                </span>
              <div class="tags">
                <a href="#">Ponsse</a>
                <a href="#">Карелия</a>
                <a href="#">Петрозаводский техникум</a>
                <a href="#">Поннсе</a>
                <a href="#">Учебный класс</a>
              </div>
            </div>


          </div>
        </div>
      </div>

      <div>
        <div>
          <a href="#" class="horizontalBarFirst imgBlock">
            <img src="https://picsum.photos/800/600?random=1">
          </a>
          <div class="horizontalBar__Right">
            <a href="#">
              Семинар о технологиях переработки древесных отходов
            </a>
            <a href="#">
              Современные технологии для переработки древесных отходов обсудили представители лесопромышленной отрасли на семинаре, которое прошло на базе предприятия «АСТ-Регион» в р.п. Выездное Нижегородской области.
            </a>

            <div class="dateAndViews">
                <span class="date">
                  11.11.2020
                </span>
              <div class="tags">
                <a href="#">Ponsse</a>
                <a href="#">Карелия</a>
                <a href="#">Петрозаводский техникум</a>
                <a href="#">Поннсе</a>
                <a href="#">Учебный класс</a>
              </div>
            </div>


          </div>
        </div>
      </div>

      <div>
        <div>
          <a href="#" class="horizontalBarFirst imgBlock">
            <img src="https://picsum.photos/800/600?random=1">
          </a>
          <div class="horizontalBar__Right">
            <a href="#">
              Семинар о технологиях переработки древесных отходов
            </a>
            <a href="#">
              Современные технологии для переработки древесных отходов обсудили представители лесопромышленной отрасли на семинаре, которое прошло на базе предприятия «АСТ-Регион» в р.п. Выездное Нижегородской области.
            </a>

            <div class="dateAndViews">
                <span class="date">
                  11.11.2020
                </span>
              <div class="tags">
                <a href="#">Ponsse</a>
                <a href="#">Карелия</a>
                <a href="#">Петрозаводский техникум</a>
                <a href="#">Поннсе</a>
                <a href="#">Учебный класс</a>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
    <div class="horizontalBar horizontalBarGreen">
      <div>
        <div>
          <a href="#" class="horizontalBarFirst imgBlock">
            <img src="https://picsum.photos/800/600?random=1">
            <span class="greenTag">
              Новость часа
            </span>
          </a>
          <div class="horizontalBar__Right">
            <a href="#">
              Семинар о технологиях переработки древесных отходов
            </a>
            <a href="#">
              Современные технологии для переработки древесных отходов обсудили представители лесопромышленной отрасли на семинаре, которое прошло на базе предприятия «АСТ-Регион» в р.п. Выездное Нижегородской области.
            </a>

            <div class="dateAndViews">
                <span class="date">
                  11.11.2020
                </span>
              <div class="tags">
                <a href="#">Ponsse</a>
                <a href="#">Карелия</a>
                <a href="#">Петрозаводский техникум</a>
                <a href="#">Поннсе</a>
                <a href="#">Учебный класс</a>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>

    <div class="foxy foxyOne">
      <a href="#" style="background-image: url('<?php echo get_template_directory_uri();?>/img/foxy.png')"></a>
    </div>
    <div class="foxy foxyTwo">
      <a href="#" style="background-image: url('<?php echo get_template_directory_uri();?>/img/foxy.png')"></a>
    </div>
    <div class="foxy foxyThree">
      <a href="#" style="background-image: url('<?php echo get_template_directory_uri();?>/img/foxy.png')"></a>
    </div>
    <div class="foxy foxyFour">
      <a href="#" style="background-image: url('<?php echo get_template_directory_uri();?>/img/foxy.png')"></a>
    </div>
    <div class="foxy foxyFive">
      <a href="#" style="background-image: url('<?php echo get_template_directory_uri();?>/img/foxy.png')"></a>
    </div>

    <div class="foxyFull foxyFullOne">
      <a href="#" style="background: url('https://picsum.photos/1280/148?random=5') no-repeat scroll center center / contain"></a>
    </div>
    <div class="foxyFull foxyFullTwo">
      <a href="#" style="background: url('https://picsum.photos/1280/148?random=5') no-repeat scroll center center / contain"></a>
    </div>

    <div class="foxyLong">
      <a href="#" style="background: url('https://picsum.photos/728/90?random=5') no-repeat scroll center center / contain"></a>
    </div>

    <div class="anotherNews">
      <h2 class="h2Title">
        Информ
      </h2>
      <div class="horizontalBar">
        <div>
          <a  href="#">
            <div class="horizontalBarFirst imgBlock">
              <img src="https://picsum.photos/800/600?random=1">
            </div>
            <span>
                                    Красноярского экс-министра лесного хозяйства обвиняют во взяточничестве
                                </span>
          </a>
          <div class="dateAndViews">
            <span class="date">11.11.2020</span>
            <span class="views">5454</span>
          </div>
        </div>
        <div>
          <a  href="#">
            <div class="horizontalBarFirst imgBlock">
              <img src="https://picsum.photos/800/600?random=1">
            </div>
            <span>
                                    Красноярского экс-министра лесного хозяйства обвиняют во взяточничестве
                                </span>
          </a>
          <div class="dateAndViews">
            <span class="date">11.11.2020</span>
            <span class="views">5454</span>
          </div>
        </div>
        <div>
          <a  href="#">
            <div class="horizontalBarFirst imgBlock">
              <img src="https://picsum.photos/800/600?random=1">
            </div>
            <span>
                                    Красноярского экс-министра лесного хозяйства обвиняют во взяточничестве
                                </span>
          </a>
          <div class="dateAndViews">
            <span class="date">11.11.2020</span>
            <span class="views">5454</span>
          </div>
        </div>
        <div>
          <a  href="#">
            <div class="horizontalBarFirst imgBlock">
              <img src="https://picsum.photos/800/600?random=1">
            </div>
            <span>
                                    Красноярского экс-министра лесного хозяйства обвиняют во взяточничестве
                                </span>
          </a>
          <div class="dateAndViews">
            <span class="date">11.11.2020</span>
            <span class="views">5454</span>
          </div>
        </div>
        <div>
          <a  href="#">
            <div class="horizontalBarFirst imgBlock">
              <img src="https://picsum.photos/800/600?random=1">
            </div>
            <span>
                                    Красноярского экс-министра лесного хозяйства обвиняют во взяточничестве
                                </span>
          </a>
          <div class="dateAndViews">
            <span class="date">11.11.2020</span>
            <span class="views">5454</span>
          </div>
        </div>
      </div>
    </div>
    <div class="newMag">
      <div class="newMagInside">
        <div class="newMagInsideTop">
            <span>
                Журнал "Лесной комплекс"
            </span>
        </div>
        <div class="newMagInsideBot">
          <div class="newMagInsideBotMag">
            <div>
              <img src="<?php echo get_template_directory_uri();?>/img/mag.png">
            </div>
            <div>
              <a class="button buttonGreen" href="#">
                Читать онлайн
              </a>
              <a onclick="openModal()" class="openModal">
                Подписаться на журнал
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div  class="movingPictures movingPicturesBigOne">
      <div class="movingPicturesTop">

        <div class="movingPicturesTopRight">
            <span id="movingPicturesBigOneArrowLeft" class="arrowSwitch arrowSwitchLeft">
                 <svg role="img" >
                    <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-arrowSwitch"/>
                 </svg>
            </span>
          <span id="movingPicturesBigOneArrowRight" class="arrowSwitch arrowSwitchRight">
                 <svg role="img">
                    <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-arrowSwitch"/>
                 </svg>
            </span>
        </div>
      </div>
      <div id="movingPicturesBigOne" class="swiper-container movingPicturesContainer">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <a href="#">
              <div class="imgBlock imgBlockFull">
                <img src="https://picsum.photos/800/600?random=3">
              </div>
            </a>
            <div>
              <a class="categoryBlock" href="#">Учебный класс</a>
              <a class="movingPicturesTitle" href="#">Макроэкономика и цены на круглое сырье</a>
            </div>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="imgBlock imgBlockFull">
                <img src="https://picsum.photos/800/600?random=3">
              </div>
            </a>
            <div>
              <a class="categoryBlock" href="#">Учебный класс</a>
              <a class="movingPicturesTitle" href="#">Макроэкономика и цены на круглое сырье</a>
            </div>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="imgBlock imgBlockFull">
                <img src="https://picsum.photos/800/600?random=3">
              </div>
            </a>
            <div>
              <a class="categoryBlock" href="#">Учебный класс</a>
              <a class="movingPicturesTitle" href="#">Макроэкономика и цены на круглое сырье</a>
            </div>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="imgBlock imgBlockFull">
                <img src="https://picsum.photos/800/600?random=3">
              </div>
            </a>
            <div>
              <a class="categoryBlock" href="#">Учебный класс</a>
              <a class="movingPicturesTitle" href="#">Макроэкономика и цены на круглое сырье</a>
            </div>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="imgBlock imgBlockFull">
                <img src="https://picsum.photos/800/600?random=3">
              </div>
            </a>
            <div>
              <a class="categoryBlock" href="#">Учебный класс</a>
              <a class="movingPicturesTitle" href="#">Макроэкономика и цены на круглое сырье</a>
            </div>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="imgBlock imgBlockFull">
                <img src="https://picsum.photos/800/600?random=3">
              </div>
            </a>
            <div>
              <a class="categoryBlock" href="#">Учебный класс</a>
              <a class="movingPicturesTitle" href="#">Макроэкономика и цены на круглое сырье</a>
            </div>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="imgBlock imgBlockFull">
                <img src="https://picsum.photos/800/600?random=3">
              </div>
            </a>
            <div>
              <a class="categoryBlock" href="#">Учебный класс</a>
              <a class="movingPicturesTitle" href="#">Макроэкономика и цены на круглое сырье</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div  class="movingPictures movingPicturesOne">
      <div class="movingPicturesTop">
        <div class="movingPicturesTopLeft">
          <a onclick="openModal()" class="openModal">
            подписаться
          </a>
          <a href="#">
            ежемесячный обзор лпк
          </a>
        </div>

        <div class="movingPicturesTopRight">
                    <span id="movingPicturesOneTopArrowLeft" class="arrowSwitch arrowSwitchLeft">
                         <svg role="img" >
                            <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-arrowSwitch"/>
                         </svg>
                    </span>
          <span id="movingPicturesOneTopArrowRight" class="arrowSwitch arrowSwitchRight">
                         <svg role="img">
                            <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-arrowSwitch"/>
                         </svg>
                    </span>
        </div>
      </div>
      <div id="movingPicturesOne" class="swiper-container movingPicturesContainer">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <a href="#">
              <div class="imgBlock imgBlockFull">
                <img src="https://picsum.photos/800/600?random=3">
              </div>
            </a>
            <div>
              <a class="categoryBlock" href="#">Учебный класс</a>
              <a class="movingPicturesTitle" href="#">Макроэкономика и цены на круглое сырье</a>
            </div>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="imgBlock imgBlockFull">
                <img src="https://picsum.photos/800/600?random=3">
              </div>
            </a>
            <div>
              <a class="categoryBlock" href="#">Учебный класс</a>
              <a class="movingPicturesTitle" href="#">Макроэкономика и цены на круглое сырье</a>
            </div>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="imgBlock imgBlockFull">
                <img src="https://picsum.photos/800/600?random=3">
              </div>
            </a>
            <div>
              <a class="categoryBlock" href="#">Учебный класс</a>
              <a class="movingPicturesTitle" href="#">Макроэкономика и цены на круглое сырье</a>
            </div>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="imgBlock imgBlockFull">
                <img src="https://picsum.photos/800/600?random=3">
              </div>
            </a>
            <div>
              <a class="categoryBlock" href="#">Учебный класс</a>
              <a class="movingPicturesTitle" href="#">Макроэкономика и цены на круглое сырье</a>
            </div>
          </div>
          <div class="swiper-slide">
            <a href="#">
              <div class="imgBlock imgBlockFull">
                <img src="https://picsum.photos/800/600?random=3">
              </div>
            </a>
            <div>
              <a class="categoryBlock" href="#">Учебный класс</a>
              <a class="movingPicturesTitle" href="#">Макроэкономика и цены на круглое сырье</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="loadmore">
      <span>
        Загрузить еще
      </span>
    </div>
  </div>
</div>

<div onclick="toUp()" class="listedUp">
  <svg width="33" height="32" viewBox="0 0 33 32" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M16.5 24V8" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
    <path d="M8.25 16L16.5 8L24.75 16" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
  </svg>
  <span>в начало</span>
</div>

<footer >
  <div class="modalSubscription">
    <div>
      <div class="modalSubscription__middle">
        <p>
          Подпишитесь <br>
          на наши обновления
        </p>
        <p>
          Подпишитесь на наш дайджест и получайте подборку самых актуальных публикаций каждый месяц на электронную почту! 100% отраслевая информация и никакого спама.
        </p>
        <form>
          <div>
            <label for="aa">Как к вам обращаться?</label>
            <input id="aa" type="text" placeholder="Ваше имя">
          </div>
          <div>
            <label for="aaa">E-mail</label>
            <input id="aaa" type="text" placeholder="name@mail.ru">
          </div>
          <div class="modalSubscription__button">
            <div class="inputBlockCheckbox">
              <input id="seven" type="checkbox">
              <label for="seven">
                Я соглашаюсь с условиями обработки персональных данных
              </label>
            </div>
            <button class="button buttonGreen" type="submit">Подписаться</button>
          </div>
        </form>
      </div>
      <div onclick="closeModal()" class="modalSubscription__close"></div>
    </div>

  </div>
  <div class="container footer">
    <div class="footer__one">
      <a href="/">
        <svg class="logo" role="img" >
          <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-logo"/>
        </svg>
      </a>
      <a href="#">О проекте</a>
      <a href="#">Журнал “Лесной комплекс”</a>
      <a href="#">Рекламодателям</a>
    </div>
    <div class="footer__two">
      <a href="#">Новости</a>
      <a href="#">В центре внимания</a>
      <a href="#">Рынок</a>
      <a href="#">Технологии</a>
      <a href="#">Взгляд изнутри</a>
      <a href="#">Аналитика</a>
      <a href="#">Крупным планом</a>
      <a href="#">Круглый стол </a>
      <a href="#">Спецпроекты</a>
    </div>
    <div class="footer__three">
      <a href="#">Условия использования сайта</a>
      <a href="#">Политика конфиденциальности</a>
      <a href="#">Подписаться на ежемесячный обзор ЛПК </a>
      <a onclick="openModal()" class="openModal button buttonGreen">Подписаться</a>
    </div>
    <div class="footer__four">
            <span>
                660068, Краснояск <br>
                Мичурина, 3в, оф.405
            </span>
      <a href="tel:+73912371537">+7 391 237 15 37</a>
      <a href="mailto:lks@pgmedia.ru">lks@pgmedia.ru</a>
      <div class="socialMedia">
        <a href="#">
          <svg class="" role="img" >
            <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-vk"/>
          </svg>
        </a>
        <a href="#">
          <svg class="" role="img" >
            <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-tube"/>
          </svg>
        </a>
        <a href="#">
          <svg class="" role="img" >
            <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-fb"/>
          </svg>
        </a>
      </div>
      <div class="">
        <svg class="" role="img" >
          <use href="<?php echo get_template_directory_uri();?>/img/icons.svg#i-MIR"/>
        </svg>
      </div>
    </div>
    <div class="footer__five">
            <span>
                Возрастное ограничение 16+ <br>
                © 2012-2020 PromoGroup Media <br>
                Копирование материалов запрещено.
            </span>
    </div>
    <div class="footer__six">
            <span>
                Продолжая использовать наш сайт, вы даете согласие на обработку файлов Cookies и других пользовательских данных, в соответствии с <a href="#">Политикой конфиденциальности</a>.
            </span>
    </div>
  </div>
</footer>

<script src="js/swiper.min.js"></script>
<script src="js/app.min.js"></script>
<script>svg4everybody();</script>
</body>
</html>