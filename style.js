//送信する際の処理
let sendButton = document.getElementById('sendButton');

sendButton.addEventListener('click', (e) => {
    // ボタンがクリックされた時点で値を取得
    let username = document.getElementById('username').value.trim();
    let companyName = document.getElementById('companyName').value.trim();
    let email = document.getElementById('email').value.trim();
    let contactContent = document.getElementById('contactContent').value.trim();

    if (username === "") {
        alert('必須項目が未入力です。入力内容をご確認ください。');
        e.preventDefault(); // 送信をキャンセル
        return false;
    }
    if (companyName === "") {
        alert('必須項目が未入力です。入力内容をご確認ください。');
        e.preventDefault(); // 送信をキャンセル
        return false;
    }
    if (email === "") {
        alert('必須項目が未入力です。入力内容をご確認ください。');
        e.preventDefault(); // 送信をキャンセル
        return false;
    }
    if (contactContent === "") {
        alert('必須項目が未入力です。入力内容をご確認ください。');
        e.preventDefault(); // 送信をキャンセル
        return false;
    }

    let message = `以下の内容を本当に送信しますか？\n\n` +
        `お名前：${username}\n` +
        `会社名：${companyName}\n` +
        `メールアドレス：${email}\n` +
        `お問い合わせ内容：${contactContent}`;
    
    let isConfirmed = confirm(message);
    if (!isConfirmed) {
        e.preventDefault();
        return false;
    }
});

//footerの処理
const colors = ['blue', 'red', 'yellow', 'gray'];
let colorIndex = 0;

const footer = document.querySelector('footer');
const changeButton = document.querySelector('footer input[type="button"]')

changeButton.addEventListener('click', () => {
    footer.style.backgroundColor = colors[colorIndex];
    colorIndex = (colorIndex + 1) % colors.length;
});

