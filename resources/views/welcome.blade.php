<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ url("css/reset.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ url("css/main/header.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ url("css/main/session.css") }}">
    <title>#찾다</title>
</head>
<body>
    <div class="reservation_popup">
        <div class="inner">
            <div class="title">
                <p>상담신청</p>
                <a>X</a>
            </div>
            <div class="content">
                <p>새로운 목표와, 새로운 꿈을 찾기 위한 도전! 이러한 목표를 가진채 살아가고 있어요.</p>
            </div>
            <div class="time">
                <p class="title">상담시간</p>
                <select name="times" id="times">
                    <optgroup label="예약 가능 시간">
                        <option value="1">14:00 ~ 14:20</option>
                        <option value="2">14:30 ~ 14:50</option>
                    </optgroup>
                    <optgroup label="예약 대기 시간">
                        <option value="3">15:00 ~ 15:20</option>
                        <option value="4">15:30 ~ 15:50</option>
                    </optgroup>
                </select>
                <div class="timeout">
                    <span>* 예약 마감시간</span>
                    <p>16:00 ~ 16:20</p>
                </div>
                <div class="timeout">
                    <span>* 내가 이미 예약한 시간</span>
                    <p>16:30 ~ 16:50</p>
                </div>
            </div>
            <div class="button">
                <button>예약 신청하기</button>
            </div>
        </div>
    </div>
    <header class="header">
        <div class="menuWarp">
            <h1 class="menuLogo">
                <a href=""><img src="{{ url("image/select.png")}}"/></a>
            </h1>
            <div class="menu">
                <ul>
                    <li>
                        <a href="">
                            <span>내 관심사 선배</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span>이런 선배들은 어때요?</span>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <span>Q&A</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <div class="page">
        <div class="expression">
            <h1>아직 로그인을 안하셨네요!</h1>
            <h1>쉽고 간편한 <a href="">회원가입</a>으로 참여해요!</h1>
            <h3> 기존 회원 이라면 <a href="">로그인</a></h3>
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
</body>
<script src="{{ url('js/index.js') }}"></script>
</html>