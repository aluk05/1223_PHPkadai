let currentSlideIndex = 0;
const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot");
const totalSlides = slides.length;

function showSlides(n) {
    if (n >= totalSlides) {
        window.location.href = 'pre_regilog.php'; // 3スライド目の後に新規登録・ログイン選択画面に遷移
        return;
    }
    if (n < 0) { currentSlideIndex = totalSlides - 1; }
    for (let i = 0; i < totalSlides; i++) {
        slides[i].style.display = 'none';
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[currentSlideIndex].style.display = 'block';
    dots[currentSlideIndex].className += " active";
}

function nextSlide() {
    showSlides(currentSlideIndex += 1);
}

function goToSlide(n) {
    showSlides(currentSlideIndex = n - 1);
}

document.getElementById("next-button").addEventListener("click", nextSlide);

window.onload = function() {
    showSlides(currentSlideIndex);
    openTab(event, 'Email'); // デフォルトで「メールアドレスで登録」タブを開く
};

// タブ切り替え機能
function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
}

// パスワード表示の切り替え
function togglePasswordVisibility() {
    var password = document.getElementById("password");
    if (password.type === "password") {
        password.type = "text";
    } else {
        password.type = "password";
    }
}
