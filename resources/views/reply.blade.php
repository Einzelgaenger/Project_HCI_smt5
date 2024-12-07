@extends("layouts.app")

@section("title", "Reply to Comment")

@section('content')
<div class="container mx-auto p-6 text-white">
    <div class="bg-[#0B0B0B] shadow-md rounded-lg p-4">
        <h2 class="text-lg font-semibold mb-4">Reply to Comment</h2>
        
        <!-- Display the comment being replied to in the desired format -->
        <div class="mb-4">
            <div class="bg-gray-800 p-4 rounded">
                <div class="flex items-center mb-2">
                    <div class="bg-gray-700 rounded-full w-8 h-8 flex items-center justify-center mr-2">
                        <span class="text-white">👤</span>
                    </div>
                    <span class="font-semibold">{{ request('username') }}</span> • <span class="text-gray-400">Just now</span>
                </div>
                <div class="comment-text text-gray-300">{{ request('commentText') }}</div>
            </div>
        </div>

        <div class="mb-2">
            <div class="relative">
                <div id="replyInput" contenteditable="true" class="h-32 mt-1 block w-full border-x-0 border-t-0 border-b border-gray-600 rounded-md p-2 bg-transparent" onfocus="hideReplyPlaceholder()" onblur="showReplyPlaceholder()"></div>
                <div id="replyPlaceholder" class="placeholder text-gray-400 absolute left-2 top-2 pointer-events-none">Write your reply ...</div>
            </div>
        </div>
        <div class="flex justify-between">
            <div class="flex space-x-2 mb-2">
                <button class="px-2 py-1 rounded" onclick="formatText('bold', 'replyInput')"><img src="TextBolder.svg" alt="Bold"></button>
                <button class="px-2 py-1 rounded" onclick="formatText('italic', 'replyInput')"><img src="TextItalic.svg" alt="Italic"></button>
                <button class="px-2 py-1 rounded" onclick="formatText('underline', 'replyInput')"><img src="TextUnderline.svg" alt="Underline"></button>
            </div>
            <div class="flex justify-end">
                <button class="bg-[#84C8FF] text-black font-semibold px-6 py-2 rounded-[22px]" onclick="submitReply()">Submit Reply</button>
            </div>    
        </div>
        
    </div>

    <div id="repliesSection" class="mt-4"></div>

    <!-- Back Button -->
    <div class="mt-4">
        <button class="bg-gray-600 text-white px-4 py-2 rounded" onclick="window.history.back()">Back to Forum</button>
    </div>
</div>

<script>
    function formatText(command, inputId) {
        document.execCommand(command, false, null);
    }

    function submitReply() {
        const replyInput = document.getElementById('replyInput');
        const replyText = replyInput.innerHTML.trim();

        if (replyText) {
            const repliesSection = document.getElementById('repliesSection');
            const replyDiv = document.createElement('div');
            replyDiv.className = 'border-b border-gray-600 py-2 bg-transparent'; // Set transparent background
            replyDiv.innerHTML = `
                <div class="flex items-center mb-2">
                    <div class="bg-gray-700 rounded-full w-8 h-8 flex items-center justify-center mr-2">
                        <span class="text-white">👤</span>
                    </div>
                    <span class="font-semibold">User123</span> • <span class="text-gray-400">Just now</span>
                </div>
                <div class="reply-text text-gray-300">${replyText}</div>
                <div class="flex space-x-4 mt-2">
                    <button class="flex items-center text-red-500" onclick="likeComment(this)">
                        <span class="heart-icon"><img src="HeartE.svg" alt="Like"></span> <span class="like-count">0</span>
                    </button>
                    <button class="text-red-500" onclick="reportComment(this)"><img src="Prohibit.svg" alt="report"></button>
                </div>
            `;
            repliesSection.appendChild(replyDiv);
            replyInput.innerHTML = ''; // Clear the input
            showReplyPlaceholder(); // Show placeholder again
        }
    }

    function hideReplyPlaceholder() {
        document.getElementById('replyPlaceholder').style.display = 'none';
    }

    function showReplyPlaceholder() {
        const replyInput = document.getElementById('replyInput');
        if (!replyInput.innerHTML.trim()) {
            document.getElementById('replyPlaceholder').style.display = 'block';
        }
    }

    function likeComment(button) {
        const heartIcon = button.querySelector('.heart-icon');
        const likeCount = button.querySelector('.like-count');
        if (heartIcon.classList.contains('liked')) {
            heartIcon.classList.remove('liked');
            heartIcon.style.color = 'red';
            heartIcon.innerHTML = '<img src="HeartE.svg" alt="Like">';
            likeCount.innerText = parseInt(likeCount.innerText) - 1;
        } else {
            heartIcon.classList.add('liked');
            heartIcon.style.color = 'red';
            heartIcon.innerHTML = '<img src="Heart.svg" alt="Like">';
            likeCount.innerText = parseInt(likeCount.innerText) + 1;
        }
    }

    function reportComment(button) {
        alert("Reply reported!");
    }
</script>
@endsection
