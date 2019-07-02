// -------------------------------------------------------------------------------------------------
//タイトル追加ポップアップの操作
// -------------------------------------------------------------------------------------------------
$(function(){
    // show popupボタンクリック時の処理
    $('#titleShow').click(function(e) {
        $('#titlePopup, #titleLayer').show();
    });
    // レイヤー/ポップアップのcloseボタンクリック時の処理
    $('#titleClose, #titleLayer').click(function(e) {
        $('#titlePopup, #titleLayer').hide();
    });
});
// -------------------------------------------------------------------------------------------------
//組追加ポップアップの操作
// -------------------------------------------------------------------------------------------------
$(function(){
    // show popupボタンクリック時の処理
    $('#classNameShow').click(function(e) {
        $('#classNamePopup, #classNameLayer').show();
    });
    // レイヤー/ポップアップのcloseボタンクリック時の処理
    $('#classNameClose, #classNameLayer').click(function(e) {
        $('#classNamePopup, #classNameLayer').hide();
    });
});
// -------------------------------------------------------------------------------------------------
//場所追加ポップアップの操作
// -------------------------------------------------------------------------------------------------
$(function(){
    // show popupボタンクリック時の処理
    $('#placeShow').click(function(e) {
        $('#placePopup, #placeLayer').show();
    });
    // レイヤー/ポップアップのcloseボタンクリック時の処理
    $('#placeClose, #placeLayer').click(function(e) {
        $('#placePopup, #placeLayer').hide();
    });
});
