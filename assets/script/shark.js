var essaySharkClass = -1 !== document.location.href.search("//essayshark.com") || -1 !== document.location.href.search("//t.essayshark.com") ? "es-cookie--shark" : "",
 template = '        < div class = "es-cookie es-cookie--show ' + essaySharkClass + '"
id = "es-cookie-block" > \n < p class = "es-cookie__title" > \n < strong > '+"We are using cookies"+' < /strong>\n           < /p > \n < div class = "es-cookie__block" > \n < p class = "es-cookie__description" > \n '+"Our website needs cookies enabled to provide you with the best experience. By continuing without changing your settings, we'
ll assume that you are happy to receive all cookies.
"+' \n               < a class = "
es - cookie__link "
href = "/cookie-policy.html" > '+"Read more."+' < /a>\n             < /p > \n < button class = "es-cookie__button"
id = "es-cookie-button-submit" > '+"It'
s ok "+" < /button>\n           < /div > \n < /div>",styles=".es-cookie{display:none;position:fixed;bottom:25px;left:25px;background-color:#fff;padding:18px 25px;border-radius:3px;border:1px solid #ddd;box-shadow:2px 2px 0 0 rgba(0,0,0,.1);max-width:555px;width:100%;z-index:11111!important;font-weight:400!important;text-align:left!important;box-sizing:border-box!important}.es-cookie--shark{padding-left:100px;background-image:url(/w
3 t_img / images / cookie.png);
background - repeat: no - repeat;
background - size: 58 px 58 px;
background - position: 23 px 35 px
}.es - cookie--show {
 display: block
}.es - cookie__title {
 color: #415458!important;font-weight:700!important;margin:0 0 7px!important;padding:0!important;font-size:14px!important;line-height:1.35!important}.es-cookie__block{display:flex;align-items:flex-start}.es-cookie__description{color:# 415458!important;margin: 0!important;padding: 0 20 px 0 0!important;font - size: 14 px!important;line - height: 1.35!important
}.es - cookie__link {
 color: #15b0bf!important;padding:0!important;text-decoration:underline;margin:0!important}.es-cookie--shark .es-cookie__link{display:block!important}.es-cookie__button{text-transform:uppercase!important;margin:0!important;padding:12px 25px!important;color:# 15 b0bf!important;border: 1 px solid #73d0d9!important;border-radius:3px!important;background-color:# fff!important;font - weight: 400!important;outline: 0!important;transition: .1 s all ease - in -out!important;font - size: 14 px!important;box - shadow: none!important;cursor: pointer;flex: 0 0 auto;text - shadow: none!important;min - height: auto!important;line - height: 1.35!important
}.es - cookie__button: hover {
 background - color: #6ac6cf!important;color:# fff!important
}.es - cookie__button: active {
 background - color: #15b0bf!important;color:# fff!important
}.es - cookie__button: focus {
 box - shadow: 0 0 0 2 px rgba(115, 208, 217, .5) !important
}
@media(max - width: 580 px) {.es - cookie {
  padding: 15 px 18 px!important;max - width: 300 px;width: 100 % ;left: 50 % !important;transform: translateX(-50 % ) !important;bottom: 10 px
 }.es - cookie__block {
  flex - wrap: wrap
 }.es - cookie__description {
  flex - basis: 100 % ;
  padding - right: 0!important;
  margin - bottom: 15 px!important;
  font - size: 13 px!important
 }.es - cookie--shark.es - cookie__link {
  display: inline - flex!important;margin - top: 0!important
 }.es - cookie__button {
  min - width: 150 px!important;
  padding - top: 10 px!important;
  padding - bottom: 10 px!important
 }.es - cookie--shark {
  background - size: 48 px 48 px;
  background - position: right 22 px bottom 15 px
 }
}
";if(!localStorage.getItem("
policy | usage ")){document.body.insertAdjacentHTML("
beforeend ",template);var style=document.createElement("
style ");style.appendChild(document.createTextNode(styles));document.head.appendChild(style);var $cookieBlock=document.getElementById("
es - cookie - block "),$cookieButton=document.getElementById("
es - cookie - button - submit "),cookieBlockClassOpened="
es - cookie--show ";$cookieButton.addEventListener("
click ",function(){$cookieBlock.classList.remove(cookieBlockClassOpened),localStorage.setItem("
policy | usage ","
1 ")})}
																											   
//name
																											   window.w3tVar = function(k) {
 var w3tVars = {};
 w3tVars.cl_lang = 'en';
 w3tVars.conf_online_status_msg_online = ' < span class = \"ustatus_label ustatus_online\" data-sort=\"10\" style=\"color:#3ea600\">Online<\/span>';
 w3tVars.conf_online_status_msg_away = ' < span class = \"ustatus_label ustatus_away\" data-sort=\"20\" style=\"color:#eea200\">Away<\/span>';
 w3tVars.conf_online_status_msg_offline = ' < span class = \"ustatus_label ustatus_offline\" data-sort=\"30\" style=\"color:#e52e00\">Offline<\/span>';
 w3tVars.conf_user_online_status_away_mins = 5;
 w3tVars.conf_new_message_sound_vol = 0;
 w3tVars.pushstream_enabled = false;
 w3tVars.pushstream_host = 'box1.essayshark.com';
 w3tVars.pushstream_protocol = 'https';
 w3tVars.pushstream_subscriber = '/live/sub';
 w3tVars.pushstream_subscriber_websocket = '/live/ws';
 w3tVars.site_path = 'index.html';
 w3tVars.site_page = '';
 w3tVars.my_location_backoffice = false;
 w3tVars.my_location_page = '';
 w3tVars.my_location_order = 0;
 w3tVars.my_location_order_status = 0;
 w3tVars.my_location_bid = 0;
 w3tVars.my_location_bids_qty = 0;
 w3tVars.user_role = '';
 w3tVars.user_login = '';
 w3tVars.user_email = '';
 w3tVars.user_hid = '';
 w3tVars.user_ui_lang = '';
 w3tVars.pcm_ec_name = 'lnkptpc';
 w3tVars.order_id = 0;
 w3tVars.writer_title_ucfirst = 'Writer';
 w3tVars.datepicker_format = 'j M Y';
 w3tVars.fin_rate_cny2usd = 0.1441;
 w3tVars.order_datepicker_direction_new_order_from = true;
 w3tVars.order_datepicker_direction_new_order_to = '1 Jan 2035';
 w3tVars.val_hieroglyphs_in_page = 1000;
 w3tVars.val_words_in_page = 275;
 w3tVars.no_now_date_ymd = '20181130';
 w3tVars.no_min_deadline_avail_h = 22;
 w3tVars.pcap_l = 18;
 w3tVars.pcap_krex = '185f44';
 w3tVars.pcap_bex = '12ec76';
 w3tVars.pcap_fex = '162521';
 w3tVars.space_submit = false;
 w3tVars.from_reset_required = false;
 if (typeof(w3tVars[k]) !== 'undefined') {
  return w3tVars[k];
 }
 return '';
};