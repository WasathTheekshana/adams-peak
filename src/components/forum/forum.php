<div id="ReplyModal" class="replyPopup">
      <div class="closeButtonRep" data-dismiss="modal">&times;</div>
      <div class="popupPadding modal-body">
      <form name="frm1" method="post">
        <input type="hidden" id="commentid" name="Rcommentid">
          <textarea class="form-control" name="Rmsg" id="experience" placeholder="Add your experience" required></textarea>
          <input class="form-control" type="text" name="Rname" placeholder="Name" required>
          <input type="button" id="btnreply" name="btnreply" value="Reply">
        </form>
      </div>
    </div>
<div>

  <div class="forum">
    <div class="forumAddComment">
      <p class="forumHeading">
        Let's share your <span>experience</span> here!
      </p>
      <div class="button" id="open-form">
        <div class="buttonText">
          Add your experience
        </div>
        <div class="plusButton">
          <div class="plusText">
            +
          </div>
        </div>
      </div>
    </div>
    <div class="popupBox">
      <div class="closeButton">&times;</div>
      <div class="popupPadding">
        <form name="frm" action="" method="post">
          <input type="hidden" id="commentid" name="Pcommentid" value="0">
          <textarea name="msg" id="experience" placeholder="Add your experience" required></textarea>
          <input type="text" name="name" id="nameField" placeholder="Name" required>
          <input type="button" id="butsave" name="save" value="Add a Comment">
        </form>
      </div>
    </div>
  </div>


  <div class="commentTable">
    <div>
      <table id="MyTable">
        <tbody id="record">

        </tbody>
      </table>
    </div>
  </div>

</div>
<script>
  document.querySelector("#open-form").addEventListener("click", function() {
    document.querySelector(".popupBox").classList.add("active");
  });

  document.querySelector(".closeButton").addEventListener("click", function() {
    document.querySelector(".popupBox").classList.remove("active");
  });
</script>
