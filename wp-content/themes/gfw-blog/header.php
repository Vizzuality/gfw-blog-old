<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package GFW blog
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
 <link href='http://fonts.googleapis.com/css?family=Fira+Sans:400,300italic,500italic' rel='stylesheet' type='text/css'>
<style type="text/css">
  /* line 22, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  html {
    line-height: 1;
  }
  /* line 24, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  ol, ul {
    list-style: none;
  }
  /* line 26, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  table {
    border-collapse: collapse;
    border-spacing: 0;
  }
  /* line 28, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  caption, th, td {
    text-align: left;
    font-weight: normal;
    vertical-align: middle;
  }
  /* line 30, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  q, blockquote {
    quotes: none;
  }
  /* line 103, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  q:before, q:after, blockquote:before, blockquote:after {
    content: "";
    content: none;
  }
  /* line 32, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  a img {
    border: none;
  }
  /* line 116, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section, summary {
    display: block;
  }
  *, *:after, *:before {
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  html.active, body.active {
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  body {
    font-family: "Fira Sans", Georgia, serif;
    background: #EEE;
    -webkit-font-smoothing: antialiased;
  }
  svg {
    width: 100%;
    height: 100%;
    -webkit-transition: all 0.15s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    -moz-transition: all 0.15s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    -o-transition: all 0.15s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    transition: all 0.15s cubic-bezier(0.445, 0.05, 0.55, 0.95);
  }
  .mobile-hide {
    display: none;
  }
  @media (min-width: 750px) {
    .mobile-hide {
      display: block;
    }
  }
  .mobile-show {
    display: block;
  }
  @media (min-width: 750px) {
    .mobile-show {
      display: none;
    }
  }

  .inner {
    position: relative;
    margin: 0 auto;
    width: 100%;
  }
  @media (min-width: 750px) {
    .inner {
      width: 95%;
    }
  }
  @media (min-width: 1280px) {
    .inner {
      width: 75%;
      min-width: 1200px;
    }
  }  
  /* line 1, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_icons1600.scss */
  .icon {
    display: block;
    height: 25px;
    width: 25px;
  }
  /* line 1, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer {
    background: #EDEDE8;
  }
  /* line 3, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .apps-footer {
    padding: 20px 0;
    border-bottom: 1px solid #E5E5DF;
  }
  /* line 6, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .apps-footer ul {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: justify;
    -moz-box-pack: justify;
    -ms-flex-pack: justify;
    -webkit-justify-content: space-between;
    justify-content: space-between;
    -webkit-box-align: stretch;
    -moz-box-align: stretch;
    -ms-flex-align: stretch;
    -webkit-align-items: stretch;
    align-items: stretch;
  }
  /* line 8, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .apps-footer ul li {
    width: 16.666666%;
  }
  /* line 10, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .apps-footer ul li a {
    display: block;
    padding: 20px;
    text-decoration: none;
  }
  /* line 14, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .apps-footer ul li a svg {
    display: block;
    height: 30px;
    width: 30px;
    margin: 0 auto;
    fill: #555555;
  }
  /* line 21, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .apps-footer ul li a h3 {
    text-transform: uppercase;
    text-align: center;
    font-size: 12px;
    padding: 5px 0 0;
    color: #555555;
    -webkit-transition: all 0.25s cubic-bezier(0.645, 0.045, 0.355, 1);
    -moz-transition: all 0.25s cubic-bezier(0.645, 0.045, 0.355, 1);
    -o-transition: all 0.25s cubic-bezier(0.645, 0.045, 0.355, 1);
    transition: all 0.25s cubic-bezier(0.645, 0.045, 0.355, 1);
  }
  /* line 30, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .apps-footer ul li a:hover svg {
    fill: #97bd3d;
  }
  /* line 32, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .apps-footer ul li a:hover svg.fire {
    fill: #ed1846;
  }
  /* line 33, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .apps-footer ul li a:hover svg.commodities {
    fill: #e98300;
  }
  /* line 35, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .apps-footer ul li a:hover h3 {
    color: #97bd3d;
  }
  /* line 37, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .apps-footer ul li a:hover h3.fire {
    color: #ed1846;
  }
  /* line 38, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .apps-footer ul li a:hover h3.commodities {
    color: #e98300;
  }
  /* line 45, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .site-map {
    padding: 0 0 40px;
  }
  /* line 47, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .site-map .row {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: justify;
    -moz-box-pack: justify;
    -ms-flex-pack: justify;
    -webkit-justify-content: space-between;
    justify-content: space-between;
    -webkit-box-align: stretch;
    -moz-box-align: stretch;
    -ms-flex-align: stretch;
    -webkit-align-items: stretch;
    align-items: stretch;
    padding: 40px 0;
    border-bottom: 1px solid #E5E5DF;
  }
  /* line 51, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .site-map .row .col {
    width: 25%;
  }
  /* line 53, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .site-map .row .col a {
    text-decoration: none;
    color: #555555;
  }
  /* line 56, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .site-map .row .col a:hover {
    text-decoration: underline;
  }
  /* line 60, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .site-map .row .col h3 {
    font-size: 14px;
    color: #555555;
    text-transform: uppercase;
    padding: 0 0 15px;
    font-weight: 500;
  }
  /* line 67, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .site-map .row .col ul {
    margin: -10px 0 0;
  }
  /* line 69, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .site-map .row .col ul li {
    font-size: 13px;
    padding: 5px 0;
  }
  /* line 77, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .partner-box {
    padding: 40px 20px;
  }
  @media (min-width: 750px) {
    /* line 77, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
    .layout-footer .partner-box {
      padding: 0 0 40px;
    }
  }
  /* line 82, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .partner-box h4 {
    font-size: 14px;
    color: #555555;
    padding: 0 0 15px;
    text-align: center;
    font-weight: 500;
  }
  @media (min-width: 750px) {
    /* line 82, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
    .layout-footer .partner-box h4 {
      text-align: left;
      font-weight: 400;
    }
  }
  /* line 93, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .partner-box .row {
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-box-pack: justify;
    -moz-box-pack: justify;
    -ms-flex-pack: justify;
    -webkit-justify-content: space-between;
    justify-content: space-between;
    -webkit-box-align: start;
    -moz-box-align: start;
    -ms-flex-align: start;
    -webkit-align-items: flex-start;
    align-items: flex-start;
    -webkit-box-lines: multiple;
    -moz-box-lines: multiple;
    -ms-flex-wrap: wrap;
    -webkit-flex-wrap: wrap;
    flex-wrap: wrap;
  }
  /* line 96, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .partner-box .row .wri-logo {
    width: 200px;
    height: 70px;
    margin: 0 auto;
    background-position: 0 -516px;
    background-image: url('http://gfw-nav.herokuapp.com/assets/logos-sb046ed8749.png');

  }
  @media (min-width: 750px) {
    /* line 96, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
    .layout-footer .partner-box .row .wri-logo {
      margin: 0;
    }
  }
  /* line 105, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .partner-box .row .address {
    text-align: center;
    padding: 25px 20px 0;
    max-width: 300px;
    margin: 0 auto;
    font-size: 14px;
    font-weight: 300;
  }
  @media (min-width: 750px) {
    /* line 105, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
    .layout-footer .partner-box .row .address {
      text-align: right;
      max-width: none;
      margin: 0;
      padding: 0;
    }
  }
  /* line 118, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .partner-box .row .address > * {
    margin: 8px 0 0;
  }
  /* line 120, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .partner-box .row .address > *:first-child {
    margin: 0;
  }
  /* line 122, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .partner-box .row .address strong, .layout-footer .partner-box .row .address span {
    display: block;
  }
  /* line 123, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .partner-box .row .address strong {
    font-weight: 400;
  }
  /* line 129, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .footer-logos {
    display: none;
  }
  @media (min-width: 750px) {
    /* line 129, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
    .layout-footer .footer-logos {
      display: block;
      padding: 0px 0 40px;
    }
  }
  /* line 135, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .footer-logos .slick-slide {
    height: 60px;
  }
  /* line 138, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .footer-logos a {
    display: block;
    margin: 0 auto;
    width: 88px;
    position: relative;
    top: 50%;
    -webkit-transform: translate(0, -50%);
    -moz-transform: translate(0, -50%);
    -ms-transform: translate(0, -50%);
    -o-transform: translate(0, -50%);
    transform: translate(0, -50%);
  }
  /* line 145, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .footer-logos a.wri {
    height: 31px;
    width: 269px;
    background-position: 0 -336px;
  }
  /* line 146, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .footer-logos a.wri{height:31px;width:269px;background-position:0 -485px}
  .layout-footer .footer-logos a.google{height:52px;background-position:0 -1201px}
  .layout-footer .footer-logos a.esri{height:28px;background-position:0 -1076px}
  .layout-footer .footer-logos a.universitymaryland{height:52px;background-position:0 -969px}
  .layout-footer .footer-logos a.unep{height:52px;background-position:0 -873px}
  .layout-footer .footer-logos a.imazon{height:52px;background-position:0 -1253px}
  .layout-footer .footer-logos a.cfgd{height:52px;background-position:0 -821px}
  .layout-footer .footer-logos a.osfac{height:57px;background-position:0 -717px}
  .layout-footer .footer-logos a.gfwca{height:44px;background-position:0 -925px}
  .layout-footer .footer-logos a.scanex{height:16px;background-position:0 -1350px}
  .layout-footer .footer-logos a.twrus{height:36px;width:147px;background-position:0 -586px}
  .layout-footer .footer-logos a.norwegian{height:55px;background-position:0 -1021px}
  .layout-footer .footer-logos a.usaid{height:64px;background-position:0 -421px}
  .layout-footer .footer-logos a.gef{height:59px;background-position:0 -658px}
  .layout-footer .footer-logos a.ukaid{height:52px;background-position:0 -1104px}
  .layout-footer .footer-logos a.tilia{height:38px;background-position:0 -1441px}
  .layout-footer .footer-logos a.goodall{height:36px;width:147px;background-position:0 -622px}
  .layout-footer .footer-logos a.cartodb{height:45px;background-position:0 -1156px}
  .layout-footer .footer-logos a.vizzuality{height:45px;background-position:0 -1305px}
  .layout-footer .footer-logos a.blueraster{height:45px;width:97px;background-position:0 -774px}
  /* line 167, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .terms {
    text-align: center;
    padding: 1em 0;
  }
  /* line 170, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .terms a {
    text-decoration: none;
    color: #555555;
    font-size: 12px;
  }
  /* line 174, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/_footer1600.scss */
  .layout-footer .terms a:hover {
    text-decoration: underline;
  }
  /* Slider */
  /* line 40, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-slider {
    position: relative;
    display: block;
    box-sizing: border-box;
    -moz-box-sizing: border-box;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -ms-touch-action: pan-y;
    touch-action: pan-y;
    -webkit-tap-highlight-color: transparent;
  }
  /* line 55, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-list {
    position: relative;
    overflow: hidden;
    display: block;
    margin: 0;
    padding: 0;
  }
  /* line 62, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-list:focus {
    outline: none;
  }
  /* line 66, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-loading .slick-list {
    background: white url(/images/ajax-loader.gif) center center no-repeat;
  }
  /* line 70, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-list.dragging {
    cursor: pointer;
    cursor: hand;
  }
  /* line 75, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-slider .slick-track {
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  /* line 83, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-track {
    position: relative;
    left: 0;
    top: 0;
    display: block;
  }
  /* line 90, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-track:before, .slick-track:after {
    content: "";
    display: table;
  }
  /* line 95, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-track:after {
    clear: both;
  }
  /* line 99, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-loading .slick-track {
    visibility: hidden;
  }
  /* line 103, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-slide {
    float: left;
    height: 100%;
    min-height: 1px;
    display: none;
  }
  /* line 107, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  [dir="rtl"] .slick-slide {
    float: right;
  }
  /* line 110, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-slide img {
    display: block;
  }
  /* line 113, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-slide.slick-loading img {
    display: none;
  }
  /* line 119, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-slide.dragging img {
    pointer-events: none;
  }
  /* line 123, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-initialized .slick-slide {
    display: block;
  }
  /* line 127, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-loading .slick-slide {
    visibility: hidden;
  }
  /* line 131, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-vertical .slick-slide {
    display: block;
    height: auto;
    border: 1px solid transparent;
  }
  /* Icons */
  @font-face {
    font-family: "slick";
    src: url(/fonts/slick.eot);
    src: url(/fonts/slick.eot?#iefix) format("embedded-opentype"), url(/fonts/slick.woff) format("woff"), url(/fonts/slick.ttf) format("truetype"), url(/fonts/slick.svg#slick) format("svg");
    font-weight: normal;
    font-style: normal;
  }
  /* Arrows */
  /* line 155, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-prev,
  .slick-next {
    position: absolute;
    display: block;
    height: 50px;
    width: 50px;
    line-height: 0;
    font-size: 0;
    cursor: pointer;
    background: #E0E0D9;
    color: transparent;
    top: 50%;
    margin-top: -25px;
    padding: 0;
    border: none;
    outline: none;
    border-radius: 50%;
  }
  /* line 171, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-prev:hover, .slick-prev:focus,
  .slick-next:hover,
  .slick-next:focus {
    outline: none;
    background: #97bd3d;
    color: transparent;
  }
  /* line 175, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-prev:hover:before, .slick-prev:focus:before,
  .slick-next:hover:before,
  .slick-next:focus:before {
    opacity: 1;
  }
  /* line 179, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-prev.slick-disabled:before,
  .slick-next.slick-disabled:before {
    opacity: 0.25;
  }
  /* line 183, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-prev:before, .slick-next:before {
    content: "";
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
  }
  /* line 191, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-prev {
    left: -50px;
  }
  /* line 193, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-prev:before {
    background: url(http://gfw-nav.herokuapp.com/assets/svg-icons/arrow-left.svg) center no-repeat;
  }
  /* line 197, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-next {
    right: -50px;
  }
  /* line 199, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-next:before {
    background: url(http://gfw-nav.herokuapp.com/assets/svg-icons/arrow-right.svg) center no-repeat;
  }
  /* Dots */
  /* line 206, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-slider {
    margin-bottom: 0px;
  }
  /* line 209, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-dots {
    position: absolute;
    bottom: -45px;
    list-style: none;
    display: block;
    text-align: center;
    padding: 0;
    width: 100%;
  }
  /* line 218, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-dots li {
    position: relative;
    display: inline-block;
    height: 20px;
    width: 20px;
    margin: 0 5px;
    padding: 0;
    cursor: pointer;
  }
  /* line 227, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-dots li button {
    border: 0;
    background: transparent;
    display: block;
    height: 20px;
    width: 20px;
    outline: none;
    line-height: 0;
    font-size: 0;
    color: transparent;
    padding: 5px;
    cursor: pointer;
  }
  /* line 239, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-dots li button:hover, .slick-dots li button:focus {
    outline: none;
  }
  /* line 241, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-dots li button:hover:before, .slick-dots li button:focus:before {
    opacity: 1;
  }
  /* line 246, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-dots li button:before {
    position: absolute;
    top: 0;
    left: 0;
    content: "\2022";
    width: 20px;
    height: 20px;
    font-family: "slick";
    font-size: 6px;
    line-height: 20px;
    text-align: center;
    color: black;
    opacity: 0.25;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
  }
  /* line 265, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_slick1600.scss */
  .slick-dots li.slick-active button:before {
    color: black;
    opacity: 0.75;
  }
  </style>

<style type="text/css">
  /* line 22, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  html {
    line-height: 1;
  }
  /* line 24, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  ol, ul {
    list-style: none;
  }
  /* line 26, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  table {
    border-collapse: collapse;
    border-spacing: 0;
  }
  /* line 28, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  caption, th, td {
    text-align: left;
    font-weight: normal;
    vertical-align: middle;
  }
  /* line 30, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  q, blockquote {
    quotes: none;
  }
  /* line 103, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  q:before, q:after, blockquote:before, blockquote:after {
    content: "";
    content: none;
  }
  /* line 32, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  a img {
    border: none;
  }
  /* line 116, /Users/miguelbarrenechea/.rvm/gems/ruby-2.1.0/gems/compass-0.12.7/frameworks/compass/stylesheets/compass/reset/_utilities.scss */
  article, aside, details, figcaption, figure, footer, header, hgroup, menu, nav, section, summary {
    display: block;
  }
  *, *:after, *:before {
    -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  html.active, body.active {
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  body {
    font-family: "Fira Sans", Georgia, serif;
    background: #EEE;
    -webkit-font-smoothing: antialiased;
  }
  svg {
    width: 100%;
    height: 100%;
    -webkit-transition: all 0.15s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    -moz-transition: all 0.15s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    -o-transition: all 0.15s cubic-bezier(0.445, 0.05, 0.55, 0.95);
    transition: all 0.15s cubic-bezier(0.445, 0.05, 0.55, 0.95);
  }
  .mobile-hide {
    display: none;
  }
  @media (min-width: 750px) {
    .mobile-hide {
      display: block;
    }
  }
  .mobile-show {
    display: block;
  }
  @media (min-width: 750px) {
    .mobile-show {
      display: none;
    }
  }

  .layout-header {
    position: fixed;
    z-index: 100;
    overflow: auto;
    width: 100%;
    height: auto;
    z-index: 1000;
    top: 0;
    left: 0;
  }
  .layout-header.active {
    height: 100%;
  }
  @media (min-width: 750px) {
    .layout-header {
      position: relative;
      overflow: visible;
      height: auto;
    }
  }
  .layout-header-top {
    background: #F7F7F7;
    padding: 10px;
    border-bottom: 2px solid #e5e5df;
    position: relative;
    z-index: 10;
  }
  .layout-header-top:before, .layout-header-top:after {
    content: " ";
    display: table;
    visibility: hidden;
    font-size: 0;
    height: 0;
  }
  .layout-header-top:after {
    clear: both;
  }
  .layout-header-top nav > ul > li {
    height: 25px;
    width: 25px;
    float: left;
    margin: 0 0 0 20px;
  }
  .layout-header-top nav > ul > li:first-child {
    margin: 0;
  }
  .layout-header-top nav > ul > li > a, .layout-header-top nav > ul > li .link {
    cursor: pointer;
    display: inline-block;
    width: 100%;
    height: 100%;
    position: relative;
    text-decoration: none;
    text-transform: uppercase;
    -webkit-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
    -moz-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
    -o-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
    transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
  }
  .layout-header-top nav > ul > li > a > span, .layout-header-top nav > ul > li .link > span {
    font-size: 12px;
    color: #000;
    line-height: 28px;
    margin: 0 0 0 5px;
  }
  .layout-header-top nav > ul > li > a .tooltip, .layout-header-top nav > ul > li .link .tooltip {
    margin: 0;
    line-height: normal;
  }
  .layout-header-top nav > ul > li > a form > input, .layout-header-top nav > ul > li .link form > input {
    border: none;
    border-bottom: 2px solid #B6B6BA;
    background: none;
    box-shadow: none;
    height: 25px;
    outline: none;
    margin: 0;
    padding: 0 5px;
  }
  .layout-header-top nav > ul > li > a svg, .layout-header-top nav > ul > li .link svg {
    fill: #B6B6BA;
  }
  .layout-header-top nav > ul > li > a:hover .shape-house, .layout-header-top nav > ul > li .link:hover .shape-house {
    fill: #97bd3d;
  }
  .layout-header-top nav > ul > li > a:hover .shape-world, .layout-header-top nav > ul > li .link:hover .shape-world {
    fill: #97bd3d;
  }
  .layout-header-top nav > ul > li > a:hover .shape-country, .layout-header-top nav > ul > li .link:hover .shape-country {
    fill: #97bd3d;
  }
  .layout-header-top nav > ul > li > a:hover .shape-fire, .layout-header-top nav > ul > li .link:hover .shape-fire {
    fill: #ed1846;
  }
  .layout-header-top nav > ul > li > a:hover .shape-commodities, .layout-header-top nav > ul > li .link:hover .shape-commodities {
    fill: #e98300;
  }
  .layout-header-top nav > ul > li > a:hover .shape-blog, .layout-header-top nav > ul > li .link:hover .shape-blog {
    fill: #97bd3d;
  }
  .layout-header-top nav > ul > li > a:hover svg, .layout-header-top nav > ul > li .link:hover svg {
    fill: #97bd3d;
  }
  .layout-header-top nav.first-nav {
    float: left;
  }
  .layout-header-top nav.first-nav > ul > li > a:hover .tooltip, .layout-header-top nav.first-nav > ul > li .link:hover .tooltip {
    visibility: visible;
    opacity: 1;
  }
  .layout-header-top nav.second-nav {
    float: right;
  }
  .layout-header-top nav.second-nav > ul > li {
    height: 25px;
    width: auto;
    position: relative;
  }
  .layout-header-top nav.second-nav > ul > li > a, .layout-header-top nav.second-nav > ul > li .link {
    text-indent: 0;
    width: auto;
  }
  .layout-header-top nav.second-nav > ul > li > a > span, .layout-header-top nav.second-nav > ul > li .link > span {
    display: none;
  }
  @media (min-width: 1000px) {
    .layout-header-top nav.second-nav > ul > li > a > span, .layout-header-top nav.second-nav > ul > li .link > span {
      display: inline-block;
    }
  }
  .layout-header-top nav.second-nav > ul > li > a svg, .layout-header-top nav.second-nav > ul > li .link svg {
    float: left;
    display: inline-block;
  }
  .layout-header-top nav.second-nav > ul > li:hover .submenu-tooltip {
    visibility: visible;
    opacity: 1;
  }
  .layout-header-bottom {
    position: relative;
    background: #F2F2F3;
    border-bottom: 2px solid #e5e5df;
  }
  .layout-header-bottom:before, .layout-header-bottom:after {
    content: " ";
    display: table;
    visibility: hidden;
    font-size: 0;
    height: 0;
  }
  .layout-header-bottom:after {
    clear: both;
  }
  @media (min-width: 750px) {
    .layout-header-bottom {
      background: rgba(255, 255, 255, 0.8);
      border-bottom: none;
    }
  }
  .layout-header-bottom h1 {
    width: 60px;
    height: 60px;
    float: left;
    text-indent: -9999px;
    overflow: hidden;
    z-index: 2;
    margin: 0 0 0 15px;
    background-image: url(http://gfw-nav.herokuapp.com/assets/logo-new.png);
    background-size: contain;
  }
  @media only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (min--moz-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 1.5), only screen and (min-device-pixel-ratio: 1.5), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
    .layout-header-bottom h1 {
      background-image: url(http://gfw-nav.herokuapp.com/assets/logo-new@2x.png);
    }
  }
  @media (min-width: 750px) {
    .layout-header-bottom h1 {
      width: 90px;
      height: 90px;
      position: absolute;
      top: 0;
      left: 0;
      margin: 0;
      float: none;
    }
  }
  .layout-header-bottom h1 a {
    display: block;
    height: 100%;
    width: 100%;
  }
  .layout-header-bottom .btn-menu {
    width: 60px;
    height: 60px;
    float: right;
    display: block;
    position: relative;
    z-index: 2;
  }
  @media (min-width: 750px) {
    .layout-header-bottom .btn-menu {
      display: none;
    }
  }
  .layout-header-bottom .btn-menu .icon {
    margin: 0 auto;
  }
  .layout-header-bottom .btn-menu .icon.hamburguer {
    display: block;
  }
  .layout-header-bottom .btn-menu .icon.close {
    display: none;
  }
  .layout-header-bottom .btn-menu.active {
    background: white;
    border-left: 1px solid #CCC;
    box-shadow: 0 1px 0 white;
  }
  .layout-header-bottom .btn-menu.active .icon {
    margin: 0 auto;
  }
  .layout-header-bottom .btn-menu.active .icon.hamburguer {
    display: none;
  }
  .layout-header-bottom .btn-menu.active .icon.close {
    display: block;
  }
  .layout-header-bottom form {
    padding: 17px 60px 17px 15px;
    border-top: 1px solid #CCC;
  }
  .layout-header-bottom form > input {
    border: none;
    border-bottom: 2px solid #B6B6BA;
    background: none;
    box-shadow: none;
    width: calc(100% - 25px);
    height: 25px;
    outline: none;
    margin: 0;
    padding: 0 5px;
  }
  .layout-header-bottom form svg {
    float: left;
    fill: #B6B6BA;
  }
  .layout-header-bottom nav {
    border-bottom: 1px solid #EAECEF;
    clear: both;
    background: white;
    display: none;
    position: relative;
  }
  .layout-header-bottom nav.active {
    display: block;
  }
  @media (min-width: 750px) {
    .layout-header-bottom nav {
      display: block !important;
      clear: none;
      background: none;
      border-bottom: none;
    }
  }
  .layout-header-bottom nav:before, .layout-header-bottom nav:after {
    content: " ";
    display: table;
    visibility: hidden;
    font-size: 0;
    height: 0;
  }
  .layout-header-bottom nav:after {
    clear: both;
  }
  .layout-header-bottom nav > ul {
    clear: both;
  }
  @media (min-width: 750px) {
    .layout-header-bottom nav > ul {
      clear: none;
      float: right;
      padding-right: 5px;
    }
  }
  .layout-header-bottom nav > ul > li {
    position: relative;
    border-top: 1px solid #cecec3;
  }
  @media (min-width: 750px) {
    .layout-header-bottom nav > ul > li {
      float: left;
      border-top: none;
    }
    .layout-header-bottom nav > ul > li:hover {
      z-index: 5;
    }
    .layout-header-bottom nav > ul > li:hover ul {
      background: rgba(255, 255, 255, 0.95);
      visibility: visible;
      opacity: 1;
      -webkit-transform: translate(-50%, 0px);
      -moz-transform: translate(-50%, 0px);
      -ms-transform: translate(-50%, 0px);
      -o-transform: translate(-50%, 0px);
      transform: translate(-50%, 0px);
    }
    .layout-header-bottom nav > ul > li:hover ul:before {
      width: 100%;
    }
  }
  @media (min-width: 1000px) {
    .layout-header-bottom nav > ul > li {
      margin: 0 0 0 10px;
    }
    .layout-header-bottom nav > ul > li:first-child {
      margin: 0;
    }
  }
  .layout-header-bottom nav > ul > li > a {
    display: block;
    text-transform: uppercase;
    text-decoration: none;
    color: #474747;
    padding: 20px;
    position: relative;
    z-index: 2;
    text-align: center;
    background: #F2F2F3;
  }
  @media (min-width: 750px) {
    .layout-header-bottom nav > ul > li > a {
      background: none;
    }
  }
  @media (min-width: 1000px) {
    .layout-header-bottom nav > ul > li > a {
      padding: 20px 40px;
    }
  }
  .layout-header-bottom nav > ul > li ul {
    width: 100%;
    z-index: 1;
    position: relative;
  }
  @media (min-width: 750px) {
    .layout-header-bottom nav > ul > li ul {
      position: absolute;
      top: 0;
      left: 50%;
      min-width: 150px;
      padding: 56px 0 0;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.25);
      visibility: hidden;
      opacity: 0;
      -webkit-transform: translate(-50%, 10px);
      -moz-transform: translate(-50%, 10px);
      -ms-transform: translate(-50%, 10px);
      -o-transform: translate(-50%, 10px);
      transform: translate(-50%, 10px);
      -webkit-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
      -moz-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
      -o-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
      transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
    }
    .layout-header-bottom nav > ul > li ul:before {
      content: "";
      display: block;
      width: 0%;
      height: 5px;
      background: rgba(151, 189, 61, 0.5);
      position: absolute;
      top: 52px;
      left: 0;
      -webkit-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
      -webkit-transition-delay: 0.1s;
      -moz-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1) 0.1s;
      -o-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1) 0.1s;
      transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1) 0.1s;
    }
  }
  @media (min-width: 1000px) {
    .layout-header-bottom nav > ul > li ul {
      min-width: 0;
    }
  }
  @media (min-width: 750px) {
    .layout-header-bottom nav > ul > li ul li {
      border-top: 1px solid #EAECEF;
    }
  }
  .layout-header-bottom nav > ul > li ul li a {
    color: #444;
    padding: 10px;
    font-weight: 400;
    font-size: 15px;
    text-decoration: none;
    text-align: center;
    display: block;
  }
  .layout-header-bottom nav > ul > li ul li a:hover {
    background: #fafafa;
  }
  #google_translate_element_box2 {
    padding: 0 15px 10px;
  }
  @media (min-width: 750px) {
    #google_translate_element_box2 {
      display: none;
    }
  }
  #google_translate_element .goog-te-gadget {
    font-family: inherit;
  }
  #google_translate_element .goog-te-gadget .goog-te-gadget-simple {
    border: none;
    background: none;
  }
  #google_translate_element .goog-te-gadget .goog-te-gadget-simple .goog-te-menu-value {
    color: #000;
    text-transform: uppercase;
    font-size: 12px;
    line-height: 28px;
    position: relative;
    padding-right: 16px;
  }
  #google_translate_element .goog-te-gadget .goog-te-gadget-simple .goog-te-menu-value span:last-child {
    visibility: hidden;
    display: block;
    position: absolute;
    top: 50%;
    right: 0;
    height: 16px;
    width: 16px;
    -webkit-transform: translate(0, -55%);
    -moz-transform: translate(0, -55%);
    -ms-transform: translate(0, -55%);
    -o-transform: translate(0, -55%);
    transform: translate(0, -55%);
  }
  #google_translate_element .goog-te-gadget .goog-te-gadget-simple .goog-te-menu-value span:last-child:before {
    content: "";
    visibility: visible;
    display: block;
    height: 100%;
    width: 100%;
    background: url(http://gfw-nav.herokuapp.com/assets/svg-icons/arrow-down.svg) no-repeat center;
    background-size: contain;
  }  
  .inner {
    position: relative;
    margin: 0 auto;
    width: 100%;
  }
  @media (min-width: 750px) {
    .inner {
      width: 95%;
    }
  }
  @media (min-width: 1280px) {
    .inner {
      width: 75%;
      min-width: 1200px;
    }
  }  
  /* line 22, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .tooltip {
    position: absolute;
    background: white;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25);
    z-index: 1;
    margin: 0;
    visibility: hidden;
    opacity: 0;
    text-transform: uppercase;
    position: absolute;
    top: 100%;
    left: 50%;
    text-align: center;
    padding: 10px;
    -webkit-transform: translate(-50%, 10px);
    -moz-transform: translate(-50%, 10px);
    -ms-transform: translate(-50%, 10px);
    -o-transform: translate(-50%, 10px);
    transform: translate(-50%, 10px);
  }
  /* line 37, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .tooltip:after {
    content: "";
    display: block;
    position: absolute;
    width: 16px;
    height: 16px;
    background: white;
    z-index: 2;
    top: 0;
    left: 50%;
    -webkit-transform: translate(-50%, -50%) rotate(45deg);
    -moz-transform: translate(-50%, -50%) rotate(45deg);
    -ms-transform: translate(-50%, -50%) rotate(45deg);
    -o-transform: translate(-50%, -50%) rotate(45deg);
    transform: translate(-50%, -50%) rotate(45deg);
    border-top: 1px solid #e5e5df;
    border-left: 1px solid #e5e5df;
  }
  /* line 53, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .submenu-tooltip {
    position: absolute;
    min-width: 150px;
    background: white;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.25);
    z-index: 1;
    visibility: hidden;
    opacity: 0;
    text-transform: none;
    -webkit-backface-visibility: hidden;
    -webkit-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
    -moz-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
    -o-transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
    transition: all 0.15s cubic-bezier(0.645, 0.045, 0.355, 1);
  }
  /* line 63, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .submenu-tooltip.top {
    top: 100%;
    left: 50%;
    -webkit-transform: translate(-50%, 10px);
    -moz-transform: translate(-50%, 10px);
    -ms-transform: translate(-50%, 10px);
    -o-transform: translate(-50%, 10px);
    transform: translate(-50%, 10px);
  }
  /* line 67, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .submenu-tooltip.top:after {
    top: 0;
    left: 50%;
    -webkit-transform: translate(-50%, -50%) rotate(45deg);
    -moz-transform: translate(-50%, -50%) rotate(45deg);
    -ms-transform: translate(-50%, -50%) rotate(45deg);
    -o-transform: translate(-50%, -50%) rotate(45deg);
    transform: translate(-50%, -50%) rotate(45deg);
    border-top: 1px solid #e5e5df;
    border-left: 1px solid #e5e5df;
  }
  /* line 75, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .submenu-tooltip.bottom {
    bottom: 100%;
    left: 50%;
    -webkit-transform: translate(-50%, -10px);
    -moz-transform: translate(-50%, -10px);
    -ms-transform: translate(-50%, -10px);
    -o-transform: translate(-50%, -10px);
    transform: translate(-50%, -10px);
  }
  /* line 79, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .submenu-tooltip.bottom:after {
    bottom: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 50%) rotate(45deg);
    -moz-transform: translate(-50%, 50%) rotate(45deg);
    -ms-transform: translate(-50%, 50%) rotate(45deg);
    -o-transform: translate(-50%, 50%) rotate(45deg);
    transform: translate(-50%, 50%) rotate(45deg);
    border-bottom: 1px solid #e5e5df;
    border-right: 1px solid #e5e5df;
  }
  /* line 89, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .submenu-tooltip:after {
    content: "";
    display: block;
    position: absolute;
    width: 16px;
    height: 16px;
    background: white;
    z-index: 2;
  }
  /* line 98, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .submenu-tooltip li {
    border-top: 1px solid #EAECEF;
    font-size: 15px;
    white-space: nowrap;
    position: relative;
    z-index: 3;
  }
  /* line 104, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .submenu-tooltip li:first-child {
    border-top: none;
  }
  /* line 105, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .submenu-tooltip li a, .submenu-tooltip li .link {
    color: #444;
    font-weight: 300;
    padding: 14px 20px;
    text-decoration: none;
    text-align: center;
    display: block;
  }
  /* line 112, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_shared1600.scss */
  .submenu-tooltip li a:hover, .submenu-tooltip li .link:hover {
    background: #fafafa;
  }
  /* line 1, /Users/miguelbarrenechea/Proyects/gfw/app/assets/stylesheets/modules/_icons1600.scss */
  .icon {
    display: block;
    height: 25px;
    width: 25px;
  }
  </style>
</head>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header id="headerView" class="layout-header">
    <div class="layout-header-top mobile-hide">
      <div class="inner">
        <nav class="first-nav">
          <ul>
            <li class="nav-item"><a href="http://gfw-nav.herokuapp.com/"><svg class="icon shape-house"><use xlink:href="#shape-house"></use></svg><span class="tooltip">Home</span></a></li>
            <li class="nav-item"><a href="http://gfw-nav.herokuapp.com/map"><svg class="icon shape-world"><use xlink:href="#shape-world"></use></svg><span class="tooltip">Map</span></a></li>
            <li class="nav-item"><a href="http://gfw-nav.herokuapp.com/countries"><svg class="icon shape-country"><use xlink:href="#shape-country"></use></svg><span class="tooltip">Country</span></a></li>
            <li class="nav-item"><a href="http://fires.globalforestwatch.org/" target="_blank"><svg class="icon shape-fire"><use xlink:href="#shape-fire"></use></svg><span class="tooltip">Fires</span></a></li>
            <li class="nav-item"><a href="http://commodities.globalforestwatch.org/" target="_blank"><svg class="icon shape-commodities"><use xlink:href="#shape-commodities"></use></svg><span class="tooltip">Commodities</span></a></li>
            <li class="nav-item"><a href="http://blog.globalforestwatch.org/" target="_blank"><svg class="icon shape-blog"><use xlink:href="#shape-blog"></use></svg><span class="tooltip">Blog</span></a></li>
          </ul>
        </nav>
        <nav class="second-nav">
          <ul>
            <li class="nav-item">
              <div class="link" href="http://gfw-nav.herokuapp.com/">
                <svg class="icon"><use xlink:href="#shape-download"></use></svg>
                <span>Download data</span>
              </div>
              <ul class="submenu-tooltip top">
                <li><a href="#">Data policy</a></li>
                <li><a href="#">GFW on ArcGIS Online</a></li>
                <li><a href="#">GFW on Google Earth Engine</a></li>
              </ul>      
            </li>
            <li class="nav-item">
              <div class="link" href="http://gfw-nav.herokuapp.com/">
                <svg class="icon"><use xlink:href="#shape-hamburger"></use></svg>
                <span>Menu</span>
              </div>
              <ul class="submenu-tooltip top">
                <li><a href="#">Applications</a></li>
                <li><a href="#">Keep Updated</a></li>
                <li><a href="#">Get Involved</a></li>
                <li><a href="#">How to</a></li>
                <li><a href="#">About</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <div class="link">
                <form action="http://gfw-nav.herokuapp.com/search">
                  <svg class="icon"><use xlink:href="#shape-search"></use></svg> 
                  <input type="text" name="query" id="search-input" placeholder="Search">  
                </form>
              </div>
            </li>
            <li id="google_translate_element_box1"><div id="google_translate_element"></div></li>
          </ul>
        </nav>     
      </div>
    </div>
  </header>
<div id="page" class="hfeed site">
  <?php do_action( 'before' ); ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>

  <?php if (is_category() && in_category( 'Update' )) : ?>
    <header id="masthead" role="banner" class="site-header update-header">
    <div class="badge badge-credit">Photo: Ollivier Girard/ CIFOR</div>
  <?php elseif (is_category() && in_category( 'Feature posts' )) : ?>
    <header id="masthead" role="banner" class="site-header feature-header">
    <div class="badge badge-credit">Photo: Kate Evans/ CIFOR</div>
  <?php elseif (in_category( 'News roundups' )) : ?>
    <header id="masthead" role="banner" class="site-header news-header">
    <div class="badge badge-credit">Photo: Ollivier Girard/ CIFOR</div>
  <?php elseif (in_category( 'Map of the day' )) : ?>
    <header id="masthead" role="banner" class="site-header mapoftheday-header">
    <div class="badge badge-credit">Photo: CIFOR</div>
  <?php elseif (is_single()) : ?>
    <header id="masthead" role="banner" style="background-image: url('<?php echo $image[0]; ?>'); -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;" class="site-header">
  <?php else : ?>
    <header id="masthead" role="banner" class="site-header">
    <div class="badge badge-credit">Photo: Marco Simola/ CIFOR</div>
  <?php endif; ?>

    <div class="header-inner">
      <nav id="site-navigation" class="main-navigation" role="navigation">
        <a href="http://www.globalforestwatch.org/" title="GLOBAL FOREST WATCH" class="logo">&nbsp;</a>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Home" class="home">Blog</a>

        <div id="google_translate_element"></div>
        <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
      </nav><!-- #site-navigation -->

      <?php if (is_single()) : ?>
        <div class="site-branding">
          <p class="post-description"><?php gfw_blog_posted_on(); ?></p>
          <div class="site-branding-sep"></div>
          <h1 class="post-title"><a href="<?php the_permalink(); ?>" rel="home"><?php the_title(); ?></a></h1>
          <div class="site-branding-sep"></div>

          <div class="entry-meta">
            <?php
              /* translators: used between list items, there is a space after the comma */
              $category_list = get_the_category_list( __( ', ', 'gfw-blog' ) );

              /* translators: used between list items, there is a space after the comma */
              $tag_list = get_the_tag_list( '', __( ', ', 'gfw-blog' ) );

              if ( ! gfw_blog_categorized_blog() ) {
                // This blog only has 1 category so we just need to worry about tags in the meta text
                if ( '' != $tag_list ) {
                  $meta_text = __( '<span class="cat-links">%2$s</span><span class="sep"><span>·</span></span>', 'gfw-blog' );
                }

              } else {
                // But this blog has loads of categories so we should probably display them here
                if ( '' != $tag_list ) {
                  $meta_text = __( '<span class="cat-links">%1$s</span><span class="sep"><span>·</span></span><span class="tags-links">%2$s</span>', 'gfw-blog' );
                } else {
                  $meta_text = __( '<span class="cat-links">%1$s</span>', 'gfw-blog' );
                }

              } // end check for categories on this blog

              printf(
                $meta_text,
                $category_list,
                $tag_list
              );
            ?>

            <?php edit_post_link( __( 'Edit', 'gfw-blog' ), '<span class="sep"><span>·</span></span><span class="edit-link">', '</span>' ); ?>
          </div><!-- .entry-meta -->
        </div>
      <?php elseif (is_category() && in_category( 'News roundups' )) : ?>
        <div class="site-branding">
          <div class="site-branding-sep top"></div>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">GFW News roundups</a></h1>
          <p class="site-description">A recurring digest of news stories on forest science, conservation, and monitoring</p>
          <div class="site-branding-sep"></div>
        </div>
      <?php elseif (is_category() && in_category( 'Map of the day' )) : ?>
        <div class="site-branding">
          <div class="site-branding-sep top"></div>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">GFW Map of the day</a></h1>
          <p class="site-description">Connecting Global Forest Watch to current events</p>
          <div class="site-branding-sep"></div>
        </div>
      <?php elseif (is_category() && in_category( 'Feature posts' )) : ?>
        <div class="site-branding">
          <div class="site-branding-sep top"></div>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">GFW Feature posts</a></h1>
          <p class="site-description">Original analysis and commentary authored by GFW experts and partners.</p>
          <div class="site-branding-sep"></div>
        </div>
      <?php elseif (is_category() && in_category( 'Update' )) : ?>
        <div class="site-branding">
          <div class="site-branding-sep top"></div>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">GFW Update</a></h1>
          <p class="site-description">Short posts on recent news, updates to the GFW site, and reports on new analysis</p>
          <div class="site-branding-sep"></div>
        </div>
      <?php else : ?>
        <div class="site-branding">
          <div class="site-branding-sep top"></div>
          <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <p class="site-description"><?php bloginfo( 'description' ); ?></p>
          <div class="site-branding-sep"></div>
        </div>
      <?php endif; ?>
    </div><!-- .header-inner -->

    <?php if (is_single() && in_category( 'News roundups' )) : ?>
      <div class="badge badge-news"><i></i>News roundups</div>
    <?php elseif (is_single() && in_category( 'Feature posts' )) : ?>
      <div class="badge badge-feature"><i></i>Feature posts</div>
    <?php elseif (is_single() && in_category( 'Update' )) : ?>
      <div class="badge badge-updates"><i></i>Update</div>
    <?php endif; ?>
  </header><!-- #masthead -->

  <div id="content" class="site-content">
