<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Chatting</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <link rel="icon" href="../assets/img/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css" />
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container-fluidd">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php"><img src="../assets/img/logoa.png"></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="home.php"><img src="../assets/img/icon/icon-home.png">
                            <p>Home</p>
                        </a></li>
                    <li class="active-nav"><a href="chat.php"><img src="../assets/img/icon/icon-chatting.png">
                            <p>Chat</p>
                        </a></li>
                    <li><a href="profile.php"><img src="../assets/img/icon/icon-account.png">
                            <p>Profil</p>
                        </a></li>
                    <li class="logout"><a href="#" onclick="return confirm('Apakah anda yakin ingin keluar ?')"><img
                                src="../assets/img/icon/icon-logout.png">
                            <p>Logout</p>
                        </a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4 people-list" id="people-list">
                <div class="search">
                    <input type="text" placeholder="search" />
                    <i class="fa fa-search"></i>
                </div>
                <ul class="list">
                    <li class="clearfix">
                        <div class="about">
                            <div class="name">adawqwqwqwe</div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 chat">
                <div class="chat-header clearfix">

                    <div class="chat-about">
                        <div class="chat-with">Chat with adawqwqwqwe</div>
                    </div>
                </div> <!-- end chat-header -->

                <div class="chat-history">
                    <ul>
                        <li class="clearfix">
                            <div class="message-data align-right">
                                <span class="message-data-time">10:10 AM, Today</span> &nbsp; &nbsp;
                                <span class="message-data-name">Psikolog</span> <i class="fa fa-circle me"></i>

                            </div>
                            <div class="message other-message float-right">
                                Hi Vincent, how are you? How is the project coming along?
                            </div>
                        </li>

                        <li>
                            <div class="message-data">
                                <span class="message-data-name"><i class="fa fa-circle online"></i> adawqwqwqwe</span>
                                <span class="message-data-time">10:12 AM, Today</span>
                            </div>
                            <div class="message my-message">
                                Are we meeting today? Project has been already finished and I have results to show you.
                            </div>
                        </li>

                        <li class="clearfix">
                            <div class="message-data align-right">
                                <span class="message-data-time">10:14 AM, Today</span> &nbsp; &nbsp;
                                <span class="message-data-name">Psikolog</span> <i class="fa fa-circle me"></i>

                            </div>
                            <div class="message other-message float-right">
                                Well I am not sure. The rest of the team is not here yet. Maybe in an hour or so? Have
                                you faced any problems at the last phase of the project?
                            </div>
                        </li>

                        <li>
                            <div class="message-data">
                                <span class="message-data-name"><i class="fa fa-circle online"></i> adawqwqwqwe</span>
                                <span class="message-data-time">10:20 AM, Today</span>
                            </div>
                            <div class="message my-message">
                                Actually everything was fine. I'm very excited to show this to our team.
                            </div>
                        </li>

                    </ul>

                </div> <!-- end chat-history -->

                <div class="chat-message clearfix">
                    <textarea name="message-to-send" id="message-to-send" placeholder="Type your message"
                        rows="3"></textarea>

                    <button>Send</button>

                </div> <!-- end chat-message -->
            </div>
        </div>
    </div>

    <script id="message-template" type="text/x-handlebars-template">
        <li class="clearfix">
        <li class="clearfix">
            <div class="message-data align-right">
            <span class="message-data-time" >{{time}}, Today</span> &nbsp; &nbsp;
            <span class="message-data-name" >Olia</span> <i class="fa fa-circle me"></i>
            </div>
            <div class="message other-message float-right">
            {{messageOutput}}
            </div>
        </li>
        </li>
    </script>

    <script id="message-response-template" type="text/x-handlebars-template">
        <li>
        <li>
            <div class="message-data">
            <span class="message-data-name"><i class="fa fa-circle online"></i> Vincent</span>
            <span class="message-data-time">{{time}}, Today</span>
            </div>
            <div class="message my-message">
            {{response}}
            </div>
        </li>
        </li>
    </script>
    <script>
        (function () {

            var chat = {
                messageToSend: '',
                messageResponses: [
                    'Why did the web developer leave the restaurant? Because of the table layout.',
                    'How do you comfort a JavaScript bug? You console it.',
                    'An SQL query enters a bar, approaches two tables and asks: "May I join you?"',
                    'What is the most used language in programming? Profanity.',
                    'What is the object-oriented way to become wealthy? Inheritance.',
                    'An SEO expert walks into a bar, bars, pub, tavern, public house, Irish pub, drinks, beer, alcohol'
                ],
                init: function () {
                    this.cacheDOM();
                    this.bindEvents();
                    this.render();
                },
                cacheDOM: function () {
                    this.$chatHistory = $('.chat-history');
                    this.$button = $('button');
                    this.$textarea = $('#message-to-send');
                    this.$chatHistoryList = this.$chatHistory.find('ul');
                },
                bindEvents: function () {
                    this.$button.on('click', this.addMessage.bind(this));
                    this.$textarea.on('keyup', this.addMessageEnter.bind(this));
                },
                render: function () {
                    this.scrollToBottom();
                    if (this.messageToSend.trim() !== '') {
                        var template = Handlebars.compile($("#message-template").html());
                        var context = {
                            messageOutput: this.messageToSend,
                            time: this.getCurrentTime()
                        };

                        this.$chatHistoryList.append(template(context));
                        this.scrollToBottom();
                        this.$textarea.val('');

                        // responses
                        var templateResponse = Handlebars.compile($("#message-response-template").html());
                        var contextResponse = {
                            response: this.getRandomItem(this.messageResponses),
                            time: this.getCurrentTime()
                        };

                        setTimeout(function () {
                            this.$chatHistoryList.append(templateResponse(contextResponse));
                            this.scrollToBottom();
                        }.bind(this), 1500);

                    }

                },

                addMessage: function () {
                    this.messageToSend = this.$textarea.val()
                    this.render();
                },
                addMessageEnter: function (event) {
                    // enter was pressed
                    if (event.keyCode === 13) {
                        this.addMessage();
                    }
                },
                scrollToBottom: function () {
                    this.$chatHistory.scrollTop(this.$chatHistory[0].scrollHeight);
                },
                getCurrentTime: function () {
                    return new Date().toLocaleTimeString().
                        replace(/([\d]+:[\d]{2})(:[\d]{2})(.*)/, "$1$3");
                },
                getRandomItem: function (arr) {
                    return arr[Math.floor(Math.random() * arr.length)];
                }

            };

            chat.init();

            var searchFilter = {
                options: { valueNames: ['name'] },
                init: function () {
                    var userList = new List('people-list', this.options);
                    var noItems = $('<li id="no-items-found">No items found</li>');

                    userList.on('updated', function (list) {
                        if (list.matchingItems.length === 0) {
                            $(list.list).append(noItems);
                        } else {
                            noItems.detach();
                        }
                    });
                }
            };

            searchFilter.init();

        })();  
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.7/handlebars.min.js"></script>
    <script src="../assets/js/chat.js"></script>
</body>

</html>