@extends("layouts.app")

@section("title", "Forum")

@section('content')
<div class="container mx-auto p-6 text-white">
    <div class="bg-[#0B0B0B] shadow-md rounded-lg p-4">
        <div class="mb-2">
            <div class="relative">
                <div id="commentInput" contenteditable="true" class="h-32 mt-1 block w-full border-x-0 border-t-0 border-b border-gray-600 rounded-md p-2 bg-transparent" onfocus="hidePlaceholder()" onblur="showPlaceholder()"></div>
                <div id="placeholder" class="placeholder text-gray-400 absolute left-2 top-2 pointer-events-none">Write a comment ...</div>
            </div>
        </div>
        <div class="flex justify-between">
            <div class="flex space-x-2 mb-2">
                <button class="px-2 py-1 rounded" onclick="formatText('bold', 'commentInput')"><img src="TextBolder.svg" alt="Bold"></button>
                <button class="px-2 py-1 rounded" onclick="formatText('italic', 'commentInput')"><img src="TextItalic.svg" alt="Italic"></button>
                <button class="px-2 py-1 rounded" onclick="formatText('underline', 'commentInput')"><img src="TextUnderline.svg" alt="Underline"></button>
            </div>
            <div class="flex justify-end">
                <button class="bg-[#84C8FF] text-black font-semibold px-6 py-2 rounded-[22px]" onclick="addComment()">Post</button>
            </div>    
        </div>
        
    </div>

    <div id="commentsSection" class="mt-4"></div>
</div>

<script>
    function formatText(command, inputId) {
        document.execCommand(command, false, null);
    }

    function addComment() {
        const commentInput = document.getElementById('commentInput');
        const commentText = commentInput.innerHTML.trim();

        if (commentText) {
            const commentsSection = document.getElementById('commentsSection');
            const commentDiv = createCommentDiv(commentText);
            commentsSection.appendChild(commentDiv);
            commentInput.innerHTML = ''; // Clear the input
            showPlaceholder(); // Show placeholder again
        }
    }

    function createCommentDiv(commentText) {
        const commentDiv = document.createElement('div');
        const username = "User123";
        const now = new Date();
        const timePosted = now.getTime(); // Store the time the comment is posted

        commentDiv.className = 'comment border-b border-gray-600 py-4 bg-transparent'; // Set transparent background
        commentDiv.innerHTML = `
            <div class="flex items-center mb-2">
                <div class="bg-gray-700 rounded-full w-8 h-8 flex items-center justify-center mr-2">
                    <span class="text-white">👤</span>
                </div>
                <span class="font-semibold">${username}</span> • <span class="text-gray-400" id="time-${timePosted}">Just now</span>
            </div>
            <div class="comment-text">${commentText}</div>
            <div class="flex space-x-4 mt-2">
                <button class="flex items-center text-red-500" onclick="likeComment(this)">
                    <span class="heart-icon"><img src="HeartE.svg" alt="Like"></span> <span class="like-count">0</span>
                </button>
                <button class="flex items-center text-blue-500" onclick="replyComment('${commentText}', '${username}')">
                    <span class="reply-count text-gray-400 mt-1"><img src="ChatCircle.svg" alt="reply"></span> <span class="reply-count-number">0</span>
                </button>
                <button class="text-red-500" onclick="reportComment(this)"><img src="Prohibit.svg" alt="report"></button>
            </div>
            <div class="reply-section mt-2" style="display: none;"></div>
        `;
        return commentDiv;
    }

    function updateCommentTime(timePosted) {
        const now = new Date();
        const timeDiff = Math.floor((now.getTime() - timePosted) / 60000); // Difference in minutes
        const timeElement = document.getElementById(`time-${timePosted}`);

        if (timeDiff < 1) {
            timeElement.innerText = "Just now";
        } else {
            timeElement.innerText = `${timeDiff} minute${timeDiff > 1 ? 's' : ''} ago`;
        }
    }

    function hidePlaceholder() {
        document.getElementById('placeholder').style.display = 'none';
    }

    function showPlaceholder() {
        const commentInput = document.getElementById('commentInput');
        if (!commentInput.innerHTML.trim()) {
            document.getElementById('placeholder').style.display = 'block';
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

    function replyComment(commentText, username) {
        // Redirect to reply page with the comment text and username as parameters
        window.location.href = `/reply?commentText=${encodeURIComponent(commentText)}&username=${encodeURIComponent(username)}`;
    }

    function reportComment(button) {
        alert("Comment reported!");
    }
</script>
@endsection
