<!DOCTYPE html>
<!--
Copyright 2021 Elia Payment (https://elia.gg)

Permission is hereby granted, free of charge, to any person obtaining a copy of 
this software and associated documentation files (the "Software"), to deal in 
the Software without restriction, including without limitation the rights to 
use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of 
the Software, and to permit persons to whom the Software is furnished to do so, 
subject to the following conditions:

The above copyright notice and this permission notice shall be included in all 
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, 
INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A 
PARTICULAR PURPOSE AND NONINFRINGEMENT. 
IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, 
DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, 
ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER 
DEALINGS IN THE SOFTWARE.
-->
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
        <title>League of Legend Challenge</title>
        <script src="js/theme/144364840350189" async=""></script>
        <script src="css/theme/saved_resource"></script>

        <link href="css/theme/5.c04d175b.chunk.css" rel="stylesheet">
        <link href="css/theme/main.0f2e4171.chunk.css" rel="stylesheet">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style type="text/css"></style>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="https://developer.elia.gg/eliaexpresspay/js/eliaexpresspay.js" type="text/javascript"></script>
        <script src="js/PartnerCheckout.js" type="text/javascript"></script> 

        <script charset="utf-8" src="js/theme/1.7e135fed.chunk.js"></script>
        <script charset="utf-8" src="js/theme/0.4fd6ae63.chunk.js"></script>
        <script charset="utf-8" src="js/theme/2.3a444e56.chunk.js"></script>
        <script charset="utf-8" src="js/theme/6.7828556e.chunk.js"></script>
        <script charset="utf-8" src="js/theme/trusted-types-checker-9b6e874f149cc545c2c2335f8707fd1f.js"></script>
    </head>
    <body>
        <noscript>You need to enable JavaScript to run this app.</noscript>
        <div id="root">
            <div class="c-app c-default-layout c-dark-theme">
                <div class="c-sidebar c-sidebar-dark c-sidebar-lg-show c-sidebar-fixed">
                    <a aria-current="page" class="c-sidebar-brand d-md-down-none active" href="#">
                        <img class="c-sidebar-brand-full" src="img/theme/logo-top-right.png" style="width:100%;" alt="Logo">
                    </a>
                    <ul class="c-sidebar-nav h-100 ps" style="position: relative;">
                        <li class="c-sidebar-nav-title">Arena</li>
                        <li class="c-sidebar-nav-item">
                            <a aria-current="page" class="c-sidebar-nav-link active" href="#">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="c-sidebar-nav-icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M552 64H448V24c0-13.3-10.7-24-24-24H152c-13.3 0-24 10.7-24 24v40H24C10.7 64 0 74.7 0 88v56c0 35.7 22.5 72.4 61.9 100.7 31.5 22.7 69.8 37.1 110 41.7C203.3 338.5 240 360 240 360v72h-48c-35.3 0-64 20.7-64 56v12c0 6.6 5.4 12 12 12h296c6.6 0 12-5.4 12-12v-12c0-35.3-28.7-56-64-56h-48v-72s36.7-21.5 68.1-73.6c40.3-4.6 78.6-19 110-41.7 39.3-28.3 61.9-65 61.9-100.7V88c0-13.3-10.7-24-24-24zM99.3 192.8C74.9 175.2 64 155.6 64 144v-16h64.2c1 32.6 5.8 61.2 12.8 86.2-15.1-5.2-29.2-12.4-41.7-21.4zM512 144c0 16.1-17.7 36.1-35.3 48.8-12.5 9-26.7 16.2-41.8 21.4 7-25 11.8-53.6 12.8-86.2H512v16z"></path>
                                </svg>
                                Challenges
                            </a>
                        </li>
                        <li class="c-sidebar-nav-title">Career</li>
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link" href="#">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="c-sidebar-nav-icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M504 255.531c.253 136.64-111.18 248.372-247.82 248.468-59.015.042-113.223-20.53-155.822-54.911-11.077-8.94-11.905-25.541-1.839-35.607l11.267-11.267c8.609-8.609 22.353-9.551 31.891-1.984C173.062 425.135 212.781 440 256 440c101.705 0 184-82.311 184-184 0-101.705-82.311-184-184-184-48.814 0-93.149 18.969-126.068 49.932l50.754 50.754c10.08 10.08 2.941 27.314-11.313 27.314H24c-8.837 0-16-7.163-16-16V38.627c0-14.254 17.234-21.393 27.314-11.314l49.372 49.372C129.209 34.136 189.552 8 256 8c136.81 0 247.747 110.78 248 247.531zm-180.912 78.784l9.823-12.63c8.138-10.463 6.253-25.542-4.21-33.679L288 256.349V152c0-13.255-10.745-24-24-24h-16c-13.255 0-24 10.745-24 24v135.651l65.409 50.874c10.463 8.137 25.541 6.253 33.679-4.21z"></path>
                                </svg>
                                Challenge History
                            </a>
                        </li>
                        <li class="c-sidebar-nav-title">Connections</li>
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link" href="#">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="c-sidebar-nav-icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M480.07 96H160a160 160 0 1 0 114.24 272h91.52A160 160 0 1 0 480.07 96zM248 268a12 12 0 0 1-12 12h-52v52a12 12 0 0 1-12 12h-24a12 12 0 0 1-12-12v-52H84a12 12 0 0 1-12-12v-24a12 12 0 0 1 12-12h52v-52a12 12 0 0 1 12-12h24a12 12 0 0 1 12 12v52h52a12 12 0 0 1 12 12zm216 76a40 40 0 1 1 40-40 40 40 0 0 1-40 40zm64-96a40 40 0 1 1 40-40 40 40 0 0 1-40 40z"></path>
                                </svg>
                                Game
                            </a>
                        </li>

                        <li class="c-sidebar-nav-title">Challenge subscription</li>
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link" href="#">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 640 512" class="c-sidebar-nav-icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M480.07 96H160a160 160 0 1 0 114.24 272h91.52A160 160 0 1 0 480.07 96zM248 268a12 12 0 0 1-12 12h-52v52a12 12 0 0 1-12 12h-24a12 12 0 0 1-12-12v-52H84a12 12 0 0 1-12-12v-24a12 12 0 0 1 12-12h52v-52a12 12 0 0 1 12-12h24a12 12 0 0 1 12 12v52h52a12 12 0 0 1 12 12zm216 76a40 40 0 1 1 40-40 40 40 0 0 1-40 40zm64-96a40 40 0 1 1 40-40 40 40 0 0 1-40 40z"></path>
                                </svg>
                                Subscribe
                            </a>
                        </li>
                        <li class="c-sidebar-nav-divider mt-auto"></li>
                        <li class="c-sidebar-nav-item">
                            <a class="c-sidebar-nav-link" href="#">
                                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="c-sidebar-nav-icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                                </svg>
                                FAQ
                            </a>
                        </li>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                        </div>
                    </ul>
                    <button class="c-sidebar-minimizer c-d-md-down-none" type="button"></button>
                </div>
                <div class="c-sidebar c-sidebar-light c-sidebar-right c-sidebar-overlaid c-sidebar-lg">
                    <button class="c-sidebar-close" aria-label="Close">
                        <svg class="c-icon" width="24" height="24" viewBox="0 0 24 24">
                        <title>x</title>
                        <path d="M20.030 5.030l-1.061-1.061-6.97 6.97-6.97-6.97-1.061 1.061 6.97 6.97-6.97 6.97 1.061 1.061 6.97-6.97 6.97 6.97 1.061-1.061-6.97-6.97 6.97-6.97z"></path>
                        </svg>
                    </button>
                    <div class="nav-underline">
                        <div class="nav nav-tabs">
                            <div class="nav-item">
                                <div class="nav-link">Aside</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="c-wrapper">
                    <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
                        <button class="c-header-toggler ml-md-3 d-lg-none" type="button">
                            <span class="c-header-toggler-icon"></span>
                        </button>
                        <a aria-current="page" class="c-header-brand mx-auto d-lg-none active" href="#">
                            <img class="" src="img/theme/logo-top-right.png" width="85" height="37" alt="Logo">
                        </a>
                        <ul class="px-3 ml-auto c-header-nav">
                            <button class="mr-2 btn btn-link btn-sm" type="button">Login</button>
                            <button class="btn btn-outline-primary btn-sm" type="button">Register</button>
                        </ul>
                    </header>
                    <div class="c-body">

                        <main class="">
                            <div class="m-0 border-0 card">
                                <svg class="card-img rounded-0 img-fluid w-100" height="200" style="background: url('img/theme/challenge_banner.jpg') 0% 0% / cover;"></svg>
                            </div>
                            <section class="container" style="margin-top:110px;">
                                <div class="row">
                                    <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
                                        <img src="img/theme/assets.png" alt="" class="img-responsive img-rounded" style="width:80%;"/>
                                    </div>
                                    <div class="col-xm-12 col-sm-12 col-md-6 col-lg-6">
                                        <h2>Increase your rank buying our game assets!</h2>
                                        <p>Season 2021 has fully started. In case you missed it, to celebrate, Riot released a Warrior's remix cinematic. This fully rendered 3D music video showed off some of your favorite League of Legends champs' epic lore moments</p>
                                        <h4><span id='devise'></span> $ 15.00</h2>    
                                            <hr>
                                            <form class="form" method="POST">
                                                <div class="form-group"> 
                                                    <label for="Currency" >
                                                        Currency                                    
                                                        <select class="form-control" id="currency" name="currency" value="">
                                                            <option value = "AUD">AUD</option>
                                                            <option value = "BRL">BRL</option>
                                                            <option value = "CAD" selected>CAD</option>
                                                            <option value = "CNY">CNY</option>
                                                            <option value = "EUR">EUR</option>
                                                            <option value = "HKD">HKD</option>
                                                            <option value = "INR">INR</option>
                                                            <option value = "IDR">IDR</option>
                                                            <option value = "JPY">JPY</option>
                                                            <option value = "MYR">MYR</option>
                                                            <option value = "MXN">MXN</option>
                                                            <option value = "NZD">NZD</option>
                                                            <option value = "NOK">NOK</option>
                                                            <option value = "PEN">PEN</option>
                                                            <option value = "RUB">RUB</option>
                                                            <option value = "SAR">SAR</option>
                                                            <option value = "SGD">SGD</option>
                                                            <option value = "ZAR">ZAR</option>
                                                            <option value = "KRW">KRW</option>
                                                            <option value = "SEK">SEK</option>
                                                            <option value = "CHF">CHF</option>
                                                            <option value = "TWD">TWD</option>
                                                            <option value = "THB">THB</option>
                                                            <option value = "TRY">TRY</option>
                                                            <option value = "GBP">GBP</option>
                                                            <option value = "USD">USD</option>
                                                            <option value = "VND">VND</option>
                                                        </select>                                    
                                                    </label>
                                                    <label for="Total" >
                                                        Total $                                    
                                                        <input type="text" class="form-control" id="Total" name="amount" value="15.00" disabled="disabled">
                                                    </label>                                
                                                    <label for="Total" >
                                                        USD Total $  
                                                        <input type="text" class="form-control" id="convertedTotal" disabled="disabled">                                
                                                    </label>

                                                </div>
                                                <div class="form-group"> 
                                                    <p>Choose a payment method</p>
                                                    <img src="img/paypal-logo.png" alt="" style="width:150px;height:auto;"/>
                                                    <img src="img/theme/stripe.png" alt="" style="width:100px;height:auto;"/>
                                                    <a href='#' id='show-payment'><img src="img/theme/elia_logo.png" alt="" style="width:100px;height:auto;" /></a>
                                                    <button type="button" class="btn btn-primary btn-block" id="eliaExpressPay" style='display:none;'>Pay </button>
                                                </div>                            
                                            </form>
                                    </div>
 
                                    <div id='eliaexpresspaycontainer' style="height:650px;width:400px"></div>                                            
                                </div>
                            </section>  
                        </main>
                    </div>
                    <footer class="c-footer">
                        <div class="mr-auto footer-icons">
                            <ul class="m-0 p-0">
                                <li class="d-inline mr-3">
                                    <a href="#" class="" rel="noopener noreferrer" target="_blank">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="d-inline mx-3">
                                    <a href="#" class="" rel="noopener noreferrer" target="_blank">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="d-inline mx-3">
                                    <a href="#" class="" rel="noopener noreferrer" target="_blank">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M297.216 243.2c0 15.616-11.52 28.416-26.112 28.416-14.336 0-26.112-12.8-26.112-28.416s11.52-28.416 26.112-28.416c14.592 0 26.112 12.8 26.112 28.416zm-119.552-28.416c-14.592 0-26.112 12.8-26.112 28.416s11.776 28.416 26.112 28.416c14.592 0 26.112-12.8 26.112-28.416.256-15.616-11.52-28.416-26.112-28.416zM448 52.736V512c-64.494-56.994-43.868-38.128-118.784-107.776l13.568 47.36H52.48C23.552 451.584 0 428.032 0 398.848V52.736C0 23.552 23.552 0 52.48 0h343.04C424.448 0 448 23.552 448 52.736zm-72.96 242.688c0-82.432-36.864-149.248-36.864-149.248-36.864-27.648-71.936-26.88-71.936-26.88l-3.584 4.096c43.52 13.312 63.744 32.512 63.744 32.512-60.811-33.329-132.244-33.335-191.232-7.424-9.472 4.352-15.104 7.424-15.104 7.424s21.248-20.224 67.328-33.536l-2.56-3.072s-35.072-.768-71.936 26.88c0 0-36.864 66.816-36.864 149.248 0 0 21.504 37.12 78.08 38.912 0 0 9.472-11.52 17.152-21.248-32.512-9.728-44.8-30.208-44.8-30.208 3.766 2.636 9.976 6.053 10.496 6.4 43.21 24.198 104.588 32.126 159.744 8.96 8.96-3.328 18.944-8.192 29.44-15.104 0 0-12.8 20.992-46.336 30.464 7.68 9.728 16.896 20.736 16.896 20.736 56.576-1.792 78.336-38.912 78.336-38.912z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="d-inline mx-3">
                                    <a href="#" class="" rel="noopener noreferrer" target="_blank">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="d-inline ml-3">
                                    <a href="#" class="" rel="noopener noreferrer" target="_blank">
                                        <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="ml-auto footer-text"> 2021 - All rights reserved.<span class="mx-2">|</span>
                            <a href="#" class="">Terms of Use</a><span class="mx-2">|</span>
                            <a href="#" class="">Privacy Policy</a>
                        </div>
                    </footer>
                </div>
            </div>
        </div>
        
    </body>
</html>