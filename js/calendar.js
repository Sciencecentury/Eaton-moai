// -------------------------------------------------------------------------------------------------
//にょっきとばー
// -------------------------------------------------------------------------------------------------
$(function($) {
    WindowHeight = $(window).height();
     //メニューをウィンドウの高さにする
    $('.drawrMenu').css('height', WindowHeight);

    $(document).ready(function() {
        $('.drawrOpenBtn').click(function(){
      if($('.drawrMenu').is(":animated")){
        return false;
      }else{
        //animateで表示・非表示
        $('.drawrMenu').animate({width:'toggle'});
        //toggleでクラス追加・削除
        $(this).toggleClass('menuCloseBtn');
        return false;
      }
        });
    });

  //別領域をクリックでメニューを閉じる
  $(document).click(function(event) {
    if (!$(event.target).closest('.drawrMenu').length) {
      $('.drawrOpenBtn').removeClass('menuCloseBtn');
      $('.drawrMenu').hide();
    }
  });
});
// -------------------------------------------------------------------------------------------------
//ポップアップの操作
// -------------------------------------------------------------------------------------------------
$(function(){
    // show popupボタンクリック時の処理
    $('#calendarShow').click(function(e) {
        $('#calendarPopup, #calendarLayer').show();
    });
    // レイヤー/ポップアップのcloseボタンクリック時の処理
    $('#calendarClose, #calendarLayer').click(function(e) {
        $('#calendarPopup, #calendarLayer').hide();
    });
});
