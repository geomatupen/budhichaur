
<style>

        /* The Modal (background) */
    .modal {
        display: none; /* Hidden by default */
        position: fixed; /* Stay in place */
        padding-top: 100px; /* Location of the box */
        left: 0;
        top: 0;
        width: 100%; /* Full width */
        height: 100%; /* Full height */
        overflow: auto; /* Enable scroll if needed */
        background-color: rgb(0,0,0); /* Fallback color */
        background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;

    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }



    #login { display: none; }

    .reviews {
        color: #555;
        font-size: 16px;
        font-weight: bold;
        margin: 10px auto 20px;
    }

    .media .media-object { max-width: 120px; }
    .media-body { position: relative; }
    .media-date {
        position: absolute;
        right: 25px;
        top: 25px;
    }
    .media-date li { padding: 0; }
    .media-date li:first-child:before { content: ''; }
    .media-date li:before {
        content: '.';
        margin-left: -2px;
        margin-right: 2px;
    }
    .media-comment { margin-bottom: 20px; }
    .media-replied { margin: 0 0 20px 50px; }
    .media-replied .media-heading { padding-left: 6px; }

    .btn-circle {
        font-weight: bold;
        font-size: 12px;
        padding: 6px 15px;
        border-radius: 20px;
    }
    .btn-circle span { padding-right: 6px; }

    .tab-content {
        border: 1px solid #ddd;
        border-top: 0;
        border-bottom-right-radius: 4px;
        border-bottom-left-radius: 4px;
    }

    input[type="file"]{
        z-index: 999;
        line-height: 0;
        font-size: 0;
        position: absolute;
        opacity: 0;
        filter: alpha(opacity = 0);-ms-filter: "alpha(opacity=0)";
        margin: 0;
        padding:0;
        left:0;
    }

        .modal-head{
            padding-left: 310px;
            font-size: 20px;
            font-weight: bold;
            color: #369;
            padding-top: 10px;
        }

    .li-modal{
        padding: 0px;
    }

    .li-modal:hover{
        border-bottom: hidden;
    }

    .modal-tabs{
        font-size: 14px;
        color:#444444;
    }

    .modal-caption{
        padding-top: 5px;
        font-size: 12px;

    }

</style>
<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>

        <div class="row">
            <div class="col-md-3 blog-panel">
                <a href="#" >
                    <img src="images/1.jpg" alt="image" class="thumbnail">
                </a>
                <p class="modal-caption" align="center">
                    <i class="fa fa-user" aria-hidden="true"></i> Category: <a href="#"> road</a><span style="padding-left: 3px; padding-right: 3px;">|</span>
               <i class="icon-calendar" aria-hidden="true"></i> Status: <a href="#"> problem</a>
                </p>
            </div>
            <div class="modal-head"><p>पानिको समस्या</p></div>
            <div class="fancy col-md-9 comments">

                <div class="comment-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="li-modal"><a class="li-modal" href="#comments-logout" role="tab" data-toggle="tab"><p class="modal-tabs text-capitalize"><b>Comments</b></p></a></li>
                        <li class="li-modal"><a class="li-modal" href="#add-comment" role="tab" data-toggle="tab"><p class="modal-tabs text-capitalize"><b>Add comment</b></p></a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="comments-logout">
                            <ul class="media-list">
                                <li class="media">
                                    <a class="pull-left" href="#">
                                        <img class="media-object img-circle" src="https://s3.amazonaws.com/uifaces/faces/twitter/dancounsell/128.jpg" alt="profile">
                                    </a>
                                    <div class="media-body">
                                        <div class="well well-lg">
                                            <h5 class="media-heading text-uppercase reviews">Ram bahadur </h5>
                                            <ul class="media-date text-uppercase reviews list-inline">
                                                <li style="font-size: 12px;">2 hours ago</li>
                                            </ul>
                                            <p class="media-comment">
                                                My name is ram bahadur and i have road problems in my area at baneshwor.
                                            </p>
                                            <a class="btn btn-primary btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                            <a class="btn btn-danger btn-circle text-uppercase" data-toggle="collapse" href="#replyOne"><span class="glyphicon glyphicon-comment"></span> 1 comment</a>
                                        </div>
                                    </div>
                                    <div class="collapse" id="replyOne">
                                        <ul class="media-list">
                                            <li class="media media-replied" id="replied">
                                                <a class="pull-left" href="#">
                                                    <img class="media-object img-circle" src="https://pbs.twimg.com/profile_images/442656111636668417/Q_9oP8iZ.jpeg" alt="profile">
                                                </a>
                                                <div class="media-body">
                                                    <div class="well well-lg">
                                                        <h4 class="media-heading text-uppercase reviews"><span class="glyphicon glyphicon-share-alt"></span> Mary</h4></h4>
                                                        <ul class="media-date text-uppercase reviews list-inline">
                                                            <li class="dd">22</li>
                                                            <li class="mm">09</li>
                                                            <li class="aaaa">2014</li>
                                                        </ul>
                                                        <p class="media-comment">
                                                            Thank you Guys!
                                                        </p>
                                                        <a class="btn btn-primary btn-circle text-uppercase" href="#" id="reply"><span class="glyphicon glyphicon-share-alt"></span> Reply</a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="media-body">
                                    </div>
                                    <div class="collapse" id="replyTwo">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="add-comment">
                            <form action="#" method="post" class="form-horizontal" id="commentForm" role="form">
                                <div class="form-group">
                                    <label for="email" class="col-sm-2 control-label">Comment</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" name="addComment" id="addComment" rows="5"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button class="btn btn-success btn-circle text-uppercase" type="submit" id="submitComment"><span class="glyphicon glyphicon-send"></span> Summit comment</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1" id="login">
                <div class="comment-tabs">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#comments-login" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Comments</h4></a></li>
                        <li><a href="#add-comment-disabled" role="tab" data-toggle="tab"><h4 class="reviews text-capitalize">Add comment</h4></a></li>
                    </ul>
                </div>

            </div>
        </div>

    </div>

</div>



<script>
    // Get the modal
    var modal = document.getElementById('myModal');

    // Get the button that opens the modal
    var btn = document.getElementById("btnitem");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal
    btn.onclick = function() {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function() {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<script>
    $(document).ready(function () {
        $('#sidebar1Collapse').on('click', function () {
            $('#sidebar1').toggleClass('active');
        });
    });
</script>