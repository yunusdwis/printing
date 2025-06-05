<!-- Chatbot Icon -->
<div id="chatbot-icon" style="position: fixed; bottom: 20px; right: 20px; cursor: pointer; z-index: 9999;">
    <img src="{{ asset('chat-icon.png') }}" alt="Chat" width="60">
</div>

<!-- Chatbox -->
<div id="chatbox" style="display:none; position: fixed; bottom: 90px; right: 20px; width: 300px; background: white; border: 1px solid #ccc; border-radius: 8px; padding: 10px; z-index: 9999;">
    <div style="font-weight: bold; margin-bottom: 10px;">Asisten Virtual</div>
    <div id="chat-log" style="height: 200px; overflow-y: scroll; border: 1px solid #eee; padding: 5px; font-size: 14px;"></div>
    <input type="text" id="chat-input" placeholder="Ketik pertanyaan..." style="width: 100%; margin-top: 10px;" />
</div>
