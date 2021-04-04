//ここに追加したいJavaScript、jQueryを記入してください。
//このJavaScriptファイルは、親テーマのJavaScriptファイルのあとに呼び出されます。
//JavaScriptやjQueryで親テーマのjavascript.jsに加えて関数を記入したい時に使用します。

// $(function(){
    if (window.matchMedia( "(max-width: 834px)" ).matches) {
        /* ウィンドウサイズが 834px以下の場合のコードをここに */
        //メニューの集まり
        const menus = document.getElementsByClassName('menu-top');
        //サブメニューがあるメニューアイテム
        const has_child_item = document.getElementsByClassName('menu-item-has-children');
        const li = document.getElementsByClassName('sub-menu');
        
        console.log('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa')
        $(has_child_item).click(function(e){
            if ($(this).children().hasClass('open')) {
                $(this).children().removeClass('open');
            }else{
                $(has_child_item).children().removeClass('open');
                $(this).children().addClass('open');
            }
            e.preventDefault();
        });
        console.log('aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa')
    } else {
        /* ウィンドウサイズが 834px以上の場合のコードをここに */
    }
// });