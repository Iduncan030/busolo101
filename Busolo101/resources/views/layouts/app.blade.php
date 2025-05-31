<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - Ian Duncan Portfolio</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        body {
            background: #f5f7fb;
            color: #222;
            font-family: 'Inter', 'Helvetica Neue', Arial, sans-serif;
        }
        .navbar {
            background: #fff;
            box-shadow: 0 2px 12px rgba(50,93,255,0.07);
        }
        .ai-search-bar {
            max-width: 520px;
            margin: 2rem auto 0 auto;
            display: flex;
            align-items: center;
            background: #fff;
            border-radius: 14px;
            box-shadow: 0 2px 16px rgba(50,93,255,0.08);
            padding: 0.55rem 1.1rem;
            border: 1.9px solid #e6e9f6;
        }
        .ai-search-bar input {
            border: none;
            flex: 1;
            padding: 0.7rem 1rem;
            font-size: 1.1rem;
            outline: none;
            background: transparent;
            color: #232e4d;
        }
        .ai-search-bar button {
            border: none;
            background: #325dff;
            color: #fff;
            border-radius: 8px;
            padding: 0.5rem 1.2rem;
            font-weight: bold;
            margin-left: 0.5rem;
            cursor: pointer;
            transition: background 0.2s;
            box-shadow: 0 1px 8px rgba(50,93,255,0.10);
        }
        .ai-search-bar button:hover {
            background: #1e36a8;
        }
        .ai-chat-fab {
            position: fixed;
            bottom: 24px;
            right: 24px;
            z-index: 2000;
        }
        .ai-chat-fab-btn {
            background: #25d366;
            border: none;
            border-radius: 50%;
            width: 62px;
            height: 62px;
            color: #fff;
            font-size: 2.3rem;
            box-shadow: 0 6px 24px rgba(40,180,90,0.12);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.2s;
            position: relative;
        }
        .ai-chat-fab-btn:hover, .ai-chat-whatsapp:hover {
            background: #128c7e;
            color: #fff;
        }
        .ai-chat-popup {
            display: none;
            position: fixed;
            bottom: 90px;
            right: 30px;
            width: 370px;
            max-width: 95vw;
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 32px rgba(24,60,116,0.16);
            z-index: 2001;
            overflow: hidden;
        }
        .ai-chat-popup.active {
            display: block;
            animation: popupIn .4s;
        }
        @keyframes popupIn {
            from { opacity: 0; transform: translateY(35px);}
            to { opacity: 1; transform: translateY(0);}
        }
        .ai-chat-header {
            background: linear-gradient(90deg, #325dff 65%, #25d366 100%);
            color: #fff;
            padding: 1rem;
            font-weight: 700;
            letter-spacing: 1px;
            text-align: left;
        }
        .ai-chat-content {
            padding: 1rem;
            height: 270px;
            overflow-y: auto;
            background: #f5f7fb;
            font-size: 1rem;
        }
        .ai-msg-bot, .ai-msg-user {
            margin-bottom: 1rem;
            border-radius: 12px;
            padding: 0.7rem 1rem;
            max-width: 85%;
        }
        .ai-msg-bot {
            background: #eef2fe;
            color: #3456e0;
            margin-right: auto;
        }
        .ai-msg-user {
            background: #25d366;
            color: #fff;
            margin-left: auto;
            text-align: right;
        }
        .ai-chat-input-wrap {
            display: flex;
            border-top: 1px solid #eaeaea;
            background: #fff;
            padding: 0.7rem;
        }
        .ai-chat-input-wrap input {
            flex: 1;
            border: none;
            outline: none;
            font-size: 1rem;
            padding: 0.5rem;
            background: transparent;
        }
        .ai-chat-input-wrap button {
            background: #325dff;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 0.4rem 1.1rem;
            font-weight: 600;
            margin-left: 0.4rem;
            cursor: pointer;
            transition: background 0.2s;
        }
        .ai-chat-input-wrap button:hover {
            background: #1e36a8;
        }
        .ai-chat-whatsapp {
            display: block;
            text-align: center;
            margin: 0.4rem 0 0.2rem 0;
            color: #25d366;
            font-weight: bold;
            font-size: 1.03rem;
            background: #f8fdfb;
            border-radius: 10px;
            padding: 0.25rem 0.3rem;
            transition: background 0.2s, color 0.2s;
        }
        .ai-chat-whatsapp i {
            margin-right: 4px;
        }
        @media(max-width: 600px) {
            .ai-chat-popup { width: 98vw; right: 1vw;}
            .ai-search-bar { max-width: 97vw;}
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('home') }}">Ian Duncan</a>
        <div>
            <a href="{{ route('about') }}" class="nav-link d-inline">About</a>
            <a href="{{ route('portfolio') }}" class="nav-link d-inline">Portfolio</a>
            <a href="{{ route('services') }}" class="nav-link d-inline">Services</a>
            <a href="{{ route('contact') }}" class="nav-link d-inline">Contact</a>
        </div>
    </div>
</nav>

<!-- AI Search Bar (Site-wide) -->
<form class="ai-search-bar mt-3 mb-2" id="ai-search-bar" onsubmit="return aiSiteSearch(event)">
    <i class="fas fa-magnifying-glass" style="color:#8ea0e1;font-size:1.3rem;margin-right:0.75rem;"></i>
    <input type="text" placeholder="Ask anything or search the site with AI..." id="ai-search-input" aria-label="AI Search">
    <button type="submit"><i class="fas fa-arrow-right"></i></button>
</form>

<main>
    @yield('content')
</main>

<!-- AI Chat Assistant Floating Button -->
<div class="ai-chat-fab">
    <button class="ai-chat-fab-btn" id="aiChatFabBtn" aria-label="AI Chat Assistant">
        <i class="fas fa-robot"></i>
    </button>
</div>
<div class="ai-chat-popup" id="aiChatPopup">
    <div class="ai-chat-header">
        <i class="fas fa-robot me-2"></i>AI Assistant
    </div>
    <div class="ai-chat-content" id="aiChatContent">
        <div class="ai-msg-bot">
            Hi! 👋 I'm your AI assistant. How can I help you today?<br>
            You can ask me anything about my services, portfolio, or book a consultation.<br>
            <br>
            Want to chat on WhatsApp? <a href="https://wa.me/254797122664" style="color:#25d366;font-weight:500;" target="_blank">+254 797122664</a>
        </div>
    </div>
    <form class="ai-chat-input-wrap" id="aiChatForm" onsubmit="return aiChatSend(event)">
        <input type="text" id="aiChatInput" placeholder="Type your message..." autocomplete="off">
        <button type="submit"><i class="fas fa-paper-plane"></i></button>
    </form>
    <a href="https://wa.me/254797122664" target="_blank" class="ai-chat-whatsapp">
        <i class="fab fa-whatsapp"></i> Chat on WhatsApp: +254 797122664
    </a>
</div>

<footer class="bg-white text-secondary mt-5 p-4 text-center" style="font-size:0.98rem;">
    &copy; {{ date('Y') }} Ian Duncan. All rights reserved.
</footer>

<!-- Minimal AI logic for demo (replace with real AI backend for production) -->
<script>
    // AI search bar logic (demo)
    function aiSiteSearch(e) {
        e.preventDefault();
        var input = document.getElementById('ai-search-input').value.trim();
        if (!input) return false;
        alert('AI Search (demo): "' + input + '"\n\nThis will soon be powered by an AI backend for instant answers, recommendations, and site search!');
        return false;
    }
    // AI chat popup logic
    const fabBtn = document.getElementById('aiChatFabBtn');
    const chatPopup = document.getElementById('aiChatPopup');
    const chatContent = document.getElementById('aiChatContent');
    const chatForm = document.getElementById('aiChatForm');
    const chatInput = document.getElementById('aiChatInput');
    fabBtn.addEventListener('click', () => {
        chatPopup.classList.toggle('active');
        if (chatPopup.classList.contains('active')) chatInput.focus();
    });
    chatForm.addEventListener('submit', aiChatSend);
    function aiChatSend(e) {
        e.preventDefault();
        const msg = chatInput.value.trim();
        if (!msg) return false;
        chatContent.innerHTML += `<div class="ai-msg-user">${escapeHtml(msg)}</div>`;
        setTimeout(() => {
            chatContent.innerHTML += `<div class="ai-msg-bot">${getAIDemoResponse(msg)}</div>`;
            chatContent.scrollTop = chatContent.scrollHeight;
        }, 650);
        chatInput.value = '';
        chatContent.scrollTop = chatContent.scrollHeight;
        return false;
    }
    function escapeHtml(text) {
        return text.replace(/[&<>"'\/]/g, function (s) {
            return ({
                "&": "&amp;",
                "<": "&lt;",
                ">": "&gt;",
                '"': "&quot;",
                "'": "&#39;",
                "/": "&#47;"
            })[s];
        });
    }
    function getAIDemoResponse(msg) {
        // Demo logic; replace with real AI backend response
        msg = msg.toLowerCase();
        if (msg.includes('contact') || msg.includes('whatsapp')) {
            return `You can reach me on WhatsApp at <a href="https://wa.me/254797122664" style="color:#25d366;" target="_blank">+254 797122664</a> or email <a href="mailto:imckenzie025@gmail.com">imckenzie025@gmail.com</a>.`;
        }
        if (msg.includes('portfolio') || msg.includes('project')) {
            return `You can view my portfolio <a href="{{ route('portfolio') }}">here</a>. Let me know if you want details about any specific project!`;
        }
        if (msg.includes('services') || msg.includes('offer')) {
            return `I offer web development, UI/UX design, consultation, and digital strategy. See my <a href="{{ route('services') }}">services page</a> for more info.`;
        }
        if (msg.includes('book') || msg.includes('consult')) {
            return `To book a consultation, WhatsApp me at <a href="https://wa.me/254797122664" style="color:#25d366;" target="_blank">+254 797122664</a> or use <a href="{{ route('contact') }}">my contact page</a>.`;
        }
        return `Thank you for your message! I'll get back to you as soon as possible. For urgent queries, contact me on WhatsApp: <a href="https://wa.me/254797122664" style="color:#25d366;" target="_blank">+254 797122664</a>.`;
    }
    // Close chat popup when clicking outside
    document.addEventListener('click', function(event) {
        if (!chatPopup.contains(event.target) && !fabBtn.contains(event.target)) {
            chatPopup.classList.remove('active');
        }
    });
</script>
</body>
</html>