@include('template.header')
@include('component.header')

<form onsubmit="return false;" id="form">
    <div class="singUpInner">
        <div class="title">
            <span>회원가입</span>
        </div>
        <div class="information">
            <div class="studentState">
                <span>재학생 / 졸업생 여부</span>
                <p>재학생</p>
                <input type="radio" name="studentState" value="0">
                <p>졸업생</p>
                <input type="radio" name="studentState" value="1">
            </div>
            <div class="name">
                <span>이름</span>
                <input type="text" name="name">
            </div>
            <div class="affiliation">
                <span>계열</span>
                <select name="affiliation">
                    <optgroup label="공업계열">
                        <option value="11">전기/화학/기계</option>
                        <option value="12">바이오</option>
                        <option value="13">컴퓨터</option>
                        <option value="14">기타</option>
                    </optgroup>
                    <optgroup label="인문계열">
                        <option value="21">회계/경영</option>
                        <option value="22">영상</option>
                        <option value="23">관광</option>
                        <option value="24">기타</option>
                    </optgroup>
                </select>
            </div>
            <div class="universityState">
                <span>대학교 진학여부</span>
                <select name="universityState">
                    <option value="1">진학예정 or 진학</option>
                    <option value="0">미진학예정 or 바로 취업</option>
                </select>
            </div>
            <div class="specializeState">
                <span>고등학교 전공 유지 여부</span>
                <select name="specializeState">
                    <option value="1">유지</option>
                    <option value="0">유지를 희망하지 않음</option>
                </select>
            </div>
            <div class="description">
                <p>
                    * 로그인은 이름 + 고유번호로 진행됩니다. (고유번호는 회원가입시 발급) 
                    <br/> 이름의 오탈자가 없는지 다시 한번 확인 부탁드립니다.
                </p>
            </div>
            <div class="singUpAgree">
                <button id="singUpBtn">회원가입</button>
            </div>
        </div>
    </div>
</form>

<script>
    document.getElementById('singUpBtn').addEventListener('click', function () {
    if (confirm('회원가입을 하시겠습니까?') == true) {
        var element = document.getElementById('form')

        var studentState = element['studentState'].value; // 재학생 졸업생 여부
        var userName = element['name'].value; // 이름
        var affiliation = element['affiliation'].value; // 계열
        var universityState = element['universityState'].value; // 대학교 진학여부
        var specializeState = element['specializeState'].value; // 고등학교 전공 유지 여부
        
        if (studentState.length == 0) {
            alert('재학생 / 졸업생 여부를 선택해주세요.');
            return false;
        }
    
        if (userName.length == 0) {
            alert('이름을 입력해주세요.');
            return false;
        }
    
        axios.post("{{ route('singUp.store') }}", {
            studentState: studentState,
            userName : userName,
            affiliation : affiliation,
            universityState : universityState,
            specializeState : specializeState
        })
        .then(function (__res) {
            if (__res['status'] == '200') {
                alert('회원가입이 성공했습니다. \n유저 고유번호 : ' + __res['data']['user_number'] );
                location.href = "{{ route('index') }}";
            }
        })
        .catch(function (__err) {
            alert(__err);
        });
    }
    });
</script>
@include('template.footer')