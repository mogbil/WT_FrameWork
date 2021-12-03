/***********************************************************************
 # *          @Project    : WT Store
 # *          @version    : 0.1
 # *          @author     : Mogbil Sourketti info[@]wondtech.com
 # *          @copyright  : 2020 WondTech for Integrated Digital Solutions
 # *          @link       : http://www.wondtech.com
 # *          @package    : WT FrameWork (0.1)
 # ************************************************************************/

$(function (){

    countBasket();

    function countBasket(){
        $.post('/index/basket', {countsBasket:true}, function (data) {
            if(data != 0){
                $('#p_q').text(data);
                $('#p_q').css('background-color','red');
            }
        });
    };

    $('.addBasket').click(function () {
        var p_id = $(this).attr('data-arg');
        $.post('/index/product/'+p_id, {addBask: true, p_id: p_id, q: 1});
        countBasket();
    });

    $('.del').click(function () {
        var del = confirm('Delete - حذف');
        if(del==true) return true;
        else return false;
    });
});