@include('template.header')
    @include('component.popup')
    @include('component.header')
    <div class="page">
        <div class="expression">
            <h1>아직 로그인을 안하셨네요!</h1>
            <h1>쉽고 간편한 <a href="{{ route('singUp.index') }}">회원가입</a>으로 참여해요!</h1>
            <h3> 기존 회원 이라면 <a href="{{ route('login.index') }}">로그인</a></h3>
        </div>

        <div class="interest">
            <h1>내 관심사 선배</h1>
            <div class="personList" id="scroll">
                <div class="unit">
                    <p class="mainTitle">새로운 목표와, 새로운 꿈을 찾기 위한 도전! 이러한 목표를 가진채 살아가고 있어요.</p>
                    <br/>
                    <p>삼일공업고 졸업</p>
                    <br/>
                    <p>삼일화약주식회사 근무</p>
                    <div class="tags">
                        <span>#공업계열_취업상담</span>
                        <span>#후진학</span>
                        <span>#뭐하지_그러게_뭐할까</span>
                    </div>
                    <button onclick="popup_push(1)">상담 신청하기</button>
                </div>
                <div class="unit">
                    <p class="mainTitle">새로운 목표와, 새로운 꿈을 찾기 위한 도전! 이러한 목표를 가진채 살아가고 있어요.</p>
                    <br/>
                    <p>삼일공업고 졸업</p>
                    <br/>
                    <p>삼일화약주식회사 근무</p>
                    <div class="tags">
                        <span>#공업계열</span>
                        <span>#후진학</span>
                        <span>#뭐하지</span>
                    </div>
                    <button>상담 신청하기</button>
                </div>
                <div class="unit">
                    <p class="mainTitle">새로운 목표와, 새로운 꿈을 찾기 위한 도전! 이러한 목표를 가진채 살아가고 있어요.</p>
                    <br/>
                    <p>삼일공업고 졸업</p>
                    <br/>
                    <p>삼일화약주식회사 근무</p>
                    <div class="tags">
                        <span>#공업계열</span>
                        <span>#후진학</span>
                        <span>#뭐하지</span>
                    </div>
                    <button>상담 신청하기</button>
                </div>
                <div class="unit">
                    <p class="mainTitle"></p>
                    <br/>
                    <p>삼일공업고 졸업</p>
                    <br/>
                    <p>삼일화약주식회사 근무</p>
                    <div class="tags">
                        <span>#공업계열</span>
                        <span>#후진학</span>
                        <span>#뭐하지</span>
                    </div>
                    <button>상담 신청하기</button>
                </div>
            </div>
        </div>

        <div class="interest">
            <h1>이런 선배들은 어때요?</h1>
            <div class="personList">
                <div class="unit">
                    <a>새로운 목표와, 새로운 꿈을 찾기 위한 도전! <br/> 이러한 목표를 가진채 살아가고 있어요.</a>
                    <br/>
                    <span>삼일공업고 졸업</span>
                </div>
                <div class="unit">
                    <a>새로운 목표와, 새로운 꿈을 찾기 위한 도전! <br/> 이러한 목표를 가진채 살아가고 있어요.</a>
                    <br/>
                    <a>삼일공업고 졸업</a>
                </div>
                <div class="unit">
                    <a>새로운 목표와, 새로운 꿈을 찾기 위한 도전! <br/> 이러한 목표를 가진채 살아가고 있어요.</a>
                    <br/>
                    <span>삼일공업고 졸업</span>
                </div>
                <div class="unit">
                    <a>새로운 목표와, 새로운 꿈을 찾기 위한 도전! <br/> 이러한 목표를 가진채 살아가고 있어요.</a>
                    <br/>
                    <a>삼일공업고 졸업</a>
                </div>
            </div>
        </div>
    </div>
    <script>
        var popupElement = document.getElementById('reservation_popup');
    
        // popup 불러오기 향후 axios 통신으로 해당 게시글 예약 정보 가져올 예정
        function popup_push(__idx) {
            var idx = __idx;
            
            document.body.classList.add('reservation_popup_hidden');
            popupElement.style.display = "block";
        } 
    
        // 팝업 지우기
        document.getElementById('reservation_popup_delete').addEventListener('click', function() {
            var state = confirm('정말로 상담 신청을 취소 하실껀가요?');
    
            if (state == true) {
                document.body.classList.remove('reservation_popup_hidden');
                popupElement.style.display = "none";
            }
        });

    </script>
@include('template.footer')