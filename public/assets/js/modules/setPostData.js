function setPostData(parsedJson) {

  if (parsedJson) {
    $("#event_title").val(parsedJson.event_title);
    $("#event_date").val(parsedJson.event_date);
    $("#event_location").val(parsedJson.event_location);
    $(`option[value=${parsedJson.event_cateogry}]`).prop("checked", true);
    $("#event_clothe").val(parsedJson.event_clothe);
    $("#event_equipment").val(parsedJson.event_equipment);
    $(`input[value='${parsedJson.event_level}']`).prop('checked', true);
    $("#event_details").val(parsedJson.event_details);


    if ($('.delete_btn')) {

      $(".e_post_id").attr("value", parsedJson.post_id);

      $('.delete_btn').on('click', function (e) {
        e.preventDefault();
        let answer = confirm("この投稿を削除します。\n 本当によろしいでしょうか？");
        if (answer) {
          $(".e_post_id").attr('name', "d_post_id");
          $('.event-form').prop('action', "/first-project-austeam/mypage/post_edit/")
          $('.event-form').submit(
          );
        }
      })
      $('.event_submit').on('click', function (e) {
        e.preventDefault();
        $('.event-form').prop('action', "/first-project-austeam/mypage/post_edit/")
        $('.event-form').submit(
        );
      })
    }

  }

}


module.exports = setPostData;
