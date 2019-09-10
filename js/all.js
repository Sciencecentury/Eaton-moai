// -------------------------------------------------------------------------------------------------
// 予定詳細ポップアップ
// -------------------------------------------------------------------------------------------------
// 【ポップアップの流れ】
// ・クリックされる
// ・通知する
// ・html上に既に隠してある項目を表示する
// -------------------------------------------------------------------------------------------------
$(function() {
    // モーダルのボタンをクリックした時
    $('.taskDetailPopupButton').on('click', function() {
        // 何番目のモーダルボタンかを取得
        // var 【変数名(クリックされたモーダルボタンが何番目の物なのかも数字が入る)】= $('【カウントしたいタグ名やclass、id名】').index(this);
        var buttonIndex = $('.taskDetailPopupButton').index(this);
        // クリックしたモーダルボタンと同じ番目のモーダルを表示する
        // eq : 複数のHTML要素の中からインデックス番号を指定することで特定の要素だけを取得する
        $('.taskDetailPopup').eq(buttonIndex).fadeIn();
    });
  
    // ×ボタンをクリックした時
    $('.closeButton').click(function(){
        // モーダルを非表示にする
      $('.taskDetailPopup').fadeOut();
    });
  });

// -------------------------------------------------------------------------------------------------
// 予定詳細ポップアップが起動している状態で起動するポップアップ
// -------------------------------------------------------------------------------------------------
$(function() {
  // モーダルのボタンをクリックした時
  $('.innerPopupButton').on('click', function() {
      // 何番目のモーダルボタンかを取得
      // var 【変数名(クリックされたモーダルボタンが何番目の物なのかも数字が入る)】= $('【カウントしたいタグ名やclass、id名】').index(this);
      var innerButtonIndex = $('.innerPopupButton').index(this);
      // クリックしたモーダルボタンと同じ番目のモーダルを表示する
      // eq : 複数のHTML要素の中からインデックス番号を指定することで特定の要素だけを取得する
      $('.innnerPopup').eq(innerButtonIndex).fadeIn();
  });

  // 閉じるボタンをクリックした時
  $('.innerCloseButton').click(function(){
      // モーダルを非表示にする
    $('.innerPopup').fadeOut();
  });
});

// -------------------------------------------------------------------------------------------------
// にょきっとばー
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
