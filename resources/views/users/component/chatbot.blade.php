<!-- resources/views/components/chatbot.blade.php -->

<!-- Chatbot Icon -->
<style>
    @keyframes pulse {
        0% { transform: scale(1); }
        50% { transform: scale(1.1); }
        100% { transform: scale(1); }
    }

    #chatbot-icon img {
        animation: pulse 2s infinite;
        transition: transform 0.3s ease;
    }

    #chatbot-icon:hover img {
        transform: scale(1.15);
    }
</style>

<div id="chatbot-icon" style="position: fixed; bottom: 20px; right: 20px; cursor: pointer; z-index: 9999;">
    <img src="https://cdn-icons-png.flaticon.com/512/4712/4712109.png" alt="Chat" width="60">
</div>

<!-- Chatbox -->
<div id="chatbox" style="display:none; position: fixed; bottom: 90px; right: 20px; width: 300px; background: white; border: 1px solid #ccc; border-radius: 8px; padding: 10px; z-index: 9999;">
    <div style="font-weight: bold; margin-bottom: 10px;">Asisten Virtual</div>
    <div id="chat-log" style="height: 200px; overflow-y: scroll; border: 1px solid #eee; padding: 5px; font-size: 14px;"></div>
    <input type="text" id="chat-input" placeholder="Ketik pertanyaan..."
    style="width: 100%; margin-top: 10px; color: black; background-color: #f8f8f8; border: 1px solid #ccc; padding: 5px; border-radius: 4px;" />
</div>

<script>
    const chatbotIcon = document.getElementById('chatbot-icon');
    const chatbox = document.getElementById('chatbox');
    const chatLog = document.getElementById('chat-log');
    const chatInput = document.getElementById('chat-input');

    // Toggle chatbox on icon click
    chatbotIcon.addEventListener('click', () => {
        if (chatbox.style.display === 'none') {
            chatbox.style.display = 'block';
            chatInput.focus();
        } else {
            chatbox.style.display = 'none';
        }
    });

    // Close chatbox if click outside chatbox and icon
    document.addEventListener('click', (event) => {
        const isClickInsideChatbox = chatbox.contains(event.target);
        const isClickOnIcon = chatbotIcon.contains(event.target);

        if (!isClickInsideChatbox && !isClickOnIcon) {
            chatbox.style.display = 'none';
        }
    });

    chatInput.addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            const userMessage = chatInput.value.trim();
            if (!userMessage) return;

            appendMessage("Anda", userMessage);

            // Cek apakah pesan user mengandung kata kunci menghubungi admin cepat atau serupa
            const userMessageLower = userMessage.toLowerCase();
            const keywordsAdminCepat = ['menghubungi admin cepat', 'hubungi admin cepat', 'admin cepat', 'hubungi admin segera', 'menghubungi admin segera'];

            const containsKeyword = keywordsAdminCepat.some(keyword => userMessageLower.includes(keyword));

            if (containsKeyword) {
                // Kirim dua pesan otomatis berurutan
                appendMessage("Asisten", "Anda dapat ke menu Contact Us di bagian header atau Anda dapat menekan URL ini: <a href='http://127.0.0.1:8000/contact' target='_blank'>http://127.0.0.1:8000/contact</a>.");
                setTimeout(() => {
                    appendMessage("Asisten", "Jika ingin menghubungi admin segera, Anda dapat menekan WhatsApp ini dan langsung chat ke WA 081336589373: <a href='https://wa.me/6281336589373' target='_blank'>Chat WhatsApp</a>.");
                }, 1000);
                chatInput.value = '';
                return; // skip fetch karena sudah di-handle
            }

            fetch('/chatbot', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ message: userMessage })
            })
            .then(response => response.json())
            .then(data => {
                if (data.reply === '[CLEAR_CHAT]') {
                    clearChat();
                    appendMessage("Asisten", "Pesan telah dihapus.");
                } else {
                    appendMessage("Asisten", data.reply);
                }
            })
            .catch(error => {
                appendMessage("Asisten", "Maaf, terjadi kesalahan.");
                console.error(error);
            });

            chatInput.value = '';
        }
    });

    function appendMessage(sender, message) {
        const messageDiv = document.createElement('div');
        messageDiv.innerHTML = `<strong>${sender}:</strong> ${message}`;
        chatLog.appendChild(messageDiv);
        chatLog.scrollTop = chatLog.scrollHeight;
    }

    function clearChat() {
        chatLog.innerHTML = '';
    }
</script>
