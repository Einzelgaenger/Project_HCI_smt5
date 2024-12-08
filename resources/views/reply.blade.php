@extends("layouts.app")

@section("title", "Reply to Comment")

@section('content')
<div class="container mx-auto p-6 text-white">
    <div class="bg-[#0B0B0B] shadow-md rounded-lg p-4">
        <h2 class="text-lg font-semibold mb-4">Replies</h2>
        
        <!-- Display the post being replied to -->
        <div class="mb-4">
            <div class="bg-gray-800 p-4 rounded">
                <div class="flex items-center mb-2">
                    <div class="bg-gray-700 rounded-full w-8 h-8 flex items-center justify-center mr-2">
                        <span class="text-white">👤</span>
                    </div>
                    <span class="font-semibold" id="postUsername"></span> • <span class="text-gray-400" id="postTime"></span>
                </div>
                <div class="comment-text text-gray-300" id="postContent"></div>
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
                <button class="px-2 py-1 rounded" onclick="formatText('bold', 'replyInput')"><img src="{{asset('TextBolder.svg')}}" alt="Bold"></button>
                <button class="px-2 py-1 rounded" onclick="formatText('italic', 'replyInput')"><img src="{{asset('TextItalic.svg')}}" alt="Italic"></button>
                <button class="px-2 py-1 rounded" onclick="formatText('underline', 'replyInput')"><img src="{{asset('TextUnderline.svg')}}" alt="Underline"></button>
            </div>
            <div class="flex justify-end">
                <button class="bg-[#84C8FF] text-black font-semibold px-6 py-2 rounded-[22px]" onclick="submitReply()">Submit Reply</button>
            </div>    
        </div>
        
    </div>

    <div id="repliesSection" class="mt-4">
        <!-- Dummy Replies Data -->
        <script>
            const getRandomLikes = () => Math.floor(Math.random() * 6); // Random likes between 0 and 5
            const getTimeAgo = (minutes) => {
                const now = new Date();
                now.setMinutes(now.getMinutes() - minutes);
                return now.toLocaleString();
            };

            const dummyPosts = {
                1: {
                    username: "AliceCyber",
                    content: "Implementing strong password in cybersecurity is very important IMO, Any Suggestions?",
                    timePosted: getTimeAgo(10), // 10 minutes ago
                    replies: [
                        { username: "BobSec", text: "I completely agree! Using a password manager can help.", likes: getRandomLikes(), timePosted: getTimeAgo(1) },
                        { username: "CharlieNet", text: "Two-factor authentication is also essential!", likes: getRandomLikes(), timePosted: getTimeAgo(2) },
                        { username: "DianaTech", text: "Don't forget about regular password updates!", likes: getRandomLikes(), timePosted: getTimeAgo(3) },
                        { username: "EveSecure", text: "Using passphrases can enhance security.", likes: getRandomLikes(), timePosted: getTimeAgo(4) }
                    ]
                },
                2: {
                    username: "FrankHacker",
                    content: "How to recognize phishing attempts?",
                    timePosted: getTimeAgo(20), // 20 minutes ago
                    replies: [
                        { username: "GraceGuard", text: "Always check the sender's email address!", likes: getRandomLikes(), timePosted: getTimeAgo(4) },
                        { username: "HeidiInfo", text: "Look for spelling errors in the email.", likes: getRandomLikes(), timePosted: getTimeAgo(3) },
                        { username: "IvanSecure", text: "Never click on links from unknown sources.", likes: getRandomLikes(), timePosted: getTimeAgo(1) }
                    ]
                },
                3: {
                    username: "JackDefender",
                    content: "Why is firewall so important in network security?",
                    timePosted: getTimeAgo(30), // 30 minutes ago
                    replies: [
                        { username: "KathyNet", text: "Firewalls are crucial for protecting internal networks.", likes: getRandomLikes(), timePosted: getTimeAgo(2) },
                        { username: "LeoCyber", text: "They can help block unauthorized access.", likes: getRandomLikes(), timePosted: getTimeAgo(1) }
                    ]
                },
                4: {
                    username: "MonaSecure",
                    content: "What is the best and simplest practices for securing personal devices?",
                    timePosted: getTimeAgo(40), // 40 minutes ago
                    replies: [
                        { username: "NinaTech", text: "Always keep your software updated!", likes: getRandomLikes(), timePosted: getTimeAgo(1) }
                    ]
                },
                5: {
                    username: "OscarCyber",
                    content: "How to combine AI and cybersecurity?",
                    timePosted: getTimeAgo(50), // 50 minutes ago
                    replies: []
                }
            };

            const urlParams = new URLSearchParams(window.location.search);
            const postId = urlParams.get('postId');
            const username = urlParams.get('username');
            const timePosted = urlParams.get('timePosted');
            const content = urlParams.get('content');

            // Display the post content and details
            document.getElementById('postContent').innerHTML = content; // Use innerHTML to preserve formatting
            document.getElementById('postUsername').innerText = username;
            document.getElementById('postTime').innerText = timePosted; // Use the same time as the post

            // Populate replies
            const replies = dummyPosts[postId].replies || [];
            replies.forEach(reply => {
                const replyDiv = document.createElement('div');
                replyDiv.className = 'border-b border-gray-600 py-2 bg-transparent'; // Set transparent background
                replyDiv.innerHTML = `
                    <div class="flex items-center mb-2">
                        <div class="bg-gray-700 rounded-full w-8 h-8 flex items-center justify-center mr-2">
                            <span class="text-white">👤</span>
                        </div>
                        <span class="font-semibold">${reply.username}</span> • <span class="text-gray-400">${reply.timePosted}</span>
                    </div>
                    <div class="reply-text text-gray-300">${reply.text}</div>
                    <div class="flex space-x-4 mt-2">
                        <button class="flex items-center text-red-500" onclick="likeComment(this)">
                            <span class="heart-icon"><img src="{{asset('HeartE.svg')}}" alt="Like"></span> <span class="like-count">${reply.likes}</span>
                        </button>
                        <button class="text-red-500" onclick="reportComment(this)"><img src="{{asset('Prohibit.svg')}}" alt="report"></button>
                    </div>
                `;
                document.getElementById('repliesSection').appendChild(replyDiv);
            });
        </script>
    </div>

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
                        <span class="heart-icon"><img src="{{asset('HeartE.svg')}}" alt="Like"></span> <span class="like-count">0</span>
                    </button>
                    <button class="text-red-500" onclick="reportComment(this)"><img src="{{asset('Prohibit.svg')}}" alt="report"></button>
                </div>
            `;
            // Insert the new reply at the top
            repliesSection.insertBefore(replyDiv, repliesSection.firstChild);
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
            heartIcon.innerHTML = '<img src="{{asset('HeartE.svg')}}" alt="Like">';
            likeCount.innerText = parseInt(likeCount.innerText) - 1;
        } else {
            heartIcon.classList.add('liked');
            heartIcon.style.color = 'red';
            heartIcon.innerHTML = '<img src="{{asset('Heart.svg')}}" alt="Like">';
            likeCount.innerText = parseInt(likeCount.innerText) + 1;
        }
    }

    function reportComment(button) {
        alert("Reply reported!");
    }
</script>
@endsection
