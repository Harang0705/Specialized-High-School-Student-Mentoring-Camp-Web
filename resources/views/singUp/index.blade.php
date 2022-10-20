@include('template.header')
@include('component.header')

<div class="singUpInner">
    <div class="title">
        <span>회원가입</span>
    </div>
    <div class="information">
        <div class="studentState">
            <span>졸업생/재학생 여부</span>
            <p>졸업생</p>
            <input type="radio" name="state" value="student">
            <p>재학생</p>
            <input type="radio" name="state" value="graduate">
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
                <option value="0">진학예정</option>
                <option value="1">미진학예정</option>
            </select>
        </div>
        <div class="specializeState">
            <span>고등학교 전공 유지 여부</span>
            <select name="specializeState">
                <option value="0">유지 희망</option>
                <option value="1">유지 비희망</option>
            </select>
        </div>
        <div class="description">
            <p>
                * 로그인은 이름 + 고유번호로 진행됩니다. (고유번호는 회원가입시 발급) 
                <br/> 이름의 오탈자가 없는지 다시 한번 확인 부탁드립니다.
            </p>
        </div>
        <div class="singUpAgree">
            <button>회원가입</button>
        </div>
    </div>
</div>

@include('template.footer')