$('.delete').click(function (e) {  
    let postid = $(this).find('span').text();
    $('#deletePostForm').attr('action', '/admin/post/'+postid);
    $('#deletePostForm').submit();
});