@extends("layouts.app")

@section("title", "Forum")

@section('content')
<div class="container mx-auto p-6 text-white">
    <form action="{{route('storeForum')}}" method="POST">
        @csrf
        <div class="bg-[#0B0B0B] shadow-md rounded-lg p-4">
            <div class="mb-2">
                <div class="relative">
                    <input name="content" type="text" id="commentInput" placeholder="Write a comment ..."  class="placeholder:text-xl h-32 mt-1 block w-full border-x-0 border-t-0 border-b border-gray-600 rounded-md p-2 bg-transparent" onfocus="hidePlaceholder()" onblur="showPlaceholder()">
                </div>
            </div>
            <div class="flex justify-between">
                <div class="flex justify-end">
                    <button class="bg-[#84C8FF] text-black font-semibold px-6 py-2 rounded-[22px]" type="submit" onclick="addComment()">Post</button>
                </div>    
            </div>
        </div>
    </form>

    @foreach ($forums as $item)
    <div id="commentsSection" class="mt-4">
        <div class="flex items-center mb-2">
            <div class="bg-gray-700 rounded-full w-8 h-8 flex items-center justify-center mr-2">
                <span class="text-white">👤</span>
            </div>
            <span class="font-semibold">{{$item->user->username}} </span> • <span class="text-gray-400"> {{$item->created_at->translatedFormat('m/d/Y, g:i A', '12/9/2024, 9:59 AM')}} </span>
        </div>
        <div class="comment-text">{{$item->content}}</div>
        <div class="flex space-x-4 mt-2">
            <button class="flex items-center text-blue-500" onclick="location.href = '{{route('forum.show', $item->id)}}'">
                <span class="reply-count text-gray-400 mt-1"><img src="ChatCircle.svg" alt="reply"></span> <span class="reply-count-number">12</span>
            </button>
            <button class="text-red-500" onclick="reportComment(this)"><img src="Prohibit.svg" alt="report"></button>
        </div>
    </div>
    @endforeach
    

    {{-- <div id="commentsSection" class="mt-4">
        <!-- Dummy Data for Forum Posts -->
        <script>
            const getRandomLikes = () => Math.floor(Math.random() * 6); // Random likes between 0 and 5
            const getTimeAgo = (minutes) => {
                const now = new Date();
                now.setMinutes(now.getMinutes() - minutes);
                return now.toLocaleString();
            };

            const dummyPosts = [
                {
                    id: 1,
                    username: "AliceCyber",
                    content: "Implementing strong password in cybersecurity is very important IMO, Any Suggestions?",
                    likes: getRandomLikes(),
                    timePosted: getTimeAgo(10), // 10 minutes ago
                    replies: [
                        { username: "BobSec", text: "I completely agree! Using a password manager can help.", likes: getRandomLikes(), timePosted: getTimeAgo(5) },
                        { username: "CharlieNet", text: "Two-factor authentication is also essential!", likes: getRandomLikes(), timePosted: getTimeAgo(3) },
                        { username: "DianaTech", text: "Don't forget about regular password updates!", likes: getRandomLikes(), timePosted: getTimeAgo(2) },
                        { username: "EveSecure", text: "Using passphrases can enhance security.", likes: getRandomLikes(), timePosted: getTimeAgo(1) }
                    ]
                },
                {
                    id: 2,
                    username: "FrankHacker",
                    content: "How to recognize phishing attempts?",
                    likes: getRandomLikes(),
                    timePosted: getTimeAgo(20), // 20 minutes ago
                    replies: [
                        { username: "GraceGuard", text: "Always check the sender's email address!", likes: getRandomLikes(), timePosted: getTimeAgo(4) },
                        { username: "HeidiInfo", text: "Look for spelling errors in the email.", likes: getRandomLikes(), timePosted: getTimeAgo(3) },
                        { username: "IvanSecure", text: "Never click on links from unknown sources.", likes: getRandomLikes(), timePosted: getTimeAgo(1) }
                    ]
                },
                {
                    id: 3,
                    username: "JackDefender",
                    content: "Why is firewall so important in network security?",
                    likes: getRandomLikes(),
                    timePosted: getTimeAgo(30), // 30 minutes ago
                    replies: [
                        { username: "KathyNet", text: "Firewalls are crucial for protecting internal networks.", likes: getRandomLikes(), timePosted: getTimeAgo(2) },
                        { username: "LeoCyber", text: "They can help block unauthorized access.", likes: getRandomLikes(), timePosted: getTimeAgo(1) }
                    ]
                },
                {
                    id: 4,
                    username: "MonaSecure",
                    content: "What is the best and simplest practices for securing personal devices?",
                    likes: getRandomLikes(),
                    timePosted: getTimeAgo(40), // 40 minutes ago
                    replies: [
                        { username: "NinaTech", text: "Always keep your software updated!", likes: getRandomLikes(), timePosted: getTimeAgo(1) }
                    ]
                },
                {
                    id: 5,
                    username: "OscarCyber",
                    content: "How to combine AI and cybersecurity?",
                    likes: getRandomLikes(),
                    timePosted: getTimeAgo(50), // 50 minutes ago
                    replies: []
                }
            ];

            // Function to create comment divs
            function createCommentDiv(post) {
                const commentDiv = document.createElement('div');
                const now = new Date();
                const timePosted = now.getTime(); // Store the time the comment is posted

                commentDiv.className = 'comment border-b border-gray-600 py-4 bg-transparent'; // Set transparent background
                commentDiv.innerHTML = `
                    <div class="flex items-center mb-2">
                        <div class="bg-gray-700 rounded-full w-8 h-8 flex items-center justify-center mr-2">
                            <span class="text-white">👤</span>
                        </div>
                        <span class="font-semibold">${post.username}</span> • <span class="text-gray-400">${post.timePosted}</span>
                    </div>
                    <div class="comment-text">${post.content}</div>
                    <div class="flex space-x-4 mt-2">
                        <button class="flex items-center text-red-500" onclick="likeComment(this)">
                            <span class="heart-icon"><img src="HeartE.svg" alt="Like"></span> <span class="like-count">${post.likes}</span>
                        </button>
                        <button class="flex items-center text-blue-500" onclick="replyComment(${post.id}, '${post.username}', '${post.timePosted}', '${post.content}')">
                            <span class="reply-count text-gray-400 mt-1"><img src="ChatCircle.svg" alt="reply"></span> <span class="reply-count-number">${post.replies.length}</span>
                        </button>
                        <button class="text-red-500" onclick="reportComment(this)"><img src="Prohibit.svg" alt="report"></button>
                    </div>
                `;
                return commentDiv;
            }

            // Function to add a new comment
            function addComment() {
                const commentInput = document.getElementById('commentInput');
                const commentText = commentInput.innerHTML.trim();
                const username = "User123"; // Set a default username for new posts
                const timePosted = new Date().toLocaleString(); // Get the current time

                if (commentText) {
                    const commentsSection = document.getElementById('commentsSection');
                    const newPost = {
                        username: username,
                        content: commentText,
                        likes: 0, // Initialize likes to 0
                        timePosted: timePosted,
                        replies: [] // No replies for new posts
                    };
                    const commentDiv = createCommentDiv(newPost);
                    // Insert the new post at the top
                    commentsSection.insertBefore(commentDiv, commentsSection.firstChild);
                    commentInput.innerHTML = ''; // Clear the input
                    showPlaceholder(); // Show placeholder again
                }
            }

            // Populate the comments section with dummy data
            const commentsSection = document.getElementById('commentsSection');
            dummyPosts.forEach(post => {
                const commentDiv = createCommentDiv(post);
                commentsSection.appendChild(commentDiv);
            });

            function replyComment(postId, username, timePosted, content) {
                // Redirect to reply page with the post ID as a parameter
                window.location.href = `/reply?postId=${postId}&username=${encodeURIComponent(username)}&timePosted=${encodeURIComponent(timePosted)}&content=${encodeURIComponent(content)}`;
            }
        </script>
    </div>
</div>

<script>

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
        alert("Comment reported!");
    }
</script> --}}
@endsection
