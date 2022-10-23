@include('template.head')
@include('component.headerMenu')
<div class="loginInner">
    <div class="loginHeader">
        <span>로그인</span>
    </div>
    <div class="inputUserInformation">
        <div class="userName">
            <span>이름</span>
            <input type="text">
        </div>
        <div class="userNumber">
            <span>고유번호</span>
            <input type="text" maxlength="4">
        </div>
    </div>
    <div class="loginButton">
        <button>로그인</button>
    </div>
    <div class="singUpMove">
        <p>아직 회원이 아니신가요 ? <a href="{{ route('singUp.index') }}">회원가입</a>을 해보세요!</p>
    </div>
</div>

@include('template.footer')