<?php
include_once( '../../common.php' );
include_once( G5_THEME_PATH . '/head.php' );
?>

    <style>
        header,
        footer{
            display: none;
        }

        .sub-wrap{
            padding-top:100px;
        }

        .cont:last-of-type{
            padding-bottom:90px;
        }

        .h1-cont .go-btn{
            display: block;
            max-width:400px;
            padding:8px 10px;
            margin:-10px auto 0;
            color:#fff;
            font-size:18px;
            text-align:center;
            font-weight:500;
            border-radius:25px;
            background:#474747;
        }
        
        .qna-cont .q>.ico {
            display: block;
            width: 88px;
            padding-left:8px;
            height: 74px;
            padding-top: 14px;
            color: #fff;
            font-family: 'GmarketSansBold';
            text-align: center;
            letter-spacing:0px; 
            margin-right:30px;
        }
        
        .h1-cont .qna-cont .q>.ico{
            background:url(/webzine/202205/images/h1_q_bg.png) top center no-repeat;
            font-size:16px;
        }
        
        .h1-cont .qna-cont .q>.ico>span{
            font-size:28px;
        }
        
        .qna-cont .q .txt {
            width: calc(100% - 90px);
            margin-top: 29px;
            font-weight: 700;
            color: #3870cc;
            font-family: 'GmarketSansBold';
            font-size: 24px;
            line-height:33px;;
        }

        .qna-cont {
            margin-bottom:60px;
        }
        
        div.multiple_choice {
            padding:0 30px;
            flex-wrap: wrap;
        }
        
        div.multiple_choice > p {
            font-weight: 700;
            color: #333333;
            font-family: 'GmarketSansBold';
            font-size: 20px;
            text-align: left !important;
        }
        
        div.multiple_choice > p:nth-child(2n-1) {
            flex-basis: 450px;
        }
        
        @media(max-width:575px){
            div.multiple_choice > p:nth-child(2n-1) {
                flex-basis: inherit;
            }
            
            div.multiple_choice {
                padding:0;
                flex-wrap: wrap;
            }
            
            div.multiple_choice {
                align-items: flex-start !important;
            }
        }
        
    </style>
    
    <section class="cont g-cont h1-cont sub-inner">
        <span class="top-img">
            <img src="/webzine/202205/images/h1_banner.jpg" alt="img" class="img-fluid">
        </span>
        
        <div class="qna-cont">
            <h3 class="q d-flex">
                <div class="ico">
                    QUIZ?<br>
                    <span>01</span>
                </div>
                <span class="txt">개정된 위험성평가의 절차를 순서대로 나열하세요.</span>
            </h3>
            <div class="multiple_choice">
                <p>㉠ 유해·위험요인 파악</p>
                <p>㉡ 사전준비</p>
                <p>㉢ 위험성 결정</p>
                <p>㉣ 기록, 공유 및 교육</p>
                <p>㉤ 위험성 감소대책 수립 및 실행</p>
            </div>
        </div>
        
        <div class="qna-cont">
            <h3 class="q d-flex">
                <div class="ico">
                    QUIZ?<br>
                    <span>02</span>
                </div>
                <span class="txt">생명에 위험을 초래하는 외상 사건은 아니지만, 부당하거나 불공정한 스트레스 생활사건을 겪고 나서 울분이란 감정과 함께 다양한 심리적·행동적 증상들을 호소하는 것이 특징인 질환명은?</span>
            </h3>
            <div class="multiple_choice">
                <p>① 위험성 수준 3단계 판단법에는 유해위험요인 파악, 위험성 결정, 위험성 감소대책 수립 및 실행이 있다.</p>
                <p>② 기존보다 평가시기를 명확히 하고, 정기평가는 최초·수시평가 결과 결정한 위험수준의 적정성을 재검토 하는 수준으로 부담을 낮췄다.</p>
                <p>③ 위험성을 가늠할 때는 가능성과 중대성을 행렬·곱셈·덧셈 등 계량적으로 산출하는 방법에 한한다.</p>
                <p>④ 위험성평가 방법을 적용한 안전·보건진단을 이행했을 경우 위험성평가를 실시한 것으로 본다.</p>
                <p>⑤ 전체 위험성평가의 과정에 근로자가 참여하도록 한다.</p>
            </div>
        </div>
        <div class="qna-cont">
            <h3 class="q d-flex">
                <div class="ico">
                    QUIZ?<br>
                    <span>03</span>
                </div>
                <span class="txt">심폐소생술에 대한 설명으로 틀린 것은?</span>
            </h3>
            <div class="multiple_choice">
                <p>① 심정지 발생 후 아무 조치를 취하지 않으면 4~5분 내에 뇌손상이 일어난다.</p>
                <p>② AED는 의식과 반응, 정상적 호흡이 없는 심정지 환자에게만 사용한다.</p>
                <p>③ AED의 패드는 하나는 왼쪽 쇄골아래 하나는 오른쪽 젖꼭지 아래의 중간 겨드랑이선에 부착한다.</p>
                <p>④ 성인과 소아 심정지 환자에서 흉부합박의 위치는 흉골 아래쪽 1/2지점이다.</p>
                <p>⑤ 환자의 호흡이 회복되었을 시, 환자를 옆으로 돌려 눕혀 기도가 막히는 것을 예방한다.</p>
            </div>
        </div>
        
        <div class="qna-cont">
            <h3 class="q d-flex">
                <div class="ico">
                    QUIZ?<br>
                    <span>04</span>
                </div>
                <span class="txt">소규모사업장에 산업보건 기초제도(작업환경측정, 특수건강진단) 이행에 필요한 비용을 지원하고, 취약사업장 발굴 및 사후관리를 통하여 노동자가 깨끗한 작업환경에서 일할 수 있도록 지원하는 사업의 이름은?</span>
            </h3>
        </div>
        <div class="qna-cont">
            <h3 class="q d-flex">
                <div class="ico">
                    QUIZ?<br>
                    <span>05</span>
                </div>
                <span class="txt">올해 직업건강협회가 운영을 맡게되었으며, 대전권역 근로자의 직업환경개선을 위해 건강상담 및 교육, 프로그램등을 의사, 간호사, 상담사 등 전문 인력을 필두로 무료로 제공하는 기관은?</span>
            </h3>
        </div>


        <a href="https://docs.google.com/forms/d/e/1FAIpQLSekg5xyrP5k5KJ0fsVBNe_Lq3wXCmmtfq4TIqSD4lchr5m1yQ/viewform?usp=sf_link" target="_blank" class="go-btn">퀴즈 맞추러 바로가기</a>
    </section>

    <!-- <script>
        $('.go-btn').click(function(e){
            if (new Date() > new Date('2023/04/30 11:59:59')) {
                e.preventDefault();
                alert('퀴즈가 마감되었습니다.')
            }
        });
        
    </script> -->


<? 
    include_once( G5_THEME_PATH . '/tail.php' );
    ?>