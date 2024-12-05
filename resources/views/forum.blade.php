@extends("layouts.app")

@section("title", "Forum")

@section('content')
<div class="container mx-auto p-6 text-white">
    <div class="bg-[#0B0B0B] shadow-md rounded-lg p-4">
        {{-- <h2 class="text-lg font-semibold mb-4">Comment Section</h2> --}}
        <div class="mb-2">
            <div class="relative">
                <div id="commentInput" contenteditable="true" class="h-32 mt-1 block w-full border-x-0 border-t-0 border-b border-gray-600 rounded-md p-2 bg-transparent" onfocus="hidePlaceholder()" onblur="showPlaceholder()"></div>
                <div id="placeholder" class="placeholder text-gray-400 absolute left-2 top-2 pointer-events-none">Write a comment ...</div>
            </div>
        </div>
        <div class="flex justify-between">
            <div class="flex space-x-2 mb-2">
                <button class=" px-2 py-1 rounded" onclick="formatText('bold', 'commentInput')"><img src="TextBolder.svg" alt="Bold"></button>
                <button class=" px-2 py-1 rounded" onclick="formatText('italic', 'commentInput')"><img src="TextItalic.svg" alt="Italic"></button>
                <button class=" px-2 py-1 rounded" onclick="formatText('underline', 'commentInput')"><img src="TextUnderline.svg" alt="Underline"></button> <!-- Underline button -->
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
            const commentDiv = document.createElement('div');
            
            const username = "User123"
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

                    <button class="flex items-center text-blue-500" onclick="replyComment(this)">
                        <span class="reply-count text-gray-400 mt-1"> <img src="ChatCircle.svg" alt="reply"></span> <span class="reply-count-number">0</span>
                    </button>
                    <button class="text-red-500" onclick="reportComment(this)"><img src="Prohibit.svg" alt="report"></button>
                </div>
                <div class="reply-section mt-2" style="display: none;"></div>
             
            `;
            commentsSection.appendChild(commentDiv);
            commentInput.innerHTML = ''; // Clear the input
            showPlaceholder(); // Show placeholder again

            // Update the time display every minute
            setInterval(() => {
                updateCommentTime(timePosted);
            }, 60000); // Update every minute
        }
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
            heartIcon.innerHTML = '<img src="HeartE.svg" alt="Like">'
            likeCount.innerText = parseInt(likeCount.innerText) - 1;
        } else {
            heartIcon.classList.add('liked');
            heartIcon.style.color = 'red';
            heartIcon.innerHTML = '<img src="Heart.svg" alt="Like">'
            likeCount.innerText = parseInt(likeCount.innerText) + 1;
        }
    }

    function replyComment(button) {
        const replySection = button.closest('.comment').querySelector('.reply-section');
        const replyCountNumber = button.closest('.comment').querySelector('.reply-count-number');

        if (replySection.style.display === "block") {
            replySection.style.display = "none"; // Hide if already visible
            return;
        }
        replySection.style.display = "block"; // Show reply section

        // Check if reply input already exists
        if (replySection.querySelector('.reply-input') === null) {
            const replyInput = document.createElement('div');
            replyInput.contentEditable = true;
            replyInput.className = 'reply-input mt-2 block w-full border border-gray-600 rounded-md p-2 bg-transparent'; // Set transparent background

            const replyAction = document.createElement('div');
            replyAction.className = 'flex justify-between mt-2';

            const replyFormatButtons = document.createElement('div');
            replyFormatButtons.className = 'flex space-x-2 mb-2';
            replyFormatButtons.innerHTML = `
                <button class=" px-2 py-1 rounded" onclick="formatText('bold', 'commentInput')"><img src="TextBolder.svg" alt="Bold"></button>
                <button class=" px-2 py-1 rounded" onclick="formatText('italic', 'replyInput')"><img src="TextItalic.svg" alt="Italic"></button>
                <button class=" px-2 py-1 rounded" onclick="formatText('underline', 'replyInput')"><img src="TextUnderline.svg" alt="Underline"></button> <!-- Underline button -->
            `;

            const replySubmit = document.createElement('button');
            replySubmit.className = 'bg-[#84C8FF] text-black font-semibold px-6 py-2 rounded-[22px]';
            replySubmit.innerText = 'Submit Reply';
            replySubmit.onclick = function() {
                const replyText = replyInput.innerHTML.trim();
                if (replyText) {
                    const replyDiv = document.createElement('div');
                    replyDiv.className = 'border-b border-gray-600 py-2 bg-transparent'; // Set transparent background
                    replyDiv.innerHTML = `<div>${replyText}</div>`;
                    replySection.appendChild(replyDiv);
                    replyInput.innerHTML = ''; // Clear the input
                    replySection.style.display = "none"; // Hide reply section after submitting
                    replyCountNumber.innerText = parseInt(replyCountNumber.innerText) + 1; // Update reply count
                }
            };
            replyAction.appendChild(replyFormatButtons);
            replyAction.appendChild(replySubmit);

            replySection.appendChild(replyInput);
            replySection.appendChild(replyAction);
        }
    }

    function reportComment(button) {
        alert("Comment reported!");
    }

    // Dropdown functionality
    document.querySelectorAll('.relative').forEach(dropdown => {
        dropdown.addEventListener('mouseenter', () => {
            dropdown.querySelector('.absolute').classList.remove('hidden');
        });
        dropdown.addEventListener('mouseleave', () => {
            dropdown.querySelector('.absolute').classList.add('hidden');
        });
    });

    // Keep dropdown open when hovering over it
    document.querySelectorAll('.absolute').forEach(dropdown => {
        dropdown.addEventListener('mouseenter', () => {
            dropdown.classList.remove('hidden');
        });
        dropdown.addEventListener('mouseleave', () => {
            dropdown.classList.add('hidden');
        });
    });
</script>
@endsection
