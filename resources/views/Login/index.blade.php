@include('template.head')
@include('component.headerMenu')
<div class="loginInner">
    <div class="loginHeader">
        <span>로그인</span>
    </div>
    <div class="inputUserInformation">
        <div class="userName">
            <span>이름</span>
            <input type="text" value="지건우" id="name">
        </div>
        <div class="userNumber">
            <span>고유번호</span>
            <input type="text" value="5260" id="number" maxlength="4">
        </div>
    </div>
    <div class="loginButton">
        <button id="btnLogin">로그인</button>
    </div>
    <div class="singUpMove">
        <p>아직 회원이 아니신가요 ? <a href="{{ route('singUp.index') }}">회원가입</a>을 해보세요!</p>
    </div>
</div>
<script>
    document.getElementById('btnLogin').addEventListener('click', function () {
        var name = document.getElementById('name').value;
        var number = document.getElementById('number').value;

        if (name.length < 1) {
            alert('이름을 입력해주세요.');
            return false;
        }

        if (number.length < 4) {
            alert('고유번호를 확인해주세요.');
            return false;
        }

        axios.post("{{ route('login.store') }}", {
            name : name,
            number : number 
        })
        .then(function (__res) {
            console.log(__res);
        })
        .catch(function (__err) {

        });
    });
</script>

@include('template.footer')