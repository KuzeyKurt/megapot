<!DOCTYPE html>

<link href="{{ asset('css/styles.css') }}" rel="stylesheet">


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../build/styles.css">
    <title>Document</title>
</head>
<body class="page">
    <header class="header">
        <div class="header__container">
            <div class="header__logo">
                <h1 class="header__title header__title_part1">MEGA</h1>
                <h1 class="header__title header__title_part2">POT</h1>
            </div>
            <div class="header__btns">
                <button class="header__btn header__btn_purple">Регистрация</button>
                <button class="header__btn header__btn_yellow">Войти</button>
            </div>
        </div>
    </header>
    <div class="header__title header__title_part2">WELCOME, AUTHORIZED USER!</div>

    
</body>
</html>

<style>
    @charset "UTF-8";
@import url("https://fonts.googleapis.com/css2?family=Russo+One&display=swap");

html
{
    background-color: #161616;
}

.header {
  width: 100%;
  background-color: #000000;
  font-style: normal;
  padding: 0 5%;
}
.header__container {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
.header__logo {
  display: flex;
}
.header__title {
  /* font-weight: 900; */
  font-family: "Russo One", sans-serif;
  font-style: normal;
  font-size: 36px;
  line-height: 72px;
}
.header__title_part1 {
  color: #FFB800;
}
.header__title_part2 {
  color: #A347FF;
}
.header__btn {
  padding: 9px;
  border-radius: 5px;
  font-family: "Russo One", sans-serif;
  font-style: normal;
  font-size: 16px;
  line-height: 19px;
  color: #FFFFFF;
}
.header__btn:hover {
  opacity: 0.9;
  cursor: pointer;
}
.header__btn:focus {
  opacity: 0.9;
  outline: none;
}
.header__btn_purple {
  background-color: #A347FF;
}
.header__btn_yellow {
  background-color: #FFB800;
  margin-left: 9px;
}

/*Обнуление*/
* {
  padding: 0;
  margin: 0;
  border: 0;
}

*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

:focus, :active {
  outline: none;
}

a:focus, a:active {
  outline: none;
}

nav, footer, header, aside {
  display: block;
}

html, body {
  height: 100%;
  width: 100%;
  font-size: 100%;
  line-height: 1;
  font-size: 14px;
  -ms-text-size-adjust: 100%;
  -moz-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

input, button, textarea {
  font-family: inherit;
}

input::-ms-clear {
  display: none;
}

button {
  cursor: pointer;
}

button::-moz-focus-inner {
  padding: 0;
  border: 0;
}

a, a:visited {
  text-decoration: none;
}

a:hover {
  text-decoration: none;
}

ul li {
  list-style: none;
}

img {
  vertical-align: top;
}

h1, h2, h3, h4, h5, h6 {
  font-size: inherit;
  font-weight: 400;
}

/*--------------------*/
.bigred {
  font-size: 20px;
  color: red;
}

/*# sourceMappingURL=styles.css.map */
</style>