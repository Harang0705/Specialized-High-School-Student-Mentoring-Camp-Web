<div id="reservation_popup">
    <div class="inner">
        <div class="title">
            <p>상담신청</p>
            <a id="reservation_popup_delete">X</a>
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