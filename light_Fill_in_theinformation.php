<?php include __DIR__ . '/parts/config.php'; ?>





<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>點燈-填寫資料</title>
    <!-- 重置 -->
    <link rel="stylesheet" href="./css/reset.css">
    <!-- bootstrap 4.6.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- 動畫 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- 小圖示 -->
    <script src="https://kit.fontawesome.com/271f30e909.js" crossorigin="anonymous"></script>
    <!-- 文字 -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Faustina:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/sample_body.css">

    <!-- navbar2 -->
    <link rel="stylesheet" href="./css/navbar2.css">


    <style>
        .graycolor:hover {

            box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, .15);
            transition: .5s;
        }

        .graycolor {
            background-color: #c0c0c0;
        }



        .butstyle_1 {
            padding: 15px 15px;
        }

        .radius0 {
            border-radius: 0;
        }

        .maxwidth992 {

            width: 85%;
        }

        .dflex {
            display: flex;
        }

        .flexwrap {
            flex-wrap: wrap;
        }

        .alignitems {
            align-items: center;
        }



        .padding20 {
            padding: 0 20px;
        }

        .p22 {
            font-size: 20px;
            color: #cc543a;
        }

        .redcolorh5 {
            color: #cc543a;
        }

        .pad00010 {
            padding: 0 0 0 10px;

        }

        .opac {
            opacity: 0;
        }

        .juscsb {
            justify-content: space-between;
        }

        .marginauto {
            margin: auto;
        }



        .padddingtop40 {
            padding-top: 40px;
        }

        .borderbottom {
            border-bottom: 1px solid #707070;
        }

        .padddingbottom150 {
            padding-bottom: 150px;
        }

        .padright0 {
            padding-right: 0px;
        }

        .padright40 {
            padding-right: 40px;

        }

        .pad0 {
            padding: 0;
        }

        .vishidden {
            visibility: hidden;
        }

        .butomcolor {
            background-color: #d1d1d1;
        }



        .light_Fill_in_theinformation_ {
            background-image: url(./img/nav_background_1.png);

        }

        .postre {
            position: relative;

        }

        .postab {
            position: absolute;
        }

        .padbut {
            padding: 6px 12px;
            top: 5px;
        }

        .padleft10 {
            padding-left: 10px;
        }

        .butflexmargin {
            display: flex;
            margin: auto;
            justify-content: space-evenly;
            max-width: 400px;
        }

        .butmaxwid {
            max-width: 600px;
            justify-content: center;
        }

        .light_Fill_in_theinformation_card_icon {
            width: 40px;
        }

        .light_Fill_in_theinformation_card_icon img {
            width: 100%;
        }

        .marginauto0auto {
            margin: auto 0 auto auto;

        }

        .visy {
            visibility: hidden;
        }

        .dipay {
            display: none;
        }

        .pad20 {
            padding: 20px 0;
        }

        .lightcard {
            border: 1px solid #707070;
            border-radius: 5px;
            padding: 15px 10px 0 0;
            margin-bottom: 10px;
        }

        /* 手機在這邊~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
        /* min-width 桌面板 */
        @media (min-width:1400px) {
            .displayno {
                display: none;
            }

            .displayflex {
                display: flex;
            }

            .paddingbottom40 {
                padding-bottom: 35px;
            }

            .paddingbottom30 {
                padding-bottom: 40px;
            }

            .padtop100 {
                padding-top: 100px;
            }

            .padbut {
                left: 55%;
            }

            .textalign_center {
                text-align: center;
            }

            .paddingbottom35 {
                padding-bottom: 35px;
            }

        }





        /* max-width 手機板 */
        @media (max-width:1399px) {
            .breadcrumb_style_1 {
                /* contanier架構專用 padding 0 15px  */
                padding: 20px 15px;
                width: 100%;
            }


            .displayno_md {
                display: none;
            }

            .paddingbottom40 {
                padding: 0 0 15px 0;
            }

            .paddingbottom30 {
                padding: 0 0 40px 0;
            }


            .padbot40 {
                padding-bottom: 40px;
            }

            .padtop100 {
                padding-top: 5%;
            }

            .padbut {
                left: 80%;
            }

            .padddingbottom150 {
                padding-bottom: 10%;
            }


        }
    </style>
</head>

<body>
    <!-- navbar~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->

    <div class="nav_burgurBar">
        <div class="nav_burgurBar_img">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" viewBox="0 0 25 20">
                <g id="Group_135" data-name="Group 135" transform="translate(-341.5 -1313.5)">
                    <line id="Line_50" data-name="Line 50" x2="23" transform="translate(342.5 1314.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2" />
                    <line id="Line_51" data-name="Line 51" x2="23" transform="translate(342.5 1323.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2" />
                    <line id="Line_52" data-name="Line 52" x2="23" transform="translate(342.5 1332.5)" fill="none" stroke="#707070" stroke-linecap="round" stroke-width="2" />
                </g>
            </svg>
        </div>

        <div class="nav_logo_mobile">
            <img src="./img/nav_logo_mobile.svg" alt="">
        </div>

    </div>

    <div class="nav_overlayNav">
        <div class="nav_closeBtn mb-4">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 20 20">
                <title>close</title>
                <path fill='#fff' d="M10 8.586l-7.071-7.071-1.414 1.414 7.071 7.071-7.071 7.071 1.414 1.414 7.071-7.071 7.071 7.071 1.414-1.414-7.071-7.071 7.071-7.071-1.414-1.414-7.071 7.071z">
                </path>
            </svg>
        </div>
        <div class="nav_overlayNavBox">
            <ul>
                <a href="">
                    <li>最新消息</li>
                </a>
                <a href="">
                    <li>探索灣廟</li>
                </a>
                <li class="nav_ser_mobile">
                    線上服務
                    <i class="fas fa-angle-down"></i>
                </li>
                <ul class="nav_dropDownMenu_mobile">
                    <a class="dropdown-item nav_ser_item_mob" href="#">祈福點燈</a>
                    <a class="dropdown-item nav_ser_item_mob" href="#">求神問卜</a>
                </ul>
                <a href="">
                    <li>聖地行旅</li>
                </a>
                <a href="">
                    <li>祈福商店</li>
                </a>
                <a href="">
                    <li>購物車</li>
                </a>
                <a href="" data-toggle="modal" data-target="#loginCenter">
                    <li>登入 | 註冊</li>
                </a>
            </ul>
        </div>
    </div>

    <!-- 電腦螢幕大小的navbar -->
    <nav class="nav_navbar_com">
        <div class="nav_navbar_com_container">
            <!-- 請依檔案位置修改logo路徑 -->
            <img src='./img/nav_logo.svg'>

            <div class="nav_navbar">
                <div class="nav_navbarBox">
                    <div class="nav_nav_left">
                        <a href="" class="nav_navbar_item">
                            <div class="nav_hide_ch">最新消息</div>
                            <div class="nav_hide_en">NEWS</div>
                        </a>
                        <a href="./discover.html" class="nav_navbar_item">
                            <div class="nav_hide_ch">探索灣廟</div>
                            <div class="nav_hide_en">EXPLORE</div>
                        </a>
                        <a href="#" class="nav_navbar_item nav_ser">
                            <div class="nav_hide_ch">線上服務</div>
                            <div class="nav_hide_en">SERVICE</div>

                            <ul class="nav_dropDownMenu">
                                <a class="dropdown-item nav_ser_item" href="./light_Introduction.html">祈福點燈</a>
                                <a class="dropdown-item nav_ser_item" href="./lucky.html">求神問卜</a>
                            </ul>
                        </a>

                        <a href="" class="nav_navbar_item">
                            <div class="nav_hide_ch">聖地行旅</div>
                            <div class="nav_hide_en">TRIP</div>
                        </a>
                        <a href="" class="nav_navbar_item">
                            <div class="nav_hide_ch">祈福商店</div>
                            <div class="nav_hide_en">SHOP</div>
                        </a>
                        <a href="" class="nav_navbar_item">
                            <div class="nav_hide_ch">購物車</div>
                            <div class="nav_hide_en">CART</div>
                        </a>
                    </div>
                    <div class="nav_nav_right">
                        <a href="" data-toggle="modal" data-target="#loginCenter" class="nav_navbar_item">
                            <div>登入</div>
                        </a>
                        <span class="nav_navbar_item">|</span>
                        <a href="" data-toggle="modal" data-target="#registerCenter" class="nav_navbar_item">
                            <div>註冊</div>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <hr class="nav_navline">
    </nav>

    <!-- login -->
    <div class="modal fade" id="loginCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-re">
                <div class="modal-header modal-header-re">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalCenterTitle">登入 | LOGIN</h5>
                </div>
                <div class="modal-body">
                    <form class="mt-3">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-re" id="account-name" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-re" id="password-text" placeholder="Password">
                        </div>
                        <input type="checkbox"> 記住帳號
                    </form>
                </div>
                <div class="modal-footer modal-footer-re">
                    <button type="button" class="btn btn-primary btn-primary-re">登入</button>
                </div>
                <div class="modal-footer2-re mt-3">
                    <a class="mr-5" data-toggle="modal" data-target="#lostPassword" id="passwordbtn">忘記密碼</a>
                    <a data-toggle="modal" data-target="#registerCenter" id="registerbtn">註冊帳號</a>
                </div>
            </div>
        </div>
    </div>

    <!-- lost password -->
    <div class="modal fade" id="lostPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-re">
                <div class="modal-header modal-header-re">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalCenterTitle">找回密碼</h5>
                </div>
                <div class="modal-body">
                    <form class="mt-3">
                        <div class="form-group mb-3">
                            <p>請輸入您註冊的電子郵件，您將會在電子郵件信箱中收到重設密碼的連結。</p>
                            <input type="text" class="form-control form-control-re" id="account-name" placeholder="Email">
                        </div>
                    </form>
                </div>
                <div class="modal-footer modal-footer-re">
                    <button type="button" class="btn btn-primary btn-primary-re">送出</button>
                </div>
            </div>
        </div>
    </div>

    <!-- register -->
    <div class="modal fade" id="registerCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-content-re">
                <div class="modal-header modal-header-re">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h5 class="modal-title" id="exampleModalCenterTitle">註冊 | REGISTER</h5>
                </div>
                <div class="modal-body">
                    <form class="mt-3">
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-re" id="account-name" placeholder="User Name">
                        </div>
                        <div class="form-group mb-3">
                            <input type="text" class="form-control form-control-re" id="account-name" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-re" id="password-text" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <input class="form-control form-control-re" id="password-text" placeholder="Repeat Password">
                        </div>
                    </form>
                </div>
                <div class="modal-footer modal-footer-re">
                    <button type="button" class="btn btn-primary btn-primary-re">註冊</button>
                </div>
            </div>
        </div>
    </div>


    <!-- 我是麵包屑-->
    <div class="breadcrumb_style   backgroundimg_1">
        <div class="d-flex flex-wrap breadcrumb_style_1 ">
            <a href="./index" class="astlyep">首頁</a>
            <!-- 共用雲端找箭頭icon-->
            <img src="./img/nav_arrow_right.svg">
            <a href="./light_Introduction.html" class="astlyep">燈種介紹</a>
            <img src="./img/nav_arrow_right.svg">
            <a href="./light_Description.html" class="astlyep">服務說明</a>
            <img src="./img/nav_arrow_right.svg">
            <a href="./light_Fill_in_theinformation.html" class="astlyep">點燈填寫</a>
        </div>
    </div>

    <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <div class="light_Fill_in_theinformation_ padtop100">
        <!--  max-width 992px -->
        <div class="light_Fill_in_theinformation_set textalign_center  marginauto">

            <!--  根目錄 -->
            <div class="light_Fill_in_theinformation_directory"></div>

            <!--   -->
            <div class="light_Fill_in_theinformation_text container removeset">
                <!--  _燈種介紹 區塊-->
                <div class="light_Fill_in_theinformation_text_1 borderbottom">
                    <!--  _標題 -->
                    <div class="light_Fill_in_theinformation_title paddingbottom40">
                        <h3>燈種介紹</h3>
                    </div>
                    <!--   光明燈全卡   收縮svg在這邊!!!!!-->
                    <div class="light_Fill_in_theinformation_cardset d-flex juscsb marginauto col-lg-9 flexwrap pad0">
                        <!--   光明燈套卡3 -->
                        <div class="light_Fill_in_theinformation_card_3">
                            <!--   光明燈 圖 燈 說明 單卡-->
                            <div class="light_Fill_in_theinformation_card d-flex alignitems paddingbottom40">
                                <!-- 小燈icon svg -->

                                <div class="light_Fill_in_theinformation_card_icon">
                                    <img src="./img/light_diwalilamp_1.svg">
                                </div>

                                <div class="light_Fill_in_theinformation_card_p  padding20">
                                    <p class="p22">光明燈</p>
                                </div>
                                <div class="light_Fill_in_theinformation_card_p">
                                    <p>祈福安康，前途光明</p>
                                </div>
                            </div>
                            <!--   文昌燈 圖 燈 說明 單卡-->
                            <div class="light_Fill_in_theinformation_card d-flex alignitems paddingbottom40">
                                <!-- 小燈icon svg -->

                                <div class="light_Fill_in_theinformation_card_icon">
                                    <img src="./img/light_diwalilamp_1.svg">
                                </div>


                                <div class="light_Fill_in_theinformation_card_p  padding20">
                                    <p class="p22">文昌燈</p>
                                </div>
                                <div class="light_Fill_in_theinformation_card_p">
                                    <p>祈求金榜題名、工作升遷</p>
                                </div>
                            </div>
                            <!--   安太歲 圖 燈 說明 單卡-->
                            <div class="light_Fill_in_theinformation_card d-flex alignitems paddingbottom40">
                                <!-- 小燈icon svg -->
                                <div class="light_Fill_in_theinformation_card_icon">
                                    <img src="./img/light_diwalilamp_1.svg">
                                </div>

                                <div class="light_Fill_in_theinformation_card_p  padding20">
                                    <p class="p22">安太歲</p>
                                </div>
                                <div class="light_Fill_in_theinformation_card_p">
                                    <p>祈求流年平安、諸事順遂</p>
                                </div>
                            </div>

                        </div>
                        <!--   藥師燈套卡3 -->
                        <div class="light_Fill_in_theinformation_card_3">
                            <!--   藥師燈 圖 燈 說明 單卡-->
                            <div class="light_Fill_in_theinformation_card d-flex alignitems paddingbottom40">
                                <!-- 小燈icon svg -->
                                <div class="light_Fill_in_theinformation_card_icon">
                                    <img src="./img/light_diwalilamp_1.svg">
                                </div>

                                <div class="light_Fill_in_theinformation_card_p  padding20">
                                    <p class="p22">藥師燈</p>
                                </div>
                                <div class="light_Fill_in_theinformation_card_p">
                                    <p>祈求身體健康平安</p>
                                </div>
                            </div>
                            <!--   發財燈 圖 燈 說明 單卡-->
                            <div class="light_Fill_in_theinformation_card d-flex alignitems paddingbottom40">
                                <!-- 小燈icon svg -->
                                <div class="light_Fill_in_theinformation_card_icon">
                                    <img src="./img/light_diwalilamp_1.svg">
                                </div>

                                <div class="light_Fill_in_theinformation_card_p  padding20">
                                    <p class="p22">發財燈</p>
                                </div>
                                <div class="light_Fill_in_theinformation_card_p">
                                    <p>祈求趨吉避凶、投資倍利</p>
                                </div>
                            </div>
                            <!--   姻緣燈 圖 燈 說明 單卡-->
                            <div class="light_Fill_in_theinformation_card d-flex alignitems paddingbottom40">
                                <!-- 小燈icon svg -->
                                <div class="light_Fill_in_theinformation_card_icon">
                                    <img src="./img/light_diwalilamp_1.svg">
                                </div>

                                <div class="light_Fill_in_theinformation_card_p  padding20">
                                    <p class="p22">姻緣燈</p>
                                </div>
                                <div class="light_Fill_in_theinformation_card_p">
                                    <p>祈求姻緣順利、婚姻美滿</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

                <!--  申請人資料卡(付款人)區塊 -->
                <div class="light_Fill_in_theinformation_text_2 padddingtop40 displayno_md">
                    <!--  申請人 小提示 -->
                    <div class="light_Fill_in_theinformation_text_star d-flex juscsb paddingbottom40">
                        <!--   小提示 必填資料 -->
                        <div class="light_Fill_in_theinformation_text_star_left">
                            <!-- *的 ICON -->
                            <!-- <img src=""> -->
                            <p class="redcolorh5">*為必填資料</p>
                        </div>
                        <!--   小提示 同會員資料 -->
                        <div class="light_Fill_in_theinformation_text_star_right    alignitems d-flex">
                            <input type="checkbox" id="exampleCheck1">
                            <p class="form-check-label padleft10" for="exampleCheck1">同會員資料</p>
                        </div>
                    </div>

                    <!--  申請人_標題 -->
                    <div class="light_Fill_in_theinformation_title paddingbottom40">
                        <h3>申請人資料(付款人)</h3>
                    </div>

                    <!--  申請人_input集合-->
                    <div class="light_Fill_in_theinformation_inputset borderbottom ">
                        <!--  _申請人input_1 姓名-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!-- *姓名 -->
                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                <p class="redcolorh5">*</p>
                                <p>姓名</p>
                            </div>
                            <!-- boostarp input -->
                            <input type="text" class="form-control col-8 radius0" placeholder="請輸入姓名" aria-label="請輸入姓名" aria-describedby="addon-wrapping">

                        </div>
                        <!--  _申請人input_1 連絡電話-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!-- *連絡電話 -->
                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                <p class="redcolorh5">*</p>
                                <p>連絡電話</p>
                            </div>
                            <!-- boostarp input -->
                            <input type="text" class="form-control col-8 radius0" placeholder="請輸入連絡電話" aria-label="請輸入連絡電話" aria-describedby="addon-wrapping">
                        </div>
                        <!--  _申請人input_1 地址-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!-- *地址 -->
                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                <p class="redcolorh5">*</p>
                                <p>地址</p>
                            </div>
                            <!-- boostarp input -->
                            <input type="text" class="form-control col-8 radius0" placeholder="請輸入地址" aria-label="請輸入地址" aria-describedby="addon-wrapping">
                        </div>
                        <!--  _申請人input_1 E-mail-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom30">
                            <!-- *E-mail -->
                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                <p class="redcolorh5">*</p>
                                <p>E-mail</p>
                            </div>
                            <!-- boostarp input -->
                            <input type="text" class="form-control col-8 radius0" placeholder="請輸入E-mail" aria-label="請輸入E-mail" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                </div>

                <!--  手機用 申請人資料卡(付款人)區塊 -->
                <div class="light_Fill_in_theinformation_text_2 padddingtop40 displayno">
                    <!--  手機用 申請人小提示 -->
                    <div class="light_Fill_in_theinformation_text_star d-flex juscsb paddingbottom40">
                        <!--  手機用 申請人小提示 必填資料 -->
                        <div class="light_Fill_in_theinformation_text_star_left">
                            <!-- *的 ICON -->
                            <!-- <img src=""> -->
                            <p class="redcolorh5">*為必填資料</p>
                        </div>
                        <!--  手機用 申請人小提示 同會員資料 -->
                        <div class="light_Fill_in_theinformation_text_star_right    alignitems d-flex">
                            <input type="checkbox" id="exampleCheck1" class="radius0">
                            <p class="form-check-label padleft10" for="exampleCheck1">同會員資料</p>
                        </div>
                    </div>

                    <!--  手機用 申請人_標題 -->
                    <div class="light_Fill_in_theinformation_title paddingbottom40">
                        <h3>申請人資料(付款人)</h3>
                    </div>

                    <!--  手機用_申請人input集合-->
                    <div class="light_Fill_in_theinformation_inputset borderbottom ">
                        <!--  手機用_申請人input_1 姓名-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!-- 手機用*姓名 -->
                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                <p class="redcolorh5">*</p>
                                <p>姓名</p>
                            </div>
                            <!--手機用 boostarp input -->
                            <input type="text" class="form-control col-7 radius0" placeholder="請輸入姓名" aria-label="請輸入姓名" aria-describedby="addon-wrapping">

                        </div>
                        <!--  手機用_申請人input_1 連絡電話-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!-- 手機用*連絡電話 -->
                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                <p class="redcolorh5">*</p>
                                <p>連絡電話</p>
                            </div>
                            <!-- boostarp input -->
                            <input type="text" class="form-control col-7 radius0" placeholder="請輸入連絡電話" aria-label="請輸入連絡電話" aria-describedby="addon-wrapping">
                        </div>
                        <!--  手機用_申請人input_1 地址-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!-- *地址 -->
                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                <p class="redcolorh5">*</p>
                                <p>地址</p>
                            </div>
                            <!--手機用  boostarp input -->
                            <input type="text" class="form-control col-7 radius0" placeholder="請輸入地址" aria-label="請輸入地址" aria-describedby="addon-wrapping">
                        </div>
                        <!--  手機用_申請人input_1 E-mail-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom30">
                            <!-- 手機用*E-mail -->
                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                <p class="redcolorh5">*</p>
                                <p>E-mail</p>
                            </div>
                            <!-- 手機用 boostarp input -->
                            <input type="text" class="form-control col-7 radius0" placeholder="請輸入E-mail" aria-label="請輸入E-mail" aria-describedby="addon-wrapping">
                        </div>
                    </div>
                </div>



                <!--  預設祈福者 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="light_Fill_in_theinformation_text_3 padddingtop40">
                    <!--  預設祈福者  小提示 -->
                    <div class="light_Fill_in_theinformation_text_star d-flex juscsb paddingbottom40">
                        <!--  預設祈福者  小提示 必填資料 -->
                        <div class="light_Fill_in_theinformation_text_star_left">
                            <!-- *的 ICON -->
                            <!-- <img src=""> -->
                            <p class="redcolorh5">*為必填資料</p>
                        </div>
                        <!--  預設祈福者  小提示 同會員資料 -->
                        <div class="light_Fill_in_theinformation_text_star_right    alignitems d-flex">
                            <input type="checkbox" id="exampleCheck1" class="radius0">
                            <p class="form-check-label padleft10" for="exampleCheck1">同會員資料</p>
                        </div>
                    </div>
                    <!--  預設祈福者 _標題 -->
                    <div class="light_Fill_in_theinformation_title paddingbottom40 postre">
                        <h3 class="postre">祈福者
                            <!--  預設祈福者 _標題_刪除按鈕 -->
                            <button class="graycolor postab padbut dipay">
                                <p>刪除</p>
                            </button>
                        </h3>

                    </div>


                    <!--  預設祈福者 input集合 桌機用-->
                    <div class="light_Fill_in_theinformation_inputset borderbottom displayno_md">
                        <!--  input_1_姓名-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!-- *姓名 -->
                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                <p class="redcolorh5">*</p>
                                <p>姓名</p>
                            </div>
                            <!-- boostarp input -->
                            <input type="text" class="form-control col-8 radius0" placeholder="請輸入姓名" aria-label="請輸入姓名" aria-describedby="addon-wrapping">
                        </div>

                        <!--  預設祈福者input_1_生日-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!--預設祈福者 *出生日期 -->
                            <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex alignitems">
                                <p class="redcolorh5">*</p>
                                <p>出生日期</p>
                            </div>
                            <!--預設祈福者 boostarp 下拉選單 -->
                            <div class="col-lg-11 displayflex alignitems p-0">
                                <div class="col-lg-2 p-0">
                                    <select class="form-control col-11 radius0" id="exampleInputTime">
                                        <option value="國曆">國曆</option>
                                        <option value="農曆">農曆</option>
                                    </select>
                                </div>
                                <div class="col-lg-2 d-flex alignitems p-0 ">
                                    <select class="form-control col-10 radius0" id="exampleInputTime">
                                        <option value="">1994</option>
                                        <option value="">1995</option>
                                    </select>
                                    <p>年</p>
                                </div>
                                <div class="col-lg-2 d-flex alignitems p-0">
                                    <select class="form-control col-8 radius0" id="exampleInputTime">
                                        <option value="">1</option>
                                        <option value="">12</option>
                                    </select>
                                    <p>月</p>
                                </div>
                                <div class="col-lg-2 d-flex alignitems p-0 ">
                                    <select class="form-control col-8 radius0" id="exampleInputTime">
                                        <option value="">1</option>
                                        <option value="">31</option>
                                    </select>
                                    <p>日</p>
                                </div>
                            </div>
                        </div>


                        <!--  預設祈福者input_1_時辰-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!-- 預設祈福者*時辰 -->
                            <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex alignitems">
                                <p class="redcolorh5 opac">*</p>
                                <p>出生時辰</p>
                            </div>
                            <!--預設祈福者 boostarp 下拉選單 -->
                            <div class="col-11 d-flex alignitems p-0">
                                <div class="col-2 p-0">
                                    <select class="form-control col-11 radius0" id="exampleInputTime">
                                        <option value="">吉時</option>
                                        <option value="">X時</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <!--  預設祈福者input_1_性別-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!-- 預設祈福者*性別 -->
                            <div class="light_Fill_in_theinformation_input_text col-4 d-flex">
                                <p class="redcolorh5">*</p>
                                <p>性別</p>
                            </div>
                            <!--預設祈福者 boostarp check 改造-->
                            <div class="light_Fill_in_theinformation_check d-flex">
                                <div class="check d-flex alignitems padright40">
                                    <input class="check_input radius0" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <p class="form-check-label" for="exampleRadios1">
                                        男
                                    </p>
                                </div>
                                <div class="check d-flex alignitems">
                                    <input class="check_input radius0" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <p class="form-check-label" for="exampleRadios2">
                                        女
                                    </p>
                                </div>
                            </div>
                        </div>




                        <!-- 預設祈福者input_1_電話-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!--預設祈福者 *連絡電話 -->
                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                <p class="redcolorh5 opac">*</p>
                                <p>連絡電話</p>
                            </div>
                            <!--預設祈福者 boostarp input -->
                            <input type="text" class="form-control col-8 radius0" placeholder="請輸入連絡電話" aria-label="請輸入連絡電話" aria-describedby="addon-wrapping">
                        </div>

                        <!--  預設祈福者input_1_地址-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!--預設祈福者 *地址 -->
                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                <p class="redcolorh5">*</p>
                                <p>地址</p>
                            </div>
                            <!-- 預設祈福者boostarp input -->
                            <input type="text" class="form-control col-8 radius0" placeholder="請輸入地址" aria-label="請輸入地址" aria-describedby="addon-wrapping">
                        </div>

                        <!--預設祈福者 改 -->
                        <div class="light_add_set lightadd_this" id="lightadd_this">

                            <!-- 三層篩選 救救我QQ~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                            <div class="light_Fill_in_theinformation_input_set d-flex col-8 paddingbottom40 marginauto chained-selects" data-selector="myselector">
                                <!--  input_1_選擇燈種 -->
                                <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-7 marginauto p-0 ">
                                    <!-- *燈種 -->
                                    <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex alignitems">
                                        <p class="redcolorh5">*</p>
                                        <p>選擇燈種</p>
                                    </div>
                                    <!-- boostarp 下拉選單 -->
                                    <div class="col-4 d-flex alignitems p-0">
                                        <div class="col p-0">
                                            <select name="light_type" class="form-control col-11 radius0 lightarray" id="select-1">
                                                <option selected>選擇燈種</option>
                                                <option>光明燈</option>
                                                <option>文昌燈</option>
                                                <option>安太歲</option>
                                                <option>藥師燈</option>
                                                <option>發財燈</option>
                                                <option>姻緣燈</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- 預設祈福者input_1_ 選擇廟宇-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto p-0 flex-wrap">
                                    <!-- 預設祈福者 *廟宇 -->
                                    <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex alignitems">
                                        <p class="redcolorh5">*</p>
                                        <p>選擇廟宇</p>
                                    </div>
                                    <!--預設祈福者 boostarp 下拉選單 -->
                                    <div class="col-3 d-flex alignitems p-0">
                                        <div class="col p-0">
                                            <select name="light_area" class="form-control col-11 radius0 areaarray" id="select-2" disabled>
                                                <option selected>選擇地區</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-5 d-flex alignitems p-0">
                                        <div class="col p-0">
                                            <select name="light_temple" class="form-control col-11 radius0" id="select-3" disabled>
                                                <option selected>選擇廟宇</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <!--  預設祈福者_按鈕_新增廟宇 -->
                        <div class="button_add_set d-flex juscsb  marginauto paddingbottom40 col-8">
                            <div class="button_add ">
                                <button class="graycolor butomcolor light_add">
                                    <p>+ 新增燈種與廟宇</p>
                                </button>
                            </div>
                            <!-- <div class="button_add vishidden ">
                                <button class="graycolor">
                                    <p>+ 新增燈種與廟宇</p>
                                </button>
                            </div> -->
                        </div>
                    </div>



                    <!--  手機用 預設祈福者 input集合 -->
                    <div class="light_Fill_in_theinformation_inputset borderbottom  displayno">
                        <!--  手機用 預設祈福者 input_1_姓名-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!--手機用 *姓名 -->
                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                <p class="redcolorh5">*</p>
                                <p>姓名</p>
                            </div>
                            <!--手機用 boostarp input -->
                            <input type="text" class="form-control col-7 radius0" placeholder="請輸入姓名" aria-label="請輸入姓名" aria-describedby="addon-wrapping">
                        </div>

                        <!--  手機用 預設祈福者 input_1_生日-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!-- 手機用*出生日期 -->
                            <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems">
                                <p class="redcolorh5">*</p>
                                <p>出生日期</p>
                            </div>
                            <!--手機用 預設祈福者 boostarp 下拉選單 農曆 西元年 -->
                            <div class="col-7 d-flex p-0">
                                <div class="col displayflex alignitems p-0">
                                    <div class="col-10 p-0">
                                        <select class="form-control col radius0" id="exampleInputTime">
                                            <option value="國曆">國曆</option>
                                            <option value="農曆">農曆</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col d-flex alignitems p-0 marginauto0auto">
                                    <select class="form-control col radius0" id="exampleInputTime">
                                        <option value="">1994</option>
                                        <option value="">1995</option>
                                    </select>
                                    <p>年</p>
                                </div>
                            </div>

                        </div>

                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!-- 手機用*出生日期 -->
                            <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems visy">
                                <p class="redcolorh5">*</p>
                                <p>出生日期</p>
                            </div>
                            <!--手機用 預設祈福者 boostarp 下拉選單 月日 -->
                            <div class="col-7 d-flex p-0">
                                <div class="col displayflex alignitems p-0">
                                    <div class="col p-0 d-flex alignitems">
                                        <select class="form-control col radius0" id="exampleInputTime">
                                            <option value="">1</option>
                                            <option value="">12</option>
                                        </select>
                                        <p>月</p>
                                    </div>
                                </div>
                                <div class="col d-flex alignitems p-0 ">
                                    <select class="form-control col radius0" id="exampleInputTime">
                                        <option value="">1</option>
                                        <option value="">31</option>
                                    </select>
                                    <p>日</p>
                                </div>
                            </div>

                        </div>

                        <!--  手機用 預設祈福者 input_1_時辰-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!--手機用 *時辰 -->
                            <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems">
                                <p class="redcolorh5 opac">*</p>
                                <p>出生時辰</p>
                            </div>
                            <!--手機用 預設祈福者 boostarp 下拉選單 -->
                            <div class="col-7 d-flex alignitems p-0">
                                <div class="col p-0">
                                    <select class="form-control col-5 radius0" id="exampleInputTime">
                                        <option value="">吉時</option>
                                        <option value="">X時</option>
                                    </select>
                                </div>
                            </div>
                        </div>


                        <!--  手機用 預設祈福者 input_1_性別-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!--手機用 *性別 -->
                            <div class="light_Fill_in_theinformation_input_text col-5 d-flex">
                                <p class="redcolorh5">*</p>
                                <p>性別</p>
                            </div>
                            <!-- 手機用 預設祈福者 boostarp check 改造-->
                            <div class="light_Fill_in_theinformation_check d-flex">
                                <div class="check d-flex alignitems padright40">
                                    <input class="check_input radius0" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                    <p class="form-check-label" for="exampleRadios1">
                                        男
                                    </p>
                                </div>
                                <div class="check d-flex alignitems">
                                    <input class="check_input radius0" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                    <p class="form-check-label" for="exampleRadios2">
                                        女
                                    </p>
                                </div>
                            </div>
                        </div>

                        <!--  手機用 預設祈福者 input_1_電話-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!-- 手機用 *連絡電話 -->
                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                <p class="redcolorh5 opac">*</p>
                                <p>連絡電話</p>
                            </div>
                            <!-- 手機用 預設祈福者 boostarp input -->
                            <input type="text" class="form-control col-7 radius0" placeholder="請輸入連絡電話" aria-label="請輸入連絡電話" aria-describedby="addon-wrapping">
                        </div>

                        <!--  手機用 預設祈福者 input_1_地址-->
                        <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                            <!-- 手機用 *地址 -->
                            <div class="light_Fill_in_theinformation_input_text col d-flex">
                                <p class="redcolorh5">*</p>
                                <p>地址</p>
                            </div>
                            <!-- 手機用 預設祈福者 boostarp input -->
                            <input type="text" class="form-control col-7 radius0" placeholder="請輸入地址" aria-label="請輸入地址" aria-describedby="addon-wrapping">
                        </div>

                        <!-- 改 手機用 燈種+廟宇套裝-->
                        <div class="light_add_set_md lightadd_this_md">
                            <div class="light_Fill_in_theinformation_input_set  col marginauto lightcard" data-selector="myselector">
                                <!--  手機用 預設祈福者 input_1_選擇燈種 -->
                                <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col marginauto paddingbottom40 ">
                                    <!-- 手機用 *燈種 -->
                                    <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems">
                                        <p class="redcolorh5">*</p>
                                        <p>選擇燈種</p>
                                    </div>
                                    <!--手機用 預設祈福者 boostarp 下拉選單 -->
                                    <div class="col-7 d-flex alignitems p-0">
                                        <div class="col p-0">
                                            <select name="light_type" class="form-control col-11 radius0 lightarray" id="select-1">
                                                <option selected>選擇燈種</option>
                                                <option>光明燈</option>
                                                <option>文昌燈</option>
                                                <option>安太歲</option>
                                                <option>藥師燈</option>
                                                <option>發財燈</option>
                                                <option>姻緣燈</option>
                                            </select>
                                        </div>
                                        <!-- <i class="far fa-trash-alt marginauto removebut_far_md"></i> -->
                                    </div>
                                </div>

                                <!--  手機用 預設祈福者 input_1_ 選擇廟宇-->
                                <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col marginauto paddingbottom40">
                                    <!--手機用 *廟宇_地區 -->
                                    <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems">
                                        <p class="redcolorh5">*</p>
                                        <p>選擇廟宇</p>
                                    </div>
                                    <!-- 手機用 預設祈福者 boostarp 下拉選單 廟宇_地區 資料匯入-->
                                    <div class="col-7 d-flex alignitems p-0">
                                        <div class="col p-0">
                                            <select name="light_area" class="form-control col-11 radius0 areaarray" id="select-2" disabled>
                                                <option selected>選擇地區</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col marginauto paddingbottom40">
                                    <!--手機用 *廟宇 -->
                                    <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems visy">
                                        <p class="redcolorh5">*</p>
                                        <p>選擇廟宇</p>
                                    </div>
                                    <!-- 手機用 預設祈福者 boostarp 下拉選單 廟宇_宮廟 資料匯入-->
                                    <div class="col-7 d-flex alignitems p-0">
                                        <div class="col p-0">
                                            <select name="light_temple" class="form-control col-11 radius0" id="select-3" disabled>
                                                <option selected>選擇廟宇</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!--  手機用 預設祈福者 _按鈕_新增廟宇 -->
                        <div class="button_add_set_md d-flex juscsb  marginauto paddingbottom35 butmaxwid pad20">
                            <div class="button_add ">
                                <button class="graycolor butomcolor light_add_md">
                                    <p>+ 新增燈種與廟宇</p>
                                </button>
                            </div>

                        </div>
                    </div>


                </div>


                <!--  祈福者卡(none) 新增用 ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                <div class="memberadd dipay " id="memberadd">
                    <div class="light_Fill_in_theinformation_text_3 padddingtop40 displayno">
                        <!--  祈福者卡(none)  小提示 -->
                        <div class="light_Fill_in_theinformation_text_star d-flex juscsb paddingbottom40">
                            <!--  祈福者卡(none)  小提示 必填資料 -->
                            <div class="light_Fill_in_theinformation_text_star_left">
                                <!-- *的 ICON -->
                                <!-- <img src=""> -->
                                <p class="redcolorh5">*為必填資料</p>
                            </div>

                            <!-- 祈福者卡(none) boostarp 下拉選單 -->
                            <div class=" d-flex alignitems p-0">
                                <div class="col p-0">
                                    <select class="form-control radius0" id="exampleInputTime">
                                        <option value="">同親友資料</option>
                                        <option value="">鎧煌</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!--  祈福者卡(none) _標題 -->
                        <div class="light_Fill_in_theinformation_title paddingbottom40 postre">
                            <h3 class="postre">祈福者
                                <!--  祈福者卡(none) _標題_刪除按鈕 -->
                                <button class="graycolor postab padbut removebut">
                                    <p>刪除</p>
                                </button>
                            </h3>

                        </div>


                        <!--  祈福者卡(none) input集合 桌機用-->
                        <div class="light_Fill_in_theinformation_inputset borderbottom displayno_md">
                            <!--  祈福者卡(none) input_1_姓名-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!-- 祈福者卡(none) *姓名 -->
                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    <p class="redcolorh5">*</p>
                                    <p>姓名</p>
                                </div>
                                <!-- 祈福者卡(none) boostarp input -->
                                <input type="text" class="form-control col-8 radius0" placeholder="請輸入姓名" aria-label="請輸入姓名" aria-describedby="addon-wrapping">
                            </div>

                            <!--  祈福者卡(none) input_1_生日-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!-- 祈福者卡(none) *出生日期 -->
                                <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex alignitems">
                                    <p class="redcolorh5">*</p>
                                    <p>出生日期</p>
                                </div>
                                <!-- 祈福者卡(none) boostarp 下拉選單 -->
                                <div class="col-lg-11 displayflex alignitems p-0">
                                    <div class="col-lg-2 p-0">
                                        <select class="form-control col-11 radius0" id="exampleInputTime">
                                            <option value="國曆">國曆</option>
                                            <option value="農曆">農曆</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 d-flex alignitems p-0 ">
                                        <select class="form-control col-10 radius0" id="exampleInputTime">
                                            <option value="">1994</option>
                                            <option value="">1995</option>
                                        </select>
                                        <p>年</p>
                                    </div>
                                    <div class="col-lg-2 d-flex alignitems p-0">
                                        <select class="form-control col-8 radius0" id="exampleInputTime">
                                            <option value="">1</option>
                                            <option value="">12</option>
                                        </select>
                                        <p>月</p>
                                    </div>
                                    <div class="col-lg-2 d-flex alignitems p-0 ">
                                        <select class="form-control col-8 radius0" id="exampleInputTime">
                                            <option value="">1</option>
                                            <option value="">31</option>
                                        </select>
                                        <p>日</p>
                                    </div>
                                </div>
                            </div>


                            <!--  祈福者卡(none) input_1_時辰-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!-- 祈福者卡(none) *時辰 -->
                                <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex alignitems">
                                    <p class="redcolorh5 opac">*</p>
                                    <p>出生時辰</p>
                                </div>
                                <!-- 祈福者卡(none) boostarp 下拉選單 -->
                                <div class="col-11 d-flex alignitems p-0">
                                    <div class="col-2 p-0">
                                        <select class="form-control col-11 radius0" id="exampleInputTime">
                                            <option value="">吉時</option>
                                            <option value="">X時</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <!--  祈福者卡(none) input_1_性別-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!-- 祈福者卡(none) *性別 -->
                                <div class="light_Fill_in_theinformation_input_text col-4 d-flex">
                                    <p class="redcolorh5">*</p>
                                    <p>性別</p>
                                </div>
                                <!-- 祈福者卡(none) boostarp check 改造-->
                                <div class="light_Fill_in_theinformation_check d-flex">
                                    <div class="check d-flex alignitems padright40">
                                        <input class="check_input radius0" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <p class="form-check-label" for="exampleRadios1">
                                            男
                                        </p>
                                    </div>
                                    <div class="check d-flex alignitems">
                                        <input class="check_input radius0" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <p class="form-check-label" for="exampleRadios2">
                                            女
                                        </p>
                                    </div>
                                </div>
                            </div>




                            <!--  祈福者卡(none) input_1_電話-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!--祈福者卡(none)  *連絡電話 -->
                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    <p class="redcolorh5 opac">*</p>
                                    <p>連絡電話</p>
                                </div>
                                <!-- boostarp input -->
                                <input type="text" class="form-control col-8 radius0" placeholder="請輸入連絡電話" aria-label="請輸入連絡電話" aria-describedby="addon-wrapping">
                            </div>

                            <!--  祈福者卡(none) input_1_地址-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!-- 祈福者卡(none) *地址 -->
                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    <p class="redcolorh5">*</p>
                                    <p>地址</p>
                                </div>
                                <!-- 祈福者卡(none) boostarp input -->
                                <input type="text" class="form-control col-8 radius0" placeholder="請輸入地址" aria-label="請輸入地址" aria-describedby="addon-wrapping">
                            </div>

                            <!-- 祈福者卡(none) 改 -->
                            <div class="light_add_set lightadd_this" id="">
                                <div class="light_Fill_in_theinformation_input_set d-flex col-8 paddingbottom40 marginauto" data-selector="myselector">
                                    <!--  input_1_選擇燈種 -->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-7 marginauto p-0 ">
                                        <!-- *燈種 -->
                                        <div class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex alignitems">
                                            <p class="redcolorh5">*</p>
                                            <p>選擇燈種</p>
                                        </div>
                                        <!-- boostarp 下拉選單 -->
                                        <div class="col-4 d-flex alignitems p-0">
                                            <div class="col p-0">
                                                <select name="light_type" class="form-control col-11 radius0 lightarray" id="select-1">
                                                    <option selected>選擇燈種</option>
                                                    <option>光明燈</option>
                                                    <option>文昌燈</option>
                                                    <option>安太歲</option>
                                                    <option>藥師燈</option>
                                                    <option>發財燈</option>
                                                    <option>姻緣燈</option>
                                                </select>
                                            </div>
                                            <i class="far fa-trash-alt marginauto removebut_far"></i>
                                        </div>
                                    </div>

                                    <!--  input_1_ 選擇廟宇-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto p-0 flex-wrap">
                                        <!-- *廟宇 -->
                                        <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex alignitems">
                                            <p class="redcolorh5">*</p>
                                            <p>選擇廟宇</p>
                                        </div>
                                        <!-- boostarp 下拉選單 -->
                                        <div class="col-3 d-flex alignitems p-0">
                                            <div class="col p-0">
                                                <select name="light_area" class="form-control col-11 radius0 areaarray" id="select-2" disabled>
                                                    <option selected>選擇地區</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-5 d-flex alignitems p-0">
                                            <div class="col p-0">
                                                <select name="light_temple" class="form-control col-11 radius0" id="select-3" disabled>
                                                    <option selected>選擇廟宇</option>
                                                </select>
                                            </div>
                                        </div>

                                    </div>


                                </div>
                            </div>
                            <!--  祈福者卡(none) _按鈕_新增廟宇 -->
                            <div class="button_add_set_md d-flex juscsb  marginauto paddingbottom40 col-8">
                                <div class="button_add ">
                                    <button class="graycolor butomcolor light_add_md" id="light_add">
                                        <p>+ 新增燈種與廟宇</p>
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>





                <!-- 手機用 預設祈福者(none) 新增用~~~~~~~~~~ -->
                <div class="memberadd_md dipay " id="memberadd_md">
                    <div class="light_Fill_in_theinformation_text_3 padddingtop40 displayno_md">
                        <!-- 手機用 預設祈福者(none)  小提示 -->
                        <div class="light_Fill_in_theinformation_text_star d-flex juscsb paddingbottom40">
                            <!-- 手機用 預設祈福者(none)  小提示 必填資料 -->
                            <div class="light_Fill_in_theinformation_text_star_left">
                                <!-- *的 ICON -->
                                <!-- <img src=""> -->
                                <p class="redcolorh5">*為必填資料</p>
                            </div>
                            <!-- 手機用 預設祈福者(none)  小提示 同會員資料 -->
                            <div class="light_Fill_in_theinformation_text_star_right    alignitems d-flex">
                                <input type="checkbox" id="exampleCheck1" class="radius0">
                                <p class="form-check-label padleft10" for="exampleCheck1">同會員資料</p>
                            </div>
                        </div>
                        <!-- 手機用 預設祈福者(none) _標題 -->
                        <div class="light_Fill_in_theinformation_title paddingbottom40 postre">
                            <h3 class="postre">祈福者
                                <!-- 手機用 預設祈福者(none) _標題_刪除按鈕 -->
                                <button class="graycolor postab padbut dipay">
                                    <p>刪除</p>
                                </button>
                            </h3>

                        </div>

                        <!--  手機用 預設祈福者(none) input集合 -->
                        <div class="light_Fill_in_theinformation_inputset borderbottom  displayno">
                            <!--  手機用 預設祈福者(none) input_1_姓名-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!--手機用 *姓名 -->
                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    <p class="redcolorh5">*</p>
                                    <p>姓名</p>
                                </div>
                                <!--手機用 boostarp input -->
                                <input type="text" class="form-control col-7 radius0" placeholder="請輸入姓名" aria-label="請輸入姓名" aria-describedby="addon-wrapping">
                            </div>

                            <!--  手機用 預設祈福者(none) input_1_生日-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!-- 手機用(none)*出生日期 -->
                                <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems">
                                    <p class="redcolorh5">*</p>
                                    <p>出生日期</p>
                                </div>
                                <!--手機用 預設祈福者(none) boostarp 下拉選單 農曆 西元年 -->
                                <div class="col-7 d-flex p-0">
                                    <div class="col displayflex alignitems p-0">
                                        <div class="col-10 p-0">
                                            <select class="form-control col radius0" id="exampleInputTime">
                                                <option value="國曆">國曆</option>
                                                <option value="農曆">農曆</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col d-flex alignitems p-0 marginauto0auto">
                                        <select class="form-control col radius0" id="exampleInputTime">
                                            <option value="">1994</option>
                                            <option value="">1995</option>
                                        </select>
                                        <p>年</p>
                                    </div>
                                </div>

                            </div>

                            <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!-- 手機用(none)*出生日期 -->
                                <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems visy">
                                    <p class="redcolorh5">*</p>
                                    <p>出生日期</p>
                                </div>
                                <!--手機用 預設祈福者(none) boostarp 下拉選單 月日 -->
                                <div class="col-7 d-flex p-0">
                                    <div class="col displayflex alignitems p-0">
                                        <div class="col p-0 d-flex alignitems">
                                            <select class="form-control col radius0" id="exampleInputTime">
                                                <option value="">1</option>
                                                <option value="">12</option>
                                            </select>
                                            <p>月</p>
                                        </div>
                                    </div>
                                    <div class="col d-flex alignitems p-0 ">
                                        <select class="form-control col radius0" id="exampleInputTime">
                                            <option value="">1</option>
                                            <option value="">31</option>
                                        </select>
                                        <p>日</p>
                                    </div>
                                </div>

                            </div>

                            <!--  手機用 預設祈福者(none) input_1_時辰-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!--手機用 (none)*時辰 -->
                                <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems">
                                    <p class="redcolorh5 opac">*</p>
                                    <p>出生時辰</p>
                                </div>
                                <!--手機用 預設祈福者(none) boostarp 下拉選單 -->
                                <div class="col-7 d-flex alignitems p-0">
                                    <div class="col p-0">
                                        <select class="form-control col-5 radius0" id="exampleInputTime">
                                            <option value="">吉時</option>
                                            <option value="">X時</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <!--  手機用 預設祈福者(none) input_1_性別-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!--手機用 *性別 -->
                                <div class="light_Fill_in_theinformation_input_text col-5 d-flex">
                                    <p class="redcolorh5">*</p>
                                    <p>性別</p>
                                </div>
                                <!-- 手機用 預設祈福者(none) boostarp check 改造-->
                                <div class="light_Fill_in_theinformation_check d-flex">
                                    <div class="check d-flex alignitems padright40">
                                        <input class="check_input radius0" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <p class="form-check-label" for="exampleRadios1">
                                            男
                                        </p>
                                    </div>
                                    <div class="check d-flex alignitems">
                                        <input class="check_input radius0" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <p class="form-check-label" for="exampleRadios2">
                                            女
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!--  手機用 預設祈福者(none) input_1_電話-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!-- 手機用(none) *連絡電話 -->
                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    <p class="redcolorh5 opac">*</p>
                                    <p>連絡電話</p>
                                </div>
                                <!-- 手機用 預設祈福者(none) boostarp input -->
                                <input type="text" class="form-control col-7 radius0" placeholder="請輸入連絡電話" aria-label="請輸入連絡電話" aria-describedby="addon-wrapping">
                            </div>

                            <!--  手機用 預設祈福者(none) input_1_地址-->
                            <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!-- 手機用(none) *地址 -->
                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    <p class="redcolorh5">*</p>
                                    <p>地址</p>
                                </div>
                                <!-- 手機用 預設祈福者(none) boostarp input -->
                                <input type="text" class="form-control col-7 radius0" placeholder="請輸入地址" aria-label="請輸入地址" aria-describedby="addon-wrapping">
                            </div>

                            <!-- 改 手機用(none) 燈種+廟宇套裝-->
                            <div class="light_add_set_md lightadd_this_md">
                                <div class="light_Fill_in_theinformation_input_set  col marginauto lightcard" data-selector="myselector">
                                    <!--  手機用 預設祈福者(none) input_1_選擇燈種 -->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col marginauto paddingbottom40 ">
                                        <!-- 手機用(none) *燈種 -->
                                        <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems">
                                            <p class="redcolorh5">*</p>
                                            <p>選擇燈種</p>
                                        </div>
                                        <!--手機用 預設祈福者(none) boostarp 下拉選單 -->
                                        <div class="col-7 d-flex alignitems p-0">

                                            <div class="col p-0">
                                                <select name="light_type" class="form-control col-11 radius0 lightarray" id="select-1">
                                                    <option selected>選擇燈種</option>
                                                    <option>光明燈</option>
                                                    <option>文昌燈</option>
                                                    <option>安太歲</option>
                                                    <option>藥師燈</option>
                                                    <option>發財燈</option>
                                                    <option>姻緣燈</option>
                                                </select>
                                            </div>
                                            <!-- <i class="far fa-trash-alt marginauto removebut_far_md"></i> -->
                                        </div>
                                    </div>

                                    <!--  手機用 預設祈福者(none) input_1_ 選擇廟宇-->
                                    <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col marginauto paddingbottom40">
                                        <!--手機用(none) *廟宇_地區 -->
                                        <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems">
                                            <p class="redcolorh5">*</p>
                                            <p>選擇廟宇</p>
                                        </div>
                                        <!-- 手機用 預設祈福者(none) boostarp 下拉選單 廟宇_地區 資料匯入-->
                                        <div class="col-7 d-flex alignitems p-0">
                                            <div class="col p-0">
                                                <select name="light_area" class="form-control col-11 radius0 areaarray" id="select-2" disabled>
                                                    <option selected>選擇地區</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="light_Fill_in_theinformation_input_1 d-flex alignitems col marginauto paddingbottom40">
                                        <!--手機用(none) *廟宇 -->
                                        <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems visy">
                                            <p class="redcolorh5">*</p>
                                            <p>選擇廟宇</p>
                                        </div>
                                        <!-- 手機用 預設祈福者(none) boostarp 下拉選單 廟宇_宮廟 資料匯入-->
                                        <div class="col-7 d-flex alignitems p-0">
                                            <div class="col p-0">
                                                <select name="light_temple" class="form-control col-11 radius0" id="select-3" disabled>
                                                    <option selected>選擇廟宇</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--  手機用 預設祈福者(none) _按鈕_新增廟宇 -->
                            <div class="button_add_set_md d-flex juscsb  marginauto paddingbottom35 butmaxwid pad20">
                                <div class="button_add ">
                                    <button class="graycolor butomcolor light_add_md">
                                        <p>+ 新增燈種與廟宇</p>
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div>


            <!-- 桌機用 底部_按鈕 -->
            <div class="light_Fill_in_theinformation_button buttonstyle padddingtop40 padddingbottom150 butflexmargin  displayno_md">
                <div class="btntest">
                    <button class="butstyle_1 member_add">
                        <p>新增祈福者</p>
                    </button>
                </div>
                <button class="butstyle_1">
                    <p>加入購物車</p>
                </button>
            </div>




            <!-- 手機用 底部_按鈕 -->
            <div class="light_Fill_in_theinformation_button buttonstyle padddingtop40 padddingbottom150 butflexmargin displayno  ">
                <div class="btntest">
                    <button class="butstyle_1 member_add_md">
                        <p>新增祈福者</p>
                    </button>
                </div>
                <button class="butstyle_1">
                    <p>加入購物車</p>
                </button>
            </div>
        </div>
    </div>

    </div>
    </div>


    <!-- footer是我~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <footer>
        <p>Copyright© TempleTrip.tw</p>
    </footer>








    <!-- Js  相關設定~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <!-- jquery3.5.1 -->
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <!-- bootstrap4.6.0 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://unpkg.com/moment-lunar@0.0.4/moment-lunar.min.js"></script>
    <script>
        const lunarDate = moment().year(2021).month(2).date(24).lunar().format('YYYY-MM-DD');
        const solarDate = moment().year(2017).month(0).date(1).solar().format('YYYY-MM-DD');

        console.log(lunarDate);
        console.log(solarDate);
    </script>

    <!-- js jq 開始 -->

    <script>
        // navbar
        // overlayNav進場
        $('.nav_burgurBar_img').click(function() {

            let navPosition = {
                transform: 'translateY(0)'
            }

            $(".nav_overlayNav").css(navPosition);
        })

        // overlayNav退場
        $('.nav_closeBtn').click(function() {

            let navPosition = {
                transform: 'translateY(-2500px)',
                transition: '.7s'
            }

            $(".nav_overlayNav").css(navPosition);
        })


        //Login hide
        $('#registerbtn').click(function() {
            $('#loginCenter').modal('hide');
        })

        $('#passwordbtn').click(function() {
            $('#loginCenter').modal('hide');
        })

        //overlay sub-menu
        $(document).ready(function() {
            $('.nav_ser_mobile').click(function() {

                $('.nav_dropDownMenu_mobile').toggle('slow');

            })
        });









        // 通用 刪除祈福者 on版本
        $(document).on('click', '.removebut', (function() {
            console.log('click')
            $(this).parentsUntil('.removeset').remove();
        }))

        // 桌機 刪除燈種垃圾桶 on版本
        $(document).on('click', '.removebut_far', (function() {
            console.log('click')
            $(this).parentsUntil('.light_add_set').remove();
        }))

        // 手機 刪除燈種垃圾桶 on版本
        $(document).on('click', '.removebut_far_md', (function() {
            console.log('click')
            $(this).parentsUntil('.light_add_set_md').remove();
        }))


        // 桌機 祈福者增加
        // let addFamily = document.querySelector(".memberadd").innerHTML;
        // $('.member_add').click(function () {
        //     console.log('click', addFamily)
        //     $('.removeset').append(addFamily);
        // })






        // 手機 祈福者增加
        // let addFamily_md = document.querySelector(".memberadd_md").innerHTML;
        // $('.member_add_md').click(function () {
        //     console.log('click', addFamily_md)
        //     $('.removeset').append(addFamily_md);
        // })

        let nowcard_md = 1;
        $(document).on('click', '.member_add_md', function() {
            let newLiiii_md = '<div id="newdata_' + nowcard_md + '">' + addCard_new_md + '</div>';

            nowcard_md = nowcard_md + 1;
            console.log(newLiiii_md);
            $('.removeset').append(newLiiii_md);

        })
        let addCard_new_md = `  
                    <div class="light_Fill_in_theinformation_text_3 padddingtop40 displayno">
                        <!-- 手機用 預設祈福者(none)  小提示 -->
                        <div class="light_Fill_in_theinformation_text_star d-flex juscsb paddingbottom40">
                            <!-- 手機用 預設祈福者(none)  小提示 必填資料 -->
                            <div class="light_Fill_in_theinformation_text_star_left">
                                <!-- *的 ICON -->
                                <!-- <img src=""> -->
                                <p class="redcolorh5">*為必填資料</p>
                            </div>
                            <!-- 手機用 預設祈福者(none)  小提示 同會員資料 -->
                            <div class="light_Fill_in_theinformation_text_star_right    alignitems d-flex">
                                <input type="checkbox" id="exampleCheck1" class="radius0">
                                <p class="form-check-label padleft10" for="exampleCheck1">同會員資料</p>
                            </div>
                        </div>
                        <!-- 手機用 預設祈福者(none) _標題 -->
                        <div class="light_Fill_in_theinformation_title paddingbottom40 postre">
                            <h3 class="postre">祈福者
                                <!-- 手機用 預設祈福者(none) _標題_刪除按鈕 -->
                                <button class="graycolor postab padbut dipay">
                                    <p>刪除</p>
                                </button>
                            </h3>

                        </div>

                        <!--  手機用 預設祈福者(none) input集合 -->
                        <div class="light_Fill_in_theinformation_inputset borderbottom  displayno">
                            <!--  手機用 預設祈福者(none) input_1_姓名-->
                            <div
                                class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!--手機用 *姓名 -->
                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    <p class="redcolorh5">*</p>
                                    <p>姓名</p>
                                </div>
                                <!--手機用 boostarp input -->
                                <input type="text" class="form-control col-7 radius0" placeholder="請輸入姓名"
                                    aria-label="請輸入姓名" aria-describedby="addon-wrapping">
                            </div>

                            <!--  手機用 預設祈福者(none) input_1_生日-->
                            <div
                                class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!-- 手機用(none)*出生日期 -->
                                <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems">
                                    <p class="redcolorh5">*</p>
                                    <p>出生日期</p>
                                </div>
                                <!--手機用 預設祈福者(none) boostarp 下拉選單 農曆 西元年 -->
                                <div class="col-7 d-flex p-0">
                                    <div class="col displayflex alignitems p-0">
                                        <div class="col-10 p-0">
                                            <select class="form-control col radius0" id="exampleInputTime">
                                                <option value="國曆">國曆</option>
                                                <option value="農曆">農曆</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col d-flex alignitems p-0 marginauto0auto">
                                        <select class="form-control col radius0" id="exampleInputTime">
                                            <option value="">1994</option>
                                            <option value="">1995</option>
                                        </select>
                                        <p>年</p>
                                    </div>
                                </div>

                            </div>

                            <div
                                class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!-- 手機用(none)*出生日期 -->
                                <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems visy">
                                    <p class="redcolorh5">*</p>
                                    <p>出生日期</p>
                                </div>
                                <!--手機用 預設祈福者(none) boostarp 下拉選單 月日 -->
                                <div class="col-7 d-flex p-0">
                                    <div class="col displayflex alignitems p-0">
                                        <div class="col p-0 d-flex alignitems">
                                            <select class="form-control col radius0" id="exampleInputTime">
                                                <option value="">1</option>
                                                <option value="">12</option>
                                            </select>
                                            <p>月</p>
                                        </div>
                                    </div>
                                    <div class="col d-flex alignitems p-0 ">
                                        <select class="form-control col radius0" id="exampleInputTime">
                                            <option value="">1</option>
                                            <option value="">31</option>
                                        </select>
                                        <p>日</p>
                                    </div>
                                </div>

                            </div>

                            <!--  手機用 預設祈福者(none) input_1_時辰-->
                            <div
                                class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!--手機用 (none)*時辰 -->
                                <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems">
                                    <p class="redcolorh5 opac">*</p>
                                    <p>出生時辰</p>
                                </div>
                                <!--手機用 預設祈福者(none) boostarp 下拉選單 -->
                                <div class="col-7 d-flex alignitems p-0">
                                    <div class="col p-0">
                                        <select class="form-control col-5 radius0" id="exampleInputTime">
                                            <option value="">吉時</option>
                                            <option value="">X時</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <!--  手機用 預設祈福者(none) input_1_性別-->
                            <div
                                class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!--手機用 *性別 -->
                                <div class="light_Fill_in_theinformation_input_text col-5 d-flex">
                                    <p class="redcolorh5">*</p>
                                    <p>性別</p>
                                </div>
                                <!-- 手機用 預設祈福者(none) boostarp check 改造-->
                                <div class="light_Fill_in_theinformation_check d-flex">
                                    <div class="check d-flex alignitems padright40">
                                        <input class="check_input radius0" type="radio" name="exampleRadios"
                                            id="exampleRadios1" value="option1" checked>
                                        <p class="form-check-label" for="exampleRadios1">
                                            男
                                        </p>
                                    </div>
                                    <div class="check d-flex alignitems">
                                        <input class="check_input radius0" type="radio" name="exampleRadios"
                                            id="exampleRadios2" value="option2">
                                        <p class="form-check-label" for="exampleRadios2">
                                            女
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!--  手機用 預設祈福者(none) input_1_電話-->
                            <div
                                class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!-- 手機用(none) *連絡電話 -->
                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    <p class="redcolorh5 opac">*</p>
                                    <p>連絡電話</p>
                                </div>
                                <!-- 手機用 預設祈福者(none) boostarp input -->
                                <input type="text" class="form-control col-7 radius0" placeholder="請輸入連絡電話"
                                    aria-label="請輸入連絡電話" aria-describedby="addon-wrapping">
                            </div>

                            <!--  手機用 預設祈福者(none) input_1_地址-->
                            <div
                                class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <!-- 手機用(none) *地址 -->
                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    <p class="redcolorh5">*</p>
                                    <p>地址</p>
                                </div>
                                <!-- 手機用 預設祈福者(none) boostarp input -->
                                <input type="text" class="form-control col-7 radius0" placeholder="請輸入地址"
                                    aria-label="請輸入地址" aria-describedby="addon-wrapping">
                            </div>

                            <!-- 改 手機用(none) 燈種+廟宇套裝-->
                            <div class="light_add_set_md lightadd_this_md">
                                <div class="light_Fill_in_theinformation_input_set  col marginauto lightcard"
                                    data-selector="myselector">
                                    <!--  手機用 預設祈福者(none) input_1_選擇燈種 -->
                                    <div
                                        class="light_Fill_in_theinformation_input_1 d-flex alignitems col marginauto paddingbottom40 ">
                                        <!-- 手機用(none) *燈種 -->
                                        <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems">
                                            <p class="redcolorh5">*</p>
                                            <p>選擇燈種</p>
                                        </div>
                                        <!--手機用 預設祈福者(none) boostarp 下拉選單 -->
                                        <div class="col-7 d-flex alignitems p-0">

                                            <div class="col p-0">
                                                <select name="light_type" class="form-control col-11 radius0 lightarray"
                                                    id="select-1">
                                                    <option selected>選擇燈種</option>
                                                    <option>光明燈</option>
                                                    <option>文昌燈</option>
                                                    <option>安太歲</option>
                                                    <option>藥師燈</option>
                                                    <option>發財燈</option>
                                                    <option>姻緣燈</option>
                                                </select>
                                            </div>
                                            <!-- <i class="far fa-trash-alt marginauto removebut_far_md"></i> -->
                                        </div>
                                    </div>

                                    <!--  手機用 預設祈福者(none) input_1_ 選擇廟宇-->
                                    <div
                                        class="light_Fill_in_theinformation_input_1 d-flex alignitems col marginauto paddingbottom40">
                                        <!--手機用(none) *廟宇_地區 -->
                                        <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems">
                                            <p class="redcolorh5">*</p>
                                            <p>選擇廟宇</p>
                                        </div>
                                        <!-- 手機用 預設祈福者(none) boostarp 下拉選單 廟宇_地區 資料匯入-->
                                        <div class="col-7 d-flex alignitems p-0">
                                            <div class="col p-0">
                                                <select name="light_area" class="form-control col-11 radius0 areaarray"
                                                    id="select-2" disabled>
                                                    <option selected>選擇地區</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div
                                        class="light_Fill_in_theinformation_input_1 d-flex alignitems col marginauto paddingbottom40">
                                        <!--手機用(none) *廟宇 -->
                                        <div
                                            class="light_Fill_in_theinformation_input_text col  d-flex alignitems visy">
                                            <p class="redcolorh5">*</p>
                                            <p>選擇廟宇</p>
                                        </div>
                                        <!-- 手機用 預設祈福者(none) boostarp 下拉選單 廟宇_宮廟 資料匯入-->
                                        <div class="col-7 d-flex alignitems p-0">
                                            <div class="col p-0">
                                                <select name="light_temple" class="form-control col-11 radius0"
                                                    id="select-3" disabled>
                                                    <option selected>選擇廟宇</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--  手機用 預設祈福者(none) _按鈕_新增廟宇 -->
                            <div class="button_add_set_md d-flex juscsb  marginauto paddingbottom35 butmaxwid pad20">
                                <div class="button_add ">
                                    <button class="graycolor butomcolor light_add_md">
                                        <p>+ 新增燈種與廟宇</p>
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>`;






        // 桌機 祈福者增加on版本

        let nowcard = 1;
        $(document).on('click', '.member_add', function() {
            // let newLiiii = '<div id="newdata_' + nowcard + '">' + addCard_new + '</div>';

            // nowcard = nowcard + 1;
            // console.log('click', newLiiii)
            $('.removeset').append(addCard_new);

        })

        let addCard_new = `<div class="light_Fill_in_theinformation_text_3 padddingtop40 displayno_md">
                        <div class="light_Fill_in_theinformation_text_star d-flex juscsb paddingbottom40">
                            <div class="light_Fill_in_theinformation_text_star_left">
                                <!-- <img src=""> -->
                                <p class="redcolorh5">*為必填資料</p>
                            </div>
                            <div class=" d-flex alignitems p-0">
                                <div class="col p-0">
                                    <select class="form-control radius0" id="exampleInputTime">
                                        <option value="">同親友資料</option>
                                        <option value="">鎧煌</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="light_Fill_in_theinformation_title paddingbottom40 postre">
                            <h3 class="postre">祈福者
                                <button class="graycolor postab padbut removebut">
                                    <p>刪除</p>
                                </button>
                            </h3>

                        </div>
                        <div class="light_Fill_in_theinformation_inputset borderbottom displayno_md">
                            <div
                                class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    <p class="redcolorh5">*</p>
                                    <p>姓名</p>
                                </div>
                                <input type="text" class="form-control col-8 radius0" placeholder="請輸入姓名"
                                    aria-label="請輸入姓名" aria-describedby="addon-wrapping">
                            </div>
                            <div
                                class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex alignitems">
                                    <p class="redcolorh5">*</p>
                                    <p>出生日期</p>
                                </div>
                                <div class="col-lg-11 displayflex alignitems p-0">
                                    <div class="col-lg-2 p-0">
                                        <select class="form-control col-11 radius0" id="exampleInputTime">
                                            <option value="國曆">國曆</option>
                                            <option value="農曆">農曆</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-2 d-flex alignitems p-0 ">
                                        <select class="form-control col-10 radius0" id="exampleInputTime">
                                            <option value="">1994</option>
                                            <option value="">1995</option>
                                        </select>
                                        <p>年</p>
                                    </div>
                                    <div class="col-lg-2 d-flex alignitems p-0">
                                        <select class="form-control col-8 radius0" id="exampleInputTime">
                                            <option value="">1</option>
                                            <option value="">12</option>
                                        </select>
                                        <p>月</p>
                                    </div>
                                    <div class="col-lg-2 d-flex alignitems p-0 ">
                                        <select class="form-control col-8 radius0" id="exampleInputTime">
                                            <option value="">1</option>
                                            <option value="">31</option>
                                        </select>
                                        <p>日</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <div class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex alignitems">
                                    <p class="redcolorh5 opac">*</p>
                                    <p>出生時辰</p>
                                </div>
                                <div class="col-11 d-flex alignitems p-0">
                                    <div class="col-2 p-0">
                                        <select class="form-control col-11 radius0" id="exampleInputTime">
                                            <option value="">吉時</option>
                                            <option value="">X時</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <div class="light_Fill_in_theinformation_input_text col-4 d-flex">
                                    <p class="redcolorh5">*</p>
                                    <p>性別</p>
                                </div>
                                <div class="light_Fill_in_theinformation_check d-flex">
                                    <div class="check d-flex alignitems padright40">
                                        <input class="check_input radius0" type="radio" name="exampleRadios"
                                            id="exampleRadios1" value="option1" checked>
                                        <p class="form-check-label" for="exampleRadios1">
                                            男
                                        </p>
                                    </div>
                                    <div class="check d-flex alignitems">
                                        <input class="check_input radius0" type="radio" name="exampleRadios"
                                            id="exampleRadios2" value="option2">
                                        <p class="form-check-label" for="exampleRadios2">
                                            女
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    <p class="redcolorh5 opac">*</p>
                                    <p>連絡電話</p>
                                </div>
                                <!-- boostarp input -->
                                <input type="text" class="form-control col-8 radius0" placeholder="請輸入連絡電話"
                                    aria-label="請輸入連絡電話" aria-describedby="addon-wrapping">
                            </div>
                            <div
                                class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto paddingbottom40">
                                <div class="light_Fill_in_theinformation_input_text col d-flex">
                                    <p class="redcolorh5">*</p>
                                    <p>地址</p>
                                </div>
                                <input type="text" class="form-control col-8 radius0" placeholder="請輸入地址"
                                    aria-label="請輸入地址" aria-describedby="addon-wrapping">
                            </div>
                            <div class="light_add_set lightadd_this" id="">
                                <div
                                    class="light_Fill_in_theinformation_input_set d-flex col-8 paddingbottom40 marginauto" data-selector="myselector">
                                    <div
                                        class="light_Fill_in_theinformation_input_1 d-flex alignitems col-7 marginauto p-0 ">
                                        <div
                                            class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex alignitems">
                                            <p class="redcolorh5">*</p>
                                            <p>選擇燈種</p>
                                        </div>
                                        <div class="col-4 d-flex alignitems p-0">
                                            <div class="col p-0">
                                                <select name="light_type" class="form-control col-11 radius0 lightarray"
                                                id="select-1">
                                                <option selected>選擇燈種</option>
                                                <option>光明燈</option>
                                                <option>文昌燈</option>
                                                <option>安太歲</option>
                                                <option>藥師燈</option>
                                                <option>發財燈</option>
                                                <option>姻緣燈</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto p-0 flex-wrap">
                                        <div
                                            class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex alignitems">
                                            <p class="redcolorh5">*</p>
                                            <p>選擇廟宇</p>
                                        </div>
                                        <div class="col-3 d-flex alignitems p-0">
                                            <div class="col p-0">
                                                <select name="light_area" class="form-control col-11 radius0 areaarray"
                                                id="select-2" disabled>
                                                <option selected>選擇地區</option>
                                            </select>
                                            </div>
                                        </div>
                                        <div class="col-5 d-flex alignitems p-0">
                                            <div class="col p-0">
                                                <select name="light_temple" class="form-control col-11 radius0"
                                                id="select-3" disabled>
                                                <option selected>選擇廟宇</option>
                                            </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="button_add_set d-flex juscsb  marginauto paddingbottom40 col-8">
                                <div class="button_add ">
                                    <button class="graycolor butomcolor light_add" id="light_add">
                                        <p>+ 新增燈種與廟宇</p>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>`



        // 桌機 燈種增加 新增Buttom on版本
        // let addLight = document.querySelector(".lightadd_this").innerHTML;
        // $(document).on('click', '.light_add', function () {
        //     console.log('click', addLight_new)
        //     $(this).parentsUntil(".lightadd_this").append(addLight);
        //     $('.lightadd_this').append(addLight_new);
        // })

        // 宣告nowItem為
        let nowItem = 1;

        // 構想 外加id自動增幅
        // $('.light_add').click(function () {
        //     let newLi = 'light_add_' + nowItem;
        //     nowItem = nowItem + 1;
        //     console.log(newLi);
        // })

        $(document).on('click', '.light_add', function() {
            // let newLi = '<div id="newlighcard_' + nowItem + '">' + addLight_new + '</div>';

            // nowItem = nowItem + 1;
            // console.log(newLi);

            $(this).parents('.button_add_set').prev('.lightadd_this').append(addLight_new);
            bindMySelector(options);
        })

        let addLight_new = `<div class="light_Fill_in_theinformation_input_set d-flex col-8 paddingbottom40 marginauto"  data-selector="myselector">
                                <div
                                    class="light_Fill_in_theinformation_input_1 d-flex alignitems col-7 marginauto p-0 ">
                                    <div
                                        class="light_Fill_in_theinformation_input_text col-7 padright0 d-flex alignitems">
                                        <p class="redcolorh5">*</p>
                                        <p>選擇燈種</p>
                                    </div>
                                    <div class="col-4 d-flex alignitems p-0">
                                        <div class="col p-0">
                                            <select name="light_type" class="form-control col-11 radius0 lightarray"
                                                id="select-1">
                                                <option selected>選擇燈種</option>
                                                <option>光明燈</option>
                                                <option>文昌燈</option>
                                                <option>安太歲</option>
                                                <option>藥師燈</option>
                                                <option>發財燈</option>
                                                <option>姻緣燈</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="light_Fill_in_theinformation_input_1 d-flex alignitems col-lg-8 marginauto p-0 flex-wrap">
                                    <!-- *廟宇 -->
                                    <div
                                        class="light_Fill_in_theinformation_input_text col-4 padright0 d-flex alignitems">
                                        <p class="redcolorh5">*</p>
                                        <p>選擇廟宇</p>
                                    </div>
                                    <div class="col-3 d-flex alignitems p-0">
                                        <div class="col p-0">
                                            <select name="light_area" class="form-control col-11 radius0 areaarray"
                                                id="select-2" disabled>
                                                <option selected>選擇地區</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-5 d-flex alignitems p-0">
                                        <div class="col p-0">
                                            <select name="light_temple" class="form-control col-11 radius0"
                                                id="select-3" disabled>
                                                <option selected>選擇廟宇</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <i class="far fa-trash-alt marginauto removebut_far"></i>
                            </div>`;






        // 手機 燈種增加 新增Buttom on版本
        // let addLight_md = document.querySelector(".lightadd_this_md").innerHTML;
        let nowItem_md = 1;
        $(document).on('click', '.light_add_md', function() {
            // let newLi_md = '<div id="newlighcard_' + nowItem_md + '">' + addLight_new_md + '</div>';

            // nowItem_md = nowItem + 1;
            // console.log(newLi_md);


            $(this).parents('.button_add_set_md').prev('.lightadd_this_md').append(addLight_new_md);
            bindMySelector(options);
        })



        let addLight_new_md = `<div class="light_Fill_in_theinformation_input_set  col marginauto lightcard"  data-selector="myselector">
                             
                                <div
                                    class="light_Fill_in_theinformation_input_1 d-flex alignitems col marginauto paddingbottom40 ">
                           
                                    <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems">
                                        <p class="redcolorh5">*</p>
                                        <p>選擇燈種</p>
                                    </div>
                    
                                    <div class="col-7 d-flex alignitems p-0">

                                        <div class="col p-0">
                                            <select name="light_type" class="form-control col-11 radius0 lightarray"
                                                id="select-1">
                                                <option selected>選擇燈種</option>
                                                <option>光明燈</option>
                                                <option>文昌燈</option>
                                                <option>安太歲</option>
                                                <option>藥師燈</option>
                                                <option>發財燈</option>
                                                <option>姻緣燈</option>
                                            </select>
                                        </div>
                                        <i class="far fa-trash-alt marginauto removebut_far_md"></i>
                                    </div>
                                </div>

                            
                                <div
                                    class="light_Fill_in_theinformation_input_1 d-flex alignitems col marginauto paddingbottom40">
                            
                                    <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems">
                                        <p class="redcolorh5">*</p>
                                        <p>選擇廟宇</p>
                                    </div>
                             
                                    <div class="col-7 d-flex alignitems p-0">
                                        <div class="col p-0">
                                            <select name="light_area" class="form-control col-11 radius0 areaarray"
                                                id="select-2" disabled>
                                                <option selected>選擇地區</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div
                                    class="light_Fill_in_theinformation_input_1 d-flex alignitems col marginauto paddingbottom40">
                   
                                    <div class="light_Fill_in_theinformation_input_text col  d-flex alignitems visy">
                                        <p class="redcolorh5">*</p>
                                        <p>選擇廟宇</p>
                                    </div>
                           
                                    <div class="col-7 d-flex alignitems p-0">
                                        <div class="col p-0">
                                            <select name="light_temple" class="form-control col-11 radius0"
                                                id="select-3" disabled>
                                                <option selected>選擇廟宇</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div> `;
































        // 三層篩選  救救我QQ  維修中~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

        var options = generateOptions();

        function bindMySelector(options) {
            $("[data-selector=myselector] [name=light_type]:not([data-myselector='1'])").attr("data-myselector", "1").change(function() {
                console.log("aaa");
                var light_type = $(this).find("option:selected").text();
                $(this).parents('[data-selector=myselector]').find('[name=light_area] option+').remove();
                $(this).parents('[data-selector=myselector]').find('[name=light_temple] option+').remove();
                $(this).parents('[data-selector=myselector]').find('[name=light_temple]').attr("disabled", true);
                var areas = Object.keys(options[light_type]);
                for (var i = 0; i < areas.length; i++) {
                    $(this).parents('[data-selector=myselector]').find('[name=light_area]').removeAttr("disabled").append("<option>" + areas[i] + "</option>");
                }
            });
            $("[data-selector=myselector] [name=light_area]:not([data-myselector=1])").attr("data-myselector", "1").change(function() {
                var light_type = $(this).parents('[data-selector=myselector]').find('[name=light_type] option:selected').text();
                var light_area = $(this).find("option:selected").text();
                $(this).parents('[data-selector=myselector]').find('[name=light_temple] option+').remove();
                var temples = Object.keys(options[light_type][light_area]);
                for (var i = 0; i < temples.length; i++) {
                    $(this).parents('[data-selector=myselector]').find('[name=light_temple]').removeAttr("disabled").append("<option>" + temples[i] + "</option>");
                }
            });
        }
        bindMySelector(options);


























        function generateOptions() {
            return {
                '光明燈': {
                    '北部': {
                        '艋舺龍山寺': null,
                        '松山奉天宮': null,
                        '台北市關渡宮': null,
                        '北投慈后宮': null,
                        '大龍峒保安宮': null,
                    },
                    '中部': {
                        '慈德慈惠堂': null,
                        '台中天后宮': null,
                        '台中市水安宮': null,
                        '豐原慈濟宮': null,
                    },
                    '南部': {
                        '嘉義市城隍廟': null,
                        '嘉義市大天宮': null,
                        '九華山地藏庵': null,
                    },
                    '東部': {
                        '花蓮聖地慈惠堂': null,
                        '鎮東宮媽祖廟': null,
                    },
                    '離島': {
                        '媽祖天后宮': null,
                        '澎湖天后宮': null,
                    },

                },

                '文昌燈': {
                    '北部': {
                        '艋舺龍山寺': null,
                        '指南宮': null,
                        '台北市關渡宮': null,
                        '北投慈后宮': null,
                        '台北市景福宮': null,
                    },
                    '中部': {
                        '大甲鎮瀾宮': null,
                        '苗栗頭份義民廟': null,
                        '慈德慈惠堂': null,
                        '台中天后宮': null,
                        '台中市水安宮': null,
                        '豐原慈濟宮': null,
                        '台中市文昌公廟': null,
                    },
                    '南部': {
                        '嘉義市城隍廟': null,
                        '嘉義市大天宮': null,
                        '九華山地藏庵': null,
                        '南鯤鯓代天府': null,
                        '鹿耳門天后宮': null,
                        '開臺天后宮': null,
                        '崁頭山孚佑宮': null,
                    },
                    '東部': {
                        '花蓮勝安宮': null,

                    },
                    '離島': {
                        '澎湖天后宮': null,
                    },
                },

                '安太歲': {
                    '北部': {
                        '艋舺龍山寺': null,
                        '指南宮': null,
                        '松山奉天宮': null,
                        '台北市關渡宮': null,
                        '大龍峒保安宮': null,
                        '台北市景福宮': null,
                        '臺灣省城隍廟': null,
                        '竹林山觀音寺': null,
                        '大龍峒保安宮': null,
                        '板橋慈惠宮': null,
                        '五股北極殿': null,

                    },
                    '中部': {
                        '大甲鎮瀾宮': null,
                        '慈德慈惠堂': null,
                        '台中天后宮': null,
                        '台中市水安宮': null,
                        '台中市文昌公廟': null,
                        '清水紫雲巖': null,
                        '鹿港龍山寺': null,
                        '八卦山大佛寺': null,
                        '鹿港天后宮': null,
                        '崙尾福崙宮': null,
                        '日月潭文武廟': null,
                    },
                    '南部': {
                        '嘉義市城隍廟': null,
                        '嘉義市大天宮': null,
                        '九華山地藏庵': null,
                        '南鯤鯓代天府': null,
                        '麻豆代天府': null,
                        '開臺天后宮': null,
                    },
                    '東部': {
                        '花蓮聖地慈惠堂': null,
                        '鎮東宮媽祖廟': null,
                    },
                    '離島': {
                        '媽祖天后宮': null,
                        '澎湖天后宮': null,
                    },
                },

                '藥師燈': {
                    '北部': {
                        '艋舺龍山寺': null,
                        '台北市關渡宮': null,
                        '大龍峒保安宮': null,
                        '台北市景福宮': null,
                        '臺灣省城隍廟': null,
                    },
                    '中部': {
                        '日月潭文武廟': null,

                    },
                    '南部': {
                        '九華山地藏庵': null,
                        '五甲協善心德堂': null,

                    },
                    '東部': {
                        '花蓮勝安宮': null,

                    },

                },

                '發財燈': {
                    '北部': {
                        '台北霞海城隍廟': null,
                        '艋舺龍山寺': null,
                        '指南宮': null,
                        '松山奉天宮': null,
                        '台北市關渡宮': null,
                        '北投慈后宮': null,
                        '草嶺慶雲宮': null,
                        '九龍山白鵝湖玉清宮': null,
                        '九龍山白鵝湖玉清宮': null,
                    },
                    '中部': {
                        '苗栗頭份義民廟': null,
                        '慈德慈惠堂': null,
                        '台中市水安宮': null,
                        '斗六南聖宮': null,
                    },
                    '南部': {
                        '嘉義市城隍廟': null,
                        '嘉義市大天宮': null,
                        '南鯤鯓代天府': null,
                        '鹿耳門天后宮': null,
                        '高雄市文武聖殿': null,
                        '高雄港口慈濟宮': null,

                    },

                },

                '姻緣燈': {
                    '北部': {
                        '台北霞海城隍廟': null,
                        '松山奉天宮': null,
                        '台北市關渡宮': null,
                        '板橋慈惠宮': null,
                        '中壢仁海宮': null,
                        '烘爐地南山福德宮': null,
                        '鹿港天后宮': null,
                    },
                    '中部': {
                        '慈德慈惠堂': null,
                        '日月潭文武廟': null,

                    },
                    '南部': {
                        '嘉義市城隍廟': null,
                        '九華山地藏庵': null,
                        '鹿耳門天后宮': null,
                    },

                },
            };
        }
    </script>























</body>

</html>