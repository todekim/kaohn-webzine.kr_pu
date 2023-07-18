<div class="popup-wrap inner">
    <div id="popup_1" class="popup">
        <img src="/webzine/202305/images/popup_01.jpg" alt="퀴즈 당첨자 발표" class="img-fluid">
        <div class="p-footer d-flex justify-content-between">
            <button id="pop_none_1" class="today_none" onClick="todaycloseWin(this)">하루동안 보지 않기</button>
            <button class="pop-close">닫기</button>
        </div>
    </div>
    <div id="popup_2" class="popup">
        <a href="https://docs.google.com/forms/d/e/1FAIpQLSekg5xyrP5k5KJ0fsVBNe_Lq3wXCmmtfq4TIqSD4lchr5m1yQ/viewform" target="_blank"><img src="/webzine/202207/images/popup_02.jpg" alt="퀴즈퀴즈" class="img-fluid"></a>
        <div class="p-footer d-flex justify-content-between">
            <button id="pop_none_2" class="today_none" onClick="todaycloseWin(this)">하루동안 보지 않기</button>
            <button class="pop-close" >닫기</button>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){

        $('.popup-wrap .popup').each(function(){
            cookiedata= document.cookie;
            var popid = $(this).attr('id')
            if(cookiedata.indexOf(popid+"=done") < 0){
                $(this).css('display','block');
            }else{
                $(this).remove();
            }
        })
            $('.pop-close').click(function(){
                $(this).parents('.popup').hide();
            });
        });
        function setCookie(name, value, expiredays){
            var todayDate = new Date();
            todayDate.setDate(todayDate.getDate() + expiredays);
            document.cookie = name + "=" + escape(value) + "; path=/; expires="+todayDate.toGMTString() + ";"
        }

        function todaycloseWin(obj){
            popId = $(obj).parents('.popup').attr('id');
            setCookie(popId, "done", 1);
            $(obj).parents('.popup').hide();
        };



</script>